<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class UserController extends CommonController{

    public function transfer2(){
        $menber =M('menber');
        if($_POST['num'] > 0 ){
            $otherinfo =$menber->where(array('tel'=>$_POST['tel']))->find();

            if($otherinfo['uid'] == session('uid')){
                echo "<script>alert('转账人不能为自己');";
                echo "</script>";
                $this->display();
                exit();
            }

            if(!$otherinfo['uid']){
                echo "<script>alert('用户不存在');";
                echo "</script>";
                $this->display();
                exit();
            }

            $bool = $this->iszhuan(8,session('uid'),$_POST['num']);
            if($bool){
                echo "<script>alert('已超出做大额度');";
                echo "</script>";
                $this->display();
                exit();
            }

            $userinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($_POST['pwd2'] != $userinfo[0]['pwd2']){
                echo "<script>alert('二级密码错误');";
                echo "</script>";
                $this->display();
                exit();
            }

            if($_POST['num'] > $userinfo[0]['dongbag']){
                echo "<script>alert('激活票不足');";
                echo "</script>";
                $this->display();
                exit();
            }
            $left =bcsub($userinfo[0]['dongbag'] ,$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('dongbag'=>$left));

            // 1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8激活票转账 9酒票转账 10静态收益 11 动态收益 12售卖金币
            $income =M('incomelog');
            $logdata['type'] = 8 ;
            $logdata['state'] =2 ;
            $logdata['reson'] ='激活票转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =time() ;
            $logdata['orderid'] = $otherinfo['uid'];
            $logdata['userid'] =session('uid');
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);


            $dongbug = bcadd($otherinfo['dongbag'] ,$_POST['num'],2);
            $menber->where(array('uid'=>$otherinfo['uid']))->save(array('dongbag'=>$dongbug));
            $logdata1['type'] = 2 ;
            $logdata1['state'] =1 ;
            $logdata1['reson'] ='激活票转账' ;
            $logdata1['addymd'] =date('Y-m-d',time()) ;
            $logdata1['addtime'] =time() ;
            $logdata1['orderid'] =session('uid');
            $logdata1['userid'] =$otherinfo['uid'];
            $logdata1['income'] =$_POST['num'];
            $income->add($logdata1);


            echo "<script>alert('转账成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }

        $this->display();
    }

    public function transfer1(){
        $menber =M('menber');
        if($_POST['num'] > 0 ){
            $otherinfo =$menber->where(array('tel'=>$_POST['tel']))->find();

            if($otherinfo['uid'] == session('uid')){
                echo "<script>alert('转账人不能为自己');";
                echo "</script>";
                $this->display();
                exit();
            }

            if(!$otherinfo['uid']){
                echo "<script>alert('用户不存在');";
                echo "</script>";
                $this->display();
                exit();
            }

            $userinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($_POST['pwd2'] != $userinfo[0]['pwd2']){
                echo "<script>alert('二级密码错误');";
                echo "</script>";
                $this->display();
                exit();
            }

            $bool = $this->iszhuan(9,session('uid'),$_POST['num']);
            if($bool){
                echo "<script>alert('已超出做大额度');";
                echo "</script>";
                $this->display();
                exit();
            }

            if($_POST['num'] > $userinfo[0]['chargebag']){
                echo "<script>alert('酒票不足');";
                echo "</script>";
                $this->display();
                exit();
            }
            $left =bcsub($userinfo[0]['chargebag'] ,$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$left));

            // 1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8激活票转账 9酒票转账 10静态收益 11 动态收益 12售卖金币
            $income =M('incomelog');
            $logdata['type'] = 9 ;
            $logdata['state'] =2 ;
            $logdata['reson'] ='酒票转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =time() ;
            $logdata['orderid'] = $otherinfo['uid'];
            $logdata['userid'] =session('uid');
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);


            $dongbug = bcadd($otherinfo['chargebag'] ,$_POST['num'],2);
            $menber->where(array('uid'=>$otherinfo['uid']))->save(array('chargebag'=>$dongbug));
            $logdata1['type'] = 9 ;
            $logdata1['state'] =1 ;
            $logdata1['reson'] ='酒票转账' ;
            $logdata1['addymd'] =date('Y-m-d',time()) ;
            $logdata1['addtime'] =time() ;
            $logdata1['orderid'] =session('uid');
            $logdata1['userid'] =$otherinfo['uid'];
            $logdata1['income'] =$_POST['num'];
            $income->add($logdata1);


            echo "<script>alert('转账成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }

        $this->display();
    }

    public function convert(){
        if($_POST['num']){
            $menber =M('menber');
            $userinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($_POST['num'] > $userinfo[0]['jiu']){
                echo "<script>alert('酒不足');";
                echo "</script>";
                $this->display();
                exit();
            }

            $leftjiu =bcsub ($userinfo[0]['jiu'],$_POST['num'],2);
            $jiupiao =bcadd ($userinfo[0]['chargebag'],$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('jiu'=>$leftjiu,'chargebag'=>$jiupiao));
            echo "<script>alert('兑换成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }
        $this->display();
    }

    private function iszhuan($type,$uid,$money){
      //  1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8激活票转账 9酒票转账
        $configobj = M('config');
        $getjiupiao = $configobj->where(array('id'=>9))->find();
        $data['type'] =array('in',array(8,9));
        $data['userid'] =$uid;
        $data['addymd'] =date('Y-m-d',time());
        $count = M("incomelog")->where($data)->sum("income");
        $counts =bcadd($count,$money);
        if($counts > $getjiupiao['value']){
            return 1;
        }else{
            return 0;
        }
    }

    public function reg(){  //注册下级
        $configobj = M('config');
        if($_POST['tel']&&$_POST['pwd']){

            if(preg_match("/^1[34578]{1}\d{9}$/",$_POST['tel'])){

            }else{
                echo "<script>alert('请用手机号码注册');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
                echo "</script>";
                exit;
            }
            if($_POST['pwd']!=$_POST['pwd1']){
                echo "<script>alert('一级密码不一致');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
                echo "</script>";
                exit;
            }

            if($_POST['pwd2']!=$_POST['pwd21']){
                echo "<script>alert('二级密码不一致');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
                echo "</script>";
                exit;
            }

            $menber =M('menber');
            //  用户名
            $res_user =$menber->where(array('tel'=>$_POST['tel']))->select();
            if($res_user[0]){
                echo "<script>alert('电话已存在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
                echo "</script>";
                exit;
            }
            //  金额
            $res_menber =$menber->where(array('uid'=>session('uid')))->select();
            if($res_menber[0]['chargebag']<$_POST['jiupiao']){
                echo "<script>alert('酒票余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
                echo "</script>";
                exit;
            }

            if($res_menber[0]['dongbag']<$_POST['jihuo']){
                echo "<script>alert('激活票余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
                echo "</script>";
                exit;
            }
            $getjiupiao = $configobj->where(array('id'=>8))->find();
            $data['name'] =$_POST['username'];
            $data['pwd'] =$_POST['pwd'];
            $data['pwd2'] =$_POST['pwd2'];
            $data['type'] =0;
            $data['tel'] =$_POST['tel'];
            $data['fuid'] =session('uid');
            $data['addtime'] =date('Y-m-d H:i:s',time());
            $data['addymd'] = date('Y-m-d',time());
            $data['chargebag'] =$getjiupiao['value'];
            $data['incomebag'] =0;
            $res =$menber->add($data);

            //级别更新
            $nextuser = M("menber")->where(array('fuid'=>session('uid')))->count();
            if($nextuser >9){
                M("menber")->where(array('uid'=>session('uid')))->save(array('type'=>2));
                //3市长
                $next =  M("menber")->where(array('fuid'=>session('uid'),'type'=>2))->count();
                if($next > 9){
                    M("menber")->where(array('uid'=>session('uid')))->save(array('type'=>3));
                }
            }


            if($res){
                $chargebag =bcsub($res_menber[0]['chargebag'],$_POST['jiupiao'],2);
                $jihuo =bcsub($res_menber[0]['dongbag'],$_POST['jihuo'],2);
                $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$chargebag,'dongbag'=>$jihuo));
                // 上家金额记录
                $datas['state'] = 2;
                $datas['reson'] = "注册下级酒票";
                $datas['type'] = 5;
                $datas['addymd'] = date('Y-m-d',time());
                $datas['addtime'] = time();
                $datas['orderid'] = $res;
                $datas['userid'] = session('uid');
                $datas['income'] = $_POST['jiupiao'];
                $this->savelog($datas);
                $datas['reson'] = "注册下级激活票";
                $datas['income'] = $_POST['jihuo'];
                $this->savelog($datas);
                $this->pushland($res);



                //更新 uids
                if($res_menber[0]['fuid']){
                   $fuids = $menber->where(array('uid'=>$res_menber[0]['fuid']))->find();
                   if($fuids['fuids']){
                      $fuids = $fuids['fuids'].session('uid').",";
                   }else{
                       $fuids =session('uid').",";
                   }
                    $menber->where(array('uid'=>$res))->save(array('fuids'=>$fuids));
                }

                //处理级别奖
                $newstr = substr($fuids,0,strlen($fuids)-1);
                if($newstr){
                    $array_user=array_reverse(explode(',',$newstr));
                    foreach ($array_user as $key=>$value){
                        $useinfos =$menber->where(array('uid'=>$value))->find();
                        $datas['state'] = 1;
                        $datas['reson'] =$this->changeatype($useinfos['type']);
                        $datas['type'] = 13;
                        $datas['addymd'] = date('Y-m-d',time());
                        $datas['addtime'] = time();
                        $datas['orderid'] = $res;
                        $datas['userid'] =$value;
                        if($useinfos['type']==1){
                            if($key >0){
                                continue;
                            }else{
                                $datas['income'] = 1;
                            }
                        }elseif ($useinfos['type']==2){
                            $datas['income'] = 1;
                        }elseif ($useinfos['type']==3){
                            $datas['income'] = 2;
                        }

                        if($datas['income']){
                            $this->savelog($datas);
                            $changrbags = bcadd($useinfos['chargebag'],$datas['income'],2);
                            $menber->where(array('uid'=>$value))->save(array('chargebag'=>$changrbags));
                        }
                    }
                }

                //下家金额记录
//                $data1['state'] = 1;
//                $data1['reson'] = "注册收入";
//                $data1['type'] = 1;
//                $data1['addymd'] = date('Y-m-d',time());
//                $data1['addtime'] = date('Y-m-d H:i:s',time());
//                $data1['orderid'] = session('uid');     // 注册上家
//                $data1['userid'] =$res;
//                $data1['income'] = $_POST['radio1'];
//                $this->savelog($data1);
            }
            echo "<script>alert('用户".$_POST['name']."注册成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/reg';";
            echo "</script>";
            exit;

        }

        $jiupiao = $configobj->where(array('id'=>6))->find();
        $jihuo = $configobj->where(array('id'=>7))->find();
        $this->assign('jiupiao',$jiupiao['value']);
        $this->assign('jihuo',$jihuo['value']);
        $this->display();
    }

    private function changeatype($type){
        if($type==1){
            return "VIP推荐奖";
        }elseif ($type ==2){
            return "市代推荐奖";
        }elseif ($type ==3){
            return "区代推荐奖";
        }

    }

    // 补充地面
    private function pushland($userid){
        $lands = M("land")->where(array('uid'=>$userid))->find();
        if(!$lands['uid']){
            for ($i=1;$i <16;$i++){
                if($i > 10){
                    $data['ishei'] =1;
                }
                $data['num'] =$i;
                $data['uid'] =$userid;
                M("land")->add($data);
            }
        }
    }

    /**
     *  转账
     */
    public function transferto1()
    {

        if($_POST){
            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();

            if($_POST['num']<=0){
                echo "<script>alert('金额不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }

            if($this->isdo(session('uid'))){
                echo "<script>alert('今日已有操作记录');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }

            if($res_user[0]['pwd2']!=$_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }
            $res_user1 = $menber->where(array('tel'=>$_POST['tel']))->select();

            $less = bcmul($res_user[0]['chargebag'],0.2);
            if($less < $_POST['num']){
                echo "<script>alert('最大只能转20%');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }

            if(!$res_user1[0]['name']){
                echo "<script>alert('账户不存在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }
//            if($res_user[0]['chargebag'] <500){
//                echo "<script>alert('金额不足500');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/my_data';";
//                echo "</script>";
//                exit;
//            }

//            if($res_user1[0]['name'] != $_POST['name']){
//                echo "<script>alert('账户不正确');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
//                echo "</script>";
//                exit;
//            }

            if($res_user[0]['chargebag']<$_POST['num']){
                echo "<script>alert('充值钱包余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }

            if($res_user[0]['tel']==$_POST['tel']){
                echo "<script>alert('自己不能给自己转账');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transferto1';";
                echo "</script>";
                exit;
            }

            //处理自己
            $chargebagmy =bcsub($res_user[0]['chargebag'],$_POST['num'],2);
            $lilv = bcmul($_POST['num'],0.03,2);
            $chargebagmy =bcsub($chargebagmy,$lilv,2);

            $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$chargebagmy));
            $income =M('incomelog');
            $logdata['type'] = 9 ;
            $logdata['state'] =2 ;
            $logdata['reson'] ='现金钱包转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =time() ;
            $logdata['orderid'] =$res_user1[0]['uid'] ;
            $logdata['userid'] =session('uid');
            $munmy = bcadd($_POST['num'],$lilv,2);
            $logdata['income'] =$munmy;
            $income->add($logdata);


            //处理他人
            $chargebaghim =bcadd($res_user1[0]['chargebag'],$_POST['num'],2);
            $menber->where(array('uid'=>$res_user1[0]['uid']))->save(array('chargebag'=>$chargebaghim));


            $logdata['type'] = 9;
            $logdata['state'] =1 ;
            $logdata['reson'] ='现金钱包转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =time();
            $logdata['orderid'] =session('uid');
            $logdata['userid'] =$res_user1[0]['uid'];
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);

            echo "<script>alert('转账成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }
        $this->display();
    }


    public function group(){
        $menber = M("menber");

        $one =$menber->where(array('fuid'=>session('uid')))->select();

        $temp =array();
        if($one[0]){
            foreach ($one as $k=>$v){
                $user= $menber->where(array('fuid'=>$v['uid']))->select();
                foreach ($user as $value){
                    $temp[] =$value;
                }
            }
        }
        $this->assign('one',$one);
        $this->assign('two',$temp);
        $this->display();
    }

    public function my(){ // 1Vip 2区长 3市长
        $nextuser = M("menber")->where(array('fuid'=>session('uid')))->count();

        if($nextuser >9){
            M("menber")->where(array('uid'=>session('uid')))->save(array('type'=>2));
            //3市长
           $next =  M("menber")->where(array('fuid'=>session('uid'),'type'=>2))->count();
           if($next > 9){
               M("menber")->where(array('uid'=>session('uid')))->save(array('type'=>3));
           }
        }
        $this->display();
    }

    /*
    * 完善资料
     */
    public function washan_data(){
        if($_POST['pwd'] && $_POST['pwd2'] ){
            $data = $_POST;
            M("menber")->where(array('uid'=>session('uid')))->save($data);
            echo "<script>";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/washan_data';";
            echo "</script>";
            exit;
        }
        $this->display();
    }

    /*
    * 退本
     */
    public function tuiben(){
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tuiben';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();
            $left = bcsub($res_user[0]['dongbag'],$_POST['num'],2);

            if($left > 0){

                $re = $menber->where(array('uid'=>session('uid')))->save(array('dongbag'=>$left));
                if($re){
                    $income =M('incomelog');
                    $data['type'] =7;
                    $data['state'] =0;
                    $data['reson'] ='退本';
                    $data['addymd'] =date('Y-m-d',time());
                    $data['addtime'] =time();
                    $data['orderid'] =session('uid');
                    $data['userid'] =session('uid');
                    $data['income'] =$_POST['num'];
                    $income->add($data);
                    $resreson ="退本".$_POST['num']."元";
                    echo "<script>alert('".$resreson."待管理员确认');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                echo "</script>";
                exit;
            }

        }
        $this->display();
    }



    /*
    * 静态   1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8静态转账 9动态转账 10静态收益 11 动态收益
     */
    public function jingtai(){
        $incomelog =M('incomelog');
        $con['userid'] = session('uid');
        $con['type']   =array('in',array(3,8,10));
//        $con['state']   =array('in',array(1,2));
        $res = $incomelog->where($con)->order(" id DESC ")->limit(18)->select();
        $this->assign('res',$res);
        $this->display();
    }



    public function isTiXian($userid,$num){
        $config = M('config');
        // 是否最大金额
        $nummax = $config->where(array('id'=>15))->select();
        if($num < $nummax[0]['value']){
            return "最低提现金额为".$nummax[0]['value'];
        }

        // 最大次数
        $timemax = $config->where(array('id'=>16))->select();
        $nowday = date("Y-m-d",time());
        $cond['addymd'] = $nowday;
        $cond['userid'] = $userid;
        $cond['type'] = array('in',array(3,4));
        $times = M('incomelog')->where($cond)->select();
        $last = count($times);
        if($last > $timemax[0]['value']){
            return "最大提次数为".$timemax[0]['value'];
        }else{
            return '';
        }



    }


    /*
    * 静态体现
     */
    public function tixian_jing(){
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_jing';";
                echo "</script>";
                exit;
            }
            $istixian =$this->isTiXian(session('uid'),$_POST['num']);
            if($istixian){
                echo "<script>alert('".$istixian."');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_jing';";
                echo "</script>";
                exit;
            }

            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();
//            if($res_user[0]['jingbag'] < 20){
//                echo "<script>alert('静态钱包不足20');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_jing';";
//                echo "</script>";
//                exit;
//            }

            if($res_user[0]['pwd2'] != $_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_jing';";
                echo "</script>";
                exit;
            }

            $left = bcsub($res_user[0]['jingbag'] ,$_POST['num'],2);
            if($left >= 0){
                $re = $menber->where(array('uid'=>session('uid')))->save(array('jingbag'=>$left));
                if($re){
                    $income =M('incomelog');
                    $data['type'] =3;
                    $data['state'] =0;
                    $data['reson'] ='静态提现';
                    $data['addymd'] =date('Y-m-d',time());
                    $data['addtime'] =time();
                    $data['orderid'] =session('uid');
                    $data['userid'] =session('uid');
                    $data['income'] =$_POST['num'];
                    $income->add($data);
                    $resreson ="静态提现".$_POST['num']."元";
                    echo "<script>alert('".$resreson."待管理员确认');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                echo "</script>";
                exit;
            }

        }
        $this->display();
    }

    /*
       * 动态体现
        */
    public function tixian_dong(){
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_dong';";
                echo "</script>";
                exit;
            }

            $istixian =$this->isTiXian(session('uid'),$_POST['num']);
            if($istixian){
                echo "<script>alert('".$istixian."');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_dong';";
                echo "</script>";
                exit;
            }

            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();
            if($res_user[0]['dongbag'] < $_POST['num']){
                echo "<script>alert('动态钱包不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_dong';";
                echo "</script>";
                exit;
            }


            if($res_user[0]['pwd2'] != $_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/tixian_dong';";
                echo "</script>";
                exit;
            }

            $left = bcsub($res_user[0]['dongbag'] ,$_POST['num'],2);

            if($left >= 0){
                $re = $menber->where(array('uid'=>session('uid')))->save(array('dongbag'=>$left));
                if($re){
                    $income =M('incomelog');
                    $data['type'] =4;
                    $data['state'] =0;
                    $data['reson'] ='动态提现';
                    $data['addymd'] =date('Y-m-d',time());
                    $data['addtime'] =time();
                    $data['orderid'] =session('uid');
                    $data['userid'] =session('uid');
                    $data['income'] =$_POST['num'];
                    $income->add($data);
                    $resreson ="动态提现".$_POST['num']."元";
                    echo "<script>alert('".$resreson."待管理员确认');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
                echo "</script>";
                exit;
            }

        }
        $this->display();
    }


    private function isdo($userid){
        $con['addymd'] =date("Y-m-d",time());
        $con['userid'] =$userid;
        $con['type'] =array('in',array(9,12));
        $res_id = M("incomelog")->where($con)->select();
        if($res_id[0]){
            return 1;
        }else{
            return 0 ;
        }
    }



    /**
     *  静态钱包互转
     */
    public function transfers_jing()
    {
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('金额不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }

            if($_POST['num'] % 100 != 0 ){
                echo "<script>alert('需要购买100的倍数');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }

            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();

            $less = bcmul($res_user[0]['jingbag'],0.2);
            if($less < $_POST['num']){
                echo "<script>alert('最大只能提20%');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }

            if($res_user[0]['jingbag'] <500){
                echo "<script>alert('金额不足500');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/my_data';";
                echo "</script>";
                exit;
            }

            if($res_user[0]['pwd2']!=$_POST['pwd2']){
                echo "<script>alert('二级密码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            $res_user1 = $menber->where(array('tel'=>$_POST['tel']))->select();
            if($res_user1[0]['name'] != $_POST['name']){
                echo "<script>alert('账户不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            if($res_user[0]['jingbag']<$_POST['num']){
                echo "<script>alert('静态钱包余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }
            if($res_user[0]['tel']==$_POST['tel']){
                echo "<script>alert('自己不能给自己转账');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/transfers_dong';";
                echo "</script>";
                exit;
            }

            //处理自己
            $chargebagmy =bcsub($res_user[0]['jingbag'],$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('jingbag'=>$chargebagmy));
            $income =M('incomelog');
            $logdata['type'] = 8 ;
            $logdata['state'] =2 ;
            $logdata['reson'] ='静态转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =time();
            $logdata['orderid'] =$res_user1[0]['uid'] ;
            $logdata['userid'] =session('uid');
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);
            //处理他人
            $chargebaghim =bcadd($res_user1[0]['jingbag'],$_POST['num'],2);
            $menber->where(array('uid'=>$res_user1[0]['uid']))->save(array('jingbag'=>$chargebaghim));

            $logdata['type'] =8 ;
            $logdata['state'] =1 ;
            $logdata['reson'] ='静态转账' ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =time() ;
            $logdata['orderid'] =session('uid');
            $logdata['userid'] =$res_user1[0]['uid'];
            $logdata['income'] =$_POST['num'];
            $income->add($logdata);
            echo "<script>alert('转账成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }
        $this->display();
    }


    private function savelog($data){
        $incomelog =M('incomelog');
        return $incomelog->add($data);
    }


    public function switchMoney(){  //钱包互转
        if($_POST['chargebag']){  // 处理充值钱包转入到收益钱包
            if($_POST['chargebag']<=0){
                echo "<script>alert('请输入正确金额');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
            // 处理充值钱包转入到收益钱包
            $menber =M('menber');
            $useinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($useinfo[0]['chargebag']>$_POST['chargebag']){
//                $chargebag =$useinfo[0]['chargebag']-$_POST['chargebag'];
                $chargebag =bcsub($useinfo[0]['chargebag'],$_POST['chargebag'],2);
                $data['chargebag']=$chargebag;
//                $incomebag =$useinfo[0]['incomebag']+$_POST['chargebag'];
                $incomebag =bcadd($useinfo[0]['incomebag'],$_POST['chargebag'],2);
                $data['incomebag']=$incomebag;
                $menber->where(array('uid'=>session('uid')))->save($data);
                echo "<script>alert('转入成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }else{
                echo "<script>alert('账户余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
        }
        //收益钱包转入到充值钱包
        if($_POST['incomebag']){
            if($_POST['incomebag']<=0){
                echo "<script>alert('请输入正确金额');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
            // 处理充值钱包转入到收益钱包
            $menber =M('menber');
            $useinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($useinfo[0]['incomebag']>$_POST['incomebag']){
//                $chargebag =$useinfo[0]['chargebag']+$_POST['incomebag'];
                $chargebag =bcadd($useinfo[0]['chargebag'],$_POST['incomebag'],2);
                $data['chargebag']=$chargebag;
//                $incomebag =$useinfo[0]['incomebag']-$_POST['incomebag'];
                $incomebag =bcsub($useinfo[0]['incomebag'],$_POST['incomebag'],2);
                $data['incomebag']=$incomebag;
                $menber->where(array('uid'=>session('uid')))->save($data);
                echo "<script>alert('转入成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }else{
                echo "<script>alert('账户余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/switchMoney';";
                echo "</script>";
                exit;
            }
        }
        $this->display();
    }

    public function transfer(){
        $menber =M('menber');
        $res_user = $menber->where(array('uid'=>session('uid')))->select();

        $type = $_GET['type'];
        if($type ==1){
            $title = "动态转账";
            $action = "transfers_dong";
        }else{
            $title = "静态转账";
            $action = "transfers_jing";
            $type  = 2;
        }
        $this->assign('title',$title);
        $this->assign('type',$type);
        $this->assign('action',$action);
        $this->display();
    }

    public function transferto(){
        $type = $_GET['type'];
        $menber =M('menber');
        if($_POST['num'] > 0 ){
            $userinfo =$menber->where(array('uid'=>session('uid')))->select();
            if($_POST['pwd2'] != $userinfo[0]['pwd2']){
                echo "<script>alert('二级密码错误');";
                echo "</script>";
                $this->display();
                exit();
            }

            if($type ==1 ){   // 动态钱包
                if($_POST['num'] > $userinfo[0]['dongbag']){
                    echo "<script>alert('动态钱包余额不足');";
                    echo "</script>";
                    $this->display();
                    exit();
                }

                $left =bcsub($userinfo[0]['dongbag'] ,$_POST['num'],2);
                $menber->where(array('uid'=>session('uid')))->save(array('dongbag'=>$left));

            }else{
                if($_POST['num'] > $userinfo[0]['jingbag']){
                    echo "<script>alert('静态钱包余额不足');";
                    echo "</script>";
                    $this->display();
                    exit();
                }
                $left =bcsub($userinfo[0]['jingbag'] ,$_POST['num'],2);
                $menber->where(array('uid'=>session('uid')))->save(array('jingbag'=>$left));


            }

            $dongbug = bcadd($userinfo[0]['chargebag'] ,$_POST['num'],2);
            $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$dongbug));
            echo "<script>alert('转入成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
            echo "</script>";
            exit;
        }
        if($type ==1){
            $title = "动态钱包 转 现金钱包";

        }else{
            $title = "静态钱包 转 现金钱包";
            $type  = 2;
        }
        $this->assign('title',$title);
        $this->assign('type',$type);
        $this->display();
    }

}