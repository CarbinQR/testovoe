<?php

namespace src\Controllers;

use src\Models\Workers;
use src\Core\View;

class WorkersController
{
    public function all()
    {
        $all = new Workers;
        $all->fetchAllWorkers();
        $workersList = $all->getWorkers();

        return View::render('workers', compact('workersList'));
    }
}
