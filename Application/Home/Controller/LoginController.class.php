<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function login()
    {
        $loginData = I('post.');

        if(empty($loginData)) {
            $this->display();die;
        }

        $loginData['password'] = md5($loginData['password']);

        $result = M('user')->where(['name' => $loginData['username'], 'password' => $loginData['password']])->find();
        if ($result) {
//            echo "<pre>";
            unset($result['password']);
            cookie('login_auth', $loginData, 3600);

            $this->redirect('Index/index');
        } else {

            $this->error('账号或密码输入错误！', 'Login/login');

        }

    }

}