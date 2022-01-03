<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/integration", name="integration")
 */
class IntegrationController extends AbstractController
{
    /**
     * @Route(path="/list", name="_list")
     *
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('integration/list.html.twig');
    }
}