<?php
namespace FITCHEF\includes;

class Seguranca{
  
    public static function restritoAdm(){
        $config = new Config();
        if(!isset($_SESSION['usuarioid'])){
            header("location: {$config->url}/login/adm");
        }
    }

  
    public static function restritoUsuario(){
        $config = new Config();
        if(!isset($_SESSION['clienteid'])){
            header("location: {$config->url}/login/cliente");
        }
    }

}