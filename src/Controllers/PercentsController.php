<?php

namespace src\Controllers;

use src\Core\View;
use src\Models\Percents;

class PercentsController
{
    public function all(): array
    {
        $all = new Percents;
        $data = $all->fetchAllPercents();

        return View::render('percents', compact('data'));
    }


    public function show($param)
    {
        $percents = new Percents;
        $data = $percents->showPercent($param);

        return View::render('percents', compact('data'));
    }
}
