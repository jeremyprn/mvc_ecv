<?php

namespace routes;

use controllers\Account;
use controllers\Main;
use controllers\TodoWeb;
use controllers\ClientWeb;
use controllers\ClientFicheWeb;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {
        $todo = new TodoWeb();
        $account = new Account();
        $clientController = new ClientWeb();
        $clientFicheController = new ClientFicheWeb();

        Route::Add('/clients', [$clientController, 'liste']);
        Route::Add('/clients/ajouter', [$clientController, 'ajouter']);
        Route::Add('/clients/update', [$clientController, 'modifier']);
        Route::Add('/clients/delete', [$clientController, 'supprimer']);
        Route::Add('/client/{id}', [$clientFicheController, 'fiche']);
        
        Route::Add('/', [$todo, 'liste']);
        Route::Add('/ajouter', [$todo, 'ajouter']);
        Route::Add('/terminer', [$todo, 'terminer']);
        Route::Add('/supprimer', [$todo, 'supprimer']);

        Route::Add('/login', [$account, 'login']);
        // if (SessionHelpers::isLogin()) {
        //     Route::Add('/me', [$account, 'me']);
        //     Route::Add('/logout', [$account, 'logout']);
        // }
    }
}

