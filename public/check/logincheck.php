<?php

         if(isset($_POST["submit1"]) && $_POST["submit1"] == "注册")
        
        {


        $sg_user = $_POST["username1"]; 

        $sg_email = $_POST["email"];

        $sg_psw = $_POST["password1"]; 

        $psw_confirm = $_POST["confirm1"];

        if ($sg_user == "" || $sg_psw == "" || $psw_confirm == "" || $sg_email== "")
        {
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }else
        {
            if($sg_psw == $psw_confirm)
            {   
                $dbhost = 'localhost';  // mysql服务器主机地址
                $dbuser = 'root';            // mysql用户名
                $dbpass = '123456';          // mysql用户名密码
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass);

                if(!$conn )
                    {
                        die('Could not connect: ' . mysqli_error($conn));
                    }
                
                mysqli_select_db($conn,"tp");
                mysqli_query($conn,"set names 'utf8'");
                $sql = "select account from shop_user where account ='$_POST[username1]'";
                $result = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                if($num){

                    echo "<script>alert('用户名已被占用');history.go(-1);</script>";
                }else{


                $sql = "select email from shop_user where email ='$_POST[email]'";
                $result = mysqli_query($conn,$sql);
                $num = mysqli_num_rows($result);
                
                if ($num){
                    echo "<script>alert('邮箱已被注册');history.go(-1);</script>";
                }else{
                    $confirm1=md5($_POST["confirm1"]);
                  $sql_insert = "insert into shop_user(account,email,password) values ('$_POST[username1]','$_POST[email]','$confirm1')";
                  #$sql_insert = "insert into user_info (email,password) values ('19829198452qq.com','$_POST[password1]')";
                  $res_insert = mysqli_query($conn,$sql_insert);
                  if(!$res_insert)
                  { 
                    echo "<script>alert('系统繁忙，请稍后！');history.go(-1);</script>"; 
                  }else{
                    echo "<script>alert('注册成功！');history.go(-1);</script>";
                  }
                }
                 }



            }else{
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }
        }
    }
    else{
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }
?>
            
        
    