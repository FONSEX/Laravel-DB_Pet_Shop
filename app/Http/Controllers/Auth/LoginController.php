<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use http\Client\Curl\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{


    public function showLoginForm() {

        return view ( 'auth.login');


    }




public function login()
{


   $credentials = $this->validate(request(),[

        'email' => 'email|required|string',

        'password' => 'required|string'



    ] );

   if ( Auth::attempt($credentials) ) {

       return redirect()->route('dashboard');


   }

   return back()->withErrors (['email' => 'Clave o Email incorrecto intenta nuevamente']) ;


}


public function logout() {


Auth::logout();

return redirect('/');

}





}

?>
