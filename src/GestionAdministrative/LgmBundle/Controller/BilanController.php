<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BilanController extends Controller
{
    public function bilanAction()
    {
        return $this->render(':bilan:bilan.html.twig');
    }
}
