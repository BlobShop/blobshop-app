<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path="/shops", name="app_shops")
 */
class ShopController extends AbstractController
{
    /**
     * @Route(path="/list", name="_list")
     *
     * @return Response
     */
    public function list(): Response
    {
        return $this->render('integration/shops/list.html.twig');
    }
}