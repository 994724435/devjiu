<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>个人中心</title>
        <link href="/mifnew/Public/Home/css/bootstrap.min.css" rel="stylesheet">
        <link href="/mifnew/Public/Home/css/aui.min.css" rel="stylesheet">
        <link href="/mifnew/Public/Home/css/mui.picker.css" rel="stylesheet">
        <link href="/mifnew/Public/Home/css/mui.poppicker.css" rel="stylesheet">
        <link href="/mifnew/Public/Home/css/style.css" rel="stylesheet">
         <script type="text/javascript" src="/mifnew/Public/Home/js/jquery-3.1.1.min.js"></script>
         <script type="text/javascript" src="/mifnew/Public/Home/js/aui.js"></script>
        <script type="text/javascript" src="/mifnew/Public/Home/js/mui.picker.js"></script>
        <script type="text/javascript" src="/mifnew/Public/Home/js/mui.poppicker.js"></script>
        <script type="text/javascript" src="/mifnew/Public/Home/js/bootstrap.min.js"></script>
        <style>
         .buy{width: 25%;background: #337ab7;color: #fff;height: 100%;float: right;text-align: center;font-size: 15px;}
         label{width: 70%;padding: 8px 3px;font-weight: normal;box-sizing: border-box;margin-bottom: 0;font-size: 14px;}
         /*.mui-input-group .mui-input-row{min-height: 41px;}*/
         .lest{padding: 0 0 0 3px;background: #fff;border-bottom: 1px solid #eee;}
        </style>
    </head>
<body class="bodyColor">
	  <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">交易大厅</h1>
	</header>
	<div class="mui-content">
        <?php if(is_array($nextlog)): foreach($nextlog as $key=>$v): ?><div class="lest">
                <label><?php echo ($v["username"]); ?> 挂卖金币：<?php echo ($v["income"]); ?></label>

                <?php if($v["state"] == 4): if($v["orderid"] == 1): ?><button class="buy" style="background:cadetblue;">等待打款</button><?php endif; ?>
                    <?php if($v["orderid"] == 2): ?><a href="/mifnew/index.php/Home/Index/dakuan/id/<?php echo ($v["commitid"]); ?>"><button class="buy">确认打款</button></a><?php endif; endif; ?>

                <?php if($v["state"] == 5): if($v["orderid"] == 1): ?><a href="/mifnew/index.php/Home/Index/dakuan/id/<?php echo ($v["commitid"]); ?>"><button class="buy">确认收款</button></a><?php endif; ?>
                    <?php if($v["orderid"] == 2): ?><button class="buy" style="background:cadetblue;">等待收款</button><?php endif; endif; ?>

            </div><?php endforeach; endif; ?>


        <?php if(is_array($log)): foreach($log as $key=>$v): ?><div class="lest">
             <label><?php echo ($v["username"]); ?> 挂卖金币：<?php echo ($v["income"]); ?></label>
             <a href="/mifnew/index.php/Home/User/buys/id/<?php echo ($v["id"]); ?>"><button class="buy">我要购买</button></a>
          </div><?php endforeach; endif; ?>


	</div>
  <script type="text/javascript">
     
  </script>
</body>
</html>