<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController
{
// C'est la méthode recommandée
    /**
     * @Route(
     *     path="/books/{id}",
     *     methods={"GET", "HEAD"},
     *     name="books_get",
     *     requirements={"id": "\d+"},
     *     defaults={"id": 1}
     * )
     */
    public function item(int $id): Response
    {
        dump($id);
        // Quelque-chose comme :
        // $myPersistenceSystem->find($id);

        return new Response(sprintf('<body>Book #%d</body>', $id));
    }
}
