<?php

namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
        parent::initController($request, $response, $logger);
        $this->encrypter = \Config\Services::encrypter();
	}

    public function index(){
        return view('Login/login');
    }

    public function act(){
        $id = $this->request->getPost('id');
        $pw = $this->request->getPost('pw');
        // $secret = $this->encrypter->encrypt($pw);   // 암호화
        // $return_url = trim($this->request->getPost('return_url'));

        // echo $secret;

        if($id == null || $pw == null){
            $this->session->setFlashdata('error', '아이디 혹은 패스워드를 입력해주세요');
            $this->response->redirect('/Login');    // 폼으로 이동
            return false;
        }

        $this->model = new LoginModel;
        $login_data = $this->model->LoginCheck($id, $pw);

        if(!empty($login_data)) {

            $user_data = array(
                "ID" => $login_data['USER_ID'],
                "NAME" => $login_data['NAME'],
                "CNT_CD" => $login_data['COUNTRY_CD'],
                "EMAIL" => $login_data['EMAIL'],
                "BIRTH" => $login_data['BIRTH'],
                "GENDER" => $login_data['GENDER'],
                "ADMIN" => $login_data['ADMIN_YN'],
                "LOGIN" => TRUE
            );

            $this->session->set($user_data);

            //로그인 성공시 보내질곳...
            $this->response->redirect('/Home');
        }
        else
        {
            // 로그인 실패
            $this->session->setFlashdata('validation_error', '로그인에 실패했습니다.');
            $this->response->redirect('/Login');    // 폼으로 이동
        }
        
    }

    public function logout(){
        // 로그아웃 일단은 로그인 폼으로 이동
        $this->session->destroy();
        $this->response->redirect('/Login');
    }


}
