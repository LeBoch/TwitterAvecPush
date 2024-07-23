<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController extends AbstractController
{
    #[Route(path : '/lucky' , defaults: ['min' => 0 , 'max' => 50])]
    public function number(Request $request)
    {
        $min = $request->query->get('min' , default: 0);
        $max = $request->query->get('max' , default: 100);

        $random = random_int($min,$max);
        return new Response('Le nombre est le suivant : ' .$random);
    }
}
