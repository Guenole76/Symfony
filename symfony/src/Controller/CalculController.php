<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    /**
     * @Route("/calcul/add/{number}/{number2}", name="calcul/add" )
     */
    public function add($number, $number2): Response
    {
        return $this->render('calcul/index.html.twig',
        [
            'controller_name' => 'MachinController',
            'number' => $number,
            'number2' => $number2,
            'result' => $number + $number2
        ]);
    }


    /**
     * @Route("/calcul/sub/{number}/{number2}", name="calcul/sub")
     */
    public function sub($number, $number2): Response
    {
        return $this->render('calcul/index.html.twig',
        [
            'controller_name' => 'MachinController',
            'number' => $number,
            'number2' => $number2,
            'result' => $number - $number2
        ]);
    }

    
    /**
     * @Route("/calcul/multi/{number}/{number2}", name="calcul/multi")
     */
    public function multi($number, $number2): Response
    {
        return $this->render('calcul/index.html.twig',
        [
            'controller_name' => 'MachinController',
            'number' => $number,
            'number2' => $number2,
            'result' => $number * $number2
        ]);
    }

    /**
     * @Route("/calcul/div/{number}/{number2}", name="calcul/div")
     */
    public function div($number, $number2): Response
    {
        return $this->render('calcul/index.html.twig',
        [
            'controller_name' => 'MachinController',
            'number' => $number,
            'number2' => $number2,
            'result' => $number / $number2
        ]);
    }

    /**
     * @Route("/calcul/modulo/{number}/{number2}", name="calcul/modulo")
     */
    public function modulo($number, $number2): Response
    {
        return $this->render('calcul/index.html.twig',
        [
            'controller_name' => 'MachinController',
            'number' => $number,
            'number2' => $number2,
            'result' => $number % $number2
        ]);
    }
}
