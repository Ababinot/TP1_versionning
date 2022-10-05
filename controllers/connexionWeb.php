<?php
namespace controllers;

use utils\Template;
use models\connModel;


class connWeb 
{
    function redirect($to){
        header("Location: $to");
        die();
    }

    function __construct(){
        $this->connModel = new connModel();
    }

    function connexion()
    {
        $mdp = $this ->connModel->verif_mdp($_POST['password']);
        $login=$this->connModel->verif_login($_POST['username']);

        if($login != ($_POST['username']) ||  $mdp!= ($_POST['password'])){
            $msgErreur='Veuillez vérifier le login ou mot de passe';
            echo $msgErreur;
            $this->redirect("index.php");
        }
        else{
            $msg='bravo';
            echo $msg;
            
        }

    }
}