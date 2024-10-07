<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\pythagoreUtility;



class PythagoreController extends AbstractController
{

    private $pythagoreUtility;
    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore/view', name: 'display_pythagore')]
    public function displayPythagoreAction(): Response
    {
        $pythagoreTable = $this->pythagoreUtility->display();

        return $this->render('displayPythagore.html.twig', [
            'title' => 'Symfony & table de pythagore',
            'fullName' => 'Votre Nom Prénom',
            'pythagoreTable' => $pythagoreTable
        ]);
    }
}