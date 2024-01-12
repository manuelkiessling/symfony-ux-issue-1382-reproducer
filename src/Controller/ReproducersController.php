<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReproducersController extends AbstractController
{
    #[Route(
        path   : '/reproducers/working',
        name   : 'reproducers.working',
        methods: ['GET']
    )]
    public function workingAction(): Response
    {
        return $this->render('reproducer_working.html.twig');
    }

    #[Route(
        path   : '/reproducers/not-working',
        name   : 'reproducers.not_working',
        methods: ['GET']
    )]
    public function notWorkingAction(): Response
    {
        return $this->render('reproducer_not_working.html.twig');
    }
}
