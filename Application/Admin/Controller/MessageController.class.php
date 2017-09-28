<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController {
	public function selectmsg(){
        $menber = M('message');
        if($_GET['name']){
            $map['f_user_phone']=array('like','%'.$_GET['name'].'%');
            $users= $menber->where($map)->select();
        }else{
            $users= $menber->select();
        }
        $this->assign('users',$users);
        $this->display();
    }


//    删除用户
    public function deletemsg(){
        $menber = M('message');
        $result = $menber->where(array('id'=>$_GET['id']))->delete();
        if($result){
            echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Message/select';</script>";exit();
        }else{
            echo "<script>alert('更新失败');window.location.href = '".__ROOT__."/index.php/Admin/Message/select';</script>";exit();
        }
    }



}



 ?>