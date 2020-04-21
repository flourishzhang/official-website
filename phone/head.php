<!DOCTYPE html>
<?php
if(isset($_GET["id"])){
$articleid = $_GET["id"];
$info = GetArticleInfo ($articleid, true);
$articleinfo = $info["articleinfo"];
}
?>
<html lang="en">
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm,s,src,bp,s2,curProtocol;
        hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?2efac3d09a135e88e39c98a3388123df";
        s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
        src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?4b100c5a70f6caf5d080a7f72b529884":"https://jspassport.ssl.qhimg.com/11.0.1.js?4b100c5a70f6caf5d080a7f72b529884";
        document.write('<script src="' + src + '" id="sozz"><\/script>');
        bp = document.createElement('script');
        curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        s2 = document.getElementsByTagName("script")[0];
        s2.parentNode.insertBefore(bp, s2);
    })();
</script>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php echo isset($articleinfo)?$articleinfo['desc']:$webmsg["description"];?>">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title><?php WebsiteTitle ();?><?php echo isset($title)?$title:"_首页";?></title>
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/mui.min.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/init.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/wstyle.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/ystyle.css">
    <link rel="stylesheet" href="<?php AssetsUrl ();?>/css/iconfont.css">
    <script src="<?php AssetsUrl ();?>/js/jquery-2.0.3.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/mui.min.js"></script>
    <script src="<?php AssetsUrl ();?>/js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="<?php AssetsUrl ();?>/js/banner.js"></script>
    <script src="<?php AssetsUrl ();?>/js/bootstrap.min.js"></script>
</head>
<body>
<!-- 侧滑导航根容器 -->
<div id="offCanvasWrapper" class="mui-off-canvas-wrap mui-draggable ">

    <aside style="background: #fff;color: #333;" id="offCanvasSide" class="mui-off-canvas-right" >
        <div id="offCanvasSideScroll" class="mui-scroll-wrapper" data-scroll="1">
            <div class="mui-scroll" style="transform: translate3d(0px, 0px, 0px) translateZ(0px);">
                <div  style="margin: 35px 15px 10px;color: #333; ">官网导航</div>
                <ul style="background: #fff;color: #333;" class="mui-table-view">
                    <li class="mui-table-view-cell">
                        <a href="<?php SiteUrl();?>/index.html">首页</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a href="<?php SiteUrl();?>/mobileiot.html">物联网</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a href="<?php SiteUrl();?>/mobilesolution.html">解决方案</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a href="<?php SiteUrl();?>/mobilenews.html">新闻资讯</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a href="<?php SiteUrl();?>/mobilerecruit.html">人才合作</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a href="<?php SiteUrl();?>/mobileabout.html">关于我们</a>
                    </li>
                </ul>
            </div>
            <div class="mui-scrollbar mui-scrollbar-vertical">
                <div class="mui-scrollbar-indicator" style="transition-duration: 0ms; display: block; height: 8px; transform: translate3d(0px, -8px, 0px) translateZ(0px);"></div>
            </div>
        </div>
    </aside>

    <!-- 主页面容器 -->
    <div class="mui-inner-wrap">
        <!-- 主页面标题 -->
        <header class="mui-bar mui-bar-nav" style="background: #fff;">
            <div class="nav_logo clearfix">
                <img src="<?php AssetsUrl ();?>/img/phone_logo.png">
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll" style="background: #fff;">
            <!-- 主界面具体展示内容 -->
