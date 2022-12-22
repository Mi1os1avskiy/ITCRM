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

//    /**
//     * @Route("/clients/{id}", name="user_profile")
//     */
// //   #[Route('/clients/{id}', name: 'user_profile')]
//    public function user($id): Response
//    {
//        $links = ['overview', 'profile', 'services', 'invoices', 'tickets', 'credits', 'emails', 'notes', 'log'];
//
//        return $this->render('user.html.twig', [
//            'id' => $id,
//            'links' => $links,
//        ]);
//    }

    public function usersInformation(Request $request, $users)
    {
        $users = ['Lex Stark', 'Aleksandr Miloslavskiy', 'Richard Dawkins', 'Neil deGrass Tyson', 'Robert Sapolsky'];

        return $this->render($this->getDetailView(), [
           'users' => $users,
        ]);
    }

    /**
     * @Route("/clients/overview", name="overview")
     */
    public function overview(): Response
    {
        return $this->render('user_profile/overview.html.twig', [
            'title' => 'Overview',
        ]);
    }

    /**
     * @Route("/clients/profile", name="profile")
     */
    public function profile(): Response
    {
        return $this->render('user_profile/profile.html.twig', [
            'title' => 'Profile',
        ]);
    }

    /**
     * @Route("/clients/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('user_profile/services.html.twig', [
            'title' => 'Services',
        ]);
    }

    /**
     * @Route("/clients/invoices", name="invoices")
     */
    public function invoices(): Response
    {
        return $this->render('user_profile/invoices.html.twig', [
            'title' => 'Invoices',
        ]);
    }

    /**
     * @Route("/clients/tickets", name="tickets")
     */
    public function tickets(): Response
    {
        return $this->render('user_profile/tickets.html.twig', [
            'title' => 'Tickets',
        ]);
    }

    /**
     * @Route("/clients/credits", name="credits")
     */
    public function credits(): Response
    {
        return $this->render('user_profile/credits.html.twig', [
            'title' => 'Credits',
        ]);
    }

    /**
     * @Route("/clients/emails", name="emails")
     */
    public function emails(): Response
    {
        return $this->render('user_profile/emails.html.twig', [
            'title' => 'Emails',
        ]);
    }

    /**
     * @Route("/clients/notes", name="notes")
     */
    public function notes(): Response
    {
        return $this->render('user_profile/notes.html.twig', [
            'title' => 'Notes',
        ]);
    }
}