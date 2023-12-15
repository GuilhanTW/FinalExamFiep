<?php
include 'C:\xampp\htdocs\senai\FinalExamFiep\class\classConexao.php';

class classCrud extends classConexao {
    private $crud;
    private $contador;
    
    private function preparedStatements($query, $parametros){
        $this->countParametros($parametros);
        $this->crud = $this->conectaDB()->prepare($query);
        if($this->contador > 0){
            for($i=1; $i<= $this->contador; $i++){
                $this->crud ->bindValue($i, $parametros[$i-1]);
                
            }
        }
        $this -> crud -> execute();
    }
    private function countParametros($parametros){
        $this-> contador =count($parametros);
    }
    public function insertDB($tabela, $condicao, $parametros){
        $this->preparedStatements("INSERT INTO {$tabela} VALUES ({$condicao})",$parametros);
        return $this->crud;
    }
    
    public function selectDB($campos, $tabela, $condicao, $parametros) {
        $this->preparedStatements("SELECT {$campos} FROM {$tabela} {$condicao}", $parametros );
        return $this-> crud;
    }
    public function deleteDB($tabela, $condicao, $parametros) {
        $this->preparedStatements("DELETE FROM {$tabela} WHERE {$condicao}", $parametros);
        return $this-> crud;
        
    }
    
    public function updateDb($tabela, $set, $condicao, $parametros){
        $this->preparedStatements("UPDATE {$tabela} SET {$set} WHERE {$condicao} ", $parametros);
        return $this->crud;
    }
    
}