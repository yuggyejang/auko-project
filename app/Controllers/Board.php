<?php

namespace App\Controllers;

class Board extends BaseController
{
    public function index()
    {
        //echo view('/Board/list.php');
    }
    
    public function list($board_id=null)
    {
        if ($board_id == 'best')
        {
            echo view('/Board/best.php');
        }
        else
        {
        $arr = array();
        $arr['board_id'] = $board_id;
        echo view('/Board/list.php', $arr);
        }
    }

    public function view($board_id=null, $post_id=null)
    {
        $arr = array();
        $arr['board_id'] = $board_id;
        $arr['post_id'] = $post_id;
        echo view('/Board/view.php', $arr);
    }

    public function write()
    {
        echo view('/Board/write.php');
    }

}

?>