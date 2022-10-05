<?php

namespace controllers;

use controllers\base\Web;
use utils\Template;

class SampleWeb extends Web
{
  

    function connexion()
    {
        Template::render("views/inscription.php");
    }
   
}