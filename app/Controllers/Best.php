<?php
/**
 * 메인페이지 best 게시글 응답을 위한 리소스 컨트롤러
 * 0508 임재범
 */
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Best extends ResourceController
{
    protected $modelName = 'App\Models\BestModel';
    protected $format = 'json';


    public function index()
    {
        act();
    }

    public function act(){
        $read_data = $this->model->read();

        return $this->respond($read_data);
    }
}
