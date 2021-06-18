<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher/{name}", name="teacher")
     */
    public function index(string $name): Response
    {
      

        return $this->render('t1.html.twig',[
            'name' => $name
        ]);
    }
}
