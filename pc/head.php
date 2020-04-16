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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php WebsiteKeyWords ();?>">
    <meta name="description" content="<?php echo isset($articleinfo)?$articleinfo['desc']:$webmsg["description"];?>">
    <title><?php WebsiteTitle ();?><?php echo isset($title)?$title:"_首页";?></title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/init.css">
    <link rel="stylesheet" href="../css/ystyle.css">
    <link rel="stylesheet" href="../css/wstyle.css">
    <link rel="stylesheet" href="../css/iconfont.css">
    <link rel="stylesheet" href="../css/animation.css">
    <link rel="stylesheet" href="../css/mui.min.css">
    <script src="../js/jquery-2.0.3.min.js"></script>
    <script src="../js/jquery.SuperSlide.2.1.1.js"></script>
    <script src="../js/banner.js"></script>
    <script src="../js/animation.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/mui.min.js"></script>
    <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=8L5Ultg8kSYTkM3zc75pVvIAp7Z5VV1c"></script>
</head>

<body>
    <nav>
        <div class="nav-center">
            <div class="logo"><img src="../img/head/logo.png"></div>
            <ul class="navbar">
                <li>
                    <a href="<?php SiteUrl();?>/index.html" style="color: #000">首页</a>
                </li>
                <li>
                    <a href="<?php SiteUrl();?>/iot.html" style="color: #000">物联网</a>
                </li>
                <li>
                    <a href="<?php SiteUrl();?>/solution.html" style="color: #000">解决方案</a>
                </li>
                <li>
                    <a href="<?php SiteUrl();?>/news.html" style="color: #000">新闻资讯</a>
                </li>
                <li>
                    <a href="<?php SiteUrl();?>/about.html" style="color: #000">关于我们</a>
                </li>
                <li>
                    <a href="<?php SiteUrl();?>/recruit.html" style="color: #000">人才合作</a>
                </li>
            </ul>
        </div>
    </nav>
    <div style="width:100%;height:67px;"></div>
