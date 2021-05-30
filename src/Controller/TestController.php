<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{

    /**
     * @Route("/test/number/{max}", name="app_test_number")
     */
    public function number(int $max): Response
    {
        $number = random_int(0,$max);

        return $this->render('test/number.html.twig',[
            'number' => $number,
        ]);
    }
}