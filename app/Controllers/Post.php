<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Post extends ResourceController
{
    protected $modelName = 'App\Models\PostModel';
    protected $format = 'json';
    protected $session;


    //생성자
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $arr = array(
                        'id'        =>  $this->session->get('post_number'),
                        'board_id'  =>  '한국',
                        'title'     =>  '테스트입니다!',
                        'content'   =>  '테스트',
                        'author'    =>  $_SESSION['user_id'],
                        'date'      =>  date("Y.m.d H:i"),
                        'see'       =>  '0',
                        'like'      =>  '0',
                        'dislike'   =>  '0',
                        'comment'   =>  '0',
        );
        
        $_SESSION['post_id'][$this->session->get('post_number')] = $arr;
        $this->response->redirect('/Board/list/korea');

    }
}
