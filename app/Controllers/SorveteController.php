<?php

namespace MVCCaramelo\Controllers;

class Sorvete extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new \MVCCaramelo\Models\Sorvete;
    }

    public function index()
    {
        $this->view->titulo = "Sorvetes - Caramelinho Sorvetes";
        $this->view->sorvetes = $this->getAll();
        $this->view->render('sorvetes');
    }

    public function getAll()
    {
        $this->model->getAll();
        return $this->model->queryResult();
    }

    public function getWithLimit($limit)
    {
        $this->model->getWithLimit($limit);
        return $this->model->queryResult();
    }
}