<?php

namespace App\Controllers;

class DefaultController extends \MainController
{
    public function index()
    {
        //$param = json_decode(file_get_contents('php://input'), true);
        //$this->view->param;
        return view("timeapi");
    }
}
