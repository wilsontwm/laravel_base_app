<?php

namespace App\Http\Controllers;

use App\Transformers\Transformer;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;

class BaseController extends Controller
{

    protected $statusCode = 200;
    protected $message = '';
    protected $error = false;
    protected $debugInfo = '';
    protected $errorCode = 0;

    /**
     * Returns the user associated with the token
     *
     * @param Request $request
     * @return User|null
     */
    public function getUser(Request $request) {
        return $request->attributes->get('user');
    }

    /**
     * Function to return an error response.
     *
     * @param $message
     * @return mixed
     */
    public function respondWithError($message)
    {
        $this->error = true;
        $this->message = $message;
        return $this->respond(array());
    }

    /**
     * Function to return an unauthorized response.
     *
     * @param string $message
     * @return mixed
     */
    public function respondUnauthorizedError($message = 'Unauthorized!')
    {
        $this->statusCode = Response::HTTP_UNAUTHORIZED;
        return $this->respondWithError($message);
    }


    /**
     * Function to return a bad request response.
     *
     * @param string $message
     * @return mixed
     */
    public function respondBadRequestError($message = 'Unauthorized!')
    {
        $this->statusCode = Response::HTTP_BAD_REQUEST;
        return $this->respondWithError($message);
    }

    /**
     * Function to return forbidden error response.
     *
     * @param string $message
     *
     * @return mixed
     */
    public function respondForbiddenError($message = 'Forbidden!')
    {
        $this->statusCode = Response::HTTP_FORBIDDEN;
        return $this->respondWithError($message);
    }

    /**
     * Function to return a Not Found response.
     *
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'Resource Not Found')
    {
        $this->statusCode = Response::HTTP_NOT_FOUND;
        return $this->respondWithError($message);
    }

    /**
     * Function to return an internal error response.
     *
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'Internal Server Error!')
    {
        $this->statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
        return $this->respondWithError($message);
    }

    /**
     * Function to return an internal error response.
     *
     * @param string $message
     * @return mixed
     */
    public function respondMethodNotAllowed($message = 'Method not allowed!')
    {
        $this->statusCode = Response::HTTP_METHOD_NOT_ALLOWED;
        return $this->respondWithError($message);
    }

    /**
     * Function to return a service unavailable response.
     *
     * @param string $message
     * @return mixed
     */
    public function respondServiceUnavailable($message = "Service Unavailable!")
    {
        $this->statusCode = Response::HTTP_SERVICE_UNAVAILABLE;
        return $this->respondWithError($message);
    }

    /**
     * Throws a bad request exception with the validator's error messages.
     *
     * @param Validator $validator The validator to get the message from
     *
     * @return mixed
     */
    public function showValidationError($validator)
    {
        $this->statusCode = Response::HTTP_BAD_REQUEST;
        $this->message = implode("|", $validator->errors()->all());
        return $this->respond();
    }

    /**
     * Shorthand method to transform the response.
     *
     * @param Model|array $item The model or array to transform
     * @return array
     */
    public function transform($item)
    {
        return Transformer::transform($item);
    }

    /**
     * Function to return a generic response.
     *
     * @param $data Data to be used in response.
     * @param array $headers Headers to b used in response.
     * @return mixed Return the response.
     */
    public function respond($data = [], $headers = [])
    {
        if ($this->error) {
            $meta_data = [
                'meta' => [
                    'error' => $this->error,
                    'errorCode' => $this->errorCode,
                    'message' => $this->message,
                    'statusCode' => $this->statusCode,
                ]
            ];
        } else {
            $meta_data = [
                'meta' => [
                    'error' => $this->error,
                    'message' => $this->message,
                    'statusCode' => $this->statusCode,
                ]
            ];
        }
        if (empty($data))
            $data = array_merge($meta_data, ['response' => null]);
        else
            $data = array_merge($meta_data, ['response' => $this->transform($data)]);

        if (env('APP_DEBUG') && !empty($this->debugInfo)) {
            $data = array_merge($data, ['debug' => $this->debugInfo]);
        }

        return response()->json($data, $this->statusCode, $headers);
    }

    /**
     * Returns a LengthAwarePaginator for an array collection
     *
     * @param Request $request
     * @param array $items
     * @return LengthAwarePaginator
     */
    public function paginate(Request $request, $items) {
        $limit = $request->get('limit', 15);
        $page = (int)$request->get('page', 1);
        $offset = ($page-1) * $limit;
        $items = new LengthAwarePaginator(array_slice($items, $offset, $limit), count($items), $limit, $page);
        return $items;
    }

    /**
     * Retrieves the pagination meta in an array format
     *
     * @param LengthAwarePaginator $item
     * @return array
     */
    public function getPagination(LengthAwarePaginator $item) {
        return $this->transform(
            [
                'total' => $item->total(),
                'current_page' => $item->currentPage(),
                'last_page' => $item->lastPage(),
                'from' => $item->firstItem(),
                'to' => $item->lastItem()
            ]);
    }

}
