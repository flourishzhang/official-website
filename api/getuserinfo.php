
<?php
$body = file_get_contents("php://input");
$obj = json_decode($body, true);
$res = GetUserInfo ($obj["token"]);
if ($res === false) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else {
    $ret = array(
        "errcode" => 0,
        "userinfo" => $res
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);