<?php
namespace models;

use models\base\SQL;
use controllers\connWeb;

class connModel extends SQL
{
    function __construct()
    {
        parent::__construct('login', 'mdp');
    }
    
    function verif_login($login)
    {
        
        $stmt = $this->pdo->prepare("SELECT 'login' from utilisateur where login =?" );
        $stmt->execute([$login]);
    }
        
    function verif_mdp($mdp)
    {
    
        $stmt = $this->pdo->prepare("SELECT 'mdp' from utilisateur where mdp =?" );
        $stmt->execute([$mdp]);


        
    }

   
}