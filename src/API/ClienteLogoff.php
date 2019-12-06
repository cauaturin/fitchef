<?php 
namespace FITCHEF\API;

class ClienteLogoff{

    function __construct(){
        unset($_SESSION['clienteemail']);
        unset($_SESSION['clienteid']);
        unset($_SESSION);
        header("http://localhost/fitchef/login/adm");
    }
}