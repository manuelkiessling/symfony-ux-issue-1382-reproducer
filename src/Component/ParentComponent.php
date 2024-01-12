<?php

namespace App\Component;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent(
    'parent',
    'parent.component.html.twig'
)]
class ParentComponent extends AbstractController
{
    use DefaultActionTrait;
}
