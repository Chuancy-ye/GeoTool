<?php
namespace app\login\controller;

use think\facade\View;
use think\facade\Db;
use think\facade\Request;
use think\facade\Session;

class index {
   
	public function index(){
		
       
		if (Request::method() == 'POST'){
			$all = Request::param();
			$user =Db::table('shop_user')->where('account',$all['account'])->find();
			if(empty($user)){
				$user =Db::table('shop_user')->where('email',$all['account'])->find();
				if(empty($user)){
				echo json_encode(['code'=>1,'msg'=>'未找到用户']);
				exit();
			}
			}
			if(md5($all['pwd'])!= $user['password']){
				echo json_encode(['code'=>1,'msg'=>'密码错误']);
				exit();
			}
			session::set('uid',$user['uid']);
			session::set('uaccount',$user['account']);
			Session::set('uname',$user['name']);
			echo json_encode(['code'=>0,'msg'=>'登陆成功']);
			header("Refresh:0");
		}else{
			$title = '商城';
			View::assign([
            'title'=>$title
			]);
			return View::fetch();
		}
	}
	public function alogin(){
		
       
		if (Request::method() == 'POST'){
			$all = Request::param();
			$admin =Db::table('shop_admin')->where('account',$all['account'])->find();
			if(empty($admin)){
				echo json_encode(['code'=>1,'msg'=>'未找到管理员']);
				exit();
			}
			if(md5($all['pwd'])!= $admin['password']){
				echo json_encode(['code'=>1,'msg'=>'密码错误']);
				exit();
			}
			session::set('id',$admin['id']);
			session::set('account',$admin['account']);
			 Session::set('name',$admin['name']);
			echo json_encode(['code'=>0,'msg'=>'登陆成功']);
			header("Refresh:0");
		}else{
			$title = '商城';
			View::assign([
            'title'=>$title
			]);
			return View::fetch();
		}
	}
	public function logout(){
		session::set('uid',null);
		session::set('uaccount',null);
		session::set('uname',null);
		redirect('http://sem.com')->send();
		
	}
	public function alogout(){
		
		session::set('id',null);
		session::set('account',null);
		session::set('name',null);
		redirect('http://sem.com/index.php/admin/index/admins')->send();
		
	}


}