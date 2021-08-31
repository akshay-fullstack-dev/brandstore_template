<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoblechairController extends AbstractController
{
    /**
     * @Route("/noblechair", name="noblechair")
     */
    public function index(): Response
    {
        return $this->render('noblechair.html.twig');
    }
}
