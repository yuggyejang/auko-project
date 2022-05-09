<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <div>  
        <h3>회원가입 폼</h3>
        <br />
        <form method="post" accept-charset="utf-8" action="/Signup/post_signup">  
                <div>  
                    <label>아이디</label>  
                    <input type="text" name="USER_ID"/>
                </div>  

                <div>  
                    <label>비밀번호</label>  
                    <input type="password" name="PW"/>
                </div> 

                <div>  
                    <label>이름</label>  
                    <input type="text" name="NAME"/>
                </div> 

                <div>  
                    <label>국가코드</label>  
                    <input type="text" name="COUNTRY_CD"/>
                </div> 

                <div>  
                    <label>이메일</label>  
                    <input type="text" name="EMAIL"/>
                </div> 

                <div>  
                    <label>생일</label>  
                    <input type="text" name="BIRTH"/>
                </div> 

                <div>  
                    <label>성별</label>  
                    <input type="text" name="GENDER"/>
                </div> 

                <div>  
                    <button type="submit">회원가입</button>
                </div>  
        </form>  
    </div> 
</body>
</html>