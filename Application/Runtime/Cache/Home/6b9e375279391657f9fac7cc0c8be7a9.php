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
         
        </style>
    </head>
<body class="bodyColor">
	  <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">交易大厅</h1>
	</header>
	<div class="mui-content">
     <!-- 这里是两种状态 -->
      <button class="mui-btn mui-btn-block" onclick="location.href='rechargeInfo.html'">点击查看当前平台挂卖金币</button>

    <!-- 第一种 -->
       <form class="mui-input-group" style="margin-top: 20px;"  action="" method="post" enctype="multipart/form-data">
          <div class="mui-input-row">
              <label>金币数量</label>
             <input type="number" name="money" class="mui-input-clear" placeholder="挂卖金币数量">
          </div>
          <div class="mui-input-row">
              <label>微信</label>
             <input type="text" name="weixin" class="mui-input-clear" placeholder="微信">
          </div>
           <div class="mui-input-row">
              <label>电话</label>
             <input type="number" name="tel" class="mui-input-clear" placeholder="电话">
          </div>
          <button class="mui-btn mui-btn-block">我要挂卖</button>
      </form>
      <!-- 第二种 -->

	</div>
</body>
</html>