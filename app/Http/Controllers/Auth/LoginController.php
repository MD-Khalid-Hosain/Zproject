<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function redirectTo()
    {


        switch(Auth::user()->role){
            case 1:
                $this->redirectTo = '/loginsuperadmin';
                return $this->redirectTo;
                break;

            case 2:
                $this->redirectTo = '/loginadmin';
                return $this->redirectTo;
                break;

            case 3:
                $this->redirectTo = '/loginconsultant';
                return $this->redirectTo;
                break;

            case 4:
                $this->redirectTo = '/loginadvisor';
                return $this->redirectTo;
                break;

            case 4:
                $this->redirectTo = '/loginfrecurator';
                return $this->redirectTo;
                break;

                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }


    }




    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }
}
