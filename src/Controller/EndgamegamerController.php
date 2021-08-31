<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EndgamegamerController extends AbstractController
{
    /**
     * @Route("/endgamegamer", name="endgamegamer")
     */
    public function index(): Response
    {
    return $this->render('endgamegear.html.twig');
    }
}
