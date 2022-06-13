<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Login extends ResourceController
{
    protected $modelName = 'App\Models\LoginModel';
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
        // 테스트용
        return view('/Login/login');
    }

    //메소드 1-로그인
    //POST
    // "user_id" : "thisisid", "pw" : "password"
    public function login()
    {
        /*
        $user_data = array(
            'user_id'   =>  'myengji2022',
            'alarm'     =>  
            [
                'day'   =>  '22/06/12',
                'text'  =>  '어코에 회원가입하신 것을 환영합니다'
            ]
        );

        $this->session->set($user_data);
        return view('/Home/home');
        */
        $id = $this->request->getPost('user_id');
        $pw = $this->request->getPost('pw');
        $result = $this->do_login($id, $pw);
        if ($result['status'] == 'success')
        {
            $this->response->redirect('/Home');
        }
        else
        {
            $this->response->redirect('/Login');
        }
    }

    //메소드 2-로그아웃
    public function logout()
    {
        $this->do_logout();
        $this->response->redirect('/Home');
    }

    //로그인
    public function do_login($id, $pw)
    {
        if ($this->validate('login'))
        {
            $login_data = $this->model->get_login($id);

            if($login_data != null && password_verify($pw,$login_data['PW'])) 
            {
                $user_data = array(
                    'user_id'   =>  $login_data['USER_ID'],
                    'name'      =>  $login_data['NAME'],
                    'cnt_cd'    =>  $login_data['COUNTRY_CD'],
                    'email'     =>  $login_data['EMAIL'],
                    'birth'     =>  $login_data['BIRTH'],
                    'gender'    =>  $login_data['GENDER'],
                    'admin'     =>  $login_data['ADMIN_YN'],
                    'language'  =>  $login_data['LANGUAGE'],
                    'login'     =>  TRUE,
                    'alarm'     =>  
                                    [
                                        [
                                            'day'   =>  '22/06/12',
                                            'text'  =>  '어코에 회원가입하신 것을 환영합니다'
                                        ]
                                    ],
                    'message'   =>  [   
                                            [
                                                'user'  =>  '관리자',
                                                'day'   =>  '22/06/12',
                                                'text'  =>  '어코에 회원가입하신 것을 환영합니다'
                                            ]
                                    ]
                );
    
                $this->session->set($user_data);
                return ['status' => 'success'];                         //성공
            }
            else
            {
                // 로그인 실패
                return ['status' => 'loginfail'];                       //로그인 실패
            }
        }
        else
        {
            return ['status' => 'validatefail'];                      //폼 검증 실패
        }
    }

    //로그아웃
    public function do_logout()
    {
        $array_items = 
        [
            'user_id',
            'name',
            'cnt_cd',
            'email',
            'birth',
            'gender',
            'admin',
            'language',
            'login',
            'alarm',
            'message'
        ];
        $this->session->remove($array_items);
        //$this->session->destroy();
    }
}