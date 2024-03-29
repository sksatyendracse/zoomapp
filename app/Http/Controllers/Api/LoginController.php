<?php
namespace App\Http\Controllers\Api;
use App\Model\Authenticator;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    /**
     * @var Authenticator
     */
    private $authenticator;
    public function __construct(Authenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }
    /**
     * @param Request $request
     * @return array
     * @throws AuthenticationException
     */
    public function login(Request $request)
    {
        $credentials = array_values($request->only('username', 'password', 'provider'));
        if (! $user = $this->authenticator->attempt(...$credentials)) {
            throw new AuthenticationException();
        }
        $token = $user->createToken('My Token')->accessToken;
        return [
            'token_type' => 'Bearer',
            'access_token' => $token,
        ];
    }
    
    /**
     * Data check
     */

    public function dataCheck(){
        return [
            'token_type' => 'Bearer',
            'access_token' => 'Success',
        ];
        
    }
}
