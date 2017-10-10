/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : devjiu

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2017-10-10 23:11:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for p_article
-- ----------------------------
DROP TABLE IF EXISTS `p_article`;
CREATE TABLE `p_article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) DEFAULT NULL,
  `type` int(11) DEFAULT '1' COMMENT '1首页 2公告 3值班团队 4分析专家 5公司简介',
  `cont` text,
  `addtime` varchar(128) DEFAULT NULL,
  `addymd` varchar(128) DEFAULT NULL,
  `admin` varchar(64) DEFAULT NULL,
  `num` int(11) DEFAULT '1',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_article
-- ----------------------------
INSERT INTO `p_article` VALUES ('1', '曼雷弗风控基金', '1', '<p class=\"MsoNormal\" align=\"right\" style=\"text-indent:12.0500pt;text-align:right;\">\r\n	<b>&nbsp;صنإندوق إدارة المخاطر (الدولي) مانويل </b><b><span>【</span>MIF<span>】</span></b><b>هو صندوق التحكم في مخاطر تداول الأسهم في العالم (هو مسمى </b><b>MIF</b><b>&nbsp;في التالي)، وإن الحكومة الجزائرية وصندوق الصخرة الألماني وجمعية </b><b>JRT</b><b>&nbsp;المالية الهولندية وأسرة </b><b>R</b><b>·</b><b>BY</b><b>&nbsp;</b><b>السويد، أسرة الكليفلاند الأمريكية هم إستثمرو أربعة مليارات وثمانمائة مليون دولارا لبناء هذا الصندوق.</b><b></b> \r\n</p>\r\n<br />', '2017-08-16 09:20:25', '2017-08-16', 'admin', '1');
INSERT INTO `p_article` VALUES ('2', '公司资质', '2', '<h1 style=\"text-indent:2em;\">\r\n	<b><span style=\"font-size:24px;color:#9933E5;\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src=\"/Public/Admin/js/attached/image/20170822/20170822181457_99467.png\" alt=\"\" /></strong></span></b> \r\n</h1>\r\n<h1 style=\"text-indent:2em;\">\r\n	<b><span style=\"font-size:24px;color:#9933E5;\"><strong> &nbsp;曼雷弗（国际）风控基金【MIF】</strong></span></b> \r\n</h1>\r\n<h1 style=\"text-indent:2em;\">\r\n	<b><span style=\"font-size:24px;color:#9933E5;\"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 中华区营业执照</strong></span></b> \r\n</h1>\r\n<p>\r\n	<b><span style=\"font-size:24px;color:#9933E5;\"><strong><img src=\"/Public/Admin/js/attached/image/20170823/20170823152313_26476.jpg\" alt=\"\" /><br />\r\n</strong></span></b> \r\n</p>\r\n<p>\r\n	<b><span style=\"font-size:24px;color:#9933E5;\"><strong>&nbsp; &nbsp; &nbsp;&nbsp;</strong></span></b> \r\n</p>\r\n<h1 style=\"text-indent:2em;\">\r\n	<b><span style=\"color:#9933E5;font-size:24px;\">&nbsp; &nbsp; &nbsp; &nbsp;曼雷弗（国际）风控基金【MIF】</span></b> \r\n</h1>\r\n<div>\r\n	<p style=\"text-indent:48px;\">\r\n		<span><span style=\"font-size:24px;\"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;国际域名证书</b></span></span> \r\n	</p>\r\n	<p>\r\n		<b><span style=\"font-size:24px;color:#9933E5;\"><strong><img src=\"/Public/Admin/js/attached/image/20170823/20170823152335_46746.jpg\" alt=\"\" /><br />\r\n<span style=\"font-size:24px;\"></span></strong></span></b> \r\n	</p>\r\n	<h1 style=\"text-indent:2em;\">\r\n		<b><span style=\"color:#9933E5;font-size:24px;\">&nbsp; &nbsp; &nbsp; 曼雷弗（国际）风控基金【MIF】</span></b> \r\n	</h1>\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style=\"text-indent:48px;\">\r\n	<span><span style=\"font-size:24px;\"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;总部地理位置地标图</b></span></span> \r\n</p>\r\n<p style=\"text-indent:48px;\">\r\n	<span><span style=\"font-size:24px;\"><b><img src=\"/Public/Admin/js/attached/image/20170823/20170823152352_81919.png\" alt=\"\" /><br />\r\n</b></span></span> \r\n</p>\r\n<p style=\"text-indent:48px;\">\r\n	<span><span style=\"font-size:24px;\"><b><br />\r\n</b></span></span> \r\n</p>\r\n<p>\r\n	<b><span style=\"font-size:24px;color:#9933E5;\"><strong></strong></span></b><b><span style=\"font-size:24px;color:#9933E5;\"><strong><span style=\"font-size:24px;\"><br />\r\n<span style=\"font-size:24px;\"></span></span></strong></span></b> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>', '2017-08-23 15:24:02', '2017-08-23', 'admin', '1');
INSERT INTO `p_article` VALUES ('5', 'Surge tanks—狂飙战车', '3', '<h1>\r\n	&nbsp; Surge tanks\r\n</h1>\r\n<h1>\r\n	&nbsp; &nbsp;狂飙战车<br />\r\n</h1>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"/Public/Admin/js/attached/image/20170822/20170822133443_75438.jpg\" alt=\"\" />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:justify;\">\r\n	&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style=\"font-size:24px;font-family:&quot;\"><strong>狂飙战车隶属于</strong></span><b><span style=\"font-size:24px;font-family:&quot;\"><strong>荷兰</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>JRT</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>财团，团队主攻南美风投市场操盘，成立于</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>2013</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>年</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>3</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>月，最高战绩日复利</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>246%</strong></span><span style=\"font-size:24px;font-family:&quot;\"><strong>，打造风控市场狂飙业绩；激情奔放热情，稳健把控市场动向，深受大玩家追捧！</strong></span></b><b></b> \r\n</p>\r\n<p class=\"MsoNormal\" style=\"text-align:justify;\">\r\n	<span style=\"font-size:24px;font-family:&quot;\"><strong>The driving force is affiliated to the Dutch JRT consortium, and the team is responsible for the South American vc market operation. It was established in March 2013, with a record high performance of 246%. Passion and dynamic situation, steady control market trend, is very popular with the big players!</strong></span><b></b> \r\n</p>\r\n<span style=\"font-size:24px;font-family:&quot;\"><strong></strong></span> \r\n<p>\r\n	<br />\r\n</p>', '2017-08-22 13:34:47', '2017-08-22', 'admin', '1');
INSERT INTO `p_article` VALUES ('6', 'MIF分析专家', '4', '<p>\r\n	<span style=\"font-size:32px;\">曼雷弗（国际）风控基金资深分析专家：</span>\r\n</p>\r\n<p>\r\n	<span style=\"font-size:32px;\"><img src=\"/Public/Admin/js/attached/image/20170824/20170824120830_13706.jpg\" alt=\"\" /><br />\r\n</span>\r\n</p>', '2017-08-24 12:08:35', '2017-08-24', 'admin', '1');
INSERT INTO `p_article` VALUES ('7', '公司简介', '5', '<table class=\"table\" style=\"width:1272px;color:#333333;font-family:Roboto, sans-serif;font-size:16px;\">\r\n	<tbody>\r\n		<tr class=\"info\">\r\n			<th style=\"text-align:left;vertical-align:top;font-size:0.85em;color:#999999;background-color:#D9EDF7;\">\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:24px;color:#9933E5;\"><span>&nbsp; 曼雷弗（国际）风控基金【</span></span><span style=\"font-size:24px;color:#9933E5;\"><span>MIF</span></span><span style=\"font-size:24px;color:#9933E5;\"><span>】</span></span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span>صندوق إدارة المخاطر (الدولي) مانويل</span><span>المقدمة الموجزة</span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">曼雷弗（国际）风控基金简称【</span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">】是由阿尔及利亚政府及德国磐石基金、荷兰</span><span style=\"font-size:18px;\">JRT</span><span style=\"font-size:18px;\">财团、瑞典</span><span style=\"font-size:18px;\">R</span></span><span><span style=\"font-size:18px;\">·</span></span><span><span style=\"font-size:18px;\">BY</span><span style=\"font-size:18px;\">家族、美国克利夫兰家族共同出资</span><span style=\"font-size:18px;\">48</span><span style=\"font-size:18px;\">亿美元所组成的全球股权交易风控基金（下称</span></span><span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">）</span></span><span><span style=\"font-size:18px;\">。</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-indent:2em;text-align:right;\">\r\n					<span><span style=\"font-size:18px;\">إن صندوق إدارة المخاطر (الدولي) مانويل&nbsp;</span></span><span><span style=\"font-size:18px;\">【</span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">】</span></span><span><span style=\"font-size:18px;\">هو صندوق التحكم في مخاطر تداول الأسهم في العالم (هو مسمى&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;في التالي)، وإن الحكومة الجزائرية وصندوق الصخرة الألماني وجمعية&nbsp;</span></span><span><span style=\"font-size:18px;\">JRT</span></span><span><span style=\"font-size:18px;\">&nbsp;المالية الهولندية وأسرة</span></span><span><span style=\"font-size:18px;\">R</span></span><span><span style=\"font-size:18px;\">·</span></span><span><span style=\"font-size:18px;\">BY</span></span><span><span style=\"font-size:18px;\">&nbsp;</span></span><span><span style=\"font-size:18px;\">السويد، أسرة الكليفلاند الأمريكية هم إستثمرو أربعة مليارات وثمانمائة مليون دولارا لبناء هذا الصندوق.</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-indent:2em;text-align:right;\">\r\n					<span><span style=\"font-size:18px;\">&nbsp;</span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">成立于</span><span style=\"font-size:18px;\">2014</span><span style=\"font-size:18px;\">年</span><span style=\"font-size:18px;\">9</span><span style=\"font-size:18px;\">月，总部位于阿尔及利亚比斯克拉省首府比斯克拉苏埃尔大街</span><span style=\"font-size:18px;\">1698</span><span style=\"font-size:18px;\">号。</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-indent:2em;text-align:right;\">\r\n					<span><span style=\"font-size:18px;\">إن تأسُس&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;في سبتمبر في عام 2014، ومركزه الرئيسي وقع في رقم 1698 من شارع سيويل من حاضرة محافظة بسكرة&nbsp;</span></span><span><span style=\"font-size:18px;\">–</span></span><span><span style=\"font-size:18px;\">&nbsp;الجزائر.</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">目前拥有阿尔及利亚比斯克拉省油田储量</span><span style=\"font-size:18px;\">3864</span><span style=\"font-size:18px;\">万桶，高储量精选钻石矿</span><span style=\"font-size:18px;\">3</span><span style=\"font-size:18px;\">座。主要业务涵盖</span></span><span><span style=\"font-size:18px;\">全球股权交易风控、石油开发、钻石开采、酒店管理、体育博彩等二十几类业务。</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-align:right;text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">يملك&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;ثمانية وثلاثين مليون و ستمائة وأربعين ألف برميلا من النفط من احتياطي النفط في محافظة بسكرة&nbsp;</span></span><span><span style=\"font-size:18px;\">–</span></span><span><span style=\"font-size:18px;\">&nbsp;الجزائر، وثلاثة مناجم الماس المميز الآن ولهم احتياطي الماس الكبير . تضمنت الأعمال الرئيسية الأكثر من عشرين العمل مثل التحكم في مخاطر تداول الأسهم في العالم، واستخراج النفط واستخراج الماس وإدارة الفنادق، الرهان الرياضي وإلخ.</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">独创的</span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">数据网络区域链</span></span><span><span style=\"font-size:18px;\">MIF(Memory Initialization File)</span><span style=\"font-size:18px;\">文件是</span></span><span><span style=\"font-size:18px;\">MapInfo</span></span><span><span style=\"font-size:18px;\">通用数据交换格式，这种格式是</span><span style=\"font-size:18px;\">ASCⅡ</span><span style=\"font-size:18px;\">码，可以编辑，容易生成，且可以工作在支持</span><span style=\"font-size:18px;\">MapInfo</span><span style=\"font-size:18px;\">的所有平台上</span></span><span><span style=\"font-size:18px;\">。</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-indent:2em;text-align:right;\">\r\n					<span><span style=\"font-size:18px;\">إن سلسلة&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;بيانات الشبكة المحلية التي هي مبتكرة من&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">، وثيقة</span></span><span><span style=\"font-size:18px;\">&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;(ملف تهيئة الذاكرة) هي تهيئة</span></span><span><span style=\"font-size:18px;\">MapInfo</span></span><span><span style=\"font-size:18px;\">&nbsp;لتبادل البيانات المشتركة، وهذه التهيئة هي</span></span><span><span style=\"font-size:18px;\">ASC</span></span><span><span style=\"font-size:18px;\">Ⅱ</span></span><span><span style=\"font-size:18px;\">، فممكن أن تحررها ومن السهل توليدها، وبالإضافة إلى ذلك، ممكن أنها مستخدمة في أي سطوح التدعيم</span></span><span><span style=\"font-size:18px;\">MapInfo</span></span><span><span style=\"font-size:18px;\">.</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">通过</span></span><span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">旗下各大财团高级理财风控专家团队每天精准分析，遴选出全球</span><span style=\"font-size:18px;\">34</span><span style=\"font-size:18px;\">个国家股权交易市场绩优股权进行操作交易，实现基金投资客财富增值，进一步提升风控基金的稳健运营，降低交易风险！</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-align:right;text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">اختيار الأسهم ذات الجودة العالية من سوق الأسهم من 34 دولة في جميع أنحاء العالم لتداول الأسهم وفقا للتحليل الدقيق اليومي من فريق كبار الخبراء من الجمعيات المالية ل</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;لمراقبة المخاطر المالية، الأمر الذي يؤدي إلى المستثمرين يزيدون الثروة، ويقوي إجراء العملية السلمية للحد من مخاطر الصندوق، ويقلل مخاطر الصفقة!</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" style=\"text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">2017</span><span style=\"font-size:18px;\">年</span><span style=\"font-size:18px;\">6</span><span style=\"font-size:18px;\">月，</span><span style=\"font-size:18px;\">MIF</span><span style=\"font-size:18px;\">正式启动中华区（含中国、东南亚、朝鲜半岛、日本、印度等）交易市场。并委托位于中国（四川）自由贸易实验区成都高新区吉泰五路</span><span style=\"font-size:18px;\">88</span><span style=\"font-size:18px;\">号</span><span style=\"font-size:18px;\">3</span><span style=\"font-size:18px;\">栋</span><span style=\"font-size:18px;\">9</span><span style=\"font-size:18px;\">层</span><span style=\"font-size:18px;\">5</span><span style=\"font-size:18px;\">号的成都曼雷弗网络科技有限公司负责中华区网络维护、市场巡查、会员管理、基金定投发放等相关业务。</span></span><span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-align:right;text-indent:2em;\">\r\n					<span><span style=\"font-size:18px;\">يونيو في عام 2017، فتح&nbsp;</span></span><span><span style=\"font-size:18px;\">MIF</span></span><span><span style=\"font-size:18px;\">&nbsp;السوف في منطقة آسيا(من ضمنها الصين وجنوب سرق آسي وشبه الجزيرة الكورية واليابان والهند وإلخ). ثم أسند شركة مانويل الشبكة والتكنولوجيا المحدودة بتشنغدو التي موقعها في الغرفة 5 الطابق 9 العمارة 3 رقم 88 من شارع جي تاي الخامس&nbsp;</span></span><span><span style=\"font-size:18px;\">–</span></span><span><span style=\"font-size:18px;\">الحي العالي والجديد بتشنغدو&nbsp;</span></span><span><span style=\"font-size:18px;\">–</span></span><span><span style=\"font-size:18px;\">&nbsp;منطقة التجارة الحرة التجريبية&nbsp;</span></span><span><span style=\"font-size:18px;\">–</span></span><span><span style=\"font-size:18px;\">&nbsp;(سيتشوان) الصين لمسؤولة عن صيانة الشبكة في منطقة آسيا، وتفتيش السوق وإدارة الأعضاء وقرارات إستخدام الموارد المالية والأعمال الأخرى المتعلقة.</span></span>\r\n				</p>\r\n				<p class=\"MsoNormal\" align=\"right\" style=\"text-align:right;text-indent:2em;\">\r\n					<span><span style=\"font-size:24px;\">曼雷弗（国际）风控基金：</span></span><span><span style=\"font-size:24px;\">您身边的财富增值天使，期待与</span></span><span><span style=\"font-size:24px;\">您扬帆起航</span><span style=\"font-size:24px;\">!!!</span></span><span><span style=\"font-size:24px;\">&nbsp;&nbsp;</span>&nbsp; &nbsp; &nbsp;&nbsp;</span>\r\n				</p>\r\n				<div>\r\n					<span><br />\r\n</span>\r\n				</div>\r\n			</th>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2017-08-16 09:55:01', '2017-08-16', 'admin', '1');
INSERT INTO `p_article` VALUES ('17', 'Diamond light——钻石之光', '3', '<h1>\r\n	<span style=\"color:#9933E5;\">&nbsp; &nbsp; Diamond light——钻石之光</span><span style=\"color:#9933E5;\"></span><br />\r\n</h1>\r\n<p>\r\n	<span style=\"color:#9933E5;\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src=\"/Public/Admin/js/attached/image/20170823/20170823155004_85017.jpg\" alt=\"\" /><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#9933E5;\"> </span> \r\n</p>\r\n<h1>\r\n	<span style=\"color:#333333;\">&nbsp; <strong>&nbsp;&nbsp;\r\n	<h1>\r\n		<span style=\"color:#333333;\">&nbsp;Diamond light——钻石之光 &nbsp; &nbsp; &nbsp;</span><span style=\"color:#333333;\"><span style=\"font-size:24px;\">团队隶属于</span></span><span style=\"font-size:24px;\">阿尔及利亚政府金融智囊机构，主要负责矿</span><span style=\"font-size:24px;\">产石油类交易市场分析，具有敏锐的市场前瞻性和风险把控能力，以犀利、果断和较强</span>\r\n		<p>\r\n			<span style=\"font-size:24px;\">的执行力而著称！！</span>\r\n		</p>\r\n	</h1>\r\n</strong></span>\r\n</h1>\r\n<h1>\r\n	<span style=\"color:#333333;\"><strong> </strong></span> \r\n</h1>', '2017-08-23 17:04:37', '2017-08-23', 'admin', '1');
INSERT INTO `p_article` VALUES ('19', '公司简介及收益模式', '2', '<h1>\r\n	<img src=\"/Public/Admin/js/attached/image/20170824/20170824115340_95220.jpg\" alt=\"\" /><br />\r\n</h1>\r\n<h1>\r\n	曼雷弗（国际）风控基金MIF公司\r\n</h1>\r\n<h1>\r\n	简介及收益模式:\r\n</h1>\r\n<p>\r\n	<a href=\"http://u.eqxiu.com/s/Mp9vNzoO\"><span style=\"color:#E53333;font-size:24px;\"><strong>http://u.eqxiu.com/s/Mp9vNzoO</strong></span></a> \r\n</p>', '2017-08-24 12:03:48', '2017-08-24', 'admin', '1');
INSERT INTO `p_article` VALUES ('18', 'Extreme storm——极限风暴', '3', '<h1>\r\n	<img src=\"/Public/Admin/js/attached/image/20170823/20170823165501_40912.jpg\" alt=\"\" /><br />\r\n</h1>\r\n<h1>\r\n	&nbsp; &nbsp;<span style=\"color:#9933E5;\">Extreme storm——极限风暴</span>\r\n</h1>\r\n<p>\r\n	<span style=\"color:#9933E5;\">&nbsp; &nbsp; <span style=\"font-size:24px;color:#000000;\"><strong>极限风暴</strong></span><span style=\"color:#000000;font-family:&quot;font-size:24px;line-height:27px;background-color:#FFFFFF;\"><strong>团队是由从业于金融、互联网、实业投资等行业多年的精英团队组成。团队成员均毕业于各著名高等院校，具备丰富的金融、法律、互联网、实业投资等相关行业经验。具备丰富的实业项目、金融服务机构风险管理控制、互联网技术安全经验</strong></span><span style=\"font-size:24px;color:#000000;\"><strong></strong></span></span>\r\n</p>', '2017-08-23 17:00:43', '2017-08-23', 'admin', '1');
INSERT INTO `p_article` VALUES ('20', 'MIF操作指南', '2', '<h1>\r\n	<br />\r\n</h1>\r\n<h1>\r\n	<img src=\"/Public/Admin/js/attached/image/20170824/20170824120257_97846.jpg\" alt=\"\" />曼雷弗（国际）风控基金MIF操作指南：<br />\r\n</h1>\r\n<p>\r\n	<a href=\"http://a.eqxiu.com/s/tOqGTzd5\"><span style=\"color:#E53333;font-size:24px;\">http://a.eqxiu.com/s/tOqGTzd5</span><span style=\"color:#E53333;font-size:24px;\"></span></a> \r\n</p>', '2017-08-24 12:03:00', '2017-08-24', 'admin', '1');
INSERT INTO `p_article` VALUES ('21', '曼雷弗安卓版APP下载', '2', '<p>\r\n	<img src=\"/Public/Admin/js/attached/image/20170825/20170825134609_76360.jpg\" alt=\"\" /> \r\n</p>\r\n<h1>\r\n	曼雷弗（国际）风控基金安卓版手机APP下载：<a href=\"https://fir.im/sud7\"><span style=\"color:#E53333;\">https://fir.im/sud7</span></a> \r\n</h1>', '2017-08-25 13:49:18', '2017-08-25', 'admin', '1');
INSERT INTO `p_article` VALUES ('22', '曼雷弗苹果版APP下载', '2', '<p>\r\n	<img src=\"/Public/Admin/js/attached/image/20170825/20170825134609_76360.jpg\" alt=\"\" /> \r\n</p>\r\n<h1>\r\n	曼雷弗（国际）风控基金苹果版APP下载：<span style=\"color:#E53333;\"><a href=\"https://fir.im/qemn\">https://fir.im/qemn</a></span> \r\n</h1>\r\n<h1>\r\n</h1>', '2017-08-25 13:52:16', '2017-08-25', 'admin', '1');

-- ----------------------------
-- Table structure for p_config
-- ----------------------------
DROP TABLE IF EXISTS `p_config`;
CREATE TABLE `p_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `value` varchar(128) DEFAULT NULL,
  `complan` varchar(255) DEFAULT NULL COMMENT '注释说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_config
