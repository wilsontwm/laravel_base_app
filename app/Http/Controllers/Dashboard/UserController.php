<?php

namespace App\Http\Controllers\Dashboard;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserSystemRequest;
use App\Role;
use App\Services\UserManagerService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class UserController extends Controller
{
    /**
     * @var user
     */
    private $user;

    /**
     * User constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->contentTitle = 'User <small>Control panel</small>';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $contentTitle = $this->contentTitle;
        $roles = Role::ROLE_TYPE_ARRAY;;
        return view('dashboard.user.show', compact('user', 'contentTitle', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        $contentTitle = $this->contentTitle;
        $gender = User::GENDER_TYPE_ARRAY;
        $countries = [null => 'Please select a country'] + Country::pluck('name', 'id')->toArray();

        return view('dashboard.user.edit', compact('user', 'contentTitle', 'gender', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request)
    {
        $user = Auth::user();
        $input = $request->only(['name', 'phone', 'address', 'birthday', 'gender', 'bio']);
        $user->fill($input);
        $user->country_id = $request->input('country_id', null);
        $user->save();
        flash()->success('User profile has been successfully updated.');

        return redirect(route('user.profile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return self::show($user);
    }

    /**
     * Show the form for editing the password of specified user.
     *
     * @return \Illuminate\Http\Response
     */
    public function editPassword()
    {
        $user = Auth::user();
        $contentTitle = $this->contentTitle;

        return view('dashboard.user.password', compact('user', 'contentTitle'));
    }

    /**
     * Update the password of specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $messages = ['new_password.regex' => "Your password must contain at least a lower case character, an upper case character and a number."];

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|string|min:6|regex:/^(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', //Minimum password length - 6
            'confirm_password' => 'required|string|min:6|same:new_password'
        ], $messages);

        // Validate the old password as well
        $oldPassword = $request->get('old_password', '');
        $validator->after(function ($validator) use ($oldPassword, $user) {
            if (!Hash::check($oldPassword, $user->password)) {
                $validator->errors()->add('old_password', 'Incorrect password.');
            }
        });

        if ($validator->fails()) {
            return redirect("users/password")->withErrors($validator)->withInput();
        }

        else{
            $user->password = bcrypt($request->input('new_password'));
            $user->save();
        }

        flash()->success('User password has been successfully changed.');
        return redirect('home');
    }

    /**
     * Show the form for editing the profile picture of specified user.
     *
     * @return \Illuminate\Http\Response
     */
    public function editPicture()
    {
        $user = Auth::user();
        $contentTitle = $this->contentTitle;

        return view('dashboard.user.picture', compact('user', 'contentTitle'));
    }

    /**
     * Create the profile picture for specified user
     *
     * @param Request $request
     *
     * @return Response
     */
    public function createPicture(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('image')) {

            $allowed = array('image/x-png', 'image/png', 'image/jpeg');
            if (!in_array($request->file('image')->getMimeType(), $allowed)) {
                // File type not allowed
                flash()->error('Only PNG or JPG images are allowed.');
                return redirect('users/picture');
            } else {
                try {
                    $image = $request->file('image');
                    $fileName = md5($user->id . microtime()) . '.jpg';
                    $imageArr = UserManagerService::storeProfileImage($image, $fileName);
                    UserManagerService::deleteImage($user->image_url);
                    $user->image_url = $imageArr['path'];
                    $user->save();

                    flash()->success('Profile picture has been successfully changed.');
                    return redirect('home');
                } catch (FileException $e) {
                    flash()->error('Unable to upload photo to server.');
                    return redirect('home');
                }
            }
        } else {
            flash()->error('No image was selected');
            return redirect('home');
        }
    }


    /**
     * Show the form for editing the password of specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePicture()
    {
        $user = Auth::user();
        UserManagerService::deleteImage($user->image_url);
        $user->image_url = null;
        $user->save();

        flash()->success('Profile picture has been successfully deleted.');
        return redirect('home');
    }

    /**
     * Update the specified resource in from administrator.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSystem(UpdateUserSystemRequest $request, User $user)
    {
        $this->authorize('userSystem', User::class);
        $user->role_id = $request->input('role_id', Role::ROLE_USER);
        $user->save();
        flash()->success('User system has been successfully updated.');

        return redirect()->back();
    }
}
