<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    #[Route('/program/', name: 'program_index')]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series',
        ]);
    }

    #[Route('/program/{id}', methods: ['GET'], requirements: ['id' => '\d+'], name: 'program_movie')]
    public function show(string $id): Response
    {
        return $this->render('program/show.html.twig', [
            'movie' => $id,
        ]);
    }
}
