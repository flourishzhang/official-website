<?php
$body = file_get_contents ("php://input");
$obj = json_decode ($body, true);
$info = GetUserInfo ($obj["token"]);
if ($info == false) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else if ($info["setconfig"] != 1) {
    $ret = array(
        "errcode" => -1,
        "errmsg" => "权限不足"
    );
} else {
    SetConfig (
        array(
            "title" => $obj["title"],
            "keywords" => $obj["keywords"],
            "description" => $obj["description"],
            "address" => $obj["address"],
            "QQ" => $obj["QQ"],
            "telephone" => $obj["telephone"],
            "mobile" => $obj["mobile"],
            "email" => $obj["email"],
            "importantword" => $obj["importantword"],
            "record" => $obj["record"]
        )
    );
    $ret = array(
        "errcode" => 0
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);