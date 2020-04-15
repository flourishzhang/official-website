<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>首页</title>
    <link rel="stylesheet" href="../css/mui.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/wstyle.css">
    <link rel="stylesheet" href="../css/ystyle.css">
    <link rel="stylesheet" href="../css/iconfont.css">
    <script src="../js/jquery-2.0.3.min.js"></script>
    <script src="../js/mui.min.js"></script>
    <script src="../js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="../js/banner.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
                        <a>首页</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>物联网</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>解决方案</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>新闻资讯</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>人才合作</a>
                    </li>
                    <li class="mui-table-view-cell">
                        <a>关于我们</a>
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
                <img src="../img/phone_logo.png">
            </div>
            <a id="offCanvasBtn" href="#offCanvasSide" class="mui-icon mui-action-menu mui-icon-bars mui-pull-right"></a>
        </header>
        <div class="mui-content mui-scroll-wrapper">
            <div class="mui-scroll" style="background: #fff;">
            <!-- 主界面具体展示内容 -->
