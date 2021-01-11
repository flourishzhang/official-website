<?php
$c = array (
    "title" => $webmsg["title"],
    "keywords" => $webmsg["keywords"],
    "description" => $webmsg["description"],
    "address" => $webmsg["address"],
    "QQ" => $webmsg["QQ"],
    "telephone" => $webmsg["telephone"],
    "mobile" => $webmsg["mobile"],
    "email" => $webmsg["email"]
);
header('Access-Control-Allow-Origin:*');
echo json_encode($c, JSON_UNESCAPED_UNICODE);
