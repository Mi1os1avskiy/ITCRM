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

    /**
     * @Route("/clients", name="clients")
     */
//    #[Route('/clients', name: 'clients')]
    public function clients(): Response
    {
        return $this->render('clients.html.twig', [
            'title' => 'Clients',
        ]);
    }

    /**
     * @Route("/clients/new_user", name="new_user")
     */
//    #[Route('/clients/new_user', name: 'new_user')]
    public function newUser(): Response
    {
        return $this->render('new_user.html.twig', [
            'title' => 'New client',
        ]);
    }

    /**
     * @Route("/clients/{id}", name="user_profile")
     */
 //   #[Route('/clients/{id}', name: 'user_profile')]
    public function user($id): Response
    {
        $links = ['overview', 'profile', 'services', 'invoices', 'tickets', 'credits', 'emails', 'notes', 'log'];

        return $this->render('user.html.twig', [
            'id' => $id,
            'links' => $links,
        ]);
    }
}