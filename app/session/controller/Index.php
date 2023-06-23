<?php
namespace app\session\controller;

use app\BaseController;
use think\facade\view;
class   Index extends BaseController
{
    
    public function index()
    {
        Session_start();
        
        if(!Session('uid')){
            //header('location:/index.php/login');
            redirect('http://sem.com/index.php')->send();
        }
        
        $user = session('uname');
      
        view::assign([
                       'user'=>$user,]);
        return View::fetch(); 
    }
      public function users()
    {
        Session_start();
        
        if(!Session('uid')){
            
            redirect('http://sem.com/index.php/login')->send();
        }
        $title ='赛目科技订单';
        $user = session('name');
        view::assign(['title'=>$title,
                       'user'=>$user]);
            
        
        return View::fetch();  
    }
   public function intro()
    {
        
        $user = session('name');
        view::assign([
                       'user'=>$user]);
   
        return View::fetch();  
    }

  }


