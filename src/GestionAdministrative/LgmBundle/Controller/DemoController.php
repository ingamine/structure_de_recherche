<?php  
// src/AppBundle/Controller/DemoController.php

namespace GestionAdministrative\LgmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;



class DemoController extends Controller  
{
    
    public function pdfAction()
    {
        $html = $this->renderView(':Demo:layout-pdf.html.twig');

        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->generateFromHtml(
            $this->renderView(':Demo:layout-pdf.html.twig'), '/Symfony/file.pdf'
    ));
              
    }
    
    
    }