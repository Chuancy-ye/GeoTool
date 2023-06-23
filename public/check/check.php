<?php

namespace app\admin\controller;
use think\facade\View;
use think\facade\Db;
use think\facade\Request;
use think\facade\Session;


        if(isset($_POST["submit"]) && $_POST["submit"] == "登  陆") 

    {  

        $user = $_POST["username"];  

        $psw = $_POST["password"];  

        if($user == "" || $psw == "")  

        {  

            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  

        }  

        else 

        {  

                $dbhost = 'localhost';  // mysql服务器主机地址
                $dbuser = 'root';            // mysql用户名
                $dbpass = '123456';          // mysql用户名密码
                $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
                mysqli_select_db($conn,"user_tb");
                mysqli_query($conn,"set names 'utf8'");
                $sql = "select username, password from user_info where username ='$_POST[username]' and password = '$_POST[password]'";
                $result = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                if($num){

                 Session::set('admin_username',$user);
                // $this->success("登录成功！",url('http://sem.com/index.php/index/index/users'));
                    $url1  =  "http://sem.com/index.php/index/index/users" ; 

                    echo " <script   language = 'javascript' 

                    type = 'text/javascript' > "; 

                    echo " window.location.href = '$url1' "; 

                    echo " </script > "; 
                     #$row = mysqli_fetch_array($result);
                    #echo $row[0];
                }else{
                    echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
                }
             }

        }else {  

        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  

              }  
?>  
    
