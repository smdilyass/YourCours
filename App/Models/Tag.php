<?php

namespace App\Models;
include_once 'Etiquette.php';

class Tag extends Etiquette
{

    public function __construct()
    {
        parent::__construct();
    }

    public function createEtiquette(Etiquette $etiquette):Etiquette{
        if (empty($etiquette->getName()) || $etiquette->getName() == null)
        {
            $etiquette->setName("default Name");
        }
        if (empty($etiquette->getDescription()) || $etiquette->getDescription() == null)
        {
            $etiquette->setDescription("default Description");
        }
        if (empty($etiquette->getLogo()) || $etiquette->getLogo() == null)
        {
            $etiquette->setLogo("default Logo");
        }
        
        $qury = "INSERT INTO etiquettes (name, description, logo) VALUES ('" . $etiquette->getName() . "', '" . $etiquette->getDescription() . "', '" . $etiquette->getLogo() . "');";

        return $etiquette;
    }

}