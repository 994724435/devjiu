<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>转账</title>
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
         
        </style>
    </head>
</head>
<body class="bodyColor">
    <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title"><?php echo ($title); ?></h1>
	</header>

	<!-- 以下信息 有才显示 -->
	<div class="mui-content">
		<ul class="mui-table-view">
			<!--<li class="mui-table-view-cell">-->
				<!--<a href ="/mifnew/index.php/Home/User/transferto/type/<?php echo ($type); ?>"> 转到充值钱包</a>-->
			<!--</li>-->
			<li class="mui-table-view-cell">
				<a href ="/mifnew/index.php/Home/User/<?php echo ($action); ?>"> 转到其他账户</a>
			</li>
			
		</ul>
	</div>
</body>
</html>