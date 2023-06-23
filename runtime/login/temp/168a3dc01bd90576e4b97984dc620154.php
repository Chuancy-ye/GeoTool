<?php /*a:1:{s:54:"D:\phpstudy_pro\WWW\tp\app\login\view\index\index.html";i:1615657304;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            订单登录
        </title>
        <link href="/static/layui/css/layui.css" rel="stylesheet" type="text/css">
            <script src="/static/layui/layui.js" type="text/javascript">
            </script>
        </link>
         <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/static/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/static/css/animate.css">
    
    <link rel="stylesheet" href="/static/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/static/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/static/css/magnific-popup.css">

    <link rel="stylesheet" href="/static/css/aos.css">

    <link rel="stylesheet" href="/static/css/ionicons.min.css">
        
        <link rel="stylesheet" href="/static/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/static/css/nouislider.css">

    
    <link rel="stylesheet" href="/static/css/flaticon.css">
    <link rel="stylesheet" href="/static/css/icomoon.css">
    <link rel="stylesheet" href="/static/css/style.css">
    </head>
    <body>
        <section class="bg-light ftco-section ftco-section-2 section-signup page-header img" style="background-image: url(/static/images/bg_2.jpg);">
    <div class="overlay" id="Login">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <ul class="nav nav-pills nav-fill d-md-flex d-block">
                    <li class="nav-item">
                        <a class="nav-link active py-3" data-toggle="tab" href="#home">
                            <span class="ion-ios-home mr-2">
                            </span>
                            登陆
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 mx-md-3" data-toggle="tab" href="#menu1">
                            <span class="ion-ios-person mr-2">
                            </span>
                            注册
                        </a>
                    </li>
                </ul>
                <div class="tab-content rounded mt-md-3">
                    <div class="tab-pane container p-4 active" id="home">
                        <form  class="form-login" >
                            <div class="card-body p-4">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ion-ios-paper-plane">
                                            </i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="account" placeholder="Email..." type="username">
                                    </input>
                                </div>
                                <div class="input-group mb-0">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ion-ios-lock">
                                            </i>
                                        </span>
                                    </div>
                                    <input class="form-control" id="password" placeholder="Password..." type="password">
                                    </input>
                                </div>
                            </div>
                            
                            
                            <div class="footer text-center">
                                <button class="btn btn-white" onclick="dologin()" type="button">
                                    登  录
                                </button>
                            
                        </div>
                           
                            <div class="footer text-center">
                                <a class=" nav-item nav-link " data-toggle="tab" href="#menu1">
                                    还没注册？
                                </a>
                            </div>
                        </form>
                    </div>


                   <!--  注册系统 -->
                    <div class="tab-pane container p-4 fade" id="menu1">
                        <form action="check/logincheck.php" class="form-login" method="post">
                            <div class="card-body p-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class='input-group-text'>
                                            <i class="ion-ios-contact">
                                            </i>
                                        </span>
                                    </div>
                                    <input class="form-control" name="username1" placeholder=" Name..." type="text">
                                    </input>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ion-ios-paper-plane">
                                            </i>
                                        </span>
                                    </div>
                                    <input class="form-control" name="email" placeholder="Email..." type="email">
                                    </input>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ion-ios-lock">
                                            </i>
                                        </span>
                                    </div>
                                    <input class="form-control" name="password1" placeholder="Password..." type="password">
                                    </input>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="ion-ios-lock">
                                            </i>
                                        </span>
                                    </div>
                                    <input class="form-control" name="confirm1" placeholder="Confirm..." type="password">
                                    </input>
                                </div>
                            </div>
                            <div class="footer text-center">
                                <input class="btn btn-white" name="submit1" type="submit" value="注册"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <script type="text/javascript">
            layui.use(['layer'],function(){
            $ = layui.jquery;
            layer = layui.layer;
            // 用户名控件获取焦点
            $('#account').focus();
            // 回车登录
            $('input').keydown(function(e){
                if(e.keyCode == 13){
                    dologin();
                }
            });
        });
        function dologin(){
            var account = $.trim($('#account').val());
            var pwd = $.trim($('#password').val());
            if(account == ''){
                layer.alert('请输入用户名',{icon:2});
                return;
            }
            if(pwd == ''){
                layer.alert('请输入密码?',{icon:2});
                return;
            }
            $.post('/index.php/login/index',{'account':account,'pwd':pwd},function(res){
                if(res.code>0){
                    layer.alert(res.msg,{icon:2});
                }else{
                    layer.msg(res.msg);
                    setTimeout(function(){window.location.href = '/index.php/index/index/user'},1000);
                }
            },'json');
        }
        </script>
         <script src="/static/js/jquery.min.js"></script>
          <script src="/static/js/jquery-migrate-3.0.1.min.js"></script>
          <script src="/static/js/popper.min.js"></script>
          <script src="/static/js/bootstrap.min.js"></script>
          <script src="/static/js/jquery.easing.1.3.js"></script>
          <script src="/static/js/jquery.waypoints.min.js"></script>
          <script src="/static/js/jquery.stellar.min.js"></script>
          <script src="/static/js/owl.carousel.min.js"></script>
          <script src="/static/js/jquery.magnific-popup.min.js"></script>
          <script src="/static/js/aos.js"></script>

          <script src="/static/js/nouislider.min.js"></script>
          <script src="/static/js/moment-with-locales.min.js"></script>
          <script src="/static/js/bootstrap-datetimepicker.min.js"></script>
          <script src="/static/js/main.js"></script>
    </body>
</html>