-- ----------------------------
INSERT INTO `p_config` VALUES ('1', '运费配置', '10', '运费配置');
INSERT INTO `p_config` VALUES ('2', '每日小麦', '30', '每日小麦');
INSERT INTO `p_config` VALUES ('3', '推荐奖 1代', '0.1', '推荐奖 1代');
INSERT INTO `p_config` VALUES ('4', '推荐奖 2代', '0.2', '推荐奖 2代');
INSERT INTO `p_config` VALUES ('5', '每天产酒量', '30', '每天产酒量');
INSERT INTO `p_config` VALUES ('6', '注册消耗酒票', '200', null);
INSERT INTO `p_config` VALUES ('7', '注册消耗激活票', '100', null);
INSERT INTO `p_config` VALUES ('8', '注册会员获得酒票', '200', null);
INSERT INTO `p_config` VALUES ('9', '回馈奖1代', '0.03', null);
INSERT INTO `p_config` VALUES ('10', '回馈奖2代', '0.025', null);
INSERT INTO `p_config` VALUES ('11', '回馈奖3代', '0.02', null);
INSERT INTO `p_config` VALUES ('12', '回馈奖4代', '0.015', null);
INSERT INTO `p_config` VALUES ('13', '回馈奖5代', '0.01', null);
INSERT INTO `p_config` VALUES ('14', '回馈奖6代', '0.01', null);
INSERT INTO `p_config` VALUES ('15', '最低提现金额', '30', '最大提现金额');
INSERT INTO `p_config` VALUES ('16', '每日最大提现次数', '1', '每日最大提现次数');
INSERT INTO `p_config` VALUES ('17', '公排价格', '70', '公排价格');
INSERT INTO `p_config` VALUES ('18', '静态提现手续费', '0.03', '静态提现手续费');
INSERT INTO `p_config` VALUES ('19', '动态提现手续费', '0.08', '动态提现手续费');

