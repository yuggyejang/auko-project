<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $session;

    public function index()
    {
        $this->session = \Config\Services::session();
        if (!array_key_exists('setting',$_SESSION))
        {
            $data = array(
                'setting'   =>  'true',
                'board_id'     =>
                                [
                                    'best'  =>  '인기',
                                    'china' =>  '중국',
                                    'japan' =>  '일본',
                                    'us'    =>  '미국',
                                    'korea' =>  '한국',
                                ],
                'post_number'   =>  '100007',
                'post_id'       =>
                                [
                                    '100000'    =>  
                                                    [
                                                        'id'        =>  '100000',
                                                        'board_id'  =>  '한국',
                                                        'title'     =>  '안녕하세요 명지대학교 학생입니다.',
                                                        'content'   =>  '안녕하세요 명지대학교 학생입니다. 처음 글써봅니다. 반갑습니다 ㅎㅎ',
                                                        'author'    =>  'myeongji1234',
                                                        'date'      =>  '2022.06.13 19:21',
                                                        'see'       =>  '52',
                                                        'like'      =>  '21',
                                                        'dislike'   =>  '1',
                                                        'comment'   =>  '0',
                                                    ],
                                    '100001'    =>  
                                                    [
                                                        'id'        =>  '100001',
                                                        'board_id'  =>  '한국',
                                                        'title'     =>  '팀프로젝트2 화이팅',
                                                        'content'   =>  '반갑습니다 ㅎㅎ',
                                                        'author'    =>  'myeongji1234',
                                                        'date'      =>  '2022.06.13 19:22',
                                                        'see'       =>  '23',
                                                        'like'      =>  '1',
                                                        'dislike'   =>  '1',
                                                        'comment'   =>  '0',
                                                    ],
                                    '100002'    =>  
                                                    [
                                                        'id'        =>  '100002',
                                                        'board_id'  =>  '한국',
                                                        'title'     =>  '테스트입니다',
                                                        'content'   =>  '기말고사 화이팅',
                                                        'author'    =>  'myeongji1234',
                                                        'date'      =>  '2022.06.13 19:25',
                                                        'see'       =>  '10',
                                                        'like'      =>  '0',
                                                        'dislike'   =>  '1',
                                                        'comment'   =>  '0',
                                                    ],
                                    '100003'    =>  
                                                    [
                                                        'id'        =>  '100003',
                                                        'board_id'  =>  '한국',
                                                        'title'     =>  '테스트 제목',
                                                        'content'   =>  '테스트123',
                                                        'author'    =>  'lim',
                                                        'date'      =>  '2022.06.13 18:02',
                                                        'see'       =>  '10',
                                                        'like'      =>  '0',
                                                        'dislike'   =>  '0',
                                                        'comment'   =>  '0',
                                                    ],
                                    '100004'    =>  
                                                    [
                                                        'id'        =>  '100004',
                                                        'board_id'  =>  '일본',
                                                        'title'     =>  'このカードは、以下のサポートテキストを追加コンテンツの自然なリードインとして使用した、より広いカードです。',
                                                        'content'   =>  'test 123',
                                                        'author'    =>  'ja_user',
                                                        'date'      =>  '2022.06.13 22:11',
                                                        'see'       =>  '20',
                                                        'like'      =>  '21',
                                                        'dislike'   =>  '1',
                                                        'comment'   =>  '0',
                                                    ],
                                    '100005'    =>  
                                                    [
                                                        'id'        =>  '100005',
                                                        'board_id'  =>  '중국',
                                                        'title'     =>  '这是一张较宽的卡片，下面有支持文字作为附加内容的天然导入。',
                                                        'content'   =>  'test 123',
                                                        'author'    =>  'ch_user',
                                                        'date'      =>  '2022.06.13 22:25',
                                                        'see'       =>  '18',
                                                        'like'      =>  '21',
                                                        'dislike'   =>  '1',
                                                        'comment'   =>  '0',
                                                    ],
                                    '100006'    =>  
                                                    [
                                                        'id'        =>  '100006',
                                                        'board_id'  =>  '미국',
                                                        'title'     =>  'This is a wider card with supporting text below as a natural lead-in to additional content.',
                                                        'content'   =>  'test 123',
                                                        'author'    =>  'en_user',
                                                        'date'      =>  '2022.06.13 22:27',
                                                        'see'       =>  '5',
                                                        'like'      =>  '21',
                                                        'dislike'   =>  '0',
                                                        'comment'   =>  '0',
                                                    ],
                                                    
                                ]
            );
            $this->session->set($data);
            echo 'hello';
        }
        // var_dump($_SESSION);
        return view('/Home/home.php');
    }

    public function destroy()
    {
        $this->session->destroy();
    }
}
