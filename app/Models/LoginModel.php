<?php

namespace App\Models;

use App\Models\Sqlsrv\SqlsrvModel;

class LoginModel extends SqlsrvModel
{
    public function get_login($id){        
        $query = "
                    SELECT  *
                    FROM    USERS
                    WHERE   USER_ID = ?
                 ";

        $stmt = sqlsrv_query($this->dbconn, $query, array($id));
        
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

        return $row;
    }

}

?>