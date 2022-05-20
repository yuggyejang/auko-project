<?php
/**
 * 0509 임재범
 */

namespace App\Models\Sqlsrv;

use CodeIgniter\Model;

class SqlsrvModel extends Model             //Model이 BaseModel를 상속받아서 Model를 사용하였습니다
{
    /**
     *  sqlsrv connect
     * 
     *  @var connection resource. 
     *  If a connection cannot be successfully opened, false is returned.
     */
    protected $dbconn;  
    
    
    function __construct(){

        $serverName = "localhost";
        $connectionOptions = array(
            "database" => "Team2", // 데이터베이스명
            "uid" => "SA",   // 유저 아이디
            "pwd" => "Team123123"    // 유저 비번
        );

        $this->dbconn = sqlsrv_connect($serverName, $connectionOptions); 
    }
}

?>