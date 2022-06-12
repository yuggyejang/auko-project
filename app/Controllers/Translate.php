<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Translate extends ResourceController
{
    protected $modelName = 'App\Models\TranslateModel';
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
    }

    // 메소드 1-번역 세팅
    // POST
    // 'language' : 'KR'
    public function setting()
    {
        $language = $this->request->getPost('language');
        $result = $this->set_language($language);
        return $this->respond($result);
    }

    // 메소드 2-UI 번역
    // POST
    // 'component_list' : ['name', 'board'...]
    public function ui_translate()
    {
        $component_list = $this->request->getPost('component_list');
        $result = $this->trans_component($component_list);
        return $this->respond($result);
    }

    // 메소드 3-구글 번역
    // POST 미완

    //번역 언어 설정
    public function set_language($language)
    {
        $this->session->set('language',$language);

        $result = null;
        $user_id = $this->session->get('user_id');
        if ($user_id != null)
        {
            $result = $this->model->set_lan($user_id,$language);
        }
        return $result;
    }

    //UI 리스트 번역
    public function trans_component($component_list)
    {
        $language = $this->session->get('language');
        if ($language == null){
            $language = 'KR';
        }
        return $this->model->read_data($component_list, $language);
    }

    //구글 번역
    public function trans_text($text_list)
    {
        //미완
    }
}