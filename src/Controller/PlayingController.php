<?php


namespace App\Controller;

use App\Manager\CardManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PlayingController extends AbstractController
{
    #[Route('/', name: 'play_page')]
    public function play(CardManagerInterface $cardManager)
    {
        $randomCards = $cardManager->getCards();
        $cards = $cardManager->orderCards($randomCards);

        return $this->render('base.html.twig',
            [
                'randomCards' => $randomCards,
                'orderedCards' => $cards,
            ]);

    }

}