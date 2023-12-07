<?php
namespace App\Controller;

use App\Controller\Data\BillingController;
use App\Controller\Data\LettersController;
use App\Controller\Data\OrdersController;
use App\Controller\Data\PaymentsController;
use App\Controller\Data\ServicesController;
use App\Controller\Data\SettingsController;
use App\Controller\Data\TicketsController;
use App\Controller\Data\UsersController;
use App\Controller\Misc\TwigExtension;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IndexController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'title' => 'Sign in',
        ]);
    }

	public function testFunction()
	{
		$numbers = range(1, 5);

		return $this->render('test.html.twig', [
			'numbers' => $numbers,
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
//    #[Route('/clients/{id}', name: 'profile', methods: ['GET'])]
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
            'clients_data' => UsersController::ClientsData(),
        ]);
    }

    /**
     * @Route("/clients/profile", name="profile")
     */
    public function profile(): Response
    {
        return $this->render('clients/profile/profile.html.twig', [
            'users' => UsersController::CreateTable(),
        ]);
    }

    /**
     * @Route("/clients/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('clients/profile/services.html.twig', [
            'users' => UsersController::CreateTable(),
            'services' => ServicesController::allServices(),
        ]);
    }

    /**
     * @Route("/clients/invoices", name="invoices")
     */
    public function invoices(): Response
    {
        return $this->render('clients/profile/invoices.html.twig', [
            'users' => UsersController::CreateTable(),
            'invoices' => BillingController::allInvoices(),
        ]);
    }

    /**
     * @Route("/clients/tickets", name="tickets")
     */
    public function tickets(): Response
    {
        return $this->render('clients/profile/tickets.html.twig', [
            'tickets' => TicketsController::ticketsTable(),
        ]);
    }

    /**
     * @Route("/clients/credits", name="credits")
     */
    public function credits(): Response
    {
        return $this->render('clients/profile/credits.html.twig', [
            'clients_data' => UsersController::ClientsData(),
        ]);
    }

    /**
     * @Route("/clients/transactions", name="transactions")
     */
    public function transactions(): Response
    {
        return $this->render('clients/profile/transactions.html.twig', [
            'transactions' => BillingController::allTransactions(),
        ]);
    }

    /**
     * @Route("/clients/emails", name="emails")
     */
    public function emails(): Response
    {
        return $this->render('clients/profile/emails.html.twig', [
            'clients_data' => UsersController::ClientsData(),
        ]);
    }

    /**
     * @Route("/clients/notes", name="notes")
     */
    public function notes(): Response
    {
        return $this->render('clients/profile/notes.html.twig', [
            'clients_data' => UsersController::ClientsData(),
        ]);
    }

	/**
	 * @Route("/clients/duplicates", name="duplicates")
	 */
	public function duplicates(): Response
	{
		return $this->render('clients/profile/duplicates.html.twig', [
			'duplicates' => UsersController::duplicates(),
		]);
	}

	/**
	 * @Route("/clients/letters", name="letters")
	 */
	public function letters(): Response
	{
		return $this->render('clients/clients.letters.html.twig', [
			'title' => 'Письма',
			'letters' => LettersController::allLetters(),
		]);
	}

	/**
	 * @Route("/clients/letter", name="letter")
	 */
	public function letter(): Response
	{
		return $this->render('clients/clients.letters.letter.html.twig', [
			'title' => 'Письмо',
			'letter' => LettersController::oneLetter(),
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
            'tickets' => TicketsController::ticketsTable(),
        ]);
    }

    /**
     * @Route("/support/tickets/new_ticket", name="new_ticket")
     */
    public function newTicket(): Response
    {
        return $this->render('support/support.new.ticket.html.twig', [
            'title' => 'Новый тикет',
			'data' => TicketsController::ticketData(),
        ]);
    }

    /**
     * @Route("/billing/invoices", name="billing_invoices")
     */
    public function billingInvoices(): Response
    {
        return $this->render('billing/billing.invoices.html.twig', [
            'title' => 'Инвойсы',
            'invoices' => BillingController::allInvoices()
        ]);
    }

    /**
     * @Route("/billing/new_invoice", name="billing_new_invoice")
     */
    public function billingNewInvoice(): Response
    {
        return $this->render('billing/billing.new.invoice.html.twig', [
            'title' => 'Новый инвойс',
        ]);
    }

    /**
     * @Route("/billing/draft", name="billing_edit_draft")
     */
    public function billingEditDraft(): Response
    {
        return $this->render('billing/billing.draft.invoice.html.twig', [
            'title' => 'Редактировать инвойс',
            'services' => BillingController::allServices(),
            'data' => BillingController::invoiceUserData(),
        ]);
    }

    /**
     * @Route("/billing/invoice/overview", name="invoice_overview")
     */
    public function billingViewInvoice(): Response
    {
        return $this->render('billing/view_invoice/billing.invoice.overview.html.twig', [
            'title' => 'Инвойс',
            'data' => BillingController::invoiceData(),
            'services' => BillingController::InvoiceServices(),
        ]);
    }

	/**
	 * @Route("/billing/invoice/details", name="invoice_payment_details")
	 */
	public function billingInvoicePaymentDetails(): Response
	{
		return $this->render('billing/view_invoice/billing.invoice.details.html.twig', [
			'title' => 'Инвойс',
			'data' => BillingController::invoiceData(),
		]);
	}

    /**
     * @Route("/billing/transactions", name="billing_transactions")
     */
    public function billingTransactions(): Response
    {
        return $this->render('billing/billing.transactions.html.twig', [
            'title' => 'Транзакции',
            'transactions' => BillingController::allTransactions(),
        ]);
    }

	/**
	 * @Route("/billing/payments", name="billing_payments")
	 */
	public function billingPayments(): Response
	{
		return $this->render('billing/billing.payments.html.twig', [
			'title' => 'Платежи',
			'payments' => BillingController::allPayments(),
		]);
	}

	/**
	 * @Route("/orders", name="orders")
	 */
	public function orders(): Response
	{
		return $this->render('orders/orders.html.twig', [
			'title' => 'Заказы',
			'orders' => OrdersController::allOrders(),
		]);
	}

	/**
	 * @Route("/orders/new_order", name="new_order")
	 */
	public function newOrder(): Response
	{
		return $this->render('orders/new.order.html.twig', [
			'title' => 'Новый заказ',
			'clients' => OrdersController::ordersClients(),
			'tariff_plans' => OrdersController::ordersTariffPlans(),
			'tariff_groups' => OrdersController::ordersTariffGroups(),
			'amount' => OrdersController::ordersTariffAmount(),
		]);
	}

	/**
	 * @Route("/orders/order_details", name="order_details")
	 */
	public function orderDetails(): Response
	{
		return $this->render('orders/view_order/details.html.twig', [
			'title' => 'Детали заказа',
			'user_data' => OrdersController::testUser(),
			'clients' => OrdersController::ordersClients(),
			'tariff_plans' => OrdersController::ordersTariffPlans(),
			'tariff_groups' => OrdersController::ordersTariffGroups(),
			'amount' => OrdersController::ordersTariffAmount(),
		]);
	}

	/**
	 * @Route("/orders/order_history", name="order_history")
	 */
	public function orderHistory(): Response
	{
		return $this->render('orders/view_order/history.html.twig', [
			'title' => 'История изменений заказа',
			'user_data' => OrdersController::testUser(),
			'tariff_groups' => OrdersController::ordersTariffGroups(),
			'tariff_plans' => OrdersController::ordersTariffPlans(),
		]);
	}

    /**
     * @Route("/settings/admins", name="settings_admins")
     */
    public function admins(): Response
    {
        return $this->render('settings/admins.html.twig', [
			'title' => 'Список админов',
			'admins' => SettingsController::allAdmins(),
        ]);
    }

	/**
	 * @Route("/settings/admin", name="settings_profile_admin")
	 */
	public function newAdmin(): Response
	{
		return $this->render('settings/profile.admin.html.twig', [
			'admins' => SettingsController::allAdmins(),
		]);
	}

	/**
	 * @Route("/settings/answers", name="settings_answers")
	 */
	public function answers(): Response
	{
		return $this->render('settings/answers/answers.html.twig', [
			'answers' => SettingsController::adminAnswers(),
		]);
	}

	/**
	 * @Route("/settings/categories", name="settings_categories")
	 */
	public function categories(): Response
	{
		return $this->render('settings/answers/categories.html.twig', [

		]);
	}

	/**
	 * @Route("/test", name="test")
	 */
	public function test(): Response
	{
		//return $this->json(['some name' => 'some value']);

		return $this->render('test.html.twig', [
			'iplogs' => UsersController::ClientsData(),
		]);
	}
}
