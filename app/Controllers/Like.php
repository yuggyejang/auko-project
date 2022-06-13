<?php

namespace App\Controllers;

class Like extends BaseController
{
    public function index()
    {
        if (array_key_exists('user_id',$_SESSION))
        {
            return view('/Note/note.php');
        }
        // var_dump($_SESSION);
        $this->response->redirect('/Login');
    }

    public function like()
    {

    }

    public function dislike()
    {
        
    }
}
