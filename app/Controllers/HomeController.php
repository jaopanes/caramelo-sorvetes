<?php

namespace MVCCaramelo\Controllers;

class Home extends Controller
{
    public function index()
    {
        $this->view->titulo = "Página Inicial - Caramelinho Sorvetes";

        $this->view->sorvetes = (new Sorvete())->getWithLimit(3);
        $this->view->picole = (new Picole())->getWithLimit(8);
        $this->view->depoimentos = (new Depoimento())->getWithLimit(3);

        $this->view->render('home');
    }
}
