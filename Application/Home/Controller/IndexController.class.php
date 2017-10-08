<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
    public function dealland(){
        if($_POST['toolId']){
            if($_POST['toolId']==1){    //酿酒  landId
                $orderlog = M('orderlog');
                $land    =M('land');
                $order =$orderlog->where(array('userid'=>session('uid'),'states'=>1))->select();
                if(!$order[0]){
                    echo 2;exit();
                }
                if($_POST['landId']){ //点击地使用
                   $myland = $land->where(array('uid'=>session('uid'),'num'=>$_POST['landId']))->find();
                   if($myland['state'] !=0){
                       echo 3;exit();
                   }
                    $land->where(array('uid'=>session('uid'),'num'=>$_POST['landId']))->save(array('state'=>1));
                    $orderlog->where(array('logid'=>$order[0]['logid']))->save(array('states'=>2));
                }
            }
            if($_POST['toolId']==2){    //使用小麦
                $menber = M("menber");
                $userinfo =$menber->where(array('uid'=>session('uid')))->find();
                if($userinfo['jingbag']==0){
                    echo 4;exit();
                }

            }
            print_r(1);
        }
    }


    public function friend(){
        $menber = M("menber");
        $friend =$menber->where(array('uid'=>session('uid')))->find();
        $friends= array();
        if($friend['friends']){
            $str =$friend['friends'];
            $newstr = substr($str,0,strlen($str)-1);
            $map['uid'] = array('in',$newstr);
            $friends = $menber->where($map)->select();
        }

        $this->assign('friend',$friends);
        $this->display();
    }


    public function addFriend(){
        if($_POST['tel']){
            $menber = M("menber");
            $friend =$menber->where(array('tel'=>$_POST['tel']))->find();
            if(!$friend['uid']){
                echo "<script>alert('用户不存在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/addFriend';";
                echo "</script>";
                exit;
            }
            $mine =$menber->where(array('uid'=>session('uid')))->find();
            $friends =  $mine['friends'].$friend['uid'].',';
            $menber->where(array('uid'=>session('uid')))->save(array('friends'=>$friends));

            echo "<script>alert('添加成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/Index/friend';";
            echo "</script>";
            exit;
        }

        $this->display();
    }

    public function mailBox(){
        $condition['to_user_id'] = session('uid');
        $condition['type'] = 3;
        $condition['_logic'] = 'OR';
        $msg =M("message")->where($condition)->select();
        $this->assign('msg',$msg);
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

            $data['f_user_name'] =$mine['name'];

            M("message")->add($data);
            echo "<script>alert('添加成功');";
            echo "window.location.href='".__ROOT__."/index.php/Home/Index/friend';";
            echo "</script>";
            exit;
        }

        $this->display();
    }


    // 补充地面
    private function pushland($userid){
        $lands = M("land")->where(array('uid'=>$userid))->find();
        if(!$lands['uid']){
            for ($i=1;$i <16;$i++){
                $data['num'] =$i;
                $data['uid'] =$userid;
                M("land")->add($data);
            }
        }
    }



   //主页
	public function index(){
        // 1仓库中 2收益中
        $product = M("product");
        $productlog =M("orderlog");
        $diproduct =$productlog->where(array('userid'=>session('uid'),'states'=>1))->count('num');

        $land = M("land")->where(array('uid'=>session('uid')))->select();

        //商店
        $productlist = $product->where(array('state'=>1))->order('id asc')->select();

        //库存
        $cun  =M("config")->where(array('id'=>3))->find();

        $this->assign('land',$land);
        $this->assign('diproduct',$diproduct);
        $this->assign('productlist',$productlist);
        $this->assign('cun',$cun['value']);
		$this->display();
	}

	public function cashDetail(){

        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']   =array('gt',0);
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function buyProduct(){
        if($_POST['num'] > 0){
            if(!is_numeric($_POST['num'])){
                echo "<script>alert('请不要输入非法字符');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }

            $menber = M("menber");
            $userinfo = $menber->where(array('uid'=>session('uid')))->select();
            $id = $_POST['goodsId'];
            $product =M("product")->where(array('id'=>$id))->find();
            $lefts = $product['left'] -$_POST['num'];
            if($product['left'] < $_POST['num']){
                    echo "<script>alert('库存不足');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                    echo "</script>";
                    exit;
            }

//            if($userinfo[0]['mif']==0){
//                if($_POST['num'] < 50 ){
//                    echo "<script>alert('至少购买50个');";
//                    echo "window.location.href='".__ROOT__."/index.php/Home/User/buyMit';";
//                    echo "</script>";
//                    exit;
//                }
//            }else{
//                if($_POST['num'] % 10 != 0 ){
//                    echo "<script>alert('需要购买10的倍数');";
//                    echo "window.location.href='".__ROOT__."/index.php/Home/User/buyMit';";
//                    echo "</script>";
//                    exit;
//                }
//            }

//            if($_POST['num'] > 500 ){
//                echo "<script>alert('最多购买500个');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/buyMit';";
//                echo "</script>";
//                exit;
//            }
//
//            $date = date("Y-m-d",time());
//            $allnums = M("orderlog")->where(array('userid'=>session('uid'),'addymd'=>$date))->sum('num');
//            if($allnums > 499){
//                echo "<script>alert('每日最多购买500个');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/my';";
//                echo "</script>";
//                exit;
//            }

            $needmoney =bcmul($_POST['num'],$_POST['goodsMoney']);

            $userallmoney =$userinfo[0]['chargebag'];
            if($userallmoney < $needmoney){
                echo "<script>alert('酒票不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }else{
                $left = bcsub($userinfo[0]['chargebag'] , $needmoney,2);
                if($left >= 0 ){
                    $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$left));
                }else{
//                   $lef = bcsub($userallmoney ,$needmoney,2);
//                   $menber->where(array('uid'=>session('uid')))->save(array('chargebag'=>$lef));
                    echo "<script>alert('酒票不足');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                    echo "</script>";
                    exit;
                }
                // 下单
                $mif = $userinfo[0]['mif'] + $_POST['num'];
                $menber->where(array('uid'=>session('uid')))->save(array('mif'=>$mif));
                $income =M('incomelog');
                $data['type'] =6;
                $data['state'] =2;
                $data['reson'] ='下单购买';
                $data['addymd'] =date('Y-m-d',time());
                $data['addtime'] =time();
                $data['orderid'] =session('uid');
                $data['userid'] =session('uid');
                $data['income'] =$needmoney;

                $out = $income->add($data);
                $resreson ="购买成功";
                $orderid =  date("YmdHis").rand(1000,9999);
                for($i=0;$i<$_POST['num'];$i++){
                    $order['userid'] =session('uid');
                    $order['productid'] =$id ;
                    $order['productname'] =$product['name'];
                    $order['productmoney'] = $product['name'];
                    $order['pic'] = $product['pic'];
                    $order['states'] = 1;
                    $order['out'] = $out;
                    $order['orderid'] =$orderid;
                    $order['addtime'] = time();
                    $order['addymd'] = date("Y-m-d",time());
                    $order['num'] = 1;
                    $order['prices'] =$needmoney;
                    $order['totals'] =$needmoney;
                    M("orderlog")->add($order);
                }


                // 上家收益  tu do

//                if($userinfo[0]['fuid']){
//                    // 查询多少人
//                    $fuids =array_reverse(explode(',',$userinfo[0]['fuids'])) ;
//                    $configobj = M('config');
//                    foreach ($fuids as $key=>$val){
//                        if($key==2){ // 一级
//                            $lilv = $configobj->where(array('id'=>3))->select();
//                        } elseif ($key == 3){ // 二
//                            $lilv = $configobj->where(array('id'=>4))->select();
//                        }elseif ($key == 4){ // 三
//                            $lilv = $configobj->where(array('id'=>5))->select();
//                        }elseif ($key == 5){ // 四
//                            $lilv = $configobj->where(array('id'=>6))->select();
//                        }elseif ($key == 6){ // 五
//                            $lilv = $configobj->where(array('id'=>7))->select();
//                        }elseif ($key == 7){ // 六
//                            $lilv = $configobj->where(array('id'=>8))->select();
//                        }else{
//                            continue;
//                        }
//                        if($lilv[0]['name']){
//                            $incomes = bcmul($lilv[0]['value'],$bi,2);
//                            $incomes = bcmul($incomes,$_POST['num'],2);
//                            $fidUserinfo= $menber->where(array('uid'=>$val))->select();
//                            if($fidUserinfo[0]['mif'] > 0){
//                                $dongbag = bcadd($fidUserinfo[0]['dongbag'],$incomes,2);
//                                $menber->where(array('uid'=>$val))->save(array('dongbag'=>$dongbag));
//                                $income =M('incomelog');
//                                $data['type'] =11;
//                                $data['state'] =1;
//                                $data['reson'] ='下级购买MIF';
//                                $data['addymd'] =date('Y-m-d',time());
//                                $data['addtime'] =time();
//                                $data['orderid'] =session('uid');
//                                $data['userid'] = $val ;
//                                $data['income'] = $incomes;
//                                $data['cont'] = $_POST['num'];
//                                if($incomes > 0){
//                                    $income->add($data);
//                                }
//                            }
//
//                        }
//                    }
//
//                }
                M("product")->where(array('id'=>$id))->save(array('left'=>$lefts));
                echo "<script>alert('购买成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;

            }

        }


        $this->assign('config',$config[0]);
        $this->display();
    }



	public function share(){
	    $url = "http://402231.ouyouhui.com"."/index.php/Home/Login/reg/fid/".session('uid').".html";
	    $this->assign('url',$url);
        $this->display();
    }

    public function K(){
        $rite =M("rite")->order("id desc")->limit(7)->select();
        $this->assign('seven',$rite);
        $this->display();
    }


    public function qrcode(){
        Vendor('phpqrcode.phpqrcode');
        $id=I('get.id');
        //生成二维码图片
        $object = new \QRcode();
        $url="http://".$_SERVER['HTTP_HOST'].'/index.php/Admin/Article/editearticle/id/'.$id;//网址或者是文本内容

        $level=3;
        $size=5;
        $errorCorrectionLevel =intval($level) ;//容错级别
        $matrixPointSize = intval($size);//生成图片大小
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }


}