<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{    
    public function index()
    {    
        $data['title'] = 'Hello World';
        
        $this->output('tema/default/home', $data);
    }
}