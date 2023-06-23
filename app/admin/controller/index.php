<?php
namespace app\admin\controller;
use think\facade\Db;
use think\facade\Session;
use app\BaseController;
use think\facade\view;
use think\facade\Request;
class   index extends BaseController
{
    
    public function index()
    {   
    Session_start();
        
        if(!Session('id')){
            //header('location:/index.php/login');
            redirect('http://sem.com/index.php/admin/index/admins')->send();
        }
        $title = '赛目科技';
      
        $left = Db::table('shop_menu')->where('fid',0)->select();
        $left = $left ->toArray();
        foreach ($left as &$v ) {
            $son = Db::table('shop_menu')->where('fid',$v['id'])->select();
            $v['lists'] = $son->toArray();

        }
        # 右侧列表
        
        $login = Session('name');
        $right =Db::table('shop_goods')->select();
        
        View::assign([
            'title'  => $title,
            'left'=>$left,
            'login'=>$login,
            'right'=>$right
            
            
            
        ]);
        return View::fetch();
    }
    public function admins()
        {
       
            return View::fetch();  
        }
  public function add(){
 
        if(Request::method() == 'POST'){
           
            $all = Request::param();
            $all['start_time'] = strtotime($all['start_time']);
            $all['add_time'] = time();
            $insert = Db::table('shop_goods')->insert($all);
            if($insert){
                echo json_encode(['code'=>0,'msg'=>'添加成功']);
                exit;
            }else{
                echo json_encode(['code'=>1,'msg'=>'添加失败']);
                exit;
            }
        }else{
            $nowtime = date("Y/m/d");
            $cat = Db::table('shop_cat')->where('status',1)->select();
            View::assign([
                'cat' => $cat,
                'nowtime'=>$nowtime
            ]);
            return View::fetch();
        }
    }

    public function edit(){
        
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
                'cat' => $cat,
                
            ]);
            return View::fetch();
        }
    }
    public function del(){
        $id = Request::param('id');
        $delete = Db::table('shop_goods')->where('id',$id)->delete();
       
        if($delete){
            echo json_encode(['code'=>0,'msg'=>'删除成功']);
            exit;
        }else{
            echo json_encode(['code'=>1,'msg'=>'删除失败']);
            exit;
        }
    }
    
}