<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;

class Register extends BaseController
{
     protected $configs;

     public function __construct()
     {
          $this->configs = config('Blog');
     }
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
          $model = model('UsersModel');
          d($this->configs);
     //     $model->save($user);

          return view('Auth\register');
          
     }
     
     public function store(){

     }
}
