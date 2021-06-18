<?php

namespace src\Models;

class Percents
{
    public function fetchAllPercents(): array
    {
        return [
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
    }

    public function showPercent($param)
    {
        $percentsList = $this->fetchAllPercents();

        foreach ($percentsList as $value) {
            if ($value['id'] == $param) {

                return $value['percent'];
            }
        }
    }
}