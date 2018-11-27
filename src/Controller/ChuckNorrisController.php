<?php

namespace App\Controller;

use GuzzleHttp\Client;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ChuckNorrisController extends AbstractController
{
    /**
     * @Route("/chuck")
     */
    public function random(Client $client): Response
    {
        $data = json_decode($client->get('/jokes/random')->getBody(), true);

        return $this->render('chuck/random.html.twig', ['data' => $data]);
    }
}
