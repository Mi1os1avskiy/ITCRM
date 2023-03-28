<?php
namespace App\Controller;

use App\Model\Parameters;
use http\Env\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\Users;
use App\Controller\Billing\Invoices;


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
    public function clients(): Response
    {
        return $this->render('clients/clients.html.twig', [
            'title' => 'Клиенты',
            'users' => Users::CreateTable(),
        ]);
    }

    public function profileMenu(): Response
    {
        return $this->render('clients/header.profile.html.twig', [
            'parameters' => Parameters::UserProfileMenu(),
        ]);
    }

    /**
     * @Route("/clients/new_user", name="new_user")
     */
    public function newUser(): Response
    {
        return $this->render('clients/create.html.twig', [
            'title' => 'Новый клиент',
        ]);
    }

//    /**
//     * @Route("/clients/{id}", name="profile")
//     */
//    #[Route('/clients/{id}', name: 'profile')]
//    public function user($id): Response
//    {
//        $links = ['overview', 'profile', 'services', 'invoices', 'tickets', 'credits', 'emails', 'notes', 'log'];
//
//        return $this->render('clients.base.html.twig', [
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
     * @Route("/clients/transactions", name="transactions")
     */
    public function transactions(): Response
    {
        return $this->render('clients/profile/transactions.html.twig', [
            'title' => 'Transactions',
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

    /**
     * @Route("/support/tickets", name="support_tickets")
     */
    public function supportTickets(): Response
    {
        return $this->render('support/support.tickets.html.twig', [
            'title' => 'Тикеты',
        ]);
    }

    /**
     * @Route("/support/tickets/new_ticket", name="new_ticket")
     */
    public function newTicket(): Response
    {
        return $this->render('support/support.new.ticket.html.twig', [
            'title' => 'Новый тикет',
        ]);
    }

    /**
     * @Route("/billing/billing.invoices.html.twig", name="billing_invoices")
     */
    public function billingInvoices(): Response
    {
        return $this->render('billing/billing.invoices.html.twig', [
            'title' => 'Инвойсы',
        ]);
    }

    /**
     * @Route("/billing/billing.new.invoice.html.twig", name="billing_new_invoice")
     */
    public function billingNewInvoice(): Response
    {
        return $this->render('billing/billing.new.invoice.html.twig', [
            'title' => 'Новый инвойс',
        ]);
    }

    /**
     * @Route("/billing/billing.edit.invoice.html.twig", name="billing_edit_invoice")
     */
    public function billingEditInvoice(): Response
    {
        return $this->render('billing/billing.edit.invoice.html.twig', [
            'title' => 'Редактировать инвойс',
            'services' => Invoices::allServices(),
            'data' => Invoices::invoiceData(),
            'saved' => Invoices::lastSaved()
        ]);
    }

    /**
     * @Route("/billing/billing.transactions.html.twig", name="billing_transactions")
     */
    public function billingTransactions(): Response
    {
        return $this->render('billing/billing.transactions.html.twig', [
            'title' => 'Транзакции',
        ]);
    }
}