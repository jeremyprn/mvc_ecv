<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class ClientFicheWeb extends WebController
{
    private $clientModel;

    function __construct(){
        $this->clientModel = new ClientsModele();
    }

    public function fiche($id="")
    {
        $client = $this->clientModel->getByClientId($id);
        return Template::render("views/clients/fiche.php", array('client' => $client));
    }
    

}