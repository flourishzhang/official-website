<?php
$config = array (
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
echo json_encode($config, JSON_UNESCAPED_UNICODE);
