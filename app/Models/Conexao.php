<?php

namespace MVCCaramelo\Models;

class Conexao
{
    private $conn;

    protected function connect()
    {
        try {
            $this->conn = new \PDO('mysql:host=' . DATABASE['host'] . ';dbname=' . DATABASE['dbname'] . '; 
                charset=utf8', DATABASE['user'], DATABASE['password'], DATABASE['options']);

            return $this->conn;

        } catch (\Exception $e) {
            die('Erro ao conectar <br>'. $e->getMessage());
        }
    }
}
