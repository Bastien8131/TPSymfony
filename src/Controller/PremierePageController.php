<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PremierePageController extends AbstractController
{
    /**
     * @Route("/premiere/page/Hello/{parametre}", name="app_premiere_page")
     */
    public function indexAction($parametre): Response
    {
        return $this->render('premiere_page/index.html.twig', [
            'controller_name' => 'PremierePageController',
            'nomduparametrevue' => $parametre,
        ]);
    }
}
