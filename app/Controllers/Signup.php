<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Signup extends ResourceController
{
    protected $modelName = 'App\Models\SignupModel';
    protected $format = 'json';
    protected $validation;

    //생성자
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->validation =  \Config\Services::validation();
    }

    public function index()
    {
        // 테스트용
        return view('Login/signup');
    }

    // 메소드 1-회원가입
    // POST
    // "user_id" : "me", "pw" : "password"...
    public function signup()
    {
        $result = $this->create_signup();
        if ($result['status'] == 'success')
        {
            $this->response->redirect('/Login');
            return view('Login/login');
        }
        else
        {
            $this->response->redirect('/Signup');
        }
    }

    //회원가입
    public function create_signup()
    {
        if ($this->validate('signup'))
        {
            return $this->model->set_signup([
                $this->request->getPost('user_id'),
                password_hash($this->request->getPost('pw'), PASSWORD_DEFAULT),
                $this->request->getPost('name'),
                $this->request->getPost('ctn_cd'),
                $this->request->getPost('email'),
                $this->request->getPost('birth'),
                $this->request->getPost('gender'),
                Time::today('Asia/Seoul', 'ko_KR'),
                'Y',
                'N',
                $this->request->getPost('ctn_cd')                       //언어설정
            ]);
        } 
        else 
        {
            return ['status' => $this->validation->getErrors()];
        }
    }
}