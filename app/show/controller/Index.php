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
        
        $user = session('name');
        view::assign([
                       'user'=>$user]);
        return View::fetch(); 
    }
     

  }


