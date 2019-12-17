<?php
namespace FITCHEF\includes;

class Security{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['clienteid'])){
            header("location: {$config->url}/login/cliente");
        }
    }
}