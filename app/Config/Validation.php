<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    //임재범 회원가입
    //규칙
    public $signup = [
        'USER_ID'       =>  [
            'rules'         =>  'required|alpha_numeric|min_length[5]|max_length[20]',
            'errors'        =>  [
                'required'      =>  '아이디를 입력해야 합니다.',
                'alpha_numeric' =>  '영문자와 숫자만 입력해야 합니다.',
                'min_length'    =>  '5 글자 이상으로 이루어져야 합니다.',
                'max_length'    =>  '20 글자 이하로 이루어져야 합니다.'
            ]

        ],
        'PW'            =>  [
            'rules'         =>  'required|min_length[5]|max_length[20]',
            'errors'        =>  [
                'required'      =>  '비밀번호를 입력해야 합니다.',
                'min_length'    =>  '5 글자 이상으로 이루어져야 합니다.',
                'max_length'    =>  '20 글자 이하로 이루어져야 합니다.'
            ]
        ],
        'NAME'          =>  [
            'rules'         =>  'required|max_length[50]',
            'errors'        =>  [
                'required'      =>  '이름을 입력해야 합니다.',
                'max_length'    =>  '50 글자 이하로 이루어져야 합니다.'
            ]
        ],
        'COUNTRY_CD'    =>  [
            'rules'         =>  'required',
            'errors'        =>  [
                'required'      =>  '국적을 선택해야 합니다.'
            ]
        ],
        'EMAIL'         =>  [
            'rules'         =>  'required|max_length[45]|valid_email',
            'errors'        =>  [
                'required'      =>  '이메일을 입력해야 합니다.',
                'max_length'    =>  '45 글자 이하로 이루어져야 합니다.',
                'valid_email'   =>  '유효한 이메일 주소를 입력해야 합니다.'
            ]
        ],
        'BIRTH'         =>  [
            'rules'         =>  'required',
            'errors'        =>  [
                'required'      =>  '생일을 입력해야 합니다.'
            ]
        ],
        'GENDER'        =>  [
            'rules'         =>  'required',
            'errors'        =>  [
                'required'      =>  '성별을 입력해야 합니다.'
            ]
        ],
    ];
}
