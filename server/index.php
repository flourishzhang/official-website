<?php
ob_start();
require_once("functions.php");
$do = isset($_GET["do"]) ? $_GET["do"] : "index";

switch ($do) {
    // 页面展示部分的路由
    case "index":
        if (IsMobile()) {
            $title="首页";require("phone/index.php");
        } else {
            $title="首页";$active=1;require("pc/index.php");
        }
        break;
    case "cybercafe":$title="_无人网吧";$active=3;require("pc/bar.php");break;
    case "community":$title="_智慧小区";$active=3;require("pc/community.php");break;
    case "article":$title="_新闻资讯";$active=4;require("pc/detail.php");break;
    case "solution":$title="_解决方案";$active=3;require("pc/fang.php");break;
    case "about":$title="_关于我们";$active=5;require("pc/guan.php");break;
    case "cinema":$title="_影院服务平台";$active=3;require("pc/movie.php");break;
    case "news":$title="_新闻资讯";$active=4;require("pc/news.php");break;
    case "agriculture":$title="_智慧农业";$active=3;require("pc/nong.php");break;
    case "powerful":$title="_电力远程控制";$active=3;require("pc/power.php");break;
    case "gym":$title="_仓库管理系统";$active=3;require("pc/warehouse.php");break;
    case "recruit":$title="_人才招聘";$active=6;require("pc/work.php");break;
    case "iot":$title="_物联网";$active=2;require("pc/wu.php");break;
    case "mobileagriculture":$title="_智慧农业";require("phone/farming.php");break;
    case "mobilecybercafe":$title="_无人网吧";require("phone/Internet.php");break;
    case "mobilecinema":$title="_影院服务平台";require("phone/movie.php");break;
    case "mobilearticle":$title="_新闻资讯";require("phone/news_det.php");break;
    case "mobilenews":$title="_新闻资讯";require("phone/news.php");break;
    case "mobilepowerful":$title="_电力远程控制";require("phone/power.php");break;
    case "mobilegym":$title="_仓库管理系统";require("phone/sCang.php");break;
    case "mobilesolution":$title="_解决方案";require("phone/sFang.php");break;
    case "mobileabout":$title="_关于我们";require("phone/sGuan.php");break;
    case "mobilecommunity":$title="_智慧小区";require("phone/sQu.php");break;
    case "mobilerecruit":$title="_人才招聘";require("phone/sWork.php");break;
    case "mobileiot":$title="_物联网";require("phone/sWu.php");break;
    case "apieditarticle": require("api/editarticle.php");break;
    case "apigetarticledesc": require("api/getarticledesc.php");break;
    case "apigetarticlelist": require("api/getarticlelist.php");break;
    case "apigetbasedata": require("api/getbasedata.php");break;
    case "apigetspiderlist": require("api/getspiderlist.php");break;
    case "apigetuserinfo": require("api/getuserinfo.php");break;
    case "apilogin": require("api/login.php");break;
    case "apipushbaidu": require("api/pushbaidu.php");break;
    case "apigetwxtoken":require("api/getwxtoken.php");break;
    case "apigetprivatewxtoken":require("api/getprivatewxtoken.php");break;
    case "apisendadminmsgbyprivatewx":require("api/sendadminmsgbyprivatewx.php");break;
    case "apigetwxusermsg":require("api/getwxusermsg.php");break;
    case "apigetuselessimgs":require("api/getuselessimgs.php");break;
    case "apigetconfig":require("api/getconfig.php");break;
    case "apisetconfig":require("api/setconfig.php");break;
    case "sitemap":require("pc/sitemap.php");break;
    default:
        echo "This is a 404 page.";
        break;
}

ClientLog();
// SpiderLog();

header("Content-length: ".ob_get_length());
ob_end_flush();