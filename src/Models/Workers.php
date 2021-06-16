<?php

namespace src\Models;

class Workers
{
    private array $workers;

    public function fetchAllWorkers(): void
    {
        $workersList = [
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

        $this->setWorkers($workersList);
    }

//    // функция эмитирует лефт джоин таблиц бд. $left, $right - массивы, соответственно. Остальное - ключи по которым идёт сравнение.
//    public function formWorkersList()
//    {
//        $final = array(); //массив который будет на выходе
//        $left = $this->fetchAllWorkers();
//        $right = $this->fetchPercents();
//        $right_join_on = NULL;
//        $left_join_on = 'id';
//
//        if (empty($right_join_on))
//            $right_join_on = $left_join_on;
//        foreach ($left as $lkey => $lvalue) {
//            $final[$lkey] = $lvalue;
//            foreach ($right as $rkey => $rvalue) {
//                if ($lvalue[$left_join_on] == $rvalue[$right_join_on]) {
//                    foreach ($rvalue as $key => $val)
//                        $final[$lkey]['_' . $key] = $val;
//                    break;
//                } else {
//                    foreach ($rvalue as $key => $val)
//                        $final[$lkey]['_' . $key] = NULL; //присваивает нулл, если нет ключа
//                }
//            }
//        }
//
//        $this->setWorkers($final);
//    }

    public function setWorkers($list)
    {
        $this->workers = $list;
    }

    public function getWorkers(): array
    {
        return $this->workers;
    }
}