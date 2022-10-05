<?php

namespace routes;

use routes\base\Route;
use controllers\Account;
use controllers\VideoWeb;
use utils\SessionHelpers;
use controllers\SampleWeb;
use controllers\connWeb;

class Web
{
    function __construct()
    {

        $Connexion = new connWeb();

        Route::Add('/connexion', [$Connexion, 'connexion']);

        $main = new sampleWeb();

        Route::Add('/inscription', [$main, 'inscription']);


        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

