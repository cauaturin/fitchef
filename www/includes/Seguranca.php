<?php
namespace FITCHEF\includes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://localhost/fitchef/login/adm");
        }
    }
}