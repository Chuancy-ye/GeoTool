<?php /*a:2:{s:53:"D:\phpstudy_pro\WWW\tp\app\index\view\index\show.html";i:1615394781;s:56:"D:\phpstudy_pro\WWW\tp\app\index\view\public\footer.html";i:1614694448;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SEM HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="/static/layui/layui.js" type="text/javascript">
            </script>
<!-- 
   <script type="text/javascript">
    
   location.href = "#index";  
 </script> -->
    <link href="/static/layui/css/layui.css" rel="stylesheet" type="text/css">
            
        </link>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/static/css/open-ico`aanic-bootstrap.min.css">
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
    
  <div class="main-section" id="index">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">SEM Tech.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">

            
             <li class="nav-item"><a href="http://xying.top/" class="nav-link icon d-flex align-items-center"><i class="ion-ios-apps mr-2"></i> 地球化学计算</a></li>
              <li class="nav-item "><a href="http://sem.com/index.php/index/index/intro" class="nav-link icon d-flex align-items-center"><i class="ion-ios-document mr-2"></i> 公司介绍</a></li>
            <li class="nav-item cta"><a href="http://sem.com/index.php/index/index/show" class="nav-link icon d-flex align-items-center"><i class="ion-ios-compass mr-2"></i> 分析服务</a></li>

          

            <li class="nav-item"><a href="http://sem.com" class="nav-link icon d-flex align-items-center"><i class="ion-ios-copy mr-2"></i> 主页</a></li>
            
            <li class="nav-item"><a href="#Login" class="nav-link icon d-flex align-items-center"><i class="ion-ios-contact"></i> Log in?</a></li>

        </div>
      </div>
    </nav>
    <section class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5" style="background-image: url(/static/images/yiqi1.jpg);" >
    <div class="container">
        <div class="row description js-fullheight align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <div class="text">
                    <h1 class="mb-4">
                        <span>
                            赛 目 科 技
                        </span>
                    </h1>
                    <h4 class="mb-5 mt-2">
                        HUNAN SEM TECHNOLOGY SERVICE LTD.
                    </h4>
                    <div class="designed d-inline-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mouse">
        <a class="mouse-icon rounded-circle bg-danger" href="#">
            <div class="mouse-wheel">
                <span class="ion-ios-arrow-round-down text-light">
                </span>
            </div>
        </a>
    </div>
</section>
<!----项目------>

     <section class="ftco-section ftco-section-2 bg-light" id="cards">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading-section mb-4 pb-md-3">
             检测项目
            </h2>
          </div>
        </div>
        <div class="row">
          <?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat_v): $mod = ($i % 2 );++$i;?>
          <div class="col-md-4">
            
            <h2 class="heading-section mb-4 pb-md-3">
              <small><?php echo htmlentities($cat_v['name']); ?></small>
            </h2>
            <div class="card" style="min-height: 40rem">
               <div class="image-wrap">
                  <img src="/static/images/bg_3.jpg" alt="Round Image" class="rounded img-fluid image image-2 image-full">
                  
                </div>
              <div class="card-body text-center pb-5">
                <h5 class="card-title">价格:<?php echo htmlentities($cat_v['price']); ?></h5>
                <p class="card-text" > 样品：<?php echo htmlentities($cat_v['simple']); ?><br><?php echo htmlentities($cat_v['describe']); ?></p>
                <a href="#" class="btn btn-primary">更 多 内 容</a>
              </div>
            </div>
          </div>
<?php endforeach; endif; else: echo "" ;endif; ?>
  

         

         
        </div>
    </section>
<!-- instru -->
  <section class="ftco-section ftco-section-2 bg-light" id="cards">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading-section mb-4 pb-md-3">
              主 要 仪 器 设 备
            </h2>
          </div>
        </div>
        <div class="row">
          <?php if(is_array($yiqi) || $yiqi instanceof \think\Collection || $yiqi instanceof \think\Paginator): $i = 0; $__LIST__ = $yiqi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$yiqi_v): $mod = ($i % 2 );++$i;?>
            <div class="col-md-4">
            <h2 class="heading-section mb-4 pb-md-3">
              <small><?php echo htmlentities($yiqi_v['name']); ?></small>
            </h2>
            <div class="card text-center"style="min-height: 40rem">
              <div class="card-img">
                <div class="image-wrap">
                  <img src="/static/images/bg_3.jpg" alt="Round Image" class="rounded img-fluid image image-2 image-full">
                  
                </div>
              </div>
              <div class="card-body pb-5">
                <h5 class="card-title mb-0 text-success">型号：<?php echo htmlentities($yiqi_v['model']); ?></h5>
                <span class="position d-block mb-4">产地：<?php echo htmlentities($yiqi_v['place']); ?></span>
                <p class="card-text"><?php echo htmlentities($yiqi_v['describe']); ?></p>
                <a href="#" class="btn btn-success">更多内容</a>
              </div>
            </div>
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
   

         

        


        </div>
      </div>
    </section>

       <div>
          <footer class="ftco-section ftco-section-2">
          <div class="col-md-12 text-center">
              <p class="mb-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());

                </script> All rights reserved |蜀ICP备19029754号| 由 <a href="https://colorlib.com" target="_blank">GeoTVP地质软件开发组</a>提供支持<i class="icon-heart" aria-hidden="true"></i>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
           </footer>
            </div>

        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
          
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