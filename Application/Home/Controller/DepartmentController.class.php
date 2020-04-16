<?php
namespace Home\Controller;
use Think\Controller;
class DepartmentController extends BaseController {

    public $com_id;

    public $ho_id;

    public $room_id;

    public function __construct()
    {
        parent::__construct();

        $this->com_id  = null;
        $this->ho_id   = null;
        $this->room_id = null;

    }

    public function index()
    {
        $userInfo = M('xiaoqu')->select();

        $this->assign('userinfo', $userInfo);

        $this->display();
    }

    public function update()
    {
        $id = I('id');

        if($id) {
            $userInfo = M('Xiaoqu')->where(['id' => $id])->find();

            $this->assign('userinfo', $userInfo);
        }

        $this->display();die;

    }

    public function updateSave()
    {
        $userInfoSave = I('post.');

        if(empty($userInfoSave['id'])) {
            M('Xiaoqu')->add($userInfoSave);

            $this->redirect('Department/index');die;
        }

        $saveId       = $userInfoSave['id'];

        unset($userInfoSave['id']);

        $result = M('Xiaoqu')->where(['id' => $saveId])->save($userInfoSave);

        $this->redirect('Department/index');die;

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

    public function houseList()
    {
        $id = I('id');
        $homeList = M('House')->where(['com_id'=>$id])->select();

        $this->assign('house_list', $homeList);

        $this->display();

    }
    public function houseupdate()
    {
        $id = I('id');

        if(isset($id)) {
            $houseInfo = M('House')->where(['id' => $id])->find();

            $this->assign('house', $houseInfo);

        }

        $this->display();
    }

    public function houseUpdateSave()
    {

        $houseInfo = I('post.');

        if(isset($houseInfo['id']) && !empty($houseInfo['id'])) {
            $id = $houseInfo['id'];

            M('House')->where(['id' => $id])->save($houseInfo);

            $this->redirect('Department/houseList?id='.$houseInfo['com_id']);die;
        }

        $result = M('House')->add($houseInfo);

        $this->redirect('Department/houseList?id='.$houseInfo['com_id']);

    }

    public function HomeList()
    {
        $id = I('id');
        $homeList = M('Home')->where(['ho_id'=>$id])->select();

        $this->assign('home_list', $homeList);

        $this->display();

    }

    public function homeupdate()
    {

        $id = I('id');

        if(isset($id)) {
            $houseInfo = M('Home')->where(['id' => $id])->find();

            $this->assign('home', $houseInfo);

        }
        $this->display();
    }

    public function homeUpdateSave()
    {

        $houseInfo = I('post.');

        if(isset($houseInfo['id']) && !empty($houseInfo['id'])) {
            $id = $houseInfo['id'];

            M('Home')->where(['id' => $id])->save($houseInfo);

            $this->redirect('Department/HomeList?id='.$houseInfo['ho_id']);die;
        }
        unset($houseInfo['id']);
//        echo "<pre>";
//var_dump($houseInfo);die;
        $result = M('Home')->add($houseInfo);
//        echo M()->_sql();die;
        $this->redirect('Department/HomeList?id='.$houseInfo['ho_id']);die;
    }

    public function peopleList()
    {
        $comId  = I('com_id');
        $hoId   = I('ho_id');
        $roomId = I('room_id');

        $peopleList = M('User')->where(['com_id'=>$comId, 'ho_id' => $hoId, 'room_id' => $roomId])->select();

        $this->assign('peoplelist', $peopleList);

        $this->display();
    }
}