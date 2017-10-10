<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script type="text/javascript" src="/dev/devjiu/Public/Home/js/fontSize.js"></script>
	<script type="text/javascript" src="/dev/devjiu/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/dev/devjiu/Public/Home/js/index.js?v=11"></script>
	<link rel="stylesheet" type="text/css" href="/dev/devjiu/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/dev/devjiu/Public/Home/css/style.css?v=2">
	<title>酒模式</title>
</head>
<body class="indexBg">
<ul class="lands">
	<?php if(is_array($land)): foreach($land as $key=>$v): ?><li class="land land<?php echo ($v["num"]); ?>" style="background: url(/dev/devjiu/Public/Home/img/p_<?php if($v['ishei'] ==1){echo 1;}else{echo 2;} ?>.png) no-repeat;" data-land="<?php echo ($v["num"]); ?>">
		<?php if($v["state"] == 1): ?><img src="/dev/devjiu/Public/Home/img/p_3.png" alt="" class="jiuTong">
			<span class="application"><?php echo ($v["out"]); ?></span><?php endif; ?>
	</li><?php endforeach; endif; ?>

</ul>
<ul class="operation">
	<li  class="cangku">
		<img src="/dev/devjiu/Public/Home/img/tab/cang.png" alt="">
		<span>仓库</span>
	</li>
	<li class="cai" onclick="location.href='cashDetail.html'">
		<img src="/dev/devjiu/Public/Home/img/tab/shouhuo.png" alt="">
		<span>明细</span>
	</li>
	<!-- <li onclick="location.href='friend.html';">
        <img src="/dev/devjiu/Public/Home/img/tab/friend.png" alt="" class="">
        <span>好友</span>
    </li> -->
	<li class="store" id="store">
		<img src="/dev/devjiu/Public/Home/img/tab/shop1.png" alt="">
		<span>商店</span>
	</li>
	<li class="store" onclick="location.href='/dev/devjiu/index.php/Home/Message/mailBox.html'">
		<img src="/dev/devjiu/Public/Home/img/tab/mail.png" alt="">
		<span>邮箱</span>
	</li>
	<li onclick="location.href='/dev/devjiu/index.php/Home/User/my.html';">
		<img src="/dev/devjiu/Public/Home/img/tab/my.png" alt="" class="">
		<span>我的</span>
	</li>
</ul>

