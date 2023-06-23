<?php /*a:1:{s:55:"D:\phpstudy_pro\WWW\tp\app\admin\view\index\admins.html";i:1615354772;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>管理员登陆</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
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
    <!------------layui-------------------->
    <link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
  <script type="text/javascript" src="/static/layui/layui.js"></script>
  </head>



  <body>
    <div class="main-section">

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html">SEM Tech.后台管理</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
                <i class="ion-ios-apps mr-2"></i>
                设置
                <b class="caret"></b>
              </a>
              <div class="dropdown-menu dropdown-menu-left">
                <a href="#" class="dropdown-item"><i class="ion-ios-apps mr-2"></i> 忘记密码？</a>
               
              </div>
            </li>
              
              <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-logo-instagram"></i><span class="d-lg-none ml-2">Instagram</span></a></li>
            </ul>
          </div>
          </div>
      </nav>
    </div>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url(static/images/bg_2.jpg);background:  #03A9F4" data-stellar-background-ratio="0.5">
        <div class="overlay" ></div>
        <div class="container">
            <div class="row description js-fullheight align-items-center justify-content-center">
                <div class="card card-login py-4" style="background: #2E6DA4">
              <form class="form-login">
                <div class="card-header card-header-primary text-center">
                  <h4 class=" card-title ">Administrator Login</h4>
                  <div class="social-line">
                    
                    <a href="#" class="btn-icon d-flex align-items-center justify-content-center">
                      <i class="ion-ios-person mr-0"></i>
                    </a>
                    
                  </div>
                </div>
                <div class="card-body p-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="ion-ios-contact"></i>
                      </span>
                    </div>
                    <input type="text" id= "account" class="form-control"  placeholder=" Name...">
                  </div>
                  
                  <div class="input-group mb-0">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="ion-ios-lock"></i>
                      </span>
                    </div>
                    <input type="password"  id= "password" class="form-control"  placeholder="Password...">
                  </div>
                </div>
                <div class="footer text-center">
                   
                  <button type="button" class="btn btn-white" onclick="dologin()">登录</button>      
                </div>
                
              </form>
              <div class="designed d-inline-block">
                            <d class="d-flex align-items-center">
                                <div class="ml-3"><p class="mb-0">Support By: <span>GeoTVP地质软件开发组</span></p></div>
                            </d>
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
        layer.alert('请输入密码',{icon:2});
        return;
      }
      $.post('/index.php/login/index/alogin',{'account':account,'pwd':pwd},function(res){
        if(res.code>0){
          layer.alert(res.msg,{icon:2});
        }else{
          layer.msg(res.msg);
          setTimeout(function(){window.location.href = 'http://sem.com/index.php/admin'},1000);
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