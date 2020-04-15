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
    } else if ($info["getarticledesc"] == 0) {
        $ret = array(
            "errcode" => -1,
            "errmsg" => "权限不足"
        );
    } else {
        $info = GetArticleInfo ($obj["articleid"], false);
        $ret = array(
            "errcode" => 0,
            "article" => $info["articleinfo"],
            "previousArticle" => $info["previousArticleInfo"],
            "nextArticle" => $info["nextArticleInfo"]
        );
    }
} else {
    $info = GetArticleInfo ($obj["articleid"], true);
    $ret = array(
        "errcode" => 0,
        "article" => $info["articleinfo"],
        "previousArticle" => $info["previousArticleInfo"],
        "nextArticle" => $info["nextArticleInfo"]
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);