<!-- 商店弹窗 -->
<div class="shadow_mask" id="shopShow">
	<div class="model"></div>
	<div class="maskContent" id="shopMask">
		<div class="main_pop_head">
			<span class="main_return"></span>
			<span>商店</span>
			<img src="/dev/devjiu/Public/Home/img/x.png" alt="" class="closeImg">
		</div>

		<?php if(is_array($productlist)): foreach($productlist as $key=>$v): ?><ul class="maskList">
			<li>
				<img src="<?php echo ($v["pic"]); ?>" alt="">
				<ul>
					<li><?php echo ($v["name"]); ?>：<?php echo ($v["cont"]); ?></li>
					<li>￥<?php echo ($v["price"]); ?></li>
				</ul>
				<span class="buySpan" data-money="<?php echo ($v["price"]); ?>" data-id="<?php echo ($v["id"]); ?>" data-kucun="<?php echo ($v["left"]); ?>">购买</span>
			</li>
		</ul><?php endforeach; endif; ?>
	</div>
	<!-- 购买弹窗 -->
	<div class="maskContent hidden" id="shopMask1">
		<div class="main_pop_head">
			<img src="/dev/devjiu/Public/Home/img/return.png" alt="" class="returnImg">
			<span>确认购买</span>
			<img src="/dev/devjiu/Public/Home/img/x.png" alt="" class="closeImg">
		</div>
		<form action="/dev/devjiu/index.php/Home/Index/buyProduct" method="post"  enctype="multipart/form-data">
			<input type="hidden" name="goodsMoney" id="goodsMoney">
			<input type="hidden" name="goodsId" id="goodsId">
			<ul>
				<li class="main_com_li">
					<span class="main_com_li_left">库存:</span>
					<input type="text" id="kuncun" name="kucun" disabled="disabled" value="500">
				</li>
				<li class="main_com_li">
					<span class="main_com_li_left">购买数量:</span>
					<input type="number" name="num" value="1" id="buy_num">
				</li>
			</ul>
			<button type="button" class="shippAddress">填写收货地址</button>
			<button type="submit" class="confirm">确认购买</button>
		</form>
	</div>
	<!-- 购买弹窗end -->

	<!-- 收货地址弹窗 -->
	<div class="maskContent" id="adressMask">
		<div class="main_pop_head">
			<img src="/dev/devjiu/Public/Home/img/return.png" alt="" class="returnImg">
			<span>填写收货地址</span>
			<img src="/dev/devjiu/Public/Home/img/x.png" alt="" class="closeImg">
		</div>
		<form action="/dev/devjiu/index.php/Home/Index/buyProduct"  method="post"  enctype="multipart/form-data">
			<input type="hidden" name="goodsMoney" id="goodsMoney1">
			<input type="hidden" name="goodsId" id="goodsId1">
			<input type="hidden" name="kucun" id="kucun1">
            <input type="hidden" name="num" id="buy_num1">
			<ul>
				<li class="main_com_li">
					<span class="main_com_li_left">收货人地址:</span>
					<input type="text" name="addr">
				</li>
				<li class="main_com_li">
					<span class="main_com_li_left">收货人姓名:</span>
					<input type="text" name="username">
				</li>
				<li class="main_com_li">
					<span class="main_com_li_left">收货人电话:</span>
					<input type="text" name="tel">
				</li>
				<li class="main_com_li">
					<span class="main_com_li_left">当前运费:</span>
					<input type="text" name="yunfei" value="<?php echo ($yunfei); ?>" disabled="disabled">
				</li>
				<li class="main_com_li">
					<span class="main_com_li_left">邮编:</span>
					<input type="text" name="youbian">
				</li>
				<div class="code_tip">请扫描下方二维码支付运费</div>
				<img src="/dev/devjiu/Public/Home/img/code.jpg" alt="" class="codeimg">
			</ul>

			<button type="submit" class="confirm">确认购买</button>
		</form>
	</div>
	<!-- 收货地址弹窗end -->

</div>
<!-- 商店弹窗end -->








<!-- 仓库弹窗 -->
<div class="shadow_mask" id="houseShow">
	<div class="model"></div>
	<div class="houseContent">
		<div class="main_pop_head">
			<span class="main_return"></span>
			<span>仓库</span>
			<img src="/dev/devjiu/Public/Home/img/x.png" alt="" class="closeImg">
		</div>
		<ul class="maskList">
			<li>
				<img src="/dev/devjiu/Public/Home/img/p_3.png" alt="">
				<ul>
					<li>酒窖：酿酒必备工具</li>
					<li>数量：<?php echo ($diproduct); ?></li>
				</ul>
				<span class="useSpan" data-id="1">使用</span>
			</li>
			<li>
				<img src="/dev/devjiu/Public/Home/img/p_4.png" alt="">
				<ul>
					<li>小麦：酿酒</li>
					<li>数量：<?php echo ($username["jingbag"]); ?></li>
				</ul>
				<span class="useSpan" data-id="2">使用</span>
			</li>

		</ul>
	</div>
</div>
<!-- 仓库弹窗 -->
<!-- 仓库弹窗 -->
<div class="shadow_mask" id="houseShow1">
	<div class="model"></div>
	<div class="houseContent">
		<div class="main_pop_head">
			<span class="main_return"></span>
			<span>仓库</span>
			<img src="/dev/devjiu/Public/Home/img/x.png" alt="" class="closeImg">
		</div>
		<ul class="maskList">
			<li>
				<img src="/dev/devjiu/Public/Home/img/p_3.png" alt="">
				<ul>
					<li>酒桶：酿酒</li>
					<li>数量：<?php echo ($diproduct); ?></li>
				</ul>
				<span class="useSpan" data-id="1">使用</span>
			</li>
			<li>
				<img src="/dev/devjiu/Public/Home/img/p_4.png" alt="">
				<ul>
					<li>小麦：对对对</li>
					<li>数量：<?php echo ($username["jingbag"]); ?></li>
				</ul>
				<span class="useSpan" data-id="2">使用</span>
			</li>
		</ul>
	</div>
</div>
<input type="hidden" id="landId">
<!-- 仓库弹窗 -->
<script type="text/javascript">
    $('body').height($(window).height());

</script>
</body>
</html>