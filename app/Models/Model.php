<?php

namespace MVCCaramelo\Models;

class Model extends Conexao
{
    /**
     * Função genérica - Select, retorna todos os dados da consulta
     *
     * @param $sql
     * @param $param
     * @return array $data
     */

     protected function SelectAll($sql, $param = null)
     {
          try {
               $query =  $this->connect()->prepare($sql);
               $query->execute($param);

               return $query->fetchAll(\PDO::FETCH_OBJ);

          } catch (\Exception $erro) {
               echo $erro->getMessage();
               exit;
          }
     }
}
