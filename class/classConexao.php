<?php


abstract class classConexao {
    protected function conectaDB(){
        try{
            $con = new PDO(
              "mysql: host=localhost; dbname=dbhotel",
              "root",
              "");
            return $con;
        } catch (PDOException $erro) {
            return $erro ->getMessage();
        }
    }
}
