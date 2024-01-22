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
     public function index()
     {
          $data = [
               'email' => "ap@hotmail.com",
               'password' => 'jpc1234',
               'name' => 'Agus',
               'surname' => 'planas',
               'id_country'  => 4
          ];
          $user = new User($data);
          $user->generateUsesrname();
          $model = model('UsersModel');
          
          $model->withGroup($this->configs->defaultGroupUsers);
          $model->save($user);

          return view('Auth\register');
     }

     public function store()
     {
     }
}