-- ----------------------------
-- Table structure for p_incomelog
-- ----------------------------
DROP TABLE IF EXISTS `p_incomelog`;
CREATE TABLE `p_incomelog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT '1' COMMENT '1收益 2充值 3静态提现  4动态体现  5 注册下级 6下单购买 7退本 8激活票转账 9酒票转账 10静态收益 11 动态收益 12售卖金币',
  `state` int(11) DEFAULT '1' COMMENT '1收入   2支出 3失败',
  `reson` varchar(255) DEFAULT NULL COMMENT '原因',
  `addymd` date DEFAULT NULL,
  `addtime` int(12) DEFAULT NULL,
  `orderid` varchar(100) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `income` varchar(64) DEFAULT '0' COMMENT '金额',
  `cont` varchar(1000) NOT NULL COMMENT '后台备注',
  `username` varchar(100) DEFAULT NULL,
  `commitid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14651 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_incomelog
-- ----------------------------
INSERT INTO `p_incomelog` VALUES ('14614', '10', '1', '静态收益', '2017-10-09', '1507556391', '1', '1', '30', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14615', '5', '2', '注册下级酒票', '2017-10-09', '1507556528', '1077', '1', '100', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14616', '5', '2', '注册下级激活票', '2017-10-09', '1507556528', '1077', '1', '100', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14617', '5', '2', '注册下级酒票', '2017-10-09', '1507556751', '1078', '1', '100', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14618', '5', '2', '注册下级激活票', '2017-10-09', '1507556751', '1078', '1', '100', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14619', '6', '2', '下单购买', '2017-10-09', '1507556916', '1078', '1078', '12', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14620', '11', '1', '推荐奖', '2017-10-09', '1507557020', '31', '1', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14621', '10', '1', '静态收益', '2017-10-09', '1507557020', '31', '1078', '30', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14622', '5', '2', '注册下级酒票', '2017-10-09', '1507557680', '1079', '1078', '100', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14623', '5', '2', '注册下级激活票', '2017-10-09', '1507557680', '1079', '1078', '100', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14624', '6', '2', '下单购买', '2017-10-09', '1507557750', '1079', '1079', '12', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14625', '11', '1', '推荐奖', '2017-10-09', '1507557817', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14626', '11', '1', '推荐奖', '2017-10-09', '1507557817', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14627', '10', '1', '静态收益', '2017-10-09', '1507557817', '60', '1079', '30', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14628', '12', '1', '小麦收益', '2017-10-10', '1507641223', '3', '3', '3.00', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14629', '6', '2', '下单购买', '2017-10-10', '1507644057', '1080', '1080', '12', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14630', '6', '2', '下单购买', '2017-10-10', '1507644083', '1080', '1080', '12', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14631', '6', '2', '下单购买', '2017-10-10', '1507644095', '1080', '1080', '24', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14632', '6', '2', '下单购买', '2017-10-10', '1507644366', '1080', '1080', '12', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14633', '6', '2', '下单购买', '2017-10-10', '1507644385', '1080', '1080', '48', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14634', '11', '1', '推荐奖', '2017-10-10', '1507644656', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14635', '11', '1', '推荐奖', '2017-10-10', '1507644656', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14636', '11', '1', '推荐奖', '2017-10-10', '1507644656', '71', '1', '9.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14637', '11', '1', '推荐奖', '2017-10-10', '1507644666', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14638', '11', '1', '推荐奖', '2017-10-10', '1507644666', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14639', '11', '1', '推荐奖', '2017-10-10', '1507644666', '71', '1', '9.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14640', '11', '1', '推荐奖', '2017-10-10', '1507644702', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14641', '11', '1', '推荐奖', '2017-10-10', '1507644702', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14642', '11', '1', '推荐奖', '2017-10-10', '1507644702', '71', '1', '9.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14643', '11', '1', '推荐奖', '2017-10-10', '1507644742', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14644', '11', '1', '推荐奖', '2017-10-10', '1507644742', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14645', '11', '1', '推荐奖', '2017-10-10', '1507644826', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14646', '11', '1', '推荐奖', '2017-10-10', '1507644826', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14647', '11', '1', '推荐奖', '2017-10-10', '1507644826', '71', '1', '9.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14648', '11', '1', '推荐奖', '2017-10-10', '1507644991', '60', '1078', '3.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14649', '11', '1', '推荐奖', '2017-10-10', '1507644991', '60', '1', '6.0', '', null, null);
INSERT INTO `p_incomelog` VALUES ('14650', '11', '1', '推荐奖', '2017-10-10', '1507644991', '71', '1', '9.0', '', null, null);

