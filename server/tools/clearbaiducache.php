<?php
if (!isset($argc) || $argc != 7) {
    echo "param error\n";
    exit;
}
$YY = $argv[1];
$YM = $argv[2];
$YD = $argv[3];
$NY = $argv[4];
$NM = $argv[5];
$ND = $argv[6];

require_once("../functions.php");
$url = "cdn.baidubce.com";
$params = array(
    "/uploads/article/".$YY."/".$YM."/".$YD."/",
    "/uploads/article/".$NY."/".$NM."/".$ND."/",
    "/uploads/ueditor/imgs/".$YY.$YM.$YD."/",
    "/uploads/ueditor/imgs/".$NY.$NM.$ND."/"
);
$siteurl = $webmsg["siteurl"];
$needclearurls = array();
foreach($params as $val) {
    array_push($needclearurls, array("url" => $siteurl.$val, "type" => "directory"));
}
$stmt = ExecuteSql("SELECT `requesturl` FROM `".$config["prefix"]."clientlog` WHERE `httphost` = 'www.worldflying.cn' AND `isclear` = 0 GROUP BY `requesturl` LIMIT 196");
$params = $stmt->fetchAll(PDO::FETCH_ASSOC);
$offset = 196;
while (count($params) != 0) {
    foreach ($params as $val) {
        array_push($needclearurls, array("url" => $siteurl.$val["requesturl"]));
    }
    $postdata = json_encode(array("tasks" => $needclearurls), JSON_UNESCAPED_SLASHES);
    $ak = $webmsg["baiduyunaccesskey"];
    $sk = $webmsg["baiduyunsecretkey"];
    $time = gmdate("Y-m-d\TH:i:s\Z");
    $expire = 120;
    $authstringprefix = "bce-auth-v1/".$ak."/".$time."/".$expire;
    $canonicaluri = "/v2/cache/purge";
    $canonicalquerystring = "";
    $canonicalheaders = "host:".$url;
    $canonicalrequest = "POST\n".$canonicaluri."\n".$canonicalquerystring."\n".$canonicalheaders;
    $signedheaders = "host";
    $signingkey = hash_hmac("sha256", $authstringprefix, $sk);
    $signature = hash_hmac("sha256", $canonicalrequest, $signingkey);
    $headers = array("Authorization: bce-auth-v1/".$ak."/".$time."/".$expire."/".$signedheaders."/".$signature);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://".$url.$canonicaluri);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $ret = curl_exec($ch);
    curl_close($ch);
    echo $ret;
    $needclearurls = array();
    $stmt = ExecuteSql("SELECT `requesturl` FROM `".$config["prefix"]."clientlog` WHERE `httphost` = 'www.worldflying.cn' AND `isclear` = 0 GROUP BY `requesturl` LIMIT ".$offset.",200");
    $params = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $offset += 200;
}
ExecuteSql("UPDATE `".$config["prefix"]."clientlog` SET `isclear` = 1 WHERE `httphost` = 'www.worldflying.cn'");
