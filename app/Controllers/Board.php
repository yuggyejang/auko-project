<?php

namespace App\Controllers;

class Board extends BaseController
{
    public function index()
    {
        echo view('/Board/list.php');
    }

    public function view()
    {
        
        echo view('/Board/view.php');
    }

    public function write()
    {
        echo view('/Board/write.php');
    }

}

?>