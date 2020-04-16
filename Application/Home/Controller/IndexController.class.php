<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {

    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        $this->display();
    }

    public function updateUser()
    {
        $id = I('id');

        if($id) {
            $userInfo = M('user')->where(['id' => $id])->find();

            $this->assign('userinfo', $userInfo);
        }

        $this->display();die;

    }

    public function updateUserSave()
    {
        $userInfoSave = I('post.');

        if(empty($userInfoSave['id'])) {
            $userInfoSave['password'] = md5( $userInfoSave['password']);
            M('user')->add($userInfoSave);

            $this->redirect('Index/user');die;
        }

        $saveId       = $userInfoSave['id'];

        unset($userInfoSave['id']);

        $result = M('user')->where(['id' => $saveId])->save($userInfoSave);

        $this->redirect('Index/user');die;

    }

    public function delUser()
    {
        $id = I('id');
        if(!$id) {
            $this->error('非法操作！');
        }

        $result = M('user')->where(['id' => $id])->delete();

        if($result) {
            $this->redirect('Index/user');
        }

    }

    public function user()
    {
        $userInfo = M('user')->select();

        $this->assign('userinfo', $userInfo);

        $this->display();
    }
}