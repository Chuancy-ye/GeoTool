<?php /*a:1:{s:53:"D:\phpstudy_pro\WWW\tp\app\user\view\index\uedit.html";i:1615315811;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/static/layui/css/layui.css">
	<script type="text/javascript" src="/static/layui/layui.js"></script>
</head>
<body style="padding:10px;">
	<form class="layui-form">
		<input type="hidden" name="id" value="<?php echo htmlentities($shop['id']); ?>">
		<div class="layui-form-item">
			<label class="layui-form-label">姓名</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="title" value="<?php echo htmlentities($shop['title']); ?>">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">电话</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="phone" value="<?php echo htmlentities($shop['phone']); ?>">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">项目</label>
			<div class="layui-input-inline">
				<select name="cat">
					<option value=0 <?php if($shop['cat']==0): ?> selected <?php endif; ?>></option>
					<?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cat_v): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo htmlentities($cat_v['id']); ?>" <?php if($shop['cat']==$cat_v['id']): ?> selected <?php endif; ?>><?php echo htmlentities($cat_v['name']); ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">费用/时</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="price" value="<?php echo htmlentities($shop['price']); ?>">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">实验时长</label>
			<div class="layui-input-inline">
				<input type="text" class="layui-input" name="discount" value="<?php echo htmlentities($shop['discount']); ?>">
			</div>
		</div>
		<div class="layui-form-item">
			<label class="layui-form-label">开始时间</label>
			<div class="layui-input-inline">
				<input type="datetime-local" class="layui-input" name="start_time" value="<?php echo htmlentities(date('Y-m-d H:i',!is_numeric($shop['start_time'])? strtotime($shop['start_time']) : $shop['start_time'])); ?>">
			</div>
		</div>
	    <div class="layui-form-item">
        <label class="layui-form-label" style="width: 4rem">寄回地址</label>
         <div class="layui-input-inline" style="width: 20rem">
                <input type="text" class="layui-input" name="place" value="<?php echo htmlentities($shop['place']); ?>">
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
			$.post('/index.php/admin/index/edit',$('form').serialize(),function(res){
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