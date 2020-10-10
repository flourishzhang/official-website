-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        10.1.44-MariaDB-0+deb9u1 - Debian 9.11
-- 服务器操作系统:                      debian-linux-gnu
-- HeidiSQL 版本:                  11.0.0.5919
-- --------------------------------------------------------

-- 导出  表 worldflying.wf_clientlog 结构
CREATE TABLE IF NOT EXISTS `wf_clientlog` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `remoteip` varchar(16) DEFAULT '' COMMENT '访问客户IP',
  `requesturl` varchar(64) DEFAULT '' COMMENT '访问的链接',
  `httphost` varchar(50) DEFAULT '' COMMENT '访问的域名',
  `requesttime` datetime DEFAULT CURRENT_TIMESTAMP COMMENT '访问时间',
  `isclear` tinyint(4) DEFAULT '0' COMMENT '百度缓存是否被清除过',
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=44492 DEFAULT CHARSET=utf8mb4 COMMENT='客户访问表';

-- 数据导出被取消选择。

-- 导出  表 worldflying.wf_config 结构
CREATE TABLE IF NOT EXISTS `wf_config` (
  `configid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ckey` varchar(64) NOT NULL DEFAULT '',
  `cvalue` tinytext NOT NULL,
  PRIMARY KEY (`configid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- 正在导出表  worldflying.wf_config 的数据：~35 rows (大约)
INSERT INTO `wf_config` (`ckey`, `cvalue`) VALUES
	('title', '沃航科技_物联网解决方案服务提供商_沃航(武汉)科技股份有限公司'),
	('keywords', '智慧仓库,智慧农业,远程抄表,无人网吧,智慧小区,远程监控,物联网,智能家居'),
	('description', '沃航科技是一家专业的物联网公司，公司专注于物联网技术研发，lora，wifi等解决方案的实施，公司技术先进，是国内领先的物联网开发公司。'),
	('address', '武汉市东湖高新开发区光谷总部国际1栋2412室'),
	('QQ', '932773931'),
	('telephone', '027-59761089-806'),
	('mobile', '13397158231'),
	('email', 'jevian_ma@worldflying.cn'),
	('importantword', '物联网'),
	('record', '鄂ICP备16014230号-1'),
	('siteurl', 'https://www.worldflying.cn'),
	('assetsurl', 'https://www.worldflying.cn'),
	('recommendname', '物联网'),
	('recommendpcurl', '/iot.html'),
	('recommendmobileurl', '/mobileiot.html'),
	('baidupushtoken', '8mS2a01wpyrx6d8A'),
	('baiduappid', '1579303323068550'),
	('baiduapptoken', 'xuhHPROKAf3Wb3Oz'),
	('wxappid', 'wx664469117500d259'),
	('wxappsecret', '11ec6e6d4b9062f00a4fc08c529293be'),
	('baidumapx', '114.423777'),
	('baidumapy', '30.484882'),
	('baidumapzoom', '18'),
	('wxaccesstoken', '37_aYijB87x8zHnDEikjWWTeOMSRNIPHJ1IXfqgMmnfND2trxl9wQUb0CB2iR9P54EXZzfHC1Pj7Pb4GtuQZdSAI24u9sx6JKiLRf3SFV7PlenN-bdJi2ithgimjo9_ZcmGIcLhJjM0aYjD_Uo9MYKcACAIUG'),
	('wxtokentime', '1601826386'),
	('wxtokenexpirein', '7200'),
	('wxprivateappid', 'wxfbeb86dfb99d872c'),
	('wxprivateappsecret', '477a1e18e81bd5615893fb44141262a3'),
	('wxprivateaccesstoken', '37_2Xz8nhQBhOHyYzKmR3Evf1o7mGrvrRYySpwmXgPx4fFaZTJAxMAKS3wyKCCejDgHJ-eKpuvcyTIK3ouWf6AWz3vwKkBrL8y3ov0yZBIEZTbO6SArtpGsJnoTO3GIWHdm8wBx9HFsi9T3QGCYGOFfAAARZQ'),
	('wxprivatetokentime', '1601826720'),
	('wxprivatetokenexpirein', '7200'),
	('wxprivatetemplateid', 'a2CHK9Sk6IVFBHDLhtv0bc90X-kDVKlaplLhtxLu2cc'),
	('wxprivateadminopenid', 'o2y6Nv9TrZhnpOaP5Zpy_Sg6FFmg'),
	('baiduyunaccesskey', 'fc651ccf66d14737a7354d4d166ed8e8'),
	('baiduyunsecretkey', 'e5947f93fc1e4d79809b2b8364b0cafe');

-- 导出  表 worldflying.wf_group 结构
CREATE TABLE IF NOT EXISTS `wf_group` (
  `groupid` bigint(20) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL DEFAULT '',
  `groupdesc` text NOT NULL,
  `getnewslist` tinyint(1) NOT NULL DEFAULT '0',
  `editarticle` tinyint(1) NOT NULL DEFAULT '0',
  `getarticledesc` tinyint(1) NOT NULL DEFAULT '0',
  `getspiderlist` tinyint(1) NOT NULL DEFAULT '0',
  `pushbaidu` tinyint(1) NOT NULL DEFAULT '0',
  `getconfig` tinyint(1) NOT NULL DEFAULT '0',
  `setconfig` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 worldflying.wf_news 结构
CREATE TABLE IF NOT EXISTS `wf_news` (
  `articleid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `articletype` tinyint(4) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `createtime` datetime NOT NULL,
  `modifytime` datetime NOT NULL,
  `publishtime` datetime NOT NULL,
  `articlestatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB AUTO_INCREMENT=318 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 worldflying.wf_spiderlog 结构
CREATE TABLE IF NOT EXISTS `wf_spiderlog` (
  `spiderlogId` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `target` varchar(50) NOT NULL DEFAULT '',
  `IP` varchar(50) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`spiderlogId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 worldflying.wf_user 结构
CREATE TABLE IF NOT EXISTS `wf_user` (
  `userid` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT '',
  `pass` varchar(50) DEFAULT '',
  `nickname` varchar(50) DEFAULT '',
  `groupid` bigint(20) DEFAULT '0',
  `token` varchar(50) DEFAULT '',
  `lastlogin` datetime DEFAULT '1970-01-01 00:00:00',
  `userstatus` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 正在导出表  worldflying.wf_user 的数据：~0 rows (大约)
INSERT INTO `wf_user` (`userid`, `user`, `pass`, `nickname`, `groupid`, `token`, `lastlogin`, `userstatus`) VALUES
	(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1, '', '1970-01-01 00:00:00', 0);

-- 导出  表 worldflying.wf_wxuser 结构
CREATE TABLE IF NOT EXISTS `wf_wxuser` (
  `wxuserid` bigint(20) NOT NULL AUTO_INCREMENT,
  `openid` varchar(50) NOT NULL DEFAULT '',
  `usermsg` text NOT NULL,
  PRIMARY KEY (`wxuserid`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。