<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    $formFactory = Forms::createFormFactory();
    /** 
     * @Route("home/index", name="homepage")
    */
    public function index(): Response
    {
        return $this->render(
            'header/menubar.html.twig'
        );
    }
}