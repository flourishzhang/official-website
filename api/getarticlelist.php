<?php
$body = file_get_contents ("php://input");
$obj = json_decode ($body, true);
if (isset ($obj["token"])) {
    $info = GetUserInfo ($obj["token"]);
    if ($info == false) {
        $ret = array(
            "errcode" => 2000,
            "errmsg" => "您的账号已在其他设备登录，您已下线"
        );
    } else if ($info["getnewslist"] == 0) {
        $ret = array(
            "errcode" => -1,
            "errmsg" => "权限不足"
        );
    } else {
        $status = isset ($obj["articlestatus"]) ? $obj["articlestatus"] : null;
        $type = isset ($obj["articletype"]) ? $obj["articletype"] : null;
        $keyword = isset ($obj["keyword"]) ? $obj["keyword"] : null;
        $order = isset($obj["order"]) ? $obj["order"] : 1;
        $page = isset($obj["page"]) ? $obj["page"] : 1;
        $size = isset($obj["size"]) ? $obj["size"] : 5;
        $list = GetNewsList (
            "`articleid`,`title`,`createtime`,`modifytime`,`publishtime`,`articletype`,`articlestatus`,`nickname`",
            $status,
            $type,
            $keyword,
            $order,
            $page,
            $size,
            false);
        $count = GetNewsTotalCount (
            $status,
            $type,
            $keyword,
            false);
        $ret = array(
            "errcode" => 0,
            "articlelist" => $list,
            "totalcount" => $count,
        );
    }
} else {
    $page = isset($obj["page"]) ? $obj["page"] : 1;
    $size = isset($obj["size"]) ? $obj["size"] : 5;
    $type = isset($obj["type"]) ? $obj["type"] : null;
    $count = GetNewsTotalCount (1, $type, null, true);
    $list = GetNewsList ("`articleid`,`title`,`thumbnail`,`desc`,`publishtime`", 1, $type, null, 1, $page, $size, true);
    $ret = array(
        "errcode" => 0,
        "articlelist" => $list,
        "totalcount" => $count,
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);