<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
    public function dakuan(){
        $commit = $_GET['id'];
        $incomelog = M('incomelog');
        $log = $incomelog->where(array('commitid'=>$commit))->select();
        if($log[0]['state'] == 4){
            $incomelog->where(array('commitid'=>$commit))->save(array('state'=>5));
        }
        if($log[0]['state'] == 5){
            $menber = M('menber');
            foreach ($log as $v){
                if($v['orderid']==1){
                    $incomelog->where(array('id'=>$v['id']))->save(array('state'=>2));
                }
                if($v['orderid']==2){  // 收款方
                    $incomelog->where(array('id'=>$v['id']))->save(array('state'=>1));
                    // 处理收款
                    $info = $menber->where(array('uid'=>$v['userid']))->select();
                    $xiyue = bcadd($info[0]['chargebag'],$v['income'],2);
                    $menber->where(array('uid'=>$v['userid']))->save(array('chargebag'=>$xiyue));
                }
            }
        }

        echo "<script>alert('操作成功');";
        echo "window.location.href='".__ROOT__."/index.php/Home/User/rechargeInfo';";
        echo "</script>";
        exit;
    }


   //主页
	public function index(){
        // 1仓库中 2收益中
        $product = M("product");
        $cangkuproducr =  $product->where(array('userid'=>session('uid'),'states'=>2))->select();
        $diproduct =$product->where(array('userid'=>session('uid'),'states'=>1))->select();

        //商店
        $productlist = $product->where(array('state'=>1))->select();

        //库存
        $cun  =M("config")->where(array('id'=>3))->find();

        $this->assign('cangkuproducr',$cangkuproducr);
        $this->assign('diproduct',$diproduct);
        $this->assign('productlist',$productlist);
        $this->assign('$cun',$cun['value']);
		$this->display();
	}

    public function buyProduct(){
        $config =M("config")->where(array('id'=>1))->select();
        $bi =$config[0]['value'];
        if($_POST['num'] > 0){
            if(!is_numeric($_POST['num'])){
                echo "<script>alert('请不要输入非法字符');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }
            $menber = M("menber");
            $userinfo = $menber->where(array('uid'=>session('uid')))->select();
            $id = $_POST['id'];
            $product =M("product")->where(array('id'=>$id))->find();
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

            $needmoney =bcmul($_POST['num'],$bi);

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
                // MIF 增加
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

                $income->add($data);
                $resreson ="购买成功";
                $orderid =  date("YmdHis").rand(1000,9999);
                for($i=0;$i<$_POST['num'];$i++){
                    $order['userid'] =session('uid');
                    $order['productid'] =$id ;
                    $order['productname'] =$product['name'];
                    $order['productmoney'] = $product['name'];
                    $order['states'] = 1;
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

                echo "<script>alert('购买成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;

            }

        }


        $this->assign('config',$config[0]);
        $this->display();
    }

	//我的产品
	public function financial(){
		$orderlog =M('orderlog');
		$result  = $orderlog->join('p_product ON p_orderlog.productid=p_product.id')->where(array('userid'=>session('uid')))->select();
		foreach($result as $k=>$v){
			if($v['states']==0){
				$v['total'] = $v['prices'] *$v['num'];
				$data['wait'][] =$v;
			}
			if($v['states']==1){
				$v['total'] = $v['prices'] *$v['num'];
				$data['coming'][] =$v;
			}
			if($v['states']==2){
				$v['total'] = $v['prices'] *$v['num'];
				$data['comoever'][] =$v;
			}
		}
		$this->assign('res',$data);
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


    // 1首页 2公告 3值班团队 4分析专家 5公司简介  gruop

    public function types(){
        $type = isset($_GET['type']) ? $_GET['type']: 2 ;
        if($type ==2){
            $title = "公告列表";
        }elseif ($type == 3){
            $title = "值班团队";
        }elseif ($type == 4){
            $title = "分析专家";
        }
        $article =M('article');
        $intro= $article->order('aid DESC')->where(array('type'=>$type))->select();
        $this->assign('title',$title);
        $this->assign('res',$intro);
        $this->display();
    }

    /**
	 * 获取当前页面完整URL地址
	 */
	private function get_url() {
		$sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
		$php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
		$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
		$relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
		return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
	}


	private function getlists($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return json_decode($result, true);
	}

	private function curlget($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
//		执行并获取HTML文档内容
		$output = curl_exec($ch);
		//释放curl句柄
		curl_close($ch);
		return json_decode($output, true);
	}
}