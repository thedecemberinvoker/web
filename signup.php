<html>  
<head lang = "en" >  
    <meta charset = "UTF-8" >  
    <link type = "text / css"  rel = "stylesheet"  href = "bootstrap-3.2.0-dist \ css \ bootstrap.css" >  
    <title> Đăng ký </title>  
</head>  
<kiểu>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>  
  
<div  class = "container" > <! -  class container  được sử dụng để căn giữa phần thân của trình duyệt  với  một số chiều rộng phù hợp ->  
    <div  class = "row" > <! - row  class  được sử dụng  cho  hệ thống lưới  trong  Bootstrap ->  
        <div  class = "col-md-4 col-md-offset-4" > <! - col-md-4 được sử dụng để tạo không cột  trong  lưới cũng được sử dụng  cho  các thiết bị trung bình và lớn ->  
            <div  class = "login-panel panel panel-success" >  
                <div  class = "panel-header" >  
                    <h3  class = "panel-title" > Đăng ký </h3>  
                </div>  
                <div  class = "panel-body" >  
                    <form role = "form"  method = "post"  action = "register.php" >  
                        <fieldset>  
                            <div  class = "form-group" >  
                                <input  class = "form-control"  placeholder = "Username"  name = "name"  type = "text"  autofocus>  
                            </div>  
  
                            <div  class = "form-group" >  
                                <input  class = "form-control"  placeholder = "E-mail"  name = "email"  type = "email"  autofocus>  
                            </div>  
                            <div  class = "form-group" >  
                                <input  class = "form-control"  placeholder = "Password"  name = "pass"  type = "password"  value = "" >  
                            </div>  
  
  
                            <input  class = "btn btn-lg btn-success btn-block"  type = "submit"  value = "register"  name = "register"  >  
  
                        </fieldset>  
                    </form>  
                    <center> <b> Đã đăng ký? </b> <br> </b> <a href= "login.php"> Đăng nhập tại đây </a> </center> <! - cho  văn bản được căn giữa ->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<? php  
  
bao gồm ( "cơ sở dữ liệu / db_conection.php" ); // tạo kết nối ở đây  
if (Isset ($ _ POST [ 'register' ]))  
{  
    $ user_name = $ _ POST [ 'name' ]; // ở đây nhận kết quả từ mảng bài đăng sau khi gửi biểu mẫu.  
    $ user_pass = $ _ POST [ 'pass' ]; //giống nhau  
    $ user_email = $ _ POST [ 'email' ]; //giống nhau  
  
  
    if ($ user_name == '' )  
    {  
        // sử dụng javascript để kiểm tra đầu vào  
        echo "<script> alert ('Vui lòng nhập tên') </script>" ;  
lối ra(); // cái này sử dụng nếu lần đầu không hoạt động thì cái khác sẽ không hiển thị  
    }  
  
    if ($ user_pass == '' )  
    {  
        echo "<script> alert ('Vui lòng nhập mật khẩu') </script>" ;  
lối ra();  
    }  
  
    if ($ user_email == '' )  
    {  
        echo "<script> alert ('Vui lòng nhập email') </script>" ;  
    lối ra();  
    }  
// tại đây truy vấn kiểm tra thời tiết nếu người dùng đã đăng ký nên không thể đăng ký lại.  
    $ check_email_query = "select * từ người dùng WHERE user_email = '$ user_email'" ;  
    $ run_query = mysqli_query ($ dbcon, $ check_email_query);  
  
    if (mysqli_num_rows ($ run_query)> 0)  
    {  
echo  "<script> alert ('Email $ user_email đã tồn tại trong cơ sở dữ liệu của chúng tôi, Vui lòng thử một cái khác!') </script>" ;  
lối ra();  
    }  
// chèn người dùng vào cơ sở dữ liệu.  
    $ insert_user = "chèn vào người dùng (user_name, user_pass, user_email) VALUE ('$ user_name', '$ user_pass', '$ user_email')" ;  
    if (mysqli_query ($ dbcon, $ insert_user))  
    {  
        echo "<script> window.open ('welcome.php', '_ self') </script>" ;  
    }  
} 
?>  