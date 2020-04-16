<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {

    public function __construct()
    {
        parent::__construct();

        $loginAuth = cookie('login_auth');

        if (empty($loginAuth)) {
            $this->display('Login/login');die;
        }

        cookie('login_auth', $loginAuth, 3600);

//        $userInfo = M('user')->select();
//
//        $this->assign('userinfo', $userInfo);

        $adminInfo = cookie('login_auth');

        $this->assign('username', $adminInfo['username']);

    }


}