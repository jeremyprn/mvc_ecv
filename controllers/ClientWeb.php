<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use models\classes\Client;
use utils\Template;

class ClientWeb extends WebController
{
    private $clientModel;

    function __construct(){
        $this->clientModel = new ClientsModele();
    }

    function liste($keyword, $page = 0): string
    {
        if($keyword) $clients = $this->clientModel->recherche(10, $keyword, $page);
        else $clients = $this->clientModel->liste(10, $page);
        return Template::render(
            "views/clients/liste.php",
            array("page" => $page, "clients" => $clients)
        );
    }

    function ajouter($nom = "", $prenom = "", $email = "", $telephone = "")
    {
        if($nom && $prenom && $email && $telephone){
            $unClient = new Client();
            $unClient->setNom($nom);
            $unClient->setPrenom($prenom);
            $unClient->setEmail($email);
            $unClient->setTelephone($telephone);

            $client = $this->clientModel->creerClient($unClient);
            $this->redirect("../clients");
        } 
        return Template::render(
            "views/clients/ajouter.php"
        );
    }
    

}