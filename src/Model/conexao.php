<?php

namespace FITCHEF\Model;
class Conexao{

    private function __construct(){
        
    }
    public static function getInstance(){
        try {
            $conexao = new \PDO("mysql:host={$serverHost}; dbname={$serverDB}", "{$serverUser}", "{$serverPass}");
            $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $conexao->exec("set names utf8");
            
            return $conexao;
        } catch (\PDOException $erro) {
            
            return null;
        }
    }
}
?>