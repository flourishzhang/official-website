<?php
$info = GetUserInfo ($_POST["token"]);
if ($info == false) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else if ($info["editarticle"] == 0) {
    $ret = array(
        "errcode" => -1,
        "errmsg" => "权限不足"
    );
} else if ($_POST["articleid"] == 0) { // 新增
    $res  = CreateArticle (
                $_POST["title"],
                $_POST["desc"],
                $_POST["content"],
                $_POST["type"],
                $info["userid"],
                $_POST["publishtime"],
                $_POST["status"],
                $_FILES["file"]
            );
    if ($res == 0) {
        $ret = array(
            "errcode" => -1,
            "errmsg" => "新建文章失败"
        );
    } else {
        $ret = array(
            "errcode" => 0
        );
    }
} else { // 修改
    $res  = EditArticle (
                $_POST["articleid"],
                $_POST["title"],
                $_POST["desc"],
                $_POST["content"],
                $_POST["type"],
                $info["userid"],
                $_POST["publishtime"],
                $_POST["status"],
                $_POST["oldthumbnail"],
                isset($_FILES["file"])?$_FILES["file"]:null
            );
    if ($res == 0) {
        $ret = array(
            "errcode" => -1,
            "errmsg" => "修改文章失败"
        );
    } else {
        $ret = array(
            "errcode" => 0
        );
    }
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);