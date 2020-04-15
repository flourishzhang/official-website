<?php
$body = file_get_contents ("php://input");
$obj = json_decode ($body, true);
$info = GetUserInfo ($obj["token"]);
if ($info == false) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else if ($info["getspiderlist"] == 0) {
    $ret = array(
        "errcode" => -1,
        "errmsg" => "权限不足"
    );
} else {
    $spidertype = isset ($obj["spidertype"]) ? $obj["spidertype"] : null;
    $list = GetSpiderList ($spidertype, $obj["page"], $obj["size"]);
    $count = GetSpiderTotalCount ($spidertype);
    $ret = array(
        "errcode" => 0,
        "spiderlist" => $list,
        "totalcount" => $count,
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);