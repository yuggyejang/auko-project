<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
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

    public function LoginCheck($id, $pw){

        echo $id;
        echo $pw;
        
        $query = "
                    SELECT  *
                    FROM    USERS
                    WHERE   USER_ID = ? AND PW = ?
                 ";

        $stmt = sqlsrv_query($this->dbconn, $query, array($id, $pw));
        
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        return $row;
    }

}

?>