<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


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
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'title' => 'HOME',
        ]);
    }
    public function dashboard(): Response
    {
        return $this->render('dashboard.html.twig', [
            'title' => 'Dashboard',
        ]);
    }
    public function team(): Response
    {
        return $this->render('team.html.twig', [
            'title' => 'Team',
        ]);
    }
    public function projects(): Response
    {
        return $this->render('projects.html.twig', [
            'title' => 'Projects',
        ]);
    }
    public function calendar(): Response
    {
        return $this->render('calendar.html.twig', [
            'title' => 'Calendar',
        ]);
    }
    public function documents(): Response
    {
        return $this->render('documents.html.twig', [
            'title' => 'Documents',
        ]);
    }
    public function reports(): Response
    {
        return $this->render('reports.html.twig', [
            'title' => 'Reports',
        ]);
    }
}