<?php
namespace FITCHEF\includes;

class Config{

    private $servidor = "TEST"; // PROD OU TEST

    public $url= "http://localhost/fitchef/www";
    public $serverHost;
    public $serverDB;
    public $serverPass;
    public $cepOrigem;
    
    public function __construct(){

        if($this->servidor == "TEST"){
            $this->serverHost = "http://localhost/fitchef/www";
            $this->serverDB = "fitchef";
            $this->serverUser = "root";
            $this->serverPass = "";
            $this->cepOrigem = "21852070";
            
        }else{
            $this->url = "http://www.fitchef.web70111.uni5.net";
            $this->serverHost = "mysql17-farm70.uni5.net";
            $this->serverDB = "aulaphp";
            $this->serverUser = "aulaphp";
            $this->serverPass = "senac10058";
            $this->cepOrigem = "21852070";
        }
    }
}