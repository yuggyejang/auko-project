<?php

namespace App\Models;

use App\Models\Sqlsrv\SqlsrvModel;

class TranslateModel extends SqlsrvModel
{
    public function set_lan($user_id,$language)
    {
        $query = "
                    UPDATE  dbo.USERS
                    SET     LANGUAGE = ?
                    WHERE   USER_ID = ?
                ";
        
        sqlsrv_query($this->dbconn, $query, [$language, $user_id]);
        return ['status' => 'success'];
    }

    public function read_data($component_list, $language)
    {
        $array = array();
        foreach($component_list as $component)
        {
            $query = "
                        SELECT  TRANS_DATA
                        FROM    dbo.UI_TRANSLATION
                        WHERE   COUNTRY_CD = ? AND COMPONENT_ID = ?
                    ";
            
            $stmt = sqlsrv_query($this->dbconn, $query, [$language, $component]);
            $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
            $array[$component] = $row;
        }

        return $array;
    }
}

?>