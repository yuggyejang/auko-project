<?php
/**
 * Signup 리퀘스트 처리를 위한 모델
 */

namespace App\Models;

use App\Models\Sqlsrv\SqlsrvModel;

class SignupModel extends SqlsrvModel
{
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