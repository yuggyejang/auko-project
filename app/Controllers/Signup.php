<?php
/**
 * Signup 리퀘스트 처리를 위한 컨트롤러
 */
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\I18n\Time;

class Signup extends ResourceController
{
    protected $modelName = 'App\Models\SignupModel';
    protected $format = 'json';


    public function index(){
        return view('Login/signup');
    }

    public function post_signup(){
        $this->encrypter = \Config\Services::encrypter();
        
        if ($this->validate('signup')){
            $this->model->setSignup([
                $this->request->getPost('USER_ID'),
                $this->encrypter->encrypt($this->request->getPost('PW')),
                $this->request->getPost('NAME'),
                $this->request->getPost('COUNTRY_CD'),
                $this->request->getPost('EMAIL'),
                $this->request->getPost('BIRTH'),
                $this->request->getPost('GENDER'),
                Time::today('Asia/Seoul', 'ko_KR'),
                'Y',
                'N'
            ]);
            echo 'success';
        }
        else{
            echo 'error';
        }




    }
}
