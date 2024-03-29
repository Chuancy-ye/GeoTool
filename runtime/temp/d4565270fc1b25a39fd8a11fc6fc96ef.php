<?php /*a:1:{s:44:"D:\phpstudy_pro\WWW\tp\view\index\index.html";i:1607886958;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>列表页</title>
    <link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
    <script type="text/javascript" src="/static/layui/layui.js"></script>
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
</head>
<body>
    <div class="header">
        <span class="title"><span style="font-size: 20px;"><?php echo htmlentities($title); ?></span>--后台管理系统</span>
        <span class="userinfo"><?php echo htmlentities($login); ?><span><a href="javascript:;">退出</a></span></span>
    </div>
    <div class="menu" id="menu">
        <div class="layui-collapse" lay-accordion>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">商城管理</h2>
                <div class="layui-colla-content layui-show">
                    <ul class="layui-nav layui-nav-tree" lay-filter="test">
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                    </ul>
                </div>
            </div>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">商城管理</h2>
                <div class="layui-colla-content">
                    <ul class="layui-nav layui-nav-tree" lay-filter="test">
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                    </ul>
                </div>
            </div>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">商城管理</h2>
                <div class="layui-colla-content">
                    <ul class="layui-nav layui-nav-tree" lay-filter="test">
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                        <li class="layui-nav-item"><a href="list.html">商品列表</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main" style="padding:10px;">
        <div class="content">
            <span>商品列表</span>
            <div></div>
        </div>
        <table class="layui-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品标题</th>
                    <th>分类</th>
                    <th>价格</th>
                    <th>状态</th>
                    <th>添加时间</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>熙世界2019秋冬新款长袖杏色上衣连帽宽松刺绣文艺落肩袖加厚卫衣BF风</td>
                    <td>女装</td>
                    <td>189</td>
                    <td>开启</td>
                    <td>2019-12-12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>秋水伊人双面呢冬装2019年新款女装气质西装领撞色羊毛大衣外套女</td>
                    <td>女装</td>
                    <td>699</td>
                    <td>开启</td>
                    <td>2019-12-12</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>秋水伊人双面呢冬装2019年新款女装气质西装领撞色羊毛大衣外套女</td>
                    <td>女装</td>
                    <td>699</td>
                    <td>开启</td>
                    <td>2019-12-12</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>秋水伊人双面呢冬装2019年新款女装气质西装领撞色羊毛大衣外套女</td>
                    <td>女装</td>
                    <td>699</td>
                    <td>开启</td>
                    <td>2019-12-12</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>秋水伊人双面呢冬装2019年新款女装气质西装领撞色羊毛大衣外套女</td>
                    <td>女装</td>
                    <td>699</td>
                    <td>关闭</td>
                    <td>2019-12-12</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>秋水伊人双面呢冬装2019年新款女装气质西装领撞色羊毛大衣外套女</td>
                    <td>女装</td>
                    <td>699</td>
                    <td>开启</td>
                    <td>2019-12-12</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
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