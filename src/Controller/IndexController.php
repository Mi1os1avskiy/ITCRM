<?php
namespace App\Controller;

use App\Controller\Data\CreditsController;
use App\Controller\Data\EmailsController;
use App\Controller\Data\InvoicesController;
use App\Controller\Data\NotesController;
use App\Controller\Data\ServicesController;
use App\Controller\Data\TicketsController;
use App\Controller\Data\TransactionsController;
use App\Controller\Data\UsersController;
use App\Controller\Misc\MiscController;
use App\Controller\Misc\StatusesController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
    public function clients(): Response
    {
        return $this->render('clients/clients.html.twig', [
            'title' => 'Клиенты',
            'users' => UsersController::CreateTable(),
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
            'get' => UsersController::ClientOverview(),
            'users' => UsersController::CreateTable(),
        ]);
    }

    /**
     * @Route("/clients/profile", name="profile")
     */
    public function profile(): Response
    {
        return $this->render('clients/profile/profile.html.twig', [
            'title' => 'Profile',
            'users' => UsersController::CreateTable(),
            'statuses' => StatusesController::clientStatuses(),
        ]);
    }

    /**
     * @Route("/clients/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('clients/profile/services.html.twig', [
            'title' => 'Services',
            'users' => UsersController::CreateTable(),
            'services' => ServicesController::allServices(),
            'statuses' => StatusesController::clientServiceStatuses(),
        ]);
    }

    /**
     * @Route("/clients/invoices", name="invoices")
     */
    public function invoices(): Response
    {
        return $this->render('clients/profile/invoices.html.twig', [
            'title' => 'Invoices',
            'users' => UsersController::CreateTable(),
            'pay_methods' => MiscController::paymentMethods(),
            'statuses' => StatusesController::invoiceStatuses(),
            'invoices' => InvoicesController::allInvoices(),
        ]);
    }

    /**
     * @Route("/clients/tickets", name="tickets")
     */
    public function tickets(): Response
    {
        return $this->render('clients/profile/tickets.html.twig', [
            'title' => 'Tickets',
            'tickets' => TicketsController::ticketsTable(),
            'statuses' => StatusesController::ticketStatuses(),
        ]);
    }

    /**
     * @Route("/clients/credits", name="credits")
     */
    public function credits(): Response
    {
        return $this->render('clients/profile/credits.html.twig', [
            'title' => 'Credits',
            'credits' => CreditsController::allCredits(),
        ]);
    }

    /**
     * @Route("/clients/transactions", name="transactions")
     */
    public function transactions(): Response
    {
        return $this->render('clients/profile/transactions.html.twig', [
            'title' => 'Transactions',
            'transactions' => TransactionsController::allTransactions(),
            'statuses' => StatusesController::transactionStatuses(),
        ]);
    }

    /**
     * @Route("/clients/emails", name="emails")
     */
    public function emails(): Response
    {
        return $this->render('clients/profile/emails.html.twig', [
            'title' => 'Emails',
            'emails' => EmailsController::allEmails(),
        ]);
    }

    /**
     * @Route("/clients/notes", name="notes")
     */
    public function notes(): Response
    {
        return $this->render('clients/profile/notes.html.twig', [
            'title' => 'Notes',
            'notes' => NotesController::allNotes(),
        ]);
    }

    /**
     * @Route("/support/tickets", name="support_tickets")
     */
    public function supportTickets(): Response
    {
        return $this->render('support/support.tickets.html.twig', [
            'title' => 'Тикеты',
            'tickets' => TicketsController::ticketsTable(),
            'statuses' => StatusesController::ticketStatuses(),
            'time' => TicketsController::timeDiff(),
        ]);
    }

    /**
     * @Route("/support/ticket/answer", name="support_ticket_answer")
     */
    public function supportTicketAnswer(): Response
    {
        return $this->render('support/overview/answer.html.twig', [
            'title' => 'Тикет #',
            'data' => TicketsController::ticketData(),
            'tabs' => TicketsController::ticketNavigation(),
            'messages' => TicketsController::ticketMessages(),
        ]);
    }

    /**
     * @Route("/support/ticket/notes", name="support_ticket_notes")
     */
    public function supportTicketNotes(): Response
    {
        return $this->render('support/overview/notes.html.twig', [
            'title' => 'Тикет #',
            'data' => TicketsController::ticketData(),
            'tabs' => TicketsController::ticketNavigation(),
            'messages' => TicketsController::ticketMessages(),
        ]);
    }

    /**
     * @Route("/support/ticket/options", name="support_ticket_options")
     */
    public function supportTicketOptions(): Response
    {
        return $this->render('support/overview/options.html.twig', [
            'title' => 'Тикет #',
            'data' => TicketsController::ticketData(),
            'tabs' => TicketsController::ticketNavigation(),
        ]);
    }

    /**
     * @Route("/support/ticket/log", name="support_ticket_log")
     */
    public function supportTicketLog(): Response
    {
        return $this->render('support/overview/log.html.twig', [
            'title' => 'Тикет #',
            'data' => TicketsController::ticketData(),
            'tabs' => TicketsController::ticketNavigation(),
            'logs' => TicketsController::ticketLogs(),
        ]);
    }

    /**
     * @Route("/support/ticket/others", name="support_ticket_others")
     */
    public function supportTicketOthers(): Response
    {
        return $this->render('support/overview/others.html.twig', [
            'title' => 'Тикет #',
            'data' => TicketsController::ticketData(),
            'tabs' => TicketsController::ticketNavigation(),
            'tickets' => TicketsController::ticketsTable(),
            'statuses' => StatusesController::ticketStatuses(),
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
            'invoices' => InvoicesController::allInvoices(),
            'statuses' => StatusesController::invoiceStatuses(),
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
     * @Route("/billing/billing.edit.draft.invoice.html.twig", name="billing_edit_draft")
     */
    public function billingEditDraft(): Response
    {
        return $this->render('billing/billing.edit.draft.invoice.html.twig', [
            'title' => 'Редактировать инвойс',
            'services' => InvoicesController::allServices(),
            'data' => InvoicesController::invoiceUserData(),
        ]);
    }

    /**
     * @Route("/billing/billing.view.invoice.html.twig", name="billing_view_invoice")
     */
    public function billingViewInvoice(): Response
    {
        return $this->render('billing/billing.view.invoice.html.twig', [
            'title' => 'Инвойс',
            'data' => InvoicesController::invoiceData(),
            'invoices' => InvoicesController::createInvoices(),
            'statuses' => StatusesController::invoiceStatuses(),
        ]);
    }

    /**
     * @Route("/billing/billing.transactions.html.twig", name="billing_transactions")
     */
    public function billingTransactions(): Response
    {
        return $this->render('billing/billing.transactions.html.twig', [
            'title' => 'Транзакции',
            'transactions' => TransactionsController::allTransactions(),
            'statuses' => StatusesController::transactionStatuses(),
            'pay_methods' => MiscController::paymentMethods(),
            ''
        ]);
    }


    public function statusesForAside(): Response
    {
        return $this->render('parts/aside.html.twig', [
            'tickets' => StatusesController::ticketStatuses(),
        ]);
    }
}