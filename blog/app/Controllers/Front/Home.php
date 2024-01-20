<?php

namespace App\Controllers\Front;
use App\Libreries\Codigo;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
      
        return view('welcome_message');
    }
    public function sayhola(){
        $instancia = new Codigo();
        echo $instancia->sayHola();
        

    }
}
