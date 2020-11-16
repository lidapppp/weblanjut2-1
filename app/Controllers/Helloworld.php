<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        // echo $this->name . "<br>";
        echo $name . "<br>";
        echo $npm . "<br>";
        echo "M.Fadhil Azhari";
    }
}
