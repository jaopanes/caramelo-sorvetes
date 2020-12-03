<?php

namespace MVCCaramelo\Controllers;

class Picole extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new \MVCCaramelo\Models\Picole;
    }

    public function index()
    {
        $this->view->titulo = "Picolés - Caramelinho Sorvetes";
        $this->view->picole = $this->getAll();
        $this->view->render('picoles');
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