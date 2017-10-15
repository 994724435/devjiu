<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

    public function crontab(){
        $menber =M('menber');
        $orderlog =M('orderlog');
        $incomelog =M('incomelog');

        $istoday = $incomelog->where(array('type'=>10,'addymd'=>date("Y-m-d",time())))->select();
//        if($istoday[0]){
//            echo "今日收益结束";exit();
//        }
        $land = M("land");
        if($_GET['uid']){
            $map['uid']  = $_GET['uid'];
        }else{
//            $map['uid']  = array('gt',9);
        }
        $result_user = $menber->where($map)->select();
        $config = M("config")->where(array('id'=>2))->select();
        foreach($result_user as $k=>$v){
             $isbuy = $orderlog->where(array('productid'=>9,'userid'=>$v['uid']))->select();

             if($isbuy[0]){
                 $jingbag = $v['jingbag'] ;
                 $myland = $land->where(array('state'=>1,'uid'=>$v['uid']))->select();

                 if($myland[0]){
                     foreach ($myland as $k1=>$v1){
                         $all = $this->isget($v1['uid'],$v1['num']);
                         if($v1['num'] > 10){
                             if($all > 899){  // 大于 300 停止
                                 $land->where(array('id'=>$v1['id']))->save(array('state'=>0,'out'=>0));
                                M("incomelog")->where(array('type'=>10,'state'=>0,'userid'=>$v1['uid'],'orderid'=>$v1['num']))->save(array('type'=>0));
                                 continue;
                             }
                         }else{
                             if($all > 299){  // 大于 300 停止
                                 $land->where(array('id'=>$v1['id']))->save(array('state'=>0,'out'=>0));
                                 M("incomelog")->where(array('type'=>10,'state'=>0,'userid'=>$v1['uid'],'orderid'=>$v1['num']))->save(array('type'=>0));
                                 continue;
                             }
                         }

                         $data['state'] = 0;
                         $data['reson'] = "静态收益";
                         $data['type'] = 10;
                         $data['addymd'] = date('Y-m-d', time());
                         $data['addtime'] = time();
                         $data['orderid'] = $v1['num'];
                         $data['userid'] = $v1['uid'];
                         if($v1['ishei']){
                             $income_logs = bcmul($config[0]['value'],3,2);
                         }else{
                             $income_logs =$config[0]['value'];
                         }
                         $data['income'] = $income_logs;

                         if ($config[0]['value'] > 0) {
                             $userinfo = $menber->where(array('uid'=>$v['uid']))->select();
                             // 一级上线收益 1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8激活票转账 9酒票转账 10静态收益 11 动态收益 12售卖金币
                             if($userinfo[0]['fuid']){
                                 $config3 = M("config")->where(array('id'=>3))->find();
                                 $income_fid1 = bcmul($config3['value'],$config[0]['value'],2);
                                 $fid1 = $menber->where(array('uid'=>$userinfo[0]['fuid']))->find();
                                 if($v1['ishei']){
                                     $income_fid1 = bcmul($income_fid1,3,2);
                                 }
//                                 $fid1_chargebag = bcadd($fid1['chargebag'],$income_fid1,2);
//                                 $menber->where(array('uid'=>$userinfo[0]['fuid']))->save(array('chargebag'=>$fid1_chargebag));
                                 $data_fid1['state'] = 0;
                                 $data_fid1['reson'] = "推荐奖";
                                 $data_fid1['type'] = 11;
                                 $data_fid1['addymd'] = date('Y-m-d', time());
                                 $data_fid1['addtime'] = time();
                                 $data_fid1['orderid'] = $v1['num'];
                                 $data_fid1['userid'] = $userinfo[0]['fuid'];
                                 $data_fid1['income'] = $income_fid1;
                                 $this->savelog($data_fid1);

                                 // 二级上线  tu do 
                                 if($fid1['fuid']){
                                     $config4 = M("config")->where(array('id'=>4))->find();
                                     $income_fid2 = bcmul($config4['value'],$config[0]['value'],2);
                                     $fid2 = $menber->where(array('uid'=>$fid1['fuid']))->find();
                                     if($v1['ishei']){
                                         $income_fid2 = bcmul($income_fid2,3,2);
                                     }
//                                     $fid2_chargebag = bcadd($fid2['chargebag'],$income_fid2,2);
//                                     $menber->where(array('uid'=>$fid1['fuid']))->save(array('chargebag'=>$fid2_chargebag));
                                     $data_fid1['state'] = 0;
                                     $data_fid1['reson'] = "推荐奖";
                                     $data_fid1['type'] = 11;
                                     $data_fid1['addymd'] = date('Y-m-d', time());
                                     $data_fid1['addtime'] = time();
                                     $data_fid1['orderid'] = $v1['num'];
                                     $data_fid1['userid'] = $fid1['fuid'];
                                     $data_fid1['income'] = $income_fid2;
                                     $this->savelog($data_fid1);
                                 }
                             }



                             $afterincom = bcadd($userinfo[0]['jingbag'],$income_logs);
                             $menber->where(array('uid'=>$v['uid']))->save(array('jingbag'=>$afterincom));
                             $this->savelog($data);

                             // 处理land
                             if($v1['ishei']){
                                 $configvalue= bcmul($config[0]['value'],3,2);
                             }else{
                                 $configvalue = $config[0]['value'];
                             }
                             $out =bcadd($v1['out'] ,$configvalue);
                             $land->where(array('id'=>$v1['id']))->save(array('out'=>$out));

                         }
                     }
                 }
             }

        }
        echo 'success';
    }

    public function deleteIncome(){
        M("incomelog")->where(array('type'=>10,'state'=>0))->delete();
        M("incomelog")->where(array('type'=>11,'state'=>0))->delete();
        $map['uid']  = array('gt',0);
        M("menber")->where($map)->save(array('jingbag'=>0));
        echo "ok";
    }

    public function isget($userid,$orderid){
        $incomelog = M("incomelog");
        $result_log = $incomelog->where(array('type'=>10,'state'=>0,'userid'=>$userid,'orderid'=>$orderid))->sum('income');
        return $result_log;
    }

    public function qrcode(){
        Vendor('phpqrcode.phpqrcode');
        $id=I('get.id');
        //生成二维码图片 http://localhost/index.php/Home/Login/reg
        $object = new \QRcode();
        $url="http://".$_SERVER['HTTP_HOST'].'/index.php/Home/Login/reg/fid/'.$id;

        $level=3;
        $size=5;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }

	public function login(){
        if(IS_POST){
            $name = I('post.name');
            $pwd = I('post.pwd');
            $user = M('user');
            $result= $user->where(array('name'=>$name,'password'=>$pwd))->select();
            if($result[0]){
                $_SESSION['uname']=$name;
                echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";
            }else{
                    echo "<script>alert('用户名或密码不存在');";
                    echo "window.history.go(-1);";
                    echo "</script>";
                }
        }
        $this->display();
    }

    public function logOut(){
        session('uname',null);
        cookie('is_login',null);
        echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/User/login';</script>";
    }

    /**
     * 静态收益 ok
     */
    public function ssss(){  //我的团队
        $incomelog =M('incomelog');
        $res = $incomelog->where(array('addymd'=>date('Y-m-d'),'type'=>10))->select();

        if($res[0]){
            print_r('今日受益已结算');die;
        }
        $orderlog =M('orderlog');
        //所有
        $allorderlog = $orderlog->where(array('state'=>1,'productid'=>1))->select();
        $menber = M("menber");
        foreach($allorderlog as $key=>$val) {
            //自己受益
            $res_own = $this->getusernums($val['userid'], $val['logid'], $val['num']);
            if (!$res_own) {
                continue;
            }
            $configobj =M('config')->where(array('id'=>2))->select();
            $config =$configobj[0]['value'];
            $configobjs =M('config')->where(array('id'=>1))->select();
            $jiage =$configobjs[0]['value'];
            
            $base = bcmul($jiage, $config,4);
            $income = bcmul($base, $val['num'], 2);
            $data['state'] = 1;
            $data['reson'] = "静态收益";
            $data['type'] = 10;
            $data['addymd'] = date('Y-m-d', time());
            $data['addtime'] = time();
            $data['orderid'] = $val['logid'];
            $data['userid'] = $val['userid'];
            $data['income'] = $income;
            if ($income > 0) {
                $userinfo = $menber->where(array('uid'=>$val['userid']))->select();
                $afterincom = bcadd($userinfo[0]['jingbag'],$income);
                $menber->where(array('uid'=>$val['userid']))->save(array('jingbag'=>$afterincom));
                $this->savelog($data);
            }

        }
        echo '成功';
    }

    /**
     * @return int ok
     * 是否有每日收益
     */
    public function getusernums($userid,$orderid,$num){
        $income =M('incomelog');
        $daycomelogs = $income->where(array('type'=>10,'userid'=>$userid,'orderid'=>$orderid))->select();
        $daycome =0;
        foreach($daycomelogs as $k=>$v){
            $daycome=bcadd($daycome,$v['income'],2);
        }
        $conf = M("config")->where(array('id'=>1))->select();
//        $endmoney = 90 * $num;
        $endmoney = bcmul($conf[0]['value'],$num);
        $endmoneys =bcmul($endmoney,2 );
        if($daycome>=$endmoneys){
            return 0;
        }else{
            return 1;
        }
    }

    private function savelog($data){
        $incomelog =M('incomelog');
        return $incomelog->add($data);
    }


    public function crantabUserIncome(){
        $menber =M('menber');
        $income =M('incomelog');
        if($_GET['uid']){
            $map['uid']  = $_GET['uid'];
        }else{
            $map['uid']  = array('gt',9);
        }
        $result_user = $menber->where($map)->select();
        foreach($result_user as $k=>$v){
            $chargebag = $v['chargebag'];
            $incomebag = $v['incomebag'];
            $allIncome =bcadd($chargebag,$incomebag,2);  // 所有钱包

            $daycomelogs = $income->where(array('state'=>1,'userid'=>$v['uid']))->select();
            $userIncome = 0;
            foreach($daycomelogs as $k1=>$v1){         // 收益
                $userIncome =bcadd($userIncome,$v1['income'],2);
            }
            if($_GET['uid']){
                print_r("每日收益==》".$userIncome);
            }
            $dayoutlogs = $income->where(array('state'=>2,'userid'=>$v['uid']))->select();

            $userOut = 0;                              // 支出
            foreach($dayoutlogs as $k2=>$v2){
                $userOut =bcadd($userOut,$v2['income'],2);
            }
            if($_GET['uid']){
                print_r("<br>总支出==》".$userOut);
            }
            $allIncomesUser =bcsub($userIncome,$userOut,2);      // 总收入
            if($allIncomesUser < 0){
                print_r("userID".$v['uid']."收入日志异常");
            }
            $layout =$allIncomesUser-$allIncome;
            if($layout!=0){
               print_r("用户ID：".$v['uid']."<br>");
               print_r("钱包总额：".$allIncome."<br>");
               print_r("收入总额：".$allIncomesUser."<br><br><br>");
            }
        }
//        print_r($result_user);die;
    }


    function crontabRite(){
        $today = date('m-d',time());
        $isdate = M("Rite")->where(array('date'=>$today))->select();
        if($isdate[0]){
//            $config= M("Config")->where(array('name'=>'daily_income'))->select();
//            M("Rite")->where(array('date'=>$today))->save(array('cont'=>$config[0]['val'],'date'=>$today));
            echo 2;exit();
        }else{
            $config= M("Config")->where(array('id'=>1))->select();
            M("Rite")->add(array('cont'=>$config[0]['value'],'date'=>$today));
            echo 1;exit();
        }
    }


}



 ?>