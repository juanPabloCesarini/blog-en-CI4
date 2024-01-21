<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
     public function index(){
          $data = [
               'email' => "jpc@hotmail.com",
               'password' =>'jpc1234',
               'name' => 'juan Pablo',
               'surname' => 'Cesarini',
               'id_country'  => 3
          ];
         $user= new User($data);
         $user->generateUsesrname();
          d($user->username);
          return view('Auth\register');
          
     }
     public function store(){

     }
}
