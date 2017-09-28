<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>公司首页</title>
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_411407_ow1bd2r17k62mx6r.css">
	<link href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.min.js"></script>
	<link href="/devjiu/Public/Home/css/bootstrap.min.css" rel="stylesheet">
	<link href="/devjiu/Public/Home/css/aui.min.css" rel="stylesheet">
	<link href="/devjiu/Public/Home/css/mui.picker.css" rel="stylesheet">
	<link href="/devjiu/Public/Home/css/mui.poppicker.css" rel="stylesheet">
	<link href="/devjiu/Public/Home/css/style.css" rel="stylesheet">
	<script type="text/javascript" src="/devjiu/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/devjiu/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/devjiu/Public/Home/js/mui.picker.js"></script>
	<script type="text/javascript" src="/devjiu/Public/Home/js/mui.poppicker.js"></script>
	<script type="text/javascript" src="/devjiu/Public/Home/js/bootstrap.min.js"></script>
	<style type="text/css">
		.indexList>li{width: 85%;border-radius: 10px;height: 120px;margin:0 auto 30px;position: relative;}
		.indexList>li:nth-child(3n+1){background: #24abe3;}
		.indexList>li:nth-child(3n+2){background: #832d98;}
		.indexList>li:nth-child(3n+3){background: #feb848;}
		.indexList>li .iconfont{font-size: 83px;color: #fff;position: absolute;top: 30px;left: 20px;}
	   .item li{color: #fff;font-size: 20px;}
	   .item{float: right;margin-top: 38px;margin-right: 20px;}
	   .item li.text{font-size: 14px;}
	   .indexList>li .icon-qianbao,.indexList>li .icon-jindu,.indexList>li .icon-jiaoyi,.indexList>li .icon-zoushituacito{font-size: 70px;top: 52px;}
	</style>
</head>
<body>
<!-- 公共头部 -->
<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_411407_a93ufzj32h3vunmi.css">
<script type="text/javascript" src="/devjiu/Public/Home/js/jquery-3.1.1.min.js"></script>
<div class="container noPadding">
    <nav class="navbar navbar-default mynavbar">
        <div class="container-fluid">
            <!--按钮-->
            <div class="navbar-header">
                <img src="/devjiu/Public/Home/images/logo.gif" alt="" class="logoImg">
                <span class="userInfo"><?php echo ($username["name"]); ?>：<?php echo ($username["tel"]); ?></span>
                <button type="button" class="navbar-toggle collapsed btn-sider" id="openSide">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
          
        </div>
    </nav>
</div>
    <div class="modle"></div>
    <ul class="navbar-collapse" id="headSide">

        <li> 
        <a href="/devjiu/index.php/Home/Index/index.html"><i class="iconfont icon-jianjie"></i>公司首页</a>
        </li>    
        <li><a href="/devjiu/index.php/Home/Index/types/type/2"><i class="iconfont icon-gonggao"></i>公司公告</a></li>    
        <li> <a href="/devjiu/index.php/Home/Index/K.html"><i class="iconfont icon-icon-test"></i>同步k线图</a></li>    
        <!--<li><a href="/devjiu/index.php/Home/Index/types/type/3"><i class="iconfont icon-tuandui"></i>值班团队</a></li>    -->
        <!--<li><a href="/devjiu/index.php/Home/Index/types/type/4"><i class="iconfont icon-zhuanjia"></i>分析专家</a></li>    -->
        <li> <a href="/devjiu/index.php/Home/User/my.html"><i class="iconfont icon-gerenzhongxinxia"></i>个人中心</a></li>    
        <li><a href="/devjiu/index.php/Home/Index/gongpai.html"><i class="iconfont icon-xunhuan"></i>ARS公排</a></li>    
        <li><a href="/devjiu/index.php/Home/Index/share/id/<?php echo ($username["uid"]); ?>"><i class="iconfont icon-fenxiang"></i>ARS分享</a></li>    
        <li><a href="/devjiu/index.php/Home/Login/login"><i class="iconfont icon-tuichu"></i>退出系统</a></li>    
    </ul>

<script type="text/javascript">
    $("#openSide").click(function() {
         $(".modle").show();
         $("#headSide").animate({ 
            left: "0"
          }, 500 );
    });

    $(".modle").click(function() {
         
         $("#headSide").animate({ 
            left: "-180px"
          }, 500);
           $(".modle").hide();
         
    });
</script>

<!-- 公共头部 -->
<div class="container-fluid noPadding">
	<!--<img src="/devjiu/Public/Home/images/1.jpg" alt="" class="img-responsive" alt="Responsive image" style="margin-top: -20px;">-->
	<!--<div class="introduce" style="padding:0 10px;">-->
		<!--<?php echo ($intro["cont"]); ?>-->
	<!--</div>-->
	<!-- <ul class="nav grid"  id="myGRid" style="margin-top: 10px">
		<li>
			<a href="/devjiu/index.php/Home/Index/introduce.html">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_10.jpg" alt="" class="iconImg"></div>
				<div class="gridText">公司简介</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Index/types/type/2">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_20.png" alt="" class="iconImg"></div>
				<div class="gridText">公司公告</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Index/K.html">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_1.png" alt="" class="iconImg"></div>
				<div class="gridText">同步k线图</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Index/types/type/3">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_17.jpg" alt="" class="iconImg"></div>
				<div class="gridText">值班团队</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Index/types/type/4">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_5.png" alt="" class="iconImg"></div>
				<div class="gridText">分析专家</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/User/my.html">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_7.png" alt="" class="iconImg"></div>
				<div class="gridText">个人中心</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Index/gongpai.html">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_9.png" alt="" class="iconImg"></div>
				<div class="gridText">MIF公排</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Index/share/id/<?php echo ($username["uid"]); ?>">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_6.png" alt="" class="iconImg"></div>
				<div class="gridText">MIF分享</div>
			</a>
		</li>
		<li>
			<a href="/devjiu/index.php/Home/Login/login">
				<div class="iconImgDiv"><img src="/devjiu/Public/Home/images/mif/p_15.png" alt="" class="iconImg"></div>
				<div class="gridText">退出登录</div>
			</a>
		</li>
	</ul> -->
	<!-- <video autoplay="autoplay" src="/devjiu/Public/Home/images/video.mp4" controls="controls">
		您的浏览器不支持 video 标签。
	</video> -->
	<ul class="indexList">
		<li>
			<i class="iconfont icon-renshu-copy"></i>
			<ul class="item">
				<li><?php echo ($nextmenber); ?></li>
				<li class="text">推荐人数</li>
			</ul>
		</li>
		<li>
			<i class="iconfont icon-qianbao"></i>
			<ul class="item">
				<li><?php echo ($username["chargebag"]); ?></li>
				<li class="text">现金钱包</li>
			</ul>
		</li>
		<li>
			<i class="iconfont icon-jindu"></i>
			<ul class="item">
				<li><?php echo ($username["mif"]); ?></li>
				<li class="text">复投的进度</li>
			</ul>
		</li>
		<li>
			<i class="iconfont icon-jiaoyi"></i>
			<ul class="item">
				<li><?php echo ($income); ?></li>
				<li class="text">交易大厅</li>
			</ul>
		</li>
		<li>
			<i class="iconfont icon-zoushituacito"></i>
			<ul class="item">
				<li><?php echo ($lilv); ?></li>
				<li class="text">k线图拆分率</li>
			</ul>
		</li>
	</ul>

</div>

<script>
  
</script>
</body>

</html>