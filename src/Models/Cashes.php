<?php

namespace src\Models;

class Cashes
{
    private array $cashes;

    public function fetchAllCashes(): void
    {
        $cashesList = [ 1, 2 ];

        $this->setCashes($cashesList);
    }

    public function setCashes($list)
    {
        $this->cashes = $list;
    }

    public function getCashes(): array
    {
        return $this->cashes;
    }
}