<?php

namespace src\Models;

class Percents
{
    private array $percents;

    public function fetchAllPercents(): void
    {
        $percentsList = [
            [
                'id' => 1,
                'percent' => 2.1
            ],
            [
                'id' => 3,
                'percent' => 1
            ],
            [
                'id' => 2,
                'percent' => 3
            ],
            [
                'id' => 7,
                'percent' => 5
            ]
        ];

        $this->setPercents($percentsList);
    }

    public function setPercents($list)
    {
        $this->percents = $list;
    }

    public function getPercents(): array
    {
        return $this->percents;
    }
}