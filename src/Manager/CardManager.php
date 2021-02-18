<?php


namespace App\Manager;


class CardManager implements CardManagerInterface
{

    public function getCards(): array
    {
        $randomCards = [];
        while(count($randomCards) < CardManagerInterface::MaxCards) {
            $keyCard = array_rand(CardManagerInterface::listOfCards);
            $randomCards[$keyCard] = CardManagerInterface::listOfCards[$keyCard];
        }

        return $randomCards;
    }

    public function orderCards(array $cards): array
    {
        ksort($cards);

        return $cards;
    }
}