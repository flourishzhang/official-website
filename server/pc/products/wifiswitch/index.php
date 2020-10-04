<?php
$to = isset($_GET["to"]) ? $_GET["to"] : "wifi";

switch ($to) {
    case "wifi": $title="_wifi智能开关_产品概要";require("wifi.php");break;
    case "param": $title="_wifi智能开关_性能参数";require("wifi-param.php");break;
    case "case": $title="_wifi智能开关_使用场景";require("wifi-case.php");break;
    case "down": $title="_wifi智能开关_相关下载";require("wifi-down.php");break;
    case "video": $title="_wifi转智能开关_相关视频";require("wifi-video.php");break;
    case "order": $title="_wifi智能开关_订购方式";require("wifi-order.php");break;
    case "ques": $title="_wifi智能开关_常见问题";require("wifi-ques.php");break;
    case "prod": $title="_wifi智能开关_系列产品";require("wifi-prod.php");break;
}
