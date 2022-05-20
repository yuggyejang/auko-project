<?php
/**
 * Best 응답을 위한 모델
 * 0508 임재범
 */

namespace App\Models;

use App\Models\Sqlsrv\SqlsrvModel;

class BestModel extends SqlsrvModel
{
    public function getBest(){                                                                  //현재 최다 추천수 게시물 갯수가 6개로 고정되있음
        
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