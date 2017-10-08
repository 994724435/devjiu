<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class MessageController extends CommonController {

    public function notice(){
        $condition['type'] = 3;
        $msg =M("message")->where($condition)->order('id DESC')->select();
        $this->assign('msg',$msg);
        $this->display();
    }

    public function letter(){
        $condition['to_user_id'] = session('uid');

        $msg =M("message")->where($condition)->select();
        $this->assign('msg',$msg);
        $this->display();
    }

    public function notice_detail(){
        $msg =M("message")->where(array('id'=>$_GET['id']))->select();
        M("message")->where(array('id'=>$_GET['id']))->save(array('state'=>2));
        $this->assign('msg',$msg[0]);
        $this->display();
    }

    public function letter_detail(){
        M("message")->where(array('id'=>$_GET['id']))->save(array('state'=>2));
        $msg =M("message")->where(array('id'=>$_GET['id']))->select();
        $this->assign('msg',$msg[0]);
        $this->display();
    }

    public function mailBox(){
        $this->display();
    }

    public function sendMsg(){

        if($_POST['content']){
            $menber = M("menber");
            $mine =$menber->where(array('uid'=>session('uid')))->find();
            if($_GET['commitid']){
                $data['commitid'] =$_GET['commitid'];
            }
            $data['f_user_name'] =$mine['name'];
            $data['f_user_phone'] =$mine['tel'];
            $data['f_user_id'] =$mine['uid'];
            $data['to_user_name'] ="admin";
            $data['message'] =$_POST['content'];

            M("message")->add($data);
            echo "<script>alert('发送成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/Message/mailBox';";
            echo "</script>";
            exit;
        }

        $this->display();
    }


}