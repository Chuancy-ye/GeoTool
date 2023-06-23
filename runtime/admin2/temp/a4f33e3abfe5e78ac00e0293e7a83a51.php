<?php /*a:1:{s:55:"D:\phpstudy_pro\WWW\tp\app\admin2\view\index\index.html";i:1614618575;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            登录
        </title>
        <link href="/static/layui/css/layui.css" rel="stylesheet" type="text/css">
            <script src="/static/layui/layui.js" type="text/javascript">
            </script>
        </link>
    </head>
    <body style="background: #1E9FFF">
        <div style="position: absolute; left:50%;top:50%;width: 500px;margin-left: -250px;margin-top: -200px;">
            <div style="background: #ffffff;padding: 20px;border-radius: 4px;box-shadow: 5px 5px 20px #444444;">
                <form class="layui-form">
                    <div class="layui-form-item" style="color:gray;">
                        <h2>
                            
                        </h2>
                    </div>
                    <hr>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                用户名
                            </label>
                            <div class="layui-input-block">
                                <input class="layui-input" id="account" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">
                                密    码
                            </label>
                            <div class="layui-input-block">
                                <input class="layui-input" id="password" type="password">
                                </input>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" onclick="dologin()" type="button">
                                    登  录
                                </button>
                            </div>
                        </div>
                    </hr>
                </form>
            </div>
        </div>
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
            $.post('/index.php/login/index',{'account':account,'pwd':pwd},function(res){
                if(res.code>0){
                    layer.alert(res.msg,{icon:2});
                }else{
                    layer.msg(res.msg);
                    setTimeout(function(){window.location.href = '/index.php/index/index'},1000);
                }
            },'json');
        }
        </script>
    </body>
</html>
