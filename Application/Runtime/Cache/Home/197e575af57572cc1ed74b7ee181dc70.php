<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
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
            .mui-content{background: #fff;}
        </style>
    </head>
    <body>
        <!-- 公共头部 -->
        <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_411407_a93ufzj32h3vunmi.css">
<script type="text/javascript" src="/mifnew/Public/Home/js/jquery-3.1.1.min.js"></script>
<div class="container noPadding">
    <nav class="navbar navbar-default mynavbar">
        <div class="container-fluid">
            <!--按钮-->
            <div class="navbar-header">
                <img src="/mifnew/Public/Home/images/logo.gif" alt="" class="logoImg">
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
        <a href="/mifnew/index.php/Home/Index/introduce.html"><i class="iconfont icon-jianjie"></i>公司简介</a>
        </li>    
        <li><a href="/mifnew/index.php/Home/Index/types/type/2"><i class="iconfont icon-gonggao"></i>公司公告</a></li>    
        <li> <a href="/mifnew/index.php/Home/Index/K.html"><i class="iconfont icon-icon-test"></i>同步k线图</a></li>    
        <!--<li><a href="/mifnew/index.php/Home/Index/types/type/3"><i class="iconfont icon-tuandui"></i>值班团队</a></li>    -->
        <!--<li><a href="/mifnew/index.php/Home/Index/types/type/4"><i class="iconfont icon-zhuanjia"></i>分析专家</a></li>    -->
        <li> <a href="/mifnew/index.php/Home/User/my.html"><i class="iconfont icon-gerenzhongxinxia"></i>个人中心</a></li>    
        <li><a href="/mifnew/index.php/Home/Index/gongpai.html"><i class="iconfont icon-xunhuan"></i>ARS公排</a></li>    
        <li><a href="/mifnew/index.php/Home/Index/share/id/<?php echo ($username["uid"]); ?>"><i class="iconfont icon-fenxiang"></i>ARS分享</a></li>    
        <li><a href="/mifnew/index.php/Home/Login/login"><i class="iconfont icon-tuichu"></i>退出系统</a></li>    
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
            <div class="mui-content">
            <ul class="tab">
              <li>
                <ul>
                  <li>动态钱包</li>
                  <li><?php echo ($username["dongbag"]); ?></li>
                  <li><button type="button" class="btn btn-primary btn-xs" onclick="location.href='/mifnew/index.php/Home/User/transfer/type/1'">转账</button>
                  <!--<button type="button" class="btn btn-default btn-xs" onclick="location.href='tixian_dong.html'">提现</button></li>-->
                </ul>
              </li>
              <li>
                <ul>
                  <li>静态钱包</li>
                  <li><?php echo ($username["jingbag"]); ?></li>
                  <li><button type="button" class="btn btn-primary btn-xs" onclick="location.href='/mifnew/index.php/Home/User/transfer/type/2'">转账</button>
                  <!--<button type="button" class="btn btn-default btn-xs" onclick="location.href='tixian_jing.html'">提现</button></li>-->
                </ul>
              </li>
              <li>
              </li>
            </ul>
                <ul class="mui-table-view">
                 <!--  <li class="mui-table-view-cell">
                       充值钱包
                       <span class="fr">余额：<?php echo ($username["chargebag"]); ?></span>
                  </li> -->
                  <li class="mui-table-view-cell">
                     <a class="mui-navigate-right" href="recharge.html">
                      交易大厅
                       </a>
                  </li>
                  <li class="mui-table-view-cell">
                     <a class="mui-navigate-right" href="my_data.html">
                       个人资料
                       </a>
                  </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="washan_data.html">
                        资料完善
                      </a>
                    </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="buyMit.html">
                        买入ARS币
                      </a>
                    </li>
                  
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="jingtai.html">
                        静态收益
                      </a>
                    </li>
                     <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="dongtai.html">
                        动态收益
                      </a>
                    </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="my_gruop.html">
                         我的团队
                      </a>
                    </li>
                    <li class="mui-table-view-cell">
                      <a class="mui-navigate-right" href="kefu.html">
                        在线客服
                      </a>
                    </li>

                </ul>
               <!--  <ul class="nav grid" id="myGRid">
                    <li>
                        <a href="/mifnew/index.php/Home/Index/choose.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_12.jpg" alt="" class="iconImg" style="width: 46%;"></div>
                            <div class="gridText">积分充值</div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_22.png" alt="" class="iconImg" style="width: 46%;"></div>
                            <div class="gridText" style="font-size: 12px;">充值钱包:<?php echo ($username["chargebag"]); ?></div>
                        </a>
                    </li>
                    <li>
                        <a href="my_data.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_8.png" alt="" class="iconImg"></div>
                            <div class="gridText">个人资料</div>
                        </a>
                    </li>
                    <li>
                        <a href="washan_data.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_18.png" alt="" class="iconImg"></div>
                            <div class="gridText">资料完善</div>
                        </a>
                    </li>
                    <li>
                        <a href="buyMit.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_11.jpg" alt="" class="iconImg"></div>
                            <div class="gridText">买入MIF币</div>
                        </a>
                    </li>

                    <li>
                        <a href="jingtai.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_13.jpg" alt="" class="iconImg"></div>
                            <div class="gridText">静态收益</div>
                        </a>
                    </li>
                    <li>
                        <a href="dongtai.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_4.png" alt="" class="iconImg"></div>
                            <div class="gridText">动态收益</div>
                        </a>
                    </li>
                    <li>
                        <a href="my_gruop.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_17.jpg" alt="" class="iconImg"></div>
                            <div class="gridText">我的团队</div>
                        </a>
                    </li>
                    <li>
                        <a href="kefu.html">
                            <div class="iconImgDiv"><img src="/mifnew/Public/Home/images/mif/p_14.png" alt="" class="iconImg"></div>
                            <div class="gridText">在线客服</div>
                        </a>
                    </li>
                </ul> -->
              </div>
            </div>
       
        <script>
        
        </script>
    </body>

</html>