<? php  
session_start (); // phiên bắt đầu tại đây  
  
?>  
  
<html>  
<head lang = "en" >  
    <meta charset = "UTF-8" >  
    <link type = "text / css"  rel = "stylesheet"  href = "bootstrap-3.2.0-dist \ css \ bootstrap.css" >  
    <title> Đăng nhập </title>  
</head>  
<kiểu>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
  
<div  class = "container" >  
    <div  class = "row" >  
        <div  class = "col-md-4 col-md-offset-4" >  
            <div  class = "login-panel panel panel-success" >  
                <div  class = "panel-header" >  
                    <h3  class = "panel-title" > Đăng nhập </h3>  
                </div>  
                <div  class = "panel-body" >  
                    <form role = "form"  method = "post"  action = "login.php" >  
                        <fieldset>  
                            <div  class = "form-group"   >  
                                <input  class = "form-control"  placeholder = "E-mail"  name = "email"  type = "email"  autofocus>  
                            </div>  
                            <div  class = "form-group" >  
                                <input  class = "form-control"  placeholder = "Password"  name = "pass"  type = "password"  value = "" >  
                            </div>  
  
  
                            <button class="normal form-submit">LOGIN</button>
  
                            <! - Thay đổi cái này thành nút  hoặc  đầu vào khi sử dụng cái này  làm  biểu mẫu ->  
                          <! - <a href = "index.html" class = "btn btn-lg btn-success btn-block" > Đăng nhập </a> ->   
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<? php  
  
bao gồm ( "cơ sở dữ liệu / db_conection.php" );  
  
if (Isset ( $ _POST [ 'đăng nhập' ]))  
{  
    $ user_email = $ _POST [ 'email' ];  
    $ user_pass = $ _POST [ 'pass' ];  
  
    $ check_user = "select * từ người dùng WHERE user_email = '$ user_email'AND user_pass =' ​​$ user_pass '" ;  
  
    $ run = mysqli_query ( $ dbcon , $ check_user );  
  
    if (mysqli_num_rows ( $ run ))  
    {  
        echo "<script> window.open ('welcome.php', '_ self') </script>" ;   
  
        $ _SESSION [ 'email' ] = $ user_email ; // ở đây phiên được sử dụng và giá trị của $ user_email lưu trữ trong $ _SESSION.  
  
    }  
    khác  
    {  
      echo "<script> alert ('Email hoặc mật khẩu không chính xác!') </script>" ;   
    }  
}  
?>  