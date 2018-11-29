<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default")
     */
    public function setFlashAction(): Response
    {
        $this->addFlash('notice', 'Méfie-toi de Chuck !');

        return  $this->render('display.html.twig');
    }
}
