<?php
namespace App\Controller;

use http\Env\Request;
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
        $users = [
            ['id' => 111, 'email' => 'test@test.test', 'name' => 'Lex Stark', 'vip' => 1, 'credit' => 350, 'services' => 3, 'status' => 1, 'created' => '30-11-2022'],
            ['id' => 222, 'email' => 'miloslavskiy@tut.by', 'name' => 'Aleksandr Miloslavskiy', 'vip' => 0, 'credit' => 1200, 'services' => 1, 'status' => 2, 'created' => '01-12-2022'],
            ['id' => 333, 'email' => 'dawkins@mail.com', 'name' => 'Richard Dawkins', 'vip' => 0, 'credit' => 2222, 'services' => 4, 'status' => 3, 'created' => '01-12-2022'],
            ['id' => 444, 'email' => 'tyson@gmail.com', 'name' => 'Neil deGrass Tyson', 'vip' => 0, 'credit' => 99.99, 'services' => 2, 'status' => 4, 'created' => '01-12-2022'],
            ['id' => 555, 'email' => 'sapolsky@stanford.com', 'name' => 'Robert Sapolsky', 'vip' => 1, 'credit' => 1234, 'services' => 1, 'status' => 2, 'created' => '01-12-2022'],
        ];

        return $this->render('clients/clients.html.twig', [
            'title' => 'Clients',
            'users' => $users,
        ]);
    }

    /**
     * @Route("/clients/new_user", name="new_user")
     */
//    #[Route('/clients/new_user', name: 'new_user')]
    public function newUser(): Response
    {
        return $this->render('clients/create.html.twig', [
            'title' => 'New client',
        ]);
    }

//    /**
//     * @Route("/clients/{id}", name="profile")
//     */
// //   #[Route('/clients/{id}', name: 'profile')]
//    public function user($id): Response
//    {
//        $links = ['overview', 'profile', 'services', 'invoices', 'tickets', 'credits', 'emails', 'notes', 'log'];
//
//        return $this->render('profile.base.html.twig', [
//            'id' => $id,
//            'links' => $links,
//        ]);
//    }

    /**
     * @Route("/clients/overview", name="overview")
     */
    public function overview(): Response
    {
        return $this->render('clients/profile/overview.html.twig', [
            'title' => 'Overview',
        ]);
    }

    /**
     * @Route("/clients/profile", name="profile")
     */
    public function profile(): Response
    {
        return $this->render('clients/profile/profile.html.twig', [
            'title' => 'Profile',
        ]);
    }

    /**
     * @Route("/clients/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('clients/profile/services.html.twig', [
            'title' => 'Services',
        ]);
    }

    /**
     * @Route("/clients/invoices", name="invoices")
     */
    public function invoices(): Response
    {
        return $this->render('clients/profile/invoices.html.twig', [
            'title' => 'Invoices',
        ]);
    }

    /**
     * @Route("/clients/tickets", name="tickets")
     */
    public function tickets(): Response
    {
        return $this->render('clients/profile/tickets.html.twig', [
            'title' => 'Tickets',
        ]);
    }

    /**
     * @Route("/clients/credits", name="credits")
     */
    public function credits(): Response
    {
        return $this->render('clients/profile/credits.html.twig', [
            'title' => 'Credits',
        ]);
    }

    /**
     * @Route("/clients/emails", name="emails")
     */
    public function emails(): Response
    {
        return $this->render('clients/profile/emails.html.twig', [
            'title' => 'Emails',
        ]);
    }

    /**
     * @Route("/clients/notes", name="notes")
     */
    public function notes(): Response
    {
        return $this->render('clients/profile/notes.html.twig', [
            'title' => 'Notes',
        ]);
    }
}