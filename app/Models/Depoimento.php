<?php

namespace MVCCaramelo\Models;

class Depoimento extends Model
{
    private $queryResult;

    public function queryResult()
    {
        return $this->queryResult;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM depoimento ORDER BY id DESC";
        $this->queryResult = $this->SelectAll($sql);
    }

    public function getWithLimit(int $limit)
    {
        $sql = "SELECT * FROM depoimento ORDER BY id DESC LIMIT {$limit}";
        $this->queryResult = $this->SelectAll($sql);
    }

}