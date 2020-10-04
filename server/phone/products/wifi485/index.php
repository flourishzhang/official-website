
<?php
$to = isset($_GET["to"]) ? $_GET["to"] : "translator";

switch ($to) {
    case "translator": $title="_wifi转232/485_产品概要";require("translator.php");break;
    case "param": $title="_wifi转232/485_性能参数";require("trans-param.php");break;
    case "case": $title="_wifi转232/485_使用场景";require("trans-case.php");break;
    case "down": $title="_wifi转232/485_相关下载";require("trans-down.php");break;
    case "video": $title="_wifi转232/485_相关视频";require("trans-video.php");break;
    case "order": $title="_wifi转232/485_订购方式";require("trans-order.php");break;
    case "ques": $title="_wifi转232/485_常见问题";require("trans-ques.php");break;
    case "prod": $title="_wifi转232/485_系列产品";require("trans-prod.php");break;
}
