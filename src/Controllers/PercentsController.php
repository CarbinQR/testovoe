<?php

namespace src\Controllers;

use src\Core\View;
use src\Models\Percents;

class PercentsController
{
    public function all()
    {
        $all = new Percents;
        $all->fetchAllPercents();
        $percentsList = $all->getPercents();

        return View::render('percents', compact('percentsList'));
    }
}
