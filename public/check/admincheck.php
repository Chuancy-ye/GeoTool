<?php


if(isset($_POST["submit"]) && $_POST["submit"] == "登  陆") 

{  

    $admin = $_POST["adminname"];  

    $psw = $_POST["password"];  

    if($admin == "" || $psw == "")  

    {  

        echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  

    }  

    else 

    {  

            $dbhost = 'localhost';  // mysql服务器主机地址
            $dbuser = 'root';            // mysql用户名
            $dbpass = '123456';          // mysql用户名密码
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
            mysqli_select_db($conn,"admin_info");
            mysqli_query($conn,"set names 'utf8'");
            $sql = "select name, password from admin_tb where name ='$_POST[adminname]' and password = '$_POST[password]'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num){
                #echo "<script>alert('登陆成功！');history.go(-1);</script>";
                $url1  =  "http://sem.com/admin.php/index/admins" ; 

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

        echo "<script>alert('提交未成功！!!'); history.go(-1);</script>";  

    }  
    ?>  

