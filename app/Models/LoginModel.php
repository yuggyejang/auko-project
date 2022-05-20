<?php

namespace App\Models;

use App\Models\Sqlsrv\SqlsrvModel;

class LoginModel extends SqlsrvModel
{
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