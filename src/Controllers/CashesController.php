<?php

namespace src\Controllers;

use src\Core\View;
use src\Models\Cashes;

class CashesController
{
    public function all()
    {
        $all = new Cashes;
        $all->fetchAllCashes();
        $cashesList = $all->getCashes();

        return View::render('cashes', compact('cashesList'));
    }
}