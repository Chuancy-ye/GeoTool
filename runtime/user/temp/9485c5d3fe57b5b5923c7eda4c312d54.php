<?php /*a:1:{s:54:"D:\phpstudy_pro\WWW\tp\app\user\view\index\uinfoe.html";i:1615308283;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
    <script type="text/javascript" src="/static/layui/layui.js"></script>
</head>
<body style="padding:10px;">




                            <form class="layui-form">
        <input type="hidden" name="uid" value="<?php echo htmlentities($info['uid']); ?>">
        <div class="layui-form-item">
             <label class="layui-form-label">
            账号
        </label>
        <div class="layui-input-inline" style="width: 7rem">
            <input class="layui-input" name="account" style="border:0px;" readonly='readonly' type="text" value="<?php echo htmlentities($info['account']); ?>">
            </input>
        </div>
            <label class="layui-form-label">姓名</label>
            <div class="layui-input-inline"style="width: 8rem">
                <input type="text" class="layui-input" name="name" value="<?php echo htmlentities($info['name']); ?>">
            </div>
            
        </div>
        
   
      
      
        <div class="layui-form-item">
            <label class="layui-form-label">电话</label>
            <div class="layui-input-inline" style="width: 7rem">
                <input type="text" class="layui-input" name="phone" value="<?php echo htmlentities($info['phone']); ?>">
            </div>
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-inline" style="width: 8rem">
                <input type="text" class="layui-input" name="email" value="<?php echo htmlentities($info['email']); ?>">
            </div>

        </div>
  
                <div class="layui-form-item">
            <label class="layui-form-label">单位</label>
            <div class="layui-input-inline" style="width: 7rem">
                <input type="text" class="layui-input" name="workplace" value="<?php echo htmlentities($info['workplace']); ?>">
            </div>
            <label class="layui-form-label">职位</label>
            <div class="layui-input-inline"style="width: 8rem">

                <select name="status">

                    <option value="2" selected>学生</option>
                    <option value="1" >老师</option>
                  
                </select>
            </div>
        </div>
    <div class="layui-form-item">
        <label class="layui-form-label" style="width: 8rem">默认寄回地址</label>
         <div class="layui-input-inline" style="width: 17.8rem">
                <input type="text" class="layui-input" name="place" value="<?php echo htmlentities($info['place']); ?>">
            </div>
    </div>
    

    </form>

    <div class="layui-form-item"style="margin-top: 2rem; margin-left: 6rem">
        <div class="layui-input-block">
            <button class="layui-btn" onclick="save()"style="background:  #03A9F4;">保存</button>
        </div>
    </div>
   
                        </div>


                        <script type="text/javascript">
        layui.use(['layer','form'],function(){
            form = layui.form;
            layer = layui.layer;
            $ = layui.jquery;
        });
        function save(){
            $.post('/index.php/user/index/uinfoe',$('form').serialize(),function(res){
                if(res.code>0){
                    layer.alert(res.msg,{icon:2});
                }else{
                    layer.msg(res.msg);
                    setTimeout(function(){parent.window.location.reload();},1000);
                }
            },'json');
        }
    </script>


</body>
</html>