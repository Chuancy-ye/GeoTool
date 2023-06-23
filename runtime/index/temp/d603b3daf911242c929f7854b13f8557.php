<?php /*a:1:{s:54:"D:\phpstudy_pro\WWW\tp\app\index\view\index\users.html";i:1614703058;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            SEM users
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">
                    <link href="/static/css/open-iconic-bootstrap.min.css" rel="stylesheet">
                        <link href="/static/css/animate.css" rel="stylesheet">
                            <link href="/static/css/owl.carousel.min.css" rel="stylesheet">
                                <link href="/static/css/owl.theme.default.min.css" rel="stylesheet">
                                    <link href="/static/css/magnific-popup.css" rel="stylesheet">
                                        <link href="/static/css/aos.css" rel="stylesheet">
                                            <link href="/static/css/ionicons.min.css" rel="stylesheet">
                                                <link href="/static/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
                                                    <link href="/static/css/nouislider.css" rel="stylesheet">
                                                        <link href="/static/css/flaticon.css" rel="stylesheet">
                                                            <link href="/static/css/icomoon.css" rel="stylesheet">
                                                                <link href="/static/css/style.css" rel="stylesheet">
                                                                    <!---------layui--------->
                                                                    <link href="/static/layui/css/layui.css" rel="stylesheet" type="text/css">
                                                                        <script src="/static/layui/layui.js" type="text/javascript">
                                                                        </script>
                                                                        <style type="text/css">
                                                                            .header{width:100%;height: 50px;line-height: 50px;background: #2e6da4;color:#ffffff;}
        .title{margin-left: 20px;font-size: 20px;}
        .userinfo{float: right;margin-right: 10px;}
        .userinfo a{color:#ffffff;}
        .menu{width: 200px;background:#333744;position:absolute;}
        .main{position: absolute;left:200px;right:0px;}

        .layui-collapse{border: none;}
        .layui-colla-item{border-top:none;}
        .layui-colla-title{background:#42485b;color:#ffffff;}
        .layui-colla-content{border-top:none;padding:0px;}

        .content span{background: #009688;margin-left: 30px;padding: 10px;color:#ffffff;}
        .content div{border-bottom: solid 2px #009688;margin-top: 8px;}
        .content button{float: right;margin-top: -5px;}
                                                                        </style>
                                                                    </link>
                                                                </link>
                                                            </link>
                                                        </link>
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <!-----------start----------->
    <body>
     
        <div class="px-0 bg-info navbar-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar px-0 navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">
                                <?php echo htmlentities($title); ?>--预约系统
                            </a>
                            <button aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarsExample06" data-toggle="collapse" type="button">
                                <span class="oi oi-menu">
                                </span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample06">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item d-flex active">
                                        <a class="nav-link d-flex align-items-center icon" href="#">
                                            <i class="ion-ios-compass">
                                            </i>
                                           
                                        </a>
                                    </li>
                                   
                                    <li class="dropdown nav-item d-flex">
                                        <a class="dropdown-toggle nav-link d-flex align-items-center icon" data-toggle="dropdown" href="#"><span >
                                                欢迎！
                                            </span>
                                         
                                            <i class="ion-ios-contact">
                                            </i><?php echo htmlentities($user); ?>
                                            <span class="d-lg-none ml-2">
                                                Settings
                                            </span>
                                            <b class="caret">
                                            </b>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <h6 class="dropdown-header">
                                              <a class="dropdown-item" href="/index.php/login/index/logout">
                                             退 出 登 陆
                                            </a>
                                            
                                             <h6 class="dropdown-header">
                                            <a class="dropdown-item" href="#">
                                                反 馈 信 息
                                            </a>  
                                           </h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!---------menu--------->
        <!-------------------main------------------>
        <section class="ftco-section ftco-section-2 bg-light" id="navigationTabs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-md-0">
                        <div class="tabulation">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                <li class="nav-item">
                                    <a class="nav-link active py-3" data-toggle="tab" href="#home">
                                        <span class="ion-ios-home mr-2">
                                        </span>
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-3 mx-md-3" data-toggle="tab" href="#menu1">
                                        <span class="ion-ios-person mr-2">
                                        </span>
                                        Profile
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-3" data-toggle="tab" href="#menu2">
                                        <span class="ion-ios-mail mr-2">
                                        </span>
                                        Messages
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content rounded mt-md-3">
                                <div class="tab-pane container p-4 active" id="home">
                                    <p>
                                        没有在进行的订单哦，去创建订单吧
                                    </p>
                                </div>
                                <div class="tab-pane container p-4 fade" id="menu1">
                                    <div class="form-group">
                                        <input class="form-control" id="email" required="" type="email">
                                            <label class="form-control-placeholder" for="email">
                                                姓名
                                            </label>
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" required="" type="email">
                                            <label class="form-control-placeholder" for="email">
                                                时间
                                            </label>
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" required="" type="email">
                                            <label class="form-control-placeholder" for="email">
                                                预约实验
                                            </label>
                                        </input>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" id="email" required="" type="email">
                                            <label class="form-control-placeholder" for="email">
                                                联系电话
                                            </label>
                                        </input>
                                    </div>
                                    <div class="form-group has-success">
                                        <input class="form-control" id="exampleInput2" placeholder="Success" required="" type="text">
                                            <span class="icon success">
                                                <i class="ion-ios-checkmark">
                                                </i>
                                            </span>
                                        </input>
                                    </div>
                                    <div class="form-group has-danger">
                                        <input class="form-control" id="exampleInput3" placeholder="Error Input" required="" type="text">
                                            <span class="icon clear">
                                                <i class="ion-ios-close">
                                                </i>
                                            </span>
                                        </input>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <button class="btn btn-info btn-lg btn-block" type="button">
                                            提交
                                        </button>
                                    </div>
                                </div>
                                <div class="tab-pane container p-4 fade" id="menu2">
                                    <div class="alert alert-info">
                                        <div class="container">
                                            <div class="d-flex">
                                                <div class="alert-icon">
                                                    <i class="ion-ios-information-circle-outline">
                                                    </i>
                                                </div>
                                                <p class="mb-0 ml-2">
                                                    <b>
                                                        Info alert:
                                                    </b>
                                                    You&apos;ve got some friends nearby, stop looking at your phone and find them...
                                                </p>
                                            </div>
                                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                                <span aria-hidden="true">
                                                    <i class="ion-ios-close">
                                                    </i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-success">
                                        <div class="container">
                                            <div class="d-flex">
                                                <div class="alert-icon">
                                                    <i class="ion-ios-checkmark-circle">
                                                    </i>
                                                </div>
                                                <p class="mb-0 ml-2">
                                                    <b>
                                                        Success Alert:
                                                    </b>
                                                    Yuhuuu! You&apos;ve got your $11.99 album from The Weeknd
                                                </p>
                                            </div>
                                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                                <span aria-hidden="true">
                                                    <i class="ion-ios-close">
                                                    </i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning">
                                        <div class="container">
                                            <div class="d-flex">
                                                <div class="alert-icon">
                                                    <i class="ion-ios-warning">
                                                    </i>
                                                </div>
                                                <p class="mb-0 ml-2">
                                                    <b>
                                                        Warning Alert:
                                                    </b>
                                                    Hey, it looks like you still have the "copyright © 2015" in your footer. Please update it!
                                                </p>
                                            </div>
                                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                                <span aria-hidden="true">
                                                    <i class="ion-ios-close">
                                                    </i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="alert alert-danger">
                                        <div class="container">
                                            <div class="d-flex">
                                                <div class="alert-icon">
                                                    <i class="ion-ios-information-circle-outline">
                                                    </i>
                                                </div>
                                                <p class="mb-0 ml-2">
                                                    <b>
                                                        Error Alert:
                                                    </b>
                                                    Damn man! You screwed up the server this time. You should find a good excuse for your Boss...
                                                </p>
                                            </div>
                                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                                <span aria-hidden="true">
                                                    <i class="ion-ios-close">
                                                    </i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-md-6">
                        <div class="tabulation tabulation2">
                            <div class="d-flex tabs border border-left-0 border-right-0 border-top-0 justify-content-center">
                                <div class="d-inline-block">
                                    <ul class="nav nav-tabs border-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home1">
                                                用户信息
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#home2">
                                                通知
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content border-0">
                                <div class="tab-pane container p-4 active text-center" id="home1">
                                    <p>
                                        Here is information about user.欢迎
                                    </p>
                                </div>
                                <div class="tab-pane container p-4 fade text-center" id="home2">
                                    <p>
                                        Here are your messages.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---------------------------------------------------final------------------------------------------------------------->
        <div>
            <footer class="ftco-section ftco-section-2">
                <div class="col-md-12 text-center">
                    <p class="mb-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | 由
                        <a href="https://colorlib.com" target="_blank">
                            GeoTVP地质软件开发组
                        </a>
                        提供支持
                        <i aria-hidden="true" class="icon-heart">
                        </i>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </footer>
        </div>
        <div class="show fullscreen" id="ftco-loader">
            <svg class="circular" height="48px" width="48px">
                <circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4">
                </circle>
                <circle class="path" cx="24" cy="24" fill="none" r="22" stroke="#F96D00" stroke-miterlimit="10" stroke-width="4">
                </circle>
            </svg>
        </div>
        <script src="/static/js/jquery.min.js">
        </script>
        <script src="/static/js/jquery-migrate-3.0.1.min.js">
        </script>
        <script src="/static/js/popper.min.js">
        </script>
        <script src="/static/js/bootstrap.min.js">
        </script>
        <script src="/static/js/jquery.easing.1.3.js">
        </script>
        <script src="/static/js/jquery.waypoints.min.js">
        </script>
        <script src="/static/js/jquery.stellar.min.js">
        </script>
        <script src="/static/js/owl.carousel.min.js">
        </script>
        <script src="/static/js/jquery.magnific-popup.min.js">
        </script>
        <script src="/static/js/aos.js">
        </script>
        <script src="/static/js/nouislider.min.js">
        </script>
        <script src="/static/js/moment-with-locales.min.js">
        </script>
        <script src="/static/js/bootstrap-datetimepicker.min.js">
        </script>
        <script src="/static/js/main.js">
        </script>
        <script>
            layui.use(['element','layer','laypage'], function(){
                    var element = layui.element;
                    var laypage = layui.laypage;
                    $ = layui.jquery;
                    layer = layui.layer;
                    resetMenuHeight();
                });
                // 重新设置菜单容器高度
                function resetMenuHeight(){
                    var height = document.documentElement.clientHeight - 50;
                    $('#menu').height(height);
                }
        </script>
    </body>
</html>