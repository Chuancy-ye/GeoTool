<?php /*a:1:{s:52:"D:\phpstudy_pro\WWW\tp\app\admin\view\index\add.html";i:1615147146;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
	<script type="text/javascript" src="/static/layui/layui.js"></script>
</head>
<body style="padding:10px;">
	<form class="layui-form">
		<div class="layui-form-item">
			<label class="layui-form-label">姓名</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="title" value="">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">电话</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="phone" value="">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">项目</label>
			<div class="layui-input-inline">
				<select name="cat">
					<option value=0 selected></option>
					<?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat_v): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo htmlentities($cat_v['id']); ?>"><?php echo htmlentities($cat_v['name']); ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">费用/时</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="price" value="">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">时长</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="discount" value="1">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">开始时间</label>
			<div class="layui-input-inline">
				<input type="datetime-local" class="layui-input" name="start_time" value="<?php echo htmlentities($nowtime); ?>">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">状态</label>
			<div class="layui-input-inline">
				<select name="status">
					<option value="1" selected>未支付</option>
					<option value="0">订单关闭</option>
					<option value="2" >已支付</option>
					<option value="3" >在实验</option>
					<option value="4" >已完成</option>
				</select>
			</div>
		</div>
	</form>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" onclick="save()">保存</button>
		</div>
	</div>
	<script type="text/javascript">
		layui.use(['layer','form'],function(){
			form = layui.form;
			layer = layui.layer;
			$ = layui.jquery;
		});
		function save(){
			$.post('/index.php/admin/index/add',$('form').serialize(),function(res){
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