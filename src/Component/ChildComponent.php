<?php

namespace App\Component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(
    'child',
    'child.component.html.twig'
)]
class ChildComponent extends AbstractController
{
    use DefaultActionTrait;

    #[LiveAction]
    public function slowOperation(): void
    {
        sleep(2);
    }
}
