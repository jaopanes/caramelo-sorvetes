<?php

namespace MVCCaramelo\Controllers;

class Depoimento extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new \MVCCaramelo\Models\Depoimento;
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