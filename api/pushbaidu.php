<?php
$body = file_get_contents ("php://input");
$obj = json_decode ($body, true);
$info = GetUserInfo ($obj["token"]);
if ($info == false) {
    $ret = array(
        "errcode" => 2000,
        "errmsg" => "您的账号已在其他设备登录，您已下线"
    );
} else if ($info["pushbaidu"] == 0) {
    $ret = array(
        "errcode" => -1,
        "errmsg" => "权限不足"
    );
} else {
    $urls = array();
    $count = count($obj["ids"]);
    $siteurl = $webmsg["siteurl"];
    $baidupushtoken = $webmsg["baidupushtoken"];
    $baiduappid = $webmsg["baiduappid"];
    $baiduapptoken = $webmsg["baiduapptoken"];
    for ($i = 0 ; $i < $count ; $i++) {
        array_push($urls,
            $siteurl."/article-id-".$obj["ids"][$i].".html",
            $siteurl."/mobilearticle-id-".$obj["ids"][$i].".html"
        );
    }
    $api = "http://data.zz.baidu.com/urls?site=".$siteurl."&token=".$baidupushtoken;
    $ch = curl_init();
    $options =  array(
        CURLOPT_URL => $api,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => implode("\n", $urls),
        CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    );
    curl_setopt_array($ch, $options);
    $res1 = curl_exec($ch);
    $api = "http://data.zz.baidu.com/urls?appid=".$baiduappid."&token=".$baiduapptoken."&type=batch";
    $ch = curl_init();
    $options =  array(
        CURLOPT_URL => $api,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => implode("\n", $urls),
        CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    );
    curl_setopt_array($ch, $options);
    $res2 = curl_exec($ch);
    $ret = array(
        "errcode" => 0,
        "msg" => $res1." ".$res2
    );
}
header('Access-Control-Allow-Origin:*');
echo json_encode($ret, JSON_UNESCAPED_UNICODE);
