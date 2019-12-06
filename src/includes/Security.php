<?php
namespace FITCHEF\includes;

class Security{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['clienteid'])){
            header("location: http://www.fitchef.web70111.uni5.net/cliente/painel");
        }
    }
}