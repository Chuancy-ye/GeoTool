<?php
namespace app\user\controller;
use think\facade\View;
use think\facade\Db;
use think\facade\Request;
use think\facade\Session;
use app\BaseController;
class   index extends BaseController
{
    
  
    public function index(){
        Session_start();
        
        if(!Session('uid')){
            
            redirect('http://sem.com/index.php#Login')->send();
        }

        $title ='赛目科技--预约系统';
        $user = session('uname');
        
        $account = session('uaccount');
        $nowtime = date("Y-m-d H:i");
        $dingdan = Db::table('shop_goods')->where('account',$account)->select();
        // 取info
        $info =Db::table('shop_user')->where('account',$account)->find();
        View::assign([
            'nowtime'=>$nowtime,
                'info'=>$info,
                'title'=>$title,
                'user'=>$user,
                'dingdan'=>$dingdan,
                'account'=>$account
            ]);
        
    	
	        return View::fetch();  
    }
    public function uadd(){
    	if(Request::method() == 'POST'){
         
    		$all = Request::param();
            $s_cat=$all['cat'];
            $price =Db::table('shop_cat')->where('id',$s_cat)->select();
           
            $price =$price[0]['price'];
            $all['price']=$price;

            $all['start_time'] = strtotime($all['start_time']);
    		$all['add_time'] = time();
	    	$insert = Db::table('shop_goods')->insert($all);
	    	if($insert){
	    		echo json_encode(['code'=>0,'msg'=>'预约成功，请尽快支付']);
                exit;
	    	}else{
	    		echo json_encode(['code'=>1,'msg'=>'下单失败']);
                exit;
	    	}
    	}else{
           
            $nowtime = date("Y/m/d");
	    	$cat = Db::table('shop_cat')->where('status',1)->select();

            $account =session('uaccount');
            $info =Db::table('shop_user')->where('account',$account)->find();
	    	View::assign([
                'info'=>$info,
	            'cat' => $cat,
                'nowtime'=>$nowtime,
                'account'=>$account
	        ]);
	        return View::fetch();
        }
    }
    // public function uinfo(){
            
    //         if(Request::method() == 'POST'){
    //         $all = Request::param();
    //         $update = Db::table('shop_user')->where('uid',$all['uid'])->update($all);
    //         if($update){
    //             echo json_encode(['code'=>0,'msg'=>'修改成功']);
    //             exit;
    //         }else{
    //             echo json_encode(['code'=>1,'msg'=>'修改失败']);
    //             exit;
    //         }
    //     }else{
    //         $id = Request::param('uid');
    //         $info = Db::table('shop_user')->where('uid',$id)->find();
            
    //         View::assign([
    //             'info' => $info,
               
    //         ]);
    //         return View::fetch();
    //     }
    //     }
        public function uinfoe(){
           
            if(Request::method() == 'POST'){
            $all = Request::param();
            $update = Db::table('shop_user')->where('uid',$all['uid'])->update($all);
            if($update){
                echo json_encode(['code'=>0,'msg'=>'修改成功']);
                exit;
            }else{
                echo json_encode(['code'=>1,'msg'=>'修改失败']);
                exit;
            }
        }else{
            $id = Request::param('uid');
            $info = Db::table('shop_user')->where('uid',$id)->find();
            
            View::assign([
                'info' => $info,
               
            ]);
            return View::fetch();
        }
        }
  
        public function uedit(){

            if(Request::method() == 'POST'){
            $all = Request::param();
            $all['start_time'] = strtotime($all['start_time']);
            $update = Db::table('shop_goods')->where('id',$all['id'])->update($all);
            if($update){
                echo json_encode(['code'=>0,'msg'=>'修改成功']);
                exit;
            }else{
                echo json_encode(['code'=>1,'msg'=>'修改失败']);
                exit;
            }
        }else{
            $id = Request::param('id');
            $shop = Db::table('shop_goods')->where('id',$id)->find();
            $cat = Db::table('shop_cat')->where('status',1)->select();
            View::assign([
                'shop' => $shop,
                'cat' => $cat
            ]);
            return View::fetch();
        }
    }
    public function ulook(){

            if(Request::method() == 'POST'){
            $all = Request::param();
            $all['start_time'] = strtotime($all['start_time']);
            $update = Db::table('shop_goods')->where('id',$all['id'])->update($all);
            if($update){
                echo json_encode(['code'=>0,'msg'=>'修改成功']);
                exit;
            }else{
                echo json_encode(['code'=>1,'msg'=>'修改失败']);
                exit;
            }
        }else{
            $id = Request::param('id');
            $shop = Db::table('shop_goods')->where('id',$id)->find();
            $cat = Db::table('shop_cat')->where('status',1)->select();
            View::assign([
                'shop' => $shop,
                'cat' => $cat
            ]);
            return View::fetch();
        }
    }

}