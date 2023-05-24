<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil", methods={"GET"})
     */
    public function index()
    {
        $noms=["Stéphane","caroline","Melissa","Jenifer"];
        $age=17;
        return $this->render('accueil/index.html.twig',[
            'lesNoms' => $noms,
            'age' => $age
        ]);
    }
}