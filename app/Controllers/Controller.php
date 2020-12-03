<?php

namespace MVCCaramelo\Controllers;

class Controller
{
    public function __construct()
    {
        $this->view = new \MVCCaramelo\Core\View();
    }
}
