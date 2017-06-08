<?php

namespace App\Http\Controllers\Auth;

use App\Mail\EmailVerification;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = ['password.regex' => "Your password must contain at least a lower case character, an upper case character and a number."];

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => Role::ROLE_USER,
            'activation_code' => md5($data['email']),
        ]);
    }

    /**
     *  Over-ridden the register method from the "RegistersUsers" trait
     *  Remember to take care while upgrading laravel
     */
    public function register(Request $request)
    {
        // Laravel validation
        $validator = $this->validator($request->all());
        if ($validator->fails())
        {
            $this->throwValidationException($request, $validator);
        }
        // Using database transactions is useful here because stuff happening is actually a transaction
        DB::beginTransaction();
        try
        {
            $user = $this->create($request->all());
            // After creating the user send an email with the random token generated in the create method above
            $email = new EmailVerification(new User(['activation_code' => $user->activation_code, 'name' => $user->name]));

            // TODO: Wilson 20170603: Uncommment the following mail function to send email. Uncommented now to avoid sending emails during development stage
            //Mail::to($user->email)->send($email);
            DB::commit();
            flash()->success('A verification email has been sent to your email address. Please verify your email address.')->important();
            return back();
        }
        catch(\Exception $e)
        {
            DB::rollback();
            return back();
        }
    }

    // Get the user who has the same token and change his/her status to verified i.e. 1
    public function verify($code)
    {
        // The verified method has been added to the user model and chained here
        // for better readability
        User::where('activation_code',$code)->firstOrFail()->verified();
        return redirect('login');
    }
}
