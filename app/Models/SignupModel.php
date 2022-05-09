<?php
/**
 * Signup 리퀘스트 처리를 위한 모델
 */

namespace App\Models;

use CodeIgniter\Model;

class SignupModel extends Model
{
    function __construct(){

        $serverName = "localhost";
        $connectionOptions = array(
            "database" => "Team2", // 데이터베이스명
            "uid" => "SA",   // 유저 아이디
            "pwd" => "Team123123"    // 유저 비번
        );

        $this->dbconn = sqlsrv_connect($serverName, $connectionOptions); 
    }

    public function setSignup(array $data = []){
        
        $query = "
                    INSERT  INTO    dbo.USERS
                                    (
                                    USER_ID, 
                                    PW, 
                                    NAME, 
                                    COUNTRY_CD,
                                    EMAIL,
                                    BIRTH,
                                    GENDER,
                                    REG_DT,
                                    USE_YN,
                                    ADMIN_YN
                                    ) 
                    VALUES 
                                    (
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?,
                                    ?
                                    )
                 ";

        sqlsrv_query($this->dbconn, $query, $data);

        return;
    }

}

?>