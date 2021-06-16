<?php

use \src\Core\App;

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

$app = new App;

$app->run();


//$workers = [
//    [
//        'id' => 1,
//        'name' => 'Игорь',
//        'surname' => 'Фёдоров',
//    ],
//    [
//        'id' => 2,
//        'name' => 'Александр',
//        'surname' => 'Антонов',
//    ],
//    [
//        'id' => 3,
//        'name' => 'Павел',
//        'surname' => 'Ковчин',
//    ],
//];
//
//$percent = [
//    [
//        'id' => 1,
//        'value' => 2.1
//    ],
//    [
//        'id' => 3,
//        'value' => 1
//    ],
//    [
//        'id' => 2,
//        'value' => 3
//    ]
//];
//
// функция эмитирует лефт джоин таблиц бд. $left, $right - массивы, соответственно. Остальное - ключи по которым идёт сравнение.
//
//function left_join_array($left, $right, $left_join_on, $right_join_on = NULL)
//{
//    $final = array(); //массив который будет на выходе
//
//    if (empty($right_join_on))
//        $right_join_on = $left_join_on;
//    foreach ($left as $lkey => $lvalue) {
//        $final[$lkey] = $lvalue;
//        foreach ($right as $rkey => $rvalue) {
//            if ($lvalue[$left_join_on] == $rvalue[$right_join_on]) {
//                foreach ($rvalue as $key => $val)
//                    $final[$lkey]['_' . $key] = $val;
//
//                break;
//            } else {
//                foreach ($rvalue as $key => $val)
//                    $final[$lkey]['_' . $key] = NULL; //присваивает нулл, если нет ключа
//            }
//        }
//    }
//
//    return $final;
//}
//
//
//$cash = [ 1, 2 ];
//
//echo json_encode( left_join_array($workers, $percent,'id'));