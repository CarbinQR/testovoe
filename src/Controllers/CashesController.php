<?php

namespace src\Controllers;

use src\Core\View;
use src\Models\Cashes;

class CashesController
{
    public function all()
    {
        $all = new Cashes;
        $cashesList = $all->fetchAllCashes();

        return View::render('cashes', compact('cashesList'));
    }
}