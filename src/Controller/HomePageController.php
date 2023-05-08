<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Tustin\PlayStation\Client;

class HomePageController extends AbstractController
{

    #[Route('/', name: 'app_home_page')]
    public function index(Client $client): Response
    {
        $client->loginWithNpsso("X1k55IvThFTlXSDoRgWtmvEB1ff8DzQ2OhLpflQUXWRgB3YGoQbHefqu4U11r0hw");
        $me = $client->users()->me();

        $store = $me->gameList();

        return $this->render('home_page/gamelist.html.twig', [
            'store' => $store,
        ]);
    }

}
