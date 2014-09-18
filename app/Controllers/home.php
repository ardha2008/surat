<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{

    function index(){
        $data['pages']  = 'index';
        $this->output('home', $data);
    }
    
    function login(){
        $data['pages']='login';
        $this->output('konten/login');
    }
    
    
    

}
