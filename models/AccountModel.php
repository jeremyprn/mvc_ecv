<?php

namespace models;

use utils\SessionHelpers;

/**
 * @deprecated
 * Class d'exemple « sans logique ». Créer une version en lien avec une base de données (hérite de SQL)
 * @package models
 */
class SampleAccount
{
    public function login($username, $password): bool
    {
        

        SessionHelpers::login((object)array("username" => "Utilisateur démo", "email" => $username));
        return true;
    }
}