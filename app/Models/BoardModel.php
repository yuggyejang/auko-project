<?php
/**
 * 
 */

namespace App\Models;

use App\Models\Sqlsrv\SqlsrvModel;

class BoardModel extends SqlsrvModel
{
    public function read($board_id){
        
        $query = "
                    SELECT  TOP 6
                            B.ID, 
                            B.USER_ID, 
                            B.TITLE, 
                            B.CONTENT,
                            C.NAME,
                            A.CNT

                    FROM    (
                                SELECT    SRC_LIKE_ID,
                                        COUNT(*) CNT

                                FROM    dbo.[LIKE]
                                WHERE    LIKE_TP = 'D' AND PROC_ST = 'U'  --좋아요

                                GROUP BY SRC_LIKE_ID

                            ) A
                            INNER JOIN
                            BOARD_DETAIL B
                            ON A.SRC_LIKE_ID = B.ID
                            INNER JOIN
                            USERS C
                            ON B.USER_ID = C.USER_ID

                            ORDER BY CNT DESC, CREATE_ON DESC
                ";
        
        $stmt = sqlsrv_query($this->dbconn, $query);
        
        $arr = array();
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
        {
            array_push($arr, $row);
        }

        return $arr;
    }
}

?>