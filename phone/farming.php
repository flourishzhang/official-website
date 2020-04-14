<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>智慧农业</title>
    <link rel="stylesheet" href="../css/mui.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/wstyle.css">
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
                <div class="w-p-farming-box1">
                    <img src="../img/phone_farming/farming_box1.png" alt="">
                </div>
                <div class="w-p-farming-box2">
                    <a class="w-ct-return" href="">返回ALL+列表<span class="iconfont iconxiangzuo"></span></a>
                    <div class="w-wh-title">
                        <div>
                            方案简介
                            <img src="../img/warehouse/wh_title.png" alt="">
                        </div>
                    </div>
                    <img src="../img/phone_farming/farming_box2.png" alt="">
                </div>
                <div class="w-p-farming-box3">
                    <div class="w-wh-title">
                        <div>
                            功能介绍
                            <img src="../img/warehouse/wh_title.png" alt="">
                        </div>
                    </div>
                    <div class="clearfix w-tu">
                        <div>
                            <img src="../img/phone_farming/farming_box3_1.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box3_2.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box3_3.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box3_4.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box3_5.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box3_6.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-p-farming-box4">
                    <div class="w-wh-title">
                        <div>
                            方案组成
                            <img src="../img/warehouse/wh_title.png" alt="">
                        </div>
                    </div>
                    <div class="clearfix w-tu">
                        <div>
                            <img src="../img/phone_farming/farming_box4_1.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box4_2.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box4_3.png" alt="">
                        </div>
                        <div>
                            <img src="../img/phone_farming/farming_box4_4.png" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      <div class="mui-off-canvas-backdrop" style="
      background: none;
      box-shadow: -4px 0 2px rgba(182, 178, 178, 0.5) inset;"></div>
    </div>
</div>
<script>
mui('.mui-scroll-wrapper').on('tap','a' ,function(){location.href = this.getAttribute('href')});
mui.init({
    swipeBack: false,
});
mui('.mui-scroll-wrapper').scroll({
    deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
});

$(".w-p-it-box4>.w-tu>div").height($("#w_it_box4").height())
</script>
</body>
</html>