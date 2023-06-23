<?php /*a:4:{s:54:"D:\phpstudy_pro\WWW\tp\app\admin\view\index\index.html";i:1615395174;s:54:"D:\phpstudy_pro\WWW\tp\app\admin\view\public\head.html";i:1615140352;s:54:"D:\phpstudy_pro\WWW\tp\app\admin\view\public\left.html";i:1615396199;s:56:"D:\phpstudy_pro\WWW\tp\app\admin\view\public\bottom.html";i:1576662407;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlentities($title); ?>--后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <style type="text/css">
        .header{width:100%;height: 50px;line-height: 50px;background: #2e6da4;color:#ffffff;}
        .title{margin-left: 20px;font-size: 20px;}
        .userinfo{float: right;margin-right: 10px;}
        .userinfo a{color:#ffffff;}
        .menu{width: 200px;background:#333744;position:absolute;}
        .main{position: absolute;left:200px;right:0px;}

        .layui-collapse{border:none;}
        .layui-colla-item{border-top:none;}
        .layui-colla-title{background:#42485b;color:#ffffff;}
        .layui-colla-content{border-top:none;padding:0px;}

        .content span{background: #009688;margin-left: 30px;padding: 10px;color:#ffffff;}
        .content div{border-bottom: solid 2px #009688;margin-top: 8px;}
        .content button{float: right;margin-top: -5px;}

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            z-index: 2;
            color: #23527c;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #337ab7;
            border-color: #337ab7;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="header">
        <span class="title"><span style="font-size: 20px;"><?php echo htmlentities($title); ?></span>--后台管理系统</span>
        <span class="userinfo">|&nbsp;管理员：<?php echo htmlentities($login); ?>&nbsp;|&nbsp;&nbsp;<span><a href="/index.php/login/index/alogout">退出系统 &nbsp;&nbsp;&nbsp;</a></span></span>
    </div>
<div class="menu" id="menu">
    <div class="layui-collapse" lay-accordion>
        <?php foreach($left as $k=>$left_v): ?>
            <div class="layui-colla-item">
                <h2 class="layui-colla-title"><?php echo htmlentities($left_v['title']); ?></h2>
                <div class="layui-colla-content <?php if($k==0): ?>layui-show<?php endif; ?>">
                    <ul class="layui-nav layui-nav-tree">
                        <?php foreach($left_v['lists'] as $lists_v): ?>
                            <li class="layui-nav-item"><a href="#}"><?php echo htmlentities($lists_v['title']); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="main" style="padding:10px;" id="user">ssssssssssssssss</div>
<div class="main" style="padding:10px;" id="main">
    <div class="content">
        <span>订单列表</span>
        <button class="layui-btn layui-btn-sm" onclick="add()">添加</button>
        <div></div>
        
    </div>
    <form class="layui-form">
        <div class="layui-form-item" style="margin-top:10px;">
            <div class="layui-input-inline">
                
            </div>
            <button class="layui-btn layui-btn-primary "><i class="layui-icon">&#xe615;</i>搜索</button>
        </div>
    </form>
    <table class="layui-table">
        <thead>
            <tr>
                <th>订单编号</th>
                <th>账号</th>
                <th>电话</th>
                <th>真实姓名</th>
                
                <th>项目</th>
                <th>费用/时</th>
                <th>实验时长</th>
                <th>总费用</th>
                <th>预约时间</th>
                <th>状态</th>
                <th>添加时间</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($right) || $right instanceof \think\Collection || $right instanceof \think\Paginator): $i = 0; $__LIST__ = $right;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$right_v): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($right_v['id']); ?></td>
                    <td><?php echo htmlentities($right_v['account']); ?></td>
                    <td><?php echo htmlentities($right_v['phone']); ?></td>
                    <td><?php echo htmlentities($right_v['title']); ?></td>
                     <td>
          <?php if($right_v['cat']==0): ?>未选择                                  
                        <?php elseif($right_v['cat']==1): ?>场发射电镜
                        <?php elseif($right_v['cat']==2): ?>钨丝灯电镜
                        <?php elseif($right_v['cat']==3): ?>LA-ICPMS定年
                        <?php elseif($right_v['cat']==4): ?>全岩主微量
                        <?php elseif($right_v['cat']==5): ?>CL阴极发光
                        <?php elseif($right_v['cat']==6): ?>EDS定量分析
                         <?php elseif($right_v['cat']==7): ?>原位主微量
                        <?php else: ?>错误<?php endif; ?>
</td>
                    <td><?php echo htmlentities($right_v['price']); ?>元/小时</td>
                    <td><?php echo htmlentities($right_v['discount']); ?>小时</td>
                    <td>
                        <?php if($right_v['discount']!=0): ?>
                            ￥<?php echo htmlentities($right_v['price']*($right_v['discount'])); else: ?>
                            ￥<?php echo htmlentities($right_v['price']); ?>
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlentities(date('Y-m-d H:i',!is_numeric($right_v['start_time'])? strtotime($right_v['start_time']) : $right_v['start_time'])); ?></td>
                    <td><?php if($right_v['status']==0): ?>已关闭
                        <?php elseif($right_v['status']==1): ?>未支付
                        <?php elseif($right_v['status']==2): ?>已支付
                        <?php elseif($right_v['status']==3): ?>在实验
                        <?php elseif($right_v['status']==4): ?>已完成
                        <?php else: ?>
                            错误，联系开发者
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($right_v['add_time'])? strtotime($right_v['add_time']) : $right_v['add_time'])); ?></td>
                    <td>
                        <button class="layui-btn layui-btn-xs" onclick="edit(<?php echo htmlentities($right_v['id']); ?>)">编辑</button>

                         <button class="layui-btn layui-btn-xs" style="color: red" onclick="del(<?php echo htmlentities($right_v['id']); ?>)">删除</button>
                        
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    
</div>
<script type="text/javascript">
    function add(){
        layer.open({
            type: 2,
            title: '添加',
            shade: 0.3,
            area: ['450px', '500px'],
            content: '/index.php/admin/index/add'
        });
    }
    function edit(id){
        layer.open({
            type: 2,
            title: '编辑',
            shade: 0.3,
            area: ['450px', '500px'],
            content: '/index.php/admin/index/edit?id='+id
        });
    }
    function del(id){
        layer.confirm('确定要删除吗？', {
            icon:3,
            btn: ['确定','取消']
        }, function(){
            $.post('/index.php/admin/index/del',{'id':id},function(res){
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
</body>
</html>
<script>
    layui.use(['element','layer','laypage','layedit'], function(){
        var element = layui.element;
        var laypage = layui.laypage;
        $ = layui.jquery;
        form = layui.form;
        layedit = layui.layedit;
        resetMenuHeight();
    });
    // 重新设置菜单容器高度
    function resetMenuHeight(){
        var height = document.documentElement.clientHeight - 50;
        $('#menu').height(height);
    }
</script>