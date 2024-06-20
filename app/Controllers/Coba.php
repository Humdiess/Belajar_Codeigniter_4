<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index(): string
    {
        echo "Hello world";
    }

    public function about(): string
    {
        echo "Haloo saya $this->nama";
    }
}
