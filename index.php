<?php
require_once("functions.php");
$do = isset($_GET["do"]) ? $_GET["do"] : "index";

switch ($do) {
    // 页面展示部分的路由
    case "index":
        if (IsMobile()) {
            require("phone/index.php");
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
    case "phoneInternet":require("phone/Internet.php");break;//
    case "phonemovie":require("phone/movie.php");break;//
    case "phonenews_det":require("phone/news_det.php");break;//
    case "phonenews":require("phone/news.php");break;//
    case "phonepower":require("phone/power.php");break;//
    case "phonesCang":require("phone/sCang.php");break;//
    case "phonesFang":require("phone/sFang.php");break;//
    case "phonesGuan":require("phone/sGuan.php");break;//
    case "phonesQu":require("phone/sQu.php");break;//
    case "phonessWork":require("phone/sWork.php");break;//
    case "phonessWu":require("phone/sWu.php");break;//
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