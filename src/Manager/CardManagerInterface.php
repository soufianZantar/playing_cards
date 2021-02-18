<?php


namespace App\Manager;


interface CardManagerInterface
{
    const MaxCards = 10;
    const listOfCards = [
        1 => ['type' => 'diams', 'number' => 'a'],
        2 => ['type' => 'diams', 'number' => 2],
        3 => ['type' => 'diams', 'number' => 3],
        4 => ['type' => 'diams', 'number' => 4],
        5 => ['type' => 'diams', 'number' => 5],
        7 => ['type' => 'diams', 'number' => 6],
        8 => ['type' => 'diams', 'number' => 7],
        9 => ['type' => 'diams', 'number' => 8],
        10 => ['type' => 'diams', 'number' => 9],
        11 => ['type' => 'diams', 'number' => 10],
        12 => ['type' => 'diams', 'number' => 'j'],
        13 => ['type' => 'diams', 'number' => 'q'],
        14 => ['type' => 'diams', 'number' => 'k'],
        15 => ['type' => 'hearts', 'number' => 'a'],
        16 => ['type' => 'hearts', 'number' => 2],
        17 => ['type' => 'hearts', 'number' => 3],
        18 => ['type' => 'hearts', 'number' => 4],
        19 => ['type' => 'hearts', 'number' => 5],
        20 => ['type' => 'hearts', 'number' => 6],
        21 => ['type' => 'hearts', 'number' => 7],
        22 => ['type' => 'hearts', 'number' => 8],
        23 => ['type' => 'hearts', 'number' => 9],
        24 => ['type' => 'hearts', 'number' => 10],
        25 => ['type' => 'hearts', 'number' => 'j'],
        26 => ['type' => 'hearts', 'number' => 'q'],
        27 => ['type' => 'hearts', 'number' => 'k'],
        28 => ['type' => 'spades', 'number' => 'a'],
        29 => ['type' => 'spades', 'number' => 2],
        30 => ['type' => 'spades', 'number' => 3],
        31 => ['type' => 'spades', 'number' => 4],
        32 => ['type' => 'spades', 'number' => 5],
        33 => ['type' => 'spades', 'number' => 6],
        34 => ['type' => 'spades', 'number' => 7],
        35 => ['type' => 'spades', 'number' => 8],
        36 => ['type' => 'spades', 'number' => 9],
        37 => ['type' => 'spades', 'number' => 10],
        38 => ['type' => 'spades', 'number' => 'j'],
        39 => ['type' => 'spades', 'number' => 'q'],
        40 => ['type' => 'spades', 'number' => 'k'],
        41 => ['type' => 'clubs', 'number' => 'a'],
        42 => ['type' => 'clubs', 'number' => 2],
        43 => ['type' => 'clubs', 'number' => 3],
        44 => ['type' => 'clubs', 'number' => 4],
        45 => ['type' => 'clubs', 'number' => 5],
        46 => ['type' => 'clubs', 'number' => 6],
        47 => ['type' => 'clubs', 'number' => 7],
        48 => ['type' => 'clubs', 'number' => 8],
        49 => ['type' => 'clubs', 'number' => 9],
        50 => ['type' => 'clubs', 'number' => 10],
        51 => ['type' => 'clubs', 'number' => 'j'],
        52 => ['type' => 'clubs', 'number' => 'q'],
        53 => ['type' => 'clubs', 'number' => 'k'],

    ];
    public function getCards(): array;
    public function orderCards(array $cards): array;

}