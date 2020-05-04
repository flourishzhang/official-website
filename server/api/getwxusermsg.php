<?php
if (isset($_GET["code"])) {
    $wxappid = GetWxAppId ();
    $wxappsecret = GetWxAppSecret ();
    $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$wxappid."&secret=".$wxappsecret."&code=".$_GET["code"]."&grant_type=authorization_code";
    $res = file_get_contents($url);
    $obj = json_decode($res, true);
    $url = "https://api.weixin.qq.com/sns/userinfo?access_token=".$obj["access_token"]."&openid=".$obj["openid"]."&lang=zh_CN";
    $res = file_get_contents($url);
    SetWxUser ($res);
    $res = "更新成功";
} else {
    $res = "链接错误";
}
echo $res;
