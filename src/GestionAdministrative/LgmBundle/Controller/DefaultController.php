<?php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LgmBundle:Default:index.html.twig');
    }
}
