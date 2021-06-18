<?php

namespace src\Models;

class Workers
{
    public function fetchAllWorkers(): array
    {
       return [
            [
                'id' => 1,
                'name' => 'Игорь',
                'surname' => 'Фёдоров',
            ],
            [
                'id' => 2,
                'name' => 'Александр',
                'surname' => 'Антонов',
            ],
            [
                'id' => 3,
                'name' => 'Павел',
                'surname' => 'Ковчин',
            ],
        ];
    }

    public function showWorker($param): array
    {
        $list = $this->fetchAllWorkers();
        foreach ($list as $value) {
            if ($value['id'] == $param) {

                return [
                    'name' => $value['name'],
                    'surname' => $value['surname'],
                ];
            }
        }
    }
}