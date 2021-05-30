<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class RedirectsController extends AbstractController
{
    /**
     * @Route("/redirects/index")
     */
    public function index(): RedirectResponse
    {
        return $this->redirectToRoute('app_test_number',['max' => 5,]);
    }
}