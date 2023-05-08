<?php

namespace App\Controller;

use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(GameRepository $gameRepository): Response
    {
        $games = $gameRepository->findAll();

        return $this->render('home_page/index.html.twig', [
            'games' => $games,
        ]);
    }

    #[Route('/game/{id}', name: 'game_item')]
    public function item(Game $game): Response
    {
        return $this->render('home_page/game.html.twig', [
            'game' => $game
        ]);
    }
}
