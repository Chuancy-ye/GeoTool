<?php
namespace app\index\controller;
use think\facade\Db;
use app\BaseController;
use think\facade\view;
use think\facade\session;
class   Index extends BaseController
{
    
    public function index()
    {

        //判断是否登陆
        Session_start();
    
        if(Session('uid')){
            
            redirect('http://sem.com/index.php/session')->send();
        }
        $cat = Db::table('shop_show')->where('status','1')->select();
        view::assign([
          'cat'=>$cat]);
        return view::fetch();
        
        
    }
    
  public function show(){
    $cat = Db::table('shop_show')->where('status','1')->select();
    $yiqi=Db::table('shop_show')->where('status','2')->select();

    View::assign([
      'cat'=>$cat,
      'yiqi'=>$yiqi
    ]);
    return View::fetch(); 
  }
     
   public function intro()
    {
       
     if(Session('uid')){
    
            
            redirect('http://sem.com/index.php/session/index/intro')->send();
      }
      
        return View::fetch();  
    }

  }


