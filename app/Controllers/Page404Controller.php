<?php 

namespace MVCCaramelo\Controllers;

class Page404 extends Controller
{
    public function index() 
    {
        require 'app/Views/erros/404.php';
    }
}