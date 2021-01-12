<?php
require_once("../functions.php");
$stmt = ExecuteSql("SELECT a.`ID`,a.`imgurl`,b.`articleid` FROM `".$config["prefix"]."newsimgs` AS a LEFT OUTER JOIN `".$config["prefix"]."news` AS b ON a.`createtime` < b.`createtime` AND INSTR(b.`content`, a.`imgurl`) > 0 WHERE b.`articleid` IS NULL");
$params = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($params as $val) {
    unlink("..".$val["imgurl"]);
}
ExecuteSql("DELETE FROM `".$config["prefix"]."newsimgs`");

$url = "cdn.baidubce.com";
$siteurl = $webmsg["siteurl"];
$needclearurls = array();
$stmt = ExecuteSql("SELECT `requesturl` FROM `".$config["prefix"]."clientlog` WHERE `httphost` = ? AND `isclear` = 0 GROUP BY `requesturl` LIMIT 200", array($webmsg["domain"]));
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
    $stmt = ExecuteSql("SELECT `requesturl` FROM `".$config["prefix"]."clientlog` WHERE `httphost` = ? AND `isclear` = 0 GROUP BY `requesturl` LIMIT ".$offset.",200", array($webmsg["domain"]));
    $params = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $offset += 200;
}
ExecuteSql("UPDATE `".$config["prefix"]."clientlog` SET `isclear` = 1 WHERE `isclear` != 1 AND `httphost` = ?", array($webmsg["domain"]));
ExecuteSql("DELETE FROM `".$config["prefix"]."ddnslog` WHERE `ischanged` = 0");
