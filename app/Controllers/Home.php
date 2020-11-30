<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {

        log_message("debug", "home index");
        
        return view('welcome_message');
    }
    
    public function test(){
        
        
        
        return view('test');
    }
}
