<?php
require_once("functions.php");
$do = isset($_GET["do"]) ? $_GET["do"] : "index";
$title;

switch ($do) {
    // 页面展示部分的路由
    case "index":
        if (IsMobile()) {
            $title="首页";require("phone/index.php");
        } else {
            require("pc/index.php");
        }
        break;
    case "bar":require("pc/bar.php");break;//
    case "community":require("pc/community.php");break;//
    case "detail":require("pc/detail.php");break;//
    case "fang":require("pc/fang.php");break;//
    case "guan":require("pc/guan.php");break;//
    case "movie":require("pc/movie.php");break;//
    case "news":require("pc/news.php");break;//
    case "nong":require("pc/nong.php");break;//
    case "power":require("pc/power.php");break;//
    case "warehouse":require("pc/warehouse.php");break;//
    case "work":require("pc/work.php");break;//
    case "wu":require("pc/wu.php");break;//
    case "phonefarming":$title="_智慧农业";require("phone/farming.php");break;//
    case "phoneInternet":$title="_无人网吧";require("phone/Internet.php");break;//
    case "phonemovie":$title="_影院服务平台";require("phone/movie.php");break;//
    case "phonenews_det":$title="_新闻资讯";require("phone/news_det.php");break;//
    case "phonenews":$title="_新闻资讯";require("phone/news.php");break;//
    case "phonepower":$title="_电力远程控制";require("phone/power.php");break;//
    case "phonesCang":$title="_仓库管理系统";require("phone/sCang.php");break;//
    case "phonesFang":$title="_解决方案";require("phone/sFang.php");break;//
    case "phonesGuan":$title="_关于我们";require("phone/sGuan.php");break;//
    case "phonesQu":$title="_智慧小区";require("phone/sQu.php");break;//
    case "phonesWork":$title="_人才招聘";require("phone/sWork.php");break;//
    case "phonesWu":$title="_物联网";require("phone/sWu.php");break;//
    case "apieditarticle": require("api/editarticle.php");break;
    case "apigetarticledesc": require("api/getarticledesc.php");break;
    case "apigetarticlelist": require("api/getarticlelist.php");break;
    case "apigetbasedata": require("api/getbasedata.php");break;
    case "apigetspiderlist": require("api/getspiderlist.php");break;
    case "apigetuserinfo": require("api/getuserinfo.php");break;
    case "apilogin": require("api/login.php");break;
    case "apipushbaidu": require("api/pushbaidu.php");break;
    case "sitemap":require("view/sitemap.php");break;
    default:
        echo "This is a 404 page.";
        break;
}

SpiderLog();