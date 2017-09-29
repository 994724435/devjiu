<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {
	public function selectmsg(){
        $menber = M('message');
        if($_GET['name']){
            $map['f_user_phone']=array('like','%'.$_GET['name'].'%');
            $users= $menber->where($map)->order('id DESC')->select();
        }else{
            $users= $menber->order('id DESC')->select();
        }
        $this->assign('users',$users);
        $this->display();
    }


//    删除信息
    public function deletemsg(){
        $menber = M('message');
        $result = $menber->where(array('id'=>$_GET['id']))->delete();
        if($result){
            echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
        }else{
            echo "<script>alert('删除失败');window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
        }
    }

    public function addmsg(){
        $message = M('message');
        if($_POST['phone'] && $_POST['message']){
            if($_POST['phone'] == 1){
                $data['f_user_name'] = $_SESSION['uname'];
                $data['f_user_phone'] ="admin";
                $data['f_user_id'] = 1;
                $data['to_user_name'] = "全员";
                $data['to_user_phone'] ="全员";
                $data['to_user_id'] = 0 ;
                $data['message'] = $_POST['message'];

                $data['type'] = 3;
                $data['addtime'] = date("Y-m-d H:i:s",time());
                $result = $message->add($data);
                if($result){
                    echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
                }else{
                    echo "<script>alert('发送失败');window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
                }
            }

            $userinfo =M('menber')->where(array('tel'=>$_POST['phone']))->select();
            if(!$userinfo[0]){
                echo "<script>alert('用户不存在');window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
            }

            $data['f_user_name'] = $_SESSION['uname'];
            $data['f_user_phone'] ="admin";
            $data['f_user_id'] = 1;
            $data['to_user_name'] = $userinfo[0]['name'];
            $data['to_user_phone'] =$userinfo[0]['tel'];
            $data['to_user_id'] = $userinfo[0]['uid'];
            $data['message'] = $_POST['message'];

            $data['type'] = 2;
            $data['addtime'] = date("Y-m-d H:i:s",time());
            $result = $message->add($data);
            if($result){
                echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
            }else{
                echo "<script>alert('发送失败');window.location.href = '".__ROOT__."/index.php/Admin/Message/selectmsg';</script>";exit();
            }
        }
        $users= M('menber')->select();
        $this->assign('users',$users);
        $this->display();
    }


}



 ?>