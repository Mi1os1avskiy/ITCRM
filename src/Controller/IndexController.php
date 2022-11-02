<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class IndexController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index.html.twig', []);
    }
    public function ololo(): Response
    {
        return $this->render('ololo/index.html.twig', []);
    }
}