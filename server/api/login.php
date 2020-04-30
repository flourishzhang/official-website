<?php
$body = file_get_contents("php://input");
$obj = json_decode($body, true);
$res = Login ($obj["username"], $obj["password"]);
if ($res === false) {
    $ret = array(
        "errcode" => -1,
        "errmsg" => "账号密码错误"
    );
} else {
    $ret = array(
        "errcode" => 0,
        "token" => $res
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);
