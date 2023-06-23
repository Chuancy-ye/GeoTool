<?php /*a:6:{s:53:"D:\phpstudy_pro\WWW\tp\app\user\view\index\index.html";i:1615357642;s:55:"D:\phpstudy_pro\WWW\tp\app\user\view\public\header.html";i:1615312310;s:53:"D:\phpstudy_pro\WWW\tp\app\user\view\public\menu.html";i:1615324581;s:54:"D:\phpstudy_pro\WWW\tp\app\user\view\public\uinfo.html";i:1615324769;s:53:"D:\phpstudy_pro\WWW\tp\app\user\view\public\note.html";i:1615313047;s:55:"D:\phpstudy_pro\WWW\tp\app\user\view\public\footer.html";i:1615018090;}*/ ?>
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

        .content span{background: #f44336;margin-left: 30px;padding: 10px;color:#ffffff;}
        .content div{border-bottom: solid 2px #f44336;margin-top: 8px;}
        .content button{float: right;margin-top: -5px;background: #f44336;}
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
         <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
    <!-----------start----------->
    <body>
     
        <div class="px-0 bg-info navbar-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar px-0 navbar-expand-lg navbar-light">
                            
                            <a class="navbar-brand" href="/index.php/user">
                                <?php echo htmlentities($title); ?>
                            </a>

                            <div class="collapse navbar-collapse" id="navbarsExample06">
                                <ul class="navbar-nav ml-auto">

                                    <li class="nav-item d-flex ">
                                        <a class="nav-link d-flex align-items-center icon" href="/index.php">
                                            
                                                <span>|</span>&nbsp;&nbsp;
                                            <i class="ion-ios-home">
                                            </i>&nbsp;回到主页&nbsp;&nbsp;<span>|</span>
                                            
                                        </a>
                                    </li>
                                  
                                          
                                    <li class="dropdown nav-item d-flex">
                                        <a class="dropdown-toggle nav-link d-flex align-items-center icon" data-toggle="dropdown" href="#">
                                                <span>|</span>&nbsp;欢迎！
                                            
                                            <i class="ion-ios-contact">
                                            </i></span>&nbsp;<?php if(empty($info['name'])): ?><?php echo htmlentities($info['account']); else: ?><?php echo htmlentities($info['name']); ?><?php endif; ?></span>&nbsp;<span>|</span>
                                            <span class="d-lg-none ml-2">
                                                Settings
                                            </span>
                                            
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                             <h6 class="dropdown-header">
                                            <a class="dropdown-item"  data-toggle="tab" href="#menu2">
                                                【<?php if(empty($info['name'])): ?><?php echo htmlentities($info['account']); else: ?><?php echo htmlentities($info['name']); ?><?php endif; ?>】的主页
                                            </a>  
                                           </h6>
                                            <h6 class="dropdown-header">
                                              <a class="dropdown-item" href="/index.php/login/index/logout">
                                             退 出 登 陆
                                            </a>
                                            </h6>
                                             <h6 class="dropdown-header">
                                            <a class="dropdown-item"  data-toggle="tab" href="#home2">
                                                反 馈 信 息
                                            </a></h6>
                                           
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
<section class="ftco-section ftco-section-2 bg-light" id="navigationTabs" style="min-height: 40rem">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-md-0">
                <div class="tabulation">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block">
                        <li class="nav-item">
                            <a class="nav-link active py-3" data-toggle="tab" href="#home" >
                                <span class="ion-ios-copy mr-2">
                                </span>
                                订单信息
                            </a>
                        </li>
                        <!--     <li class="nav-item">
                                    <a class="nav-link py-3  " data-toggle="tab" href="#menu1">
                                        <span class="ion-ios-document mr-2">
                                        </span>
                                        创建订单
                                    </a>
                                </li> -->
                        <li class="nav-item">
                            <a class="nav-link py-3 mx-md-3 " data-toggle="tab" href="#menu2" style="background:  #03A9F4;">
                                <span class="ion-ios-person mr-2">
                                </span>
                                个人信息
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content rounded mt-md-3">
                        <div class="tab-pane container p-4 active" id="home">
                            <div class="content">
                                <span>
                                    订单列表
                                </span>
                                <button class="layui-btn layui-btn-sm" onclick="uadd()">
                                    点击下单
                                </button>
                                <div>
                                </div>
                            </div>
                            <table class="layui-table">
                                <thead>
                                    <tr>
                                        <th>
                                            订单号
                                        </th>
                                        <th>
                                            项目
                                        </th>
                                        <th>
                                            实验时间
                                        </th>
                                        <th>
                                            状态
                                        </th>
                                        <th>
                                            操作
                                        </th>
                                    </tr>
                                </thead>
                                 
                                <?php if(is_array($dingdan) || $dingdan instanceof \think\Collection || $dingdan instanceof \think\Paginator): $i = 0; $__LIST__ = $dingdan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dingdan_v): $mod = ($i % 2 );++$i;?>
                               
                           <tbody>
                                  <?php if(empty($dingdan_v['id'])): ?>
                                <div>还没有订单</div>
                                
                            <?php else: ?>
                                    <tr>
                                        <td>
                        <?php echo htmlentities($dingdan_v['id']); ?>
                                        </td>
                                        <td>
                        <?php if($dingdan_v['cat']==0): ?>未选择                                  
                        <?php elseif($dingdan_v['cat']==1): ?>场发射电镜
                        <?php elseif($dingdan_v['cat']==2): ?>钨丝灯电镜
                        <?php elseif($dingdan_v['cat']==3): ?>LA-ICPMS定年
                        <?php elseif($dingdan_v['cat']==4): ?>全岩主微量
                        <?php elseif($dingdan_v['cat']==5): ?>CL阴极发光
                        <?php elseif($dingdan_v['cat']==6): ?>EDS定量分析
                         <?php elseif($dingdan_v['cat']==7): ?>原位主微量
                        <?php else: ?>错误<?php endif; ?>
                                        </td>
                                        <td>
                        <?php echo htmlentities(date('Y-m-d H:i',!is_numeric($dingdan_v['start_time'])? strtotime($dingdan_v['start_time']) : $dingdan_v['start_time'])); ?>
                                        </td>
                                        <td>
                        <?php if($dingdan_v['status']==0): ?>已关闭
                        <?php elseif($dingdan_v['status']==1): ?>未支付
                        <?php elseif($dingdan_v['status']==2): ?>已支付
                        <?php elseif($dingdan_v['status']==3): ?>在实验
                        <?php elseif($dingdan_v['status']==4): ?>已完成
                         <?php elseif($dingdan_v['status']==5): ?>已联系
                        <?php else: ?>
                            错误，联系开发者
                        <?php endif; ?>
                                        </td>
                                        <td><?php if($dingdan_v['status']==1): ?>
                                            <button class="layui-btn layui-btn-xs" onclick="uedit(<?php echo htmlentities($dingdan_v['id']); ?>)" style="background: #f44336">
                                                编辑
                                            </button><?php else: ?>
                                            <button class="layui-btn layui-btn-xs" onclick="ulook(<?php echo htmlentities($dingdan_v['id']); ?>)" style="background: #f44336">
                                                查看
                                            </button><?php endif; ?>
                                        </td>
                         
                                    </tr><?php endif; ?>
                                </tbody>
                        
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </table>

                        </div>
                        
 <div class="tab-pane container p-4 fade" id="menu2">
                   <div class="content" >
                                <span style="background:  #03A9F4;">
                                    个人信息
                                </span>
                                <button class="layui-btn layui-btn-sm" onclick="uinfoe(<?php echo htmlentities($info['uid']); ?>)" style="background:  #03A9F4;">
                                    点击修改
                                </button>
                                <div style="border-bottom: solid 2px  #03A9F4;">
                                </div>
                            </div>
                 <br>
                            <form class="layui-form">
        <input type="hidden" name="uid" value="<?php echo htmlentities($info['uid']); ?>">
        <div class="layui-form-item">
             <label class="layui-form-label">
            账号：
        </label>
        <div class="layui-input-inline" style="width: 7rem">
            <input class="layui-input" name="account" style="border:0px;" readonly='readonly' type="text" value="<?php echo htmlentities($info['account']); ?>">
            </input>
        </div>
            <label class="layui-form-label">姓名：</label>
            <div class="layui-input-inline"style="width: 8rem">
                <input type="text" class="layui-input" name="name"style="border:0px;" readonly='readonly' value="<?php echo htmlentities($info['name']); ?>">
            </div>
            
        </div>
        
   
      
      
        <div class="layui-form-item">
            <label class="layui-form-label">电话：</label>
            <div class="layui-input-inline" style="width: 7rem">
                <input type="text" class="layui-input" name="phone" style="border:0px;" readonly='readonly'value="<?php echo htmlentities($info['phone']); ?>">
            </div>
            <label class="layui-form-label">邮箱：</label>
            <div class="layui-input-inline" style="width: 10rem">
                <input type="text" class="layui-input" name="email"style="border:0px;" readonly='readonly' value="<?php echo htmlentities($info['email']); ?>">
            </div>

        </div>
  
                <div class="layui-form-item">
            <label class="layui-form-label">单位：</label>
            <div class="layui-input-inline" style="width: 7rem">
                <input type="text" class="layui-input" name="workplace" style="border:0px;" readonly='readonly'value="<?php echo htmlentities($info['workplace']); ?>">
            </div>
            <label class="layui-form-label">职位：</label>
            <div class="layui-input-inline"style="width: 8rem">
                    <input type="text" class="layui-input" name="workplace" style="border:0px;" readonly='readonly'value="<?php if($info['status']==1): ?>老师<?php elseif($info['status']==2): ?>学生<?php elseif($info['status']==404): ?>已删除<?php else: ?>未定义<?php endif; ?>">
              
            </div>
        </div>
    <div class="layui-form-item">
        <label class="layui-form-label" style="width: 8rem">默认寄回地址：</label>
         <div class="layui-input-inline" style="width: 17.8rem">
                <input type="text" class="layui-input" name="place" disabled="disabled" style="border:0px;" value="<?php echo htmlentities($info['place']); ?>">
            </div>
    </div>
    

    </form>

   <!--  <div class="layui-form-item"style="margin-top: 2rem; margin-left: 6rem">
        <div class="layui-input-block">
            <button class="layui-btn" onclick="save()"style="background:  #03A9F4;">保存</button>
        </div>
    </div> -->
   
                        </div>


                        <script type="text/javascript">
        layui.use(['layer','form'],function(){
            form = layui.form;
            layer = layui.layer;
            $ = layui.jquery;
        });
        // function save(){
        //     $.post('/index.php/user/index/uinfo',$('form').serialize(),function(res){
        //         if(res.code>0){
        //             layer.alert(res.msg,{icon:2});
        //         }else{
        //             layer.msg(res.msg);
        //             setTimeout(function(){parent.window.location.reload();},1000);
        //         }
        //     },'json');
        // }

         function uinfoe(id){
        layer.open({
            type: 2,
            title: '编辑',
            shade: 0.3,
            area: ['520px', '500px'],
            content: '/index.php/user/index/uinfoe?uid='+id
        });
    }
    </script>


                    </div>
                </div>
            </div>
            <script type="text/javascript">
    function uadd(){
        layer.open({
            type: 2,
            title: '预约表单',
            shade: 0.3,
            area: ['580px', '500px'],
            content: '/index.php/user/index/uadd'
        });
    }
    function uedit(id){
        layer.open({
            type: 2,
            title: '修改订单',
            shade: 0.3,
            area: ['500px', '500px'],
            content: '/index.php/user/index/uedit?id='+id
        });
    }
    function ulook(id){
        layer.open({
            type: 2,
            title: '查看订单',
            shade: 0.3,
            area: ['500px', '500px'],
            content: '/index.php/user/index/ulook?id='+id
        });
    }
    function del(id){
        layer.confirm('确定要删除吗？', {
            icon:3,
            btn: ['确定','取消']
        }, function(){
            $.post('/index.php/index/del',{'id':id},function(res){
                if(res.code>0){
                    layer.alert(res.msg,{icon:2});
                }else{
                    layer.msg(res.msg);
                    setTimeout(function(){window.location.reload();},1000);
                }
            },'json');
        });
    }
            </script>
                         <!-- right -->
                    <div class="col-md-6">
                        <div class="tabulation tabulation2">
                            <div class="d-flex tabs border border-left-0 border-right-0 border-top-0 justify-content-center">
                                <div class="d-inline-block">
                                    <ul class="nav nav-tabs border-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home1">
                                                预约日历
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#home2">
                                                留言反馈
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content border-0">
                                <div class="tab-pane container p-4 active text-center" id="home1">
                                    <p>
                                       欢迎使用本平台！</p>
                                    
<div id="calendar">
      <div class="yearMon"></div>
      <div class="date"></div>
      <div class="week"></div>
</div>
                                     
                                        <label for="phone">
                        服务电话：18570771803/18570072232
                        </label>
                        <p>地址：湖南省长沙市岳麓区麓山南路中南大学北小门云中科技旁</p>
                                      
                                 
                                </div>
                                <div class="tab-pane container p-4 fade text-center" style="height: 20rem" id="home2">
                                 

     <div class="column">
                    <form action="">
                       
                        <label for="phone">
                            电话*
                        </label>
                        <input id="phone" name="phone" placeholder="您的联系电话.." type="text">
                        </input>
                        <p>
                        <label for="subject">
                            留言*
                        </label>
                        <textarea id="subject" name="subject" style="height:100px">
                        </textarea>
                    </p>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" style="background: #f44336" onclick="myFunction()" type="button">
                                    提  交
                                </button>
                            </div>
                        </div>
                        <script>
                            function myFunction(){
    alert("我们将很快与您联系！");
}
                        </script>
                    </form>
                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<style type="text/css">
*{
    margin: 0;
    padding: 0;
}
body{
    /*background-color: write;*/
}
#calendar{
    background-color: #fff;
    width: 200px;
    height: 190px;
    border-radius: 10px;
    overflow: hidden;
    margin: 70px auto;
    text-align: center;
}
#calendar .yearMon{
    background-color: #ddd;
    padding: 5px 0;
}
#calendar .date{
    color: #0099FF;
    font-size: 96px;
    font-weight: bold;
}
</style>
<script type="text/javascript">
    $(function(){
    // 获取时间
    var nowDate = new Date();     
    var year = nowDate.getFullYear();    
    var month = nowDate.getMonth() + 1 < 10 ? "0" + (nowDate.getMonth() + 1) : nowDate.getMonth() + 1;    
    var date = nowDate.getDate() < 10 ? "0" + nowDate.getDate() : nowDate.getDate();
    var week = "星期" + "日一二三四五六".split(/(?!\b)/)[nowDate.getDay()];
    // 添加文本内容到相应的div
    $(".yearMon").text(year+"年"+month+"月");
    $(".date").text(date);
    $(".week").text(week);
});

</script>       
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



        </div>
    </div>
</section>