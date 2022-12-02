<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'title' => 'Start page',
        ]);
    }

    public function ololo(): Response
    {
        return $this->render('ololo/index.html.twig', []);
    }

    #[Route('/clients', name: 'clients')]
    public function clients(): Response
    {
        return $this->render('clients.html.twig', [
            'title' => 'Clients',
        ]);
    }
}