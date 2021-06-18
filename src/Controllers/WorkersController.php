<?php

namespace src\Controllers;

use src\Models\Workers;
use src\Core\View;

class WorkersController
{
    public function all(): array
    {
        $all = new Workers;
        $workersList = $all->fetchAllWorkers();

        return View::render('workers', compact('workersList'));
    }

    public function show($param) {
        $worker = new Workers;
        $data = $worker->showWorker($param);

        return View::render('percents', compact('data'));
    }
}