-- ----------------------------
-- Table structure for p_land
-- ----------------------------
DROP TABLE IF EXISTS `p_land`;
CREATE TABLE `p_land` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(3) DEFAULT NULL COMMENT '地的排序',
  `uid` int(11) DEFAULT NULL,
  `state` int(1) DEFAULT '0' COMMENT '状态 0 未播种 1已播种 2已完成',
  `addymd` timestamp NULL DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `out` varchar(20) DEFAULT '0' COMMENT '产量',
  `ishei` int(1) DEFAULT '0' COMMENT '0 白色 1黑色',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_land
-- ----------------------------
INSERT INTO `p_land` VALUES ('1', '1', '1', '1', null, '2017-10-10 22:16:31', '330', null);
INSERT INTO `p_land` VALUES ('2', '2', '1', '1', null, '2017-10-10 22:16:31', '300', null);
INSERT INTO `p_land` VALUES ('3', '3', '1', '1', null, '2017-10-10 22:16:31', '300', null);
INSERT INTO `p_land` VALUES ('4', '4', '1', '1', null, '2017-10-10 22:16:31', '300', null);
INSERT INTO `p_land` VALUES ('5', '5', '1', '1', null, '2017-10-10 22:16:31', '300', null);
INSERT INTO `p_land` VALUES ('6', '6', '1', '1', null, '2017-10-10 22:16:31', '300', null);
INSERT INTO `p_land` VALUES ('7', '7', '1', '1', null, '2017-10-10 22:16:31', '300', null);
INSERT INTO `p_land` VALUES ('8', '8', '1', '0', null, '2017-10-09 21:39:37', '120', null);
INSERT INTO `p_land` VALUES ('9', '9', '1', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('10', '10', '1', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('11', '11', '1', '0', null, '2017-10-09 21:39:35', '120', null);
INSERT INTO `p_land` VALUES ('12', '12', '1', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('13', '13', '1', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('14', '14', '1', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('15', '15', '1', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('16', '1', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('17', '2', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('18', '3', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('19', '4', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('20', '5', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('21', '6', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('22', '7', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('23', '8', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('24', '9', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('25', '10', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('26', '11', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('27', '12', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('28', '13', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('29', '14', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('30', '15', '2', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('46', '1', '1079', '0', null, '2017-10-09 22:02:51', '0', null);
INSERT INTO `p_land` VALUES ('33', '3', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('31', '1', '1078', '0', null, '2017-10-09 22:02:53', '30', null);
INSERT INTO `p_land` VALUES ('32', '2', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('34', '4', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('35', '5', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('36', '6', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('37', '7', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('38', '8', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('39', '9', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('40', '10', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('41', '11', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('42', '12', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('43', '13', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('44', '14', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('45', '15', '1078', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('47', '2', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('48', '3', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('49', '4', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('50', '5', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('51', '6', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('52', '7', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('53', '8', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('54', '9', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('55', '10', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('56', '11', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('57', '12', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('58', '13', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('59', '14', '1079', '0', null, null, '0', null);
INSERT INTO `p_land` VALUES ('60', '15', '1079', '1', null, '2017-10-10 22:16:31', '210', null);
INSERT INTO `p_land` VALUES ('61', '1', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('62', '2', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('63', '3', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('64', '4', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('65', '5', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('66', '6', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('67', '7', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('68', '8', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('69', '9', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('70', '10', '1080', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('71', '11', '1080', '1', null, '2017-10-10 22:16:31', '150', '1');
INSERT INTO `p_land` VALUES ('72', '12', '1080', '0', null, '2017-10-10 22:10:30', '0', '1');
INSERT INTO `p_land` VALUES ('73', '13', '1080', '0', null, '2017-10-10 22:10:29', '0', '1');
INSERT INTO `p_land` VALUES ('74', '14', '1080', '0', null, '2017-10-10 22:10:28', '0', '1');
INSERT INTO `p_land` VALUES ('75', '15', '1080', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('76', '1', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('77', '2', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('78', '3', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('79', '4', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('80', '5', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('81', '6', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('82', '7', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('83', '8', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('84', '9', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('85', '10', '1081', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('86', '11', '1081', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('87', '12', '1081', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('88', '13', '1081', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('89', '14', '1081', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('90', '15', '1081', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('91', '1', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('92', '2', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('93', '3', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('94', '4', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('95', '5', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('96', '6', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('97', '7', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('98', '8', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('99', '9', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('100', '10', '1082', '0', null, null, '0', '0');
INSERT INTO `p_land` VALUES ('101', '11', '1082', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('102', '12', '1082', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('103', '13', '1082', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('104', '14', '1082', '0', null, null, '0', '1');
INSERT INTO `p_land` VALUES ('105', '15', '1082', '0', null, null, '0', '1');

-- ----------------------------
-- Table structure for p_menber
-- ----------------------------
DROP TABLE IF EXISTS `p_menber`;
CREATE TABLE `p_menber` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `pwd` varchar(100) DEFAULT NULL,
  `tel` varchar(64) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type` int(4) DEFAULT '1' COMMENT '1普通 2 3 4',
  `dongbag` varchar(50) DEFAULT '0' COMMENT '动态钱包激活票',
  `jingbag` varchar(50) DEFAULT '0' COMMENT '静态钱包小麦',
  `fuid` int(11) DEFAULT '0' COMMENT '注册上家',
  `fuids` varchar(1000) DEFAULT NULL COMMENT '上家',
  `addtime` timestamp NULL DEFAULT NULL,
  `addymd` date DEFAULT NULL,
  `pwd2` varchar(255) NOT NULL,
  `chargebag` varchar(50) DEFAULT '0' COMMENT '充值钱包 酒票',
  `realname` varchar(100) DEFAULT NULL COMMENT '真实姓名',
  `zhifubao` varchar(100) DEFAULT NULL COMMENT '支付宝账号',
  `zhifubaoname` varchar(100) DEFAULT NULL COMMENT '支付宝姓名',
  `weixin` varchar(64) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL COMMENT '银行卡号',
  `bankname` varchar(64) DEFAULT NULL COMMENT '银行卡姓名',
  `bankfrom` varchar(100) DEFAULT NULL COMMENT '银行卡开户行',
  `mif` int(11) DEFAULT '0' COMMENT 'mif',
  `isdelete` int(1) DEFAULT '0' COMMENT '0 未经用 1禁用',
  `jifeng` int(11) DEFAULT '0' COMMENT '排位积分',
  `friends` varchar(255) DEFAULT '' COMMENT '好友',
  `jiu` varchar(255) DEFAULT '0' COMMENT '酒',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=1083 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_menber
-- ----------------------------
INSERT INTO `p_menber` VALUES ('1', 'MIFl领队', 'a332211', '13649588123', null, '1', '88881', '90141', '0', '1,', null, null, '1', '888958.00', null, '123asd', null, null, null, null, null, '256', '0', '0', '2,', '0');
INSERT INTO `p_menber` VALUES ('2', '明月秋风', '123456', '17899556112', null, '1', '20.00', '0.00', '1', '1,2,', null, '2017-09-03', '123456', '41.00', null, null, null, null, null, null, null, '1319', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('3', '365财团', '135168', '13885805888', null, '1', '895.11', '0', '1', '1,3,', null, '2017-09-03', '135168', '1010.00', '', '', '', '', '', '', '', '19', '0', '0', null, '3.00');
INSERT INTO `p_menber` VALUES ('4', '野狼战队', '123456', '18889580666', null, '1', '1067.66', '47', '3', '1,3,4,', null, '2017-09-03', '123456', '0.01', null, null, null, null, null, null, null, '44', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('5', '互联团队', '123456', '15036697693', null, '1', '0', '0', '1', '1,5,', null, '2017-09-03', '123456', '0.00', null, null, null, null, null, null, null, '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('6', '道医', '123456', '18794878356', null, '1', '0', '0', '2', '1,2,6,', null, '2017-09-03', '123456', '0.00', '佐武', '18294818463', '佐武', '1459679341', '6217004320001341900', '佐武', '中国建设银行', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('7', '世间', 'p024761', '13765802083', null, '1', '0', '0', '3', '1,3,7,', null, '2017-09-03', 'p024761', '0.00', '', '', '', '', '', '', '', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('8', '霸波儿奔', '123456', '18873566733', null, '1', '0', '0', '4', '1,3,4,8,', null, null, '123456', '0.00', null, null, null, null, null, null, null, '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('9', '想做事先做人', '123456', '13694309413', null, '1', '0', '0', '0', '1,3,9,', null, null, '123456', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('10', '导航团队', '520520', '18194327588', null, '1', '0.00', '3.00', '1', '1,10,', null, '2017-09-03', '520520', '0.00', '陶亚雯', '18209435184', '雯雯', '', '', '', '', '44', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('11', '痕迹', '123456', '15850150950', null, '1', '10.90', '11', '4', '1,3,4,11,', null, null, '123456', '0.00', '刘行', '18702345551', '刘行', '', '', '', '', '3', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('12', 'guoxin', 'pxy851905', '13906179663', null, '1', '0', '0', '11', '1,3,4,11,12,', null, null, 'pxy851905', '5', '裴国新', '13906179663', '裴国新', 'pgx351799', '6228250430000529716', '裴国新', '农业银行', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('13', '巨城陶瓷批发', '2525596', '15707462567', null, '1', '0', '0', '4', '1,3,4,13,', null, null, '2525596', '5', '', '', '', '', '', '', '', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('14', '流星泪', '675705', '13735422448', null, '1', '0', '0', '4', '1,3,4,14,', null, null, '675705', '0.00', '杨玉军', '13735422448', '杨玉军', '13735422448', '', '', '', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('15', '大海', 'jc910120', '15152157513', null, '1', '0', '0', '4', '1,3,4,15,', null, null, '910120', '0.00', '靖闯', '15852208254@163.com', '靖闯', 'mm809267759', '6222021106015516267', '靖闯', '徐州市大黄山矿支行', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('16', '无名', '123456', '15119616232', null, '1', '0', '0.00', '4', '1,3,4,16,', null, null, '123456', '0.00', '李柏志', '15119616232', '李柏志', '', '', '', '', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('17', '安凉', '123456', '15889205289', null, '1', '0', '0', '4', '1,3,4,17,', null, null, '123456', '0.00', null, null, null, null, null, null, null, '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('18', '田浩进', '123456', '15997347819', null, '1', '0', '0', '4', '1,3,4,18,', null, null, '123456', '0.00', null, null, null, null, null, null, null, '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('19', '徐蛟英', 'lft19781116', '13675757531', null, '1', '8.30', '0.00', '4', '1,3,4,19,', null, null, 'lft19781116', '0.00', '徐蛟英', '13675757531', '徐蛟英', '13675757531', '6212261211002567230', '徐蛟英', '浙江省绍兴市越城区城东剡溪路工商银行', '41', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('20', '我心依旧', '123456', '13935444714', null, '1', '0', '0', '4', '1,3,4,20,', null, null, '123456', '0.00', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('21', 'zzf2017', '1', '18883287644', null, '1', '0', '0', '0', '21,', '0000-00-00 00:00:00', '2017-08-27', '1', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('22', '模拟测试', '123456', '15538867970', null, '1', '0', '0', '1', '1,22,', '0000-00-00 00:00:00', '2017-08-27', '123456', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('23', '321', '1', '18089319127', null, '1', '0', '0', '1', '1,23,', '0000-00-00 00:00:00', '2017-08-27', '1', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('24', '曹雪佳', '520520', '18194327599', null, '1', '0', '0.00', '10', '1,10,24,', null, null, '520520', '0.00', '曹雪佳', '18194327588', '曹雪佳', '', '', '', '', '134', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('25', '杨超', 'yc714123', '15872276251', null, '1', '0', '0', '4', '1,3,4,25,', null, null, 'yc714123', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('26', '吴迪', 'jc910120', '15852208254', null, '1', '0', '0', '15', '1,3,4,15,26,', null, null, 'jc910120', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('27', '周显峰', '123456', '13596474355', null, '1', '0', '0', '9', '1,3,9,27,', null, null, '123456', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('28', '龚平', 'a123456', '15197733596', null, '1', '0', '0', '16', '1,3,4,16,28,', null, null, 'a123456', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('29', '晴朗', '253728', '13789122853', null, '1', '0', '0', '4', '1,3,4,29,', null, null, '253728', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('30', '李玉林', '123456', '17760645187', null, '1', '0', '28', '11', '1,3,4,11,30,', null, null, '123456', '0.00', null, null, null, null, null, null, null, '6', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('31', '梁奕', 'liangyi888', '18535169984', null, '1', '0', '0', '4', '1,3,4,31,', '0000-00-00 00:00:00', '2017-08-27', 'liangyi888', '0', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('54', '李春', 'a123456', '13135672661', null, '1', '0', '0', '52', '1,3,4,38,39,42,50,51,52,54,', '0000-00-00 00:00:00', '2017-09-03', 'a123456', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('53', '肖青娣', 'A52013%4', '15377658832', null, '1', '0', '0', '52', '1,3,4,38,39,42,50,51,52,53,', '0000-00-00 00:00:00', '2017-09-03', 'A201314', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('51', '郭海洋', 'a157359', '15866261369', null, '1', '0', '0', '50', '1,3,4,38,39,42,50,51,', '0000-00-00 00:00:00', '2017-09-03', 'a157359', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('52', '钟郁琳', '991029', '18150310001', null, '1', '0', '0', '51', '1,3,4,38,39,42,50,51,52,', '0000-00-00 00:00:00', '2017-09-03', '991029', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('38', '傅三腾', 'abc366888', '13110600044', null, '1', '546.78', '53', '4', '1,3,4,38,', '0000-00-00 00:00:00', '2017-09-03', 'abc366888', '0.50', '傅三腾', '13110600044', '傅三腾', 'wx13110600044', '6228481558814359978', '傅三腾', '中国农行银行', '52', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('39', '沈宇兴', 'abc366888', '18778906106', null, '1', '926.65', '123', '38', '1,3,4,38,39,', '0000-00-00 00:00:00', '2017-09-03', 'abc366888', '0.90', '沈宇兴', '18778906106', '沈宇兴', 'wx475846594', '6228484086070023465', '沈宇兴', '中国农业银行', '111', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('40', '17664033975', '1', '17664033975', null, '1', '0', '40', '3', '1,3,40,', '0000-00-00 00:00:00', '2017-09-03', '1', '0.00', null, null, null, null, null, null, null, '10', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('41', '苏振民', '153181', '18947766277', null, '1', '0', '0', '39', '1,3,4,38,39,41,', '0000-00-00 00:00:00', '2017-09-03', '153181', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('42', '黄云峰', '123456aa', '13555115381', null, '1', '64.26', '7', '39', '1,3,4,38,39,42,', '0000-00-00 00:00:00', '2017-09-03', '123456aa', '0.00', '徐彤彤', '13555115381', '徐彤彤', 'nre8888', '6217992610090430026', '徐彤彤', '邮政储蓄', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('43', '13221320890', '123888', '13221320890', null, '1', '0', '0', '42', '1,3,4,38,39,42,43,', '0000-00-00 00:00:00', '2017-09-03', '123888', '5', '杨志林', 'yangwahaha1972@163.com', '杨志林', 'yzl1762', '', '', '', '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('44', '陈国定', '123456', '18627399155', null, '1', '0', '0', '42', '1,3,4,38,39,42,44,', '0000-00-00 00:00:00', '2017-09-03', '123456', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('45', '刘兰英', '0792y640521', '13970210625', null, '1', '0', '0', '42', '1,3,4,38,39,42,45,', '0000-00-00 00:00:00', '2017-09-03', '0792y640521', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('46', '马国波', 'mb0507mb', '13887120255', null, '1', '0', '0', '42', '1,3,4,38,39,42,46,', '0000-00-00 00:00:00', '2017-09-03', 'mb0507mb', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('47', '伊米然', '827015', '18999920894', null, '1', '0', '0', '39', '1,3,4,38,39,47,', '0000-00-00 00:00:00', '2017-09-03', '827015', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('48', '邱培', '880709', '18607404411', null, '1', '0', '0', '42', '1,3,4,38,39,42,48,', '0000-00-00 00:00:00', '2017-09-03', '880709', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('49', '李纪东', '123456', '15836075030', null, '1', '52.95', '0.00', '42', '1,3,4,38,39,42,49,', '0000-00-00 00:00:00', '2017-09-03', 'zll811219', '2.50', '', '', '', '', '', '', '', '19', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('50', '孙红', 'a157359', '15864482331', null, '1', '0', '0', '42', '1,3,4,38,39,42,50,', '0000-00-00 00:00:00', '2017-09-03', 'a157359', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('55', '黄美连', '331721', '18571609316', null, '1', '0', '0', '52', '1,3,4,38,39,42,50,51,52,55,', '0000-00-00 00:00:00', '2017-09-03', '331721', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('56', '赵希良', 'xi04180429', '13050730081', null, '1', '97.63', '5', '39', '1,3,4,38,39,56,', '0000-00-00 00:00:00', '2017-09-03', '702728', '0.00', '赵希良', '15041833692', '赵希良', '', '', '', '', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('57', '左文强', 'xjjzwq198927', '13865620119', null, '1', '0', '0', '52', '1,3,4,38,39,42,50,51,52,57,', '0000-00-00 00:00:00', '2017-09-03', 'xjjzwq198927', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('58', '布云云', '111111', '13598603590', null, '1', '0', '0', '39', '1,3,4,38,39,58,', '0000-00-00 00:00:00', '2017-09-03', '111111', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('59', '叶长江', '000111', '13140529992', null, '1', '0', '0', '11', '1,3,4,11,59,', '0000-00-00 00:00:00', '2017-09-03', '000111', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('60', '阿威', '123456', '17694289985', null, '1', '0', '0', '11', '1,3,4,11,60,', '0000-00-00 00:00:00', '2017-09-03', '123456', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('61', '小禹', 'qqwwee', '17875096437', null, '1', '0', '0', '11', '1,3,4,11,61,', '0000-00-00 00:00:00', '2017-09-03', 'qqwwee', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('62', '陈钧炀', '820608', '17317377077', null, '1', '208.27', '8', '39', '1,3,4,38,39,62,', '0000-00-00 00:00:00', '2017-09-03', '820608', '0.00', '陈钧炀', '18916386652', '陈钧炀', '', '6228480039027192572', '陈钧炀', '中国农业银行', '3', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('63', '13941499950', '963963', '13941499950', null, '1', '0', '0', '11', '1,3,4,11,63,', '0000-00-00 00:00:00', '2017-09-03', '963963', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('64', '吴依彬', '820608', '18017747077', null, '1', '104.60', '8', '62', '1,3,4,38,39,62,64,', '0000-00-00 00:00:00', '2017-09-03', '820608', '0.00', '吴依彬', '17317377077', '吴依彬', '17317377077', '6236681820006158472', '吴依彬', '中国建设银行', '3', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('65', '吴登俊', '820608', '17721310577', null, '1', '372.85', '9', '64', '1,3,4,38,39,62,64,65,', '0000-00-00 00:00:00', '2017-09-03', '820608', '0.00', '吴登俊', '17721310577', '吴登俊', '1521670375', '6228480038299936773', '吴登俊', '中国农业银行', '3', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('66', '张高', 'gao,12365', '18837476390', null, '1', '0', '0', '42', '1,3,4,38,39,42,66,', '0000-00-00 00:00:00', '2017-09-03', 'gao,12365', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('67', '陌', 'gt1357', '15727620992', null, '1', '0', '0', '49', '1,3,4,38,39,42,49,67,', '0000-00-00 00:00:00', '2017-09-03', 'gt1357', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('68', '杨秋平', 'woaini1314', '15200603275', null, '1', '0', '0', '11', '1,3,4,11,68,', '0000-00-00 00:00:00', '2017-09-03', 'woaini1314', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('69', '小赵', 'ai125301', '13331200778', null, '1', '0', '0', '67', '1,3,4,38,39,42,49,67,69,', '0000-00-00 00:00:00', '2017-09-03', 'ai125301', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('70', '王勇', 'wang123456', '13815590905', null, '1', '0', '0', '42', '1,3,4,38,39,42,70,', '0000-00-00 00:00:00', '2017-09-03', 'wang123456', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('71', '杨文龙', 'a6261876', '13753722782', null, '1', '90.10', '8', '65', '1,3,4,38,39,62,64,65,71,', '0000-00-00 00:00:00', '2017-09-03', '123321', '0.00', '杨小斯', '13934713743', '杨小斯', '13753722782', '6228481298632028675', '杨小斯', '中国农业银行山西洪洞赵城分理处', '6', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('72', '张瑶', 'a576915724', '18253816808', null, '1', '0', '0', '38', '1,3,4,38,72,', null, null, 'a850352301', '5', '张瑶', '18253816808', '张瑶', 'a850352301', '6228480276284119563', '张瑶', '山东省泰安市宁阳县支行磁窑办事处', '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('73', '韦妹超', '465810', '15777708362', null, '1', '0', '0', '11', '1,3,4,11,73,', '0000-00-00 00:00:00', '2017-09-03', '465810', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('74', '魏维', 'yuanyi2007', '15305187140', null, '1', '0', '0', '71', '1,3,4,38,39,62,64,65,71,74,', '0000-00-00 00:00:00', '2017-09-03', 'yuanyi2007', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('75', '薛力', 'hjx915', '18262597253', null, '1', '0', '7', '71', '1,3,4,38,39,62,64,65,71,75,', '0000-00-00 00:00:00', '2017-09-03', 'hjx915', '0.00', null, null, null, null, null, null, null, '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('76', '许学养', 'w136963', '15959546819', null, '1', '0', '0', '56', '1,3,4,38,39,56,76,', '0000-00-00 00:00:00', '2017-09-03', 'w136963', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('77', '尹文武', '123456', '15294104323', null, '1', '0', '0', '65', '1,3,4,38,39,62,64,65,77,', '0000-00-00 00:00:00', '2017-09-03', '123456', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('78', '陈俊', '687205km', '13859249313', null, '1', '0', '0', '71', '1,3,4,38,39,62,64,65,71,78,', '0000-00-00 00:00:00', '2017-09-03', '687205km', '5', '陈俊', '13859249313', '陈俊', 'gg021790', '6227001852650156926', '陈俊', '建设银行', '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('79', '赵奇', '76417033zw', '15231085542', null, '1', '0', '7', '42', '1,3,4,38,39,42,79,', '0000-00-00 00:00:00', '2017-09-03', '76417033zw', '5.00', '赵奇', '15231085542', '赵奇', '39084259', '', '', '', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('80', '18895592605', '123456xy', '18895592605', null, '1', '0', '0', '65', '1,3,4,38,39,62,64,65,80,', '0000-00-00 00:00:00', '2017-09-03', '123456xy', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('81', '云行千里', '654321', '13904864991', null, '1', '7.96', '6', '65', '1,3,4,38,39,62,64,65,81,', '0000-00-00 00:00:00', '2017-09-03', '518518', '0.00', '张海云', '13904864991', '张海云', 'zhanghaiyun', '6212260905005797121', '张海云', '工商银行黑龙江省大庆市肇州支行', '2', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('82', '18795394585', 'w1760300052', '18795394585', null, '1', '0', '0', '56', '1,3,4,38,39,56,82,', '0000-00-00 00:00:00', '2017-09-03', 'w1760300052', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('83', '李晓芳', 'mingming', '18539501843', null, '1', '84.93', '0.00', '56', '1,3,4,38,39,56,83,', '0000-00-00 00:00:00', '2017-09-03', 'mingming', '0.00', '李晓芳', '18539501843', '李晓芳', '18539501843', '', '', '', '3', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('84', '张立英', '150819', '15127532652', null, '1', '0', '0', '39', '1,3,4,38,39,84,', '0000-00-00 00:00:00', '2017-09-03', '150819', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('85', '夏坤晚', 'xiawert123', '18820740756', null, '1', '0', '0', '80', '1,3,4,38,39,62,64,65,80,85,', '0000-00-00 00:00:00', '2017-09-03', 'xiawert123', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('86', '傅强', '2829719', '15280314582', null, '1', '0', '0', '65', '1,3,4,38,39,62,64,65,86,', '0000-00-00 00:00:00', '2017-09-03', '2829719', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('87', '郑和文', '612272', '13884333520', null, '1', '0', '29', '83', '1,3,4,38,39,56,83,87,', '0000-00-00 00:00:00', '2017-09-03', '693311', '5.00', '郑和文', '13884333520', '郑和文', 'w614277', '6228481080086288017', '郑和文', '农业银行', '10', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('88', '吉克丁言', 'J17740916032', '17740916032', null, '1', '23.49', '24', '83', '1,3,4,38,39,56,83,88,', '0000-00-00 00:00:00', '2017-09-03', 'J17740916032', '0.00', '吉克丁言', '17740916032', '吉克丁言', 'qgjvcc13477', '6216601400001148270', '吉克丁言', '中国银行', '18', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('89', '赚钱达人', '8432302', '17611353589', null, '1', '0', '0', '71', '1,3,4,38,39,62,64,65,71,89,', '0000-00-00 00:00:00', '2017-09-03', '8432302', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('90', '史建光', 'sjg871128', '13289922110', null, '1', '0', '0', '0', '90,', '0000-00-00 00:00:00', '2017-09-03', '871128', '5', '史建光', '13289922110', '史建光', '13289922110', '6215998980000031737', '史建光', '中国邮政储蓄银行', '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('91', '18603696901', '213526', '18603696901', null, '1', '0', '0.00', '81', '1,3,4,38,39,62,64,65,81,91,', '0000-00-00 00:00:00', '2017-09-03', '528528', '0.00', '赵东', '15146348813', '赵东', '', '6222020905007528565', '赵东', '工商银行黑龙江省大庆市乘风支行', '114', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('92', '心灵道境', 'qq112366', '15290825723', null, '1', '0', '0', '83', '1,3,4,38,39,56,83,92,', '0000-00-00 00:00:00', '2017-09-03', 'qq112366', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('93', '钟洪中', 'zh701024', '13413175989', null, '1', '0', '0', '90', '90,93,', '0000-00-00 00:00:00', '2017-09-03', 'zh701024', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('94', '唐晓林', 'TANGqi1222', '13777653112', null, '1', '0', '0', '83', '1,3,4,38,39,56,83,94,', '0000-00-00 00:00:00', '2017-09-03', 'TANGqi1222', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('95', '徐建君', '494827', '15168664636', null, '1', '0', '0', '56', '1,3,4,38,39,56,95,', '0000-00-00 00:00:00', '2017-09-03', '494827', '5', '徐建君', '15168664636', '徐建君', 'xu4948', '6222081207003048474', '徐建君', '中国工商银行', '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('96', '郑康锋', 'z147258369', '13434184375', null, '1', '0', '0', '90', '90,96,', '0000-00-00 00:00:00', '2017-09-03', 'k147258369', '5', '郑康锋', '13434184375', '郑康锋', 'dyzkf430821', '6217003320047570935', '郑康锋', '广东省广州市番禺区洛溪支行', '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('97', '许志平', 'xz54321', '13429932312', null, '1', '117.37', '6', '71', '1,3,4,38,39,62,64,65,71,97,', '0000-00-00 00:00:00', '2017-09-03', 'xz54321', '0.00', '许志平', '13429932312', '许志平', 'xz875933825', '6215581812002445453', '许志平', '工商银行', '1', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('98', '刘敏', 'a12332123', '13026861298', null, '1', '0', '0', '56', '1,3,4,38,39,56,98,', '0000-00-00 00:00:00', '2017-09-03', 'a123321123', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('99', '许焱', 'xy15826791262', '15826791262', null, '1', '1.90', '21', '97', '1,3,4,38,39,62,64,65,71,97,99,', '0000-00-00 00:00:00', '2017-09-03', 'xy15826791262', '0.00', '许焱', '15826791262', '许焱', '505609718', '', '', '', '10', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('100', '李小丽', 'a123321123', '18776611389', null, '1', '0', '0', '98', '1,3,4,38,39,56,98,100,', '0000-00-00 00:00:00', '2017-09-03', 'a123321123', '5', null, null, null, null, null, null, null, '0', '0', '0', null, '0');
INSERT INTO `p_menber` VALUES ('1074', ' xyz', '1', null, null, '0', '0', '0', '1', null, '0000-00-00 00:00:00', '2017-10-07', '1', null, null, null, null, null, null, null, null, '0', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1075', 'asa', '1', null, null, '0', '0', '0', '1', null, '2017-10-07 17:35:02', '2017-10-07', '1', null, null, null, null, null, null, null, null, '0', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1076', 'li', '1', null, null, '0', '0', '0', '1', null, '2017-10-07 21:25:38', '2017-10-07', '1', null, null, null, null, null, null, null, null, '0', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1077', ' xyz', '1', '18883287649', null, '0', '0', '0', '1', null, '2017-10-09 21:42:08', '2017-10-09', '1', '200', null, null, null, null, null, null, null, '0', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1078', ' xyz', '1', '18883287640', null, '0', '900.00', '30', '1', null, '2017-10-09 21:45:51', '2017-10-09', '1', '109.00', null, null, null, null, null, null, null, '1', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1079', '1', '1', '18883287617', null, '0', '0', '210', '1078', '1,1078,', '2017-10-09 22:01:20', '2017-10-09', '1', '188.00', null, null, null, null, null, null, null, '1', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1080', '188832876411', '1', '188832876411', null, '1', '0', '210', '1', '1,1080,', null, null, '1', '92.00', null, null, null, null, null, null, null, '9', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1081', '188832876412', '1', '188832876412', null, '1', '0', '0', '1', '1,1081,', null, null, '1', '2000', null, '123asd', null, null, null, null, null, '0', '0', '0', '', '0');
INSERT INTO `p_menber` VALUES ('1082', '188832876499', '1', '188832876499', null, '1', '0', '0', '1', '1,1082,', null, null, '1', '200', null, null, null, null, null, null, null, '0', '0', '0', '', '0');

-- ----------------------------
-- Table structure for p_message
-- ----------------------------
DROP TABLE IF EXISTS `p_message`;
CREATE TABLE `p_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_user_name` varchar(64) DEFAULT NULL,
  `f_user_phone` varchar(64) DEFAULT NULL,
  `f_user_id` int(11) DEFAULT NULL,
  `to_user_name` varchar(64) DEFAULT NULL,
  `to_user_phone` varchar(64) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `message` text,
  `title` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT '1' COMMENT '1 用户发送  2系统发送单个  3全员',
  `state` int(1) DEFAULT '1' COMMENT '1未读 2已读',
  `addtime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `commitid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_message
-- ----------------------------
INSERT INTO `p_message` VALUES ('2', 'admin', 'admin', '1', '明月秋风', '17899556112', '1', 'dasfasd', 'test1', '2', '2', '2017-10-08 12:03:45', null);
INSERT INTO `p_message` VALUES ('3', 'admin', 'admin', '1', '365财团', '13885805888', '3', 'sdafsdfaasdfa', null, '2', '1', '2017-09-29 10:36:21', null);
INSERT INTO `p_message` VALUES ('5', 'admin', 'admin', '1', '全员', '全员', '0', '大沙发上的方式的方式阿三大幅啊沙发上的', '全员信息', '3', '1', '2017-10-07 16:29:42', null);
INSERT INTO `p_message` VALUES ('6', 'MIFl领队', '13649588123', '1', 'admin', null, null, 'test', null, '1', '1', null, null);
INSERT INTO `p_message` VALUES ('7', 'admin', 'admin', '1', '全员', '全员', '0', 'dsfasdfasdfasdf', '444', '3', '2', '2017-10-08 12:03:33', null);
INSERT INTO `p_message` VALUES ('8', 'admin', 'admin', '1', '全员', '全员', '0', 'asdfasfda', 'sadfasdf', '3', '2', '2017-10-08 12:03:01', null);

-- ----------------------------
-- Table structure for p_orderlog
-- ----------------------------
DROP TABLE IF EXISTS `p_orderlog`;
CREATE TABLE `p_orderlog` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL COMMENT '用户id',
  `productid` int(11) NOT NULL,
  `productname` varchar(64) DEFAULT NULL,
  `productmoney` varchar(32) DEFAULT NULL COMMENT '产品带来的利润',
  `pic` varchar(200) DEFAULT NULL,
  `states` int(1) NOT NULL DEFAULT '0' COMMENT '0待支付 1仓库中 2收益中 3已完成',
  `orderid` varchar(128) DEFAULT NULL COMMENT '订单id',
  `addtime` int(12) DEFAULT NULL,
  `num` int(5) DEFAULT NULL COMMENT '公排数量 购买数量',
  `out` varchar(40) DEFAULT NULL COMMENT '产生结果',
  `addymd` date DEFAULT NULL,
  `type` int(2) DEFAULT '1' COMMENT '1下单购 2公排',
  `option` varchar(255) DEFAULT NULL,
  `pay` int(11) DEFAULT '0' COMMENT '0待支付 1支付成功 2支付失败',
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM AUTO_INCREMENT=1111 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_orderlog
-- ----------------------------
INSERT INTO `p_orderlog` VALUES ('1084', '1', '9', '土豆', '2', null, '2', '201710071552496455', '1507362769', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1085', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '2', '201710071555145962', '1507362914', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1086', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '2', '201710071558088195', '1507363088', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1087', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '1', '201710071558135699', '1507363093', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1088', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '1', '201710071559211998', '1507363161', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1089', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '1', '201710071559262032', '1507363166', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1090', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '1', '201710071600222546', '1507363222', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1091', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '1', '201710071600222546', '1507363222', '1', null, '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1092', '1', '9', '土豆', '2', '/devjiu/Public/Uploads/2017-09-27/59cbb13a446cc.png', '1', '201710071602572444', '1507363377', '1', '14544', '2017-10-07', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1093', '1', '10', '2', '2', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', '201710081332374278', '1507440757', '1', '14553', '2017-10-08', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1094', '1', '10', '2', '2', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', '201710081639322786', '1507451972', '1', '14554', '2017-10-08', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1095', '1', '10', '2', '2', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', '201710091304356522', '1507525475', '1', '14555', '2017-10-09', '1', '重庆花花村子,啦啦啦,18883287647,402123', '0');
INSERT INTO `p_orderlog` VALUES ('1096', '1', '9', '土豆', '2', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '1', '201710091305217648', '1507525521', '1', '14556', '2017-10-09', '1', ',,,', '0');
INSERT INTO `p_orderlog` VALUES ('1097', '1', '10', '2', '2', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', '201710091306024844', '1507525562', '10', '14557', '2017-10-09', '1', ',,,', '0');
INSERT INTO `p_orderlog` VALUES ('1098', '1', '10', '2', '2', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', '201710091306533596', '1507525613', '10', '14558', '2017-10-09', '1', ',,,', '0');
INSERT INTO `p_orderlog` VALUES ('1099', '1', '10', '2', '1', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', '201710091309456664', '1507525785', '1', '14559', '2017-10-09', '1', ',,,', '0');
INSERT INTO `p_orderlog` VALUES ('1100', '1078', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710092148367437', '1507556916', '1', '14619', '2017-10-09', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1101', '1079', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710092202307503', '1507557750', '1', '14624', '2017-10-09', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1102', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102200573561', '1507644057', '1', '14629', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1103', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102201234360', '1507644083', '1', '14630', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1104', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102201354321', '1507644095', '1', '14631', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1105', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102201354321', '1507644095', '1', '14631', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1106', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102206067916', '1507644366', '1', '14632', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1107', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102206252908', '1507644385', '1', '14633', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1108', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102206252908', '1507644385', '1', '14633', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1109', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '2', '201710102206252908', '1507644385', '1', '14633', '2017-10-10', '1', null, '0');
INSERT INTO `p_orderlog` VALUES ('1110', '1080', '9', '土豆', '12', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '1', '201710102206252908', '1507644385', '1', '14633', '2017-10-10', '1', null, '0');

-- ----------------------------
-- Table structure for p_product
-- ----------------------------
DROP TABLE IF EXISTS `p_product`;
CREATE TABLE `p_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '产品名',
  `cont` text COMMENT '产品描述',
  `pic` varchar(255) DEFAULT NULL COMMENT '产品图片',
  `price` varchar(100) DEFAULT NULL COMMENT '售卖价格',
  `daycome` varchar(100) DEFAULT NULL COMMENT '每日收益',
  `daynum` int(11) DEFAULT NULL COMMENT '每日发放数量',
  `state` int(3) DEFAULT '1' COMMENT '1上架  2下架',
  `addtime` varchar(64) DEFAULT NULL,
  `salenum` int(11) DEFAULT '0',
  `left` int(11) DEFAULT '0' COMMENT '库存',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_product
-- ----------------------------
INSERT INTO `p_product` VALUES ('9', '土豆', '大师傅', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a084096c5.png', '12', null, null, '1', '2017-10-08 11:53:27', '0', '18');
INSERT INTO `p_product` VALUES ('10', '2', 'asd', '/dev/devjiu/Public/Uploads/2017-10-08/59d9a17d4c22e.png', '1', null, null, '1', '2017-10-08 11:54:37', '0', '476');

-- ----------------------------
-- Table structure for p_rite
-- ----------------------------
DROP TABLE IF EXISTS `p_rite`;
CREATE TABLE `p_rite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cont` varchar(30) DEFAULT NULL COMMENT '利率',
  `date` varchar(30) DEFAULT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_rite
-- ----------------------------
INSERT INTO `p_rite` VALUES ('1', '0.01', '07-01');
INSERT INTO `p_rite` VALUES ('2', '0.02', '07-02');
INSERT INTO `p_rite` VALUES ('3', '0.03', '07-03');
INSERT INTO `p_rite` VALUES ('4', '0.02', '07-04');
INSERT INTO `p_rite` VALUES ('5', '0.02', '07-05');
INSERT INTO `p_rite` VALUES ('6', '0.03', '07-06');
INSERT INTO `p_rite` VALUES ('7', '0.02', '07-07');
INSERT INTO `p_rite` VALUES ('10', '0.04', '08-12');
INSERT INTO `p_rite` VALUES ('12', '0.3', '08-13');
INSERT INTO `p_rite` VALUES ('13', '0.8', '08-14');
INSERT INTO `p_rite` VALUES ('14', '0.09', '08-15');
INSERT INTO `p_rite` VALUES ('15', '0.08', '08-16');
INSERT INTO `p_rite` VALUES ('18', '0.4', '08-20');
INSERT INTO `p_rite` VALUES ('16', '0.12', '08-17');
INSERT INTO `p_rite` VALUES ('17', '0.025', '08-18');
INSERT INTO `p_rite` VALUES ('19', '0.4', '08-21');
INSERT INTO `p_rite` VALUES ('20', '0.25', '08-22');
INSERT INTO `p_rite` VALUES ('21', '0.3', '08-24');
INSERT INTO `p_rite` VALUES ('22', '0.1', '08-26');
INSERT INTO `p_rite` VALUES ('23', '0.1', '08-27');
INSERT INTO `p_rite` VALUES ('24', '0.3', '09-02');
INSERT INTO `p_rite` VALUES ('25', '0.2', '09-03');
INSERT INTO `p_rite` VALUES ('26', '0.08', '09-04');
INSERT INTO `p_rite` VALUES ('27', '0.1', '09-05');
INSERT INTO `p_rite` VALUES ('28', '0.1', '09-06');
INSERT INTO `p_rite` VALUES ('29', '0.01', '09-07');
INSERT INTO `p_rite` VALUES ('30', '0.11', '09-08');
INSERT INTO `p_rite` VALUES ('31', '0.08', '09-09');
INSERT INTO `p_rite` VALUES ('32', '0.1', '09-10');

-- ----------------------------
-- Table structure for p_user
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL COMMENT '登录名',
  `openid` varchar(255) DEFAULT NULL COMMENT '微信ID',
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信昵称',
  `address` varchar(255) DEFAULT NULL COMMENT '微信地址',
  `userface` varchar(255) DEFAULT NULL COMMENT '维信头像',
  `addtime` varchar(255) DEFAULT NULL COMMENT '注册时间',
  `manager` int(2) DEFAULT '0' COMMENT '0 普通 1管理员 2 超级管理员',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of p_user
-- ----------------------------
INSERT INTO `p_user` VALUES ('1', '123asd', 'admin', null, 'sxs@kzb5964189', null, null, '2017-03-10 13:56:27', '2');
INSERT INTO `p_user` VALUES ('2', 'sxs@zf5917999', 'admin2', null, null, null, null, '2017-03-10 13:56:27', '2');
