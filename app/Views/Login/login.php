<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
    <div>  
        <h3>로그인 폼</h3>
        <br />
        <?php 
            $this->session = \Config\Services::session(); 
            echo '<label>'.$this->session->getFlashdata('validation_error').'</label>';  
        ?>  
        <form method="post" accept-charset="utf-8" action="/Login/act">  
                <div>  
                    <label>아이디</label>  
                    <input type="text" name="id"/>
                </div>  

                <div>  
                    <label>암 호</label>  
                    <input type="password" name="pw"/>
                </div> 

                <div>  
                    <button type="submit">로그인</button>  
                    <?php  
                        echo '<label>'.$this->session->getFlashdata("error").'</label>';  
                    ?>  
                </div>  
        </form>  
    </div> 
</body>
</html>