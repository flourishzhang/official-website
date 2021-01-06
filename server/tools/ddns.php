<?php
require_once("../functions.php");

if ($_GET["ddnskey"] !== $webmsg["ddnskey"]) {
	echo "ddnskey check error.";
	exit;
}

$ret = json_decode(file_get_contents("http://203.107.1.33/180537/d?host=".$_GET["companyhost"]), true);
if ($ret["ips"][0] === $_SERVER['REMOTE_ADDR']) {
    echo "no need change";
	SetDdnsLog($_SERVER['REMOTE_ADDR'], 0, '');
    exit;
}

$ak = $webmsg["aliyunaccesskey"]; // AccessKey ID
$sk = $webmsg["aliyunsecretkey"]; // AccessKey Secret
$spot = strpos($_GET["companyhost"], ".");
$domainname = substr($_GET["companyhost"], $spot+1);
$rr = substr($_GET["companyhost"], 0, $spot);
// 删除主机下的全部解析
$params = array(
    "Action" => "DeleteSubDomainRecords",
    "DomainName" => $domainname,
    "RR" => $rr,
    "Format" => "JSON",
    "Version" => "2015-01-09",
    "AccessKeyId" => $ak,
    "SignatureMethod" => "HMAC-SHA1",
    "SignatureVersion" => "1.0",
    "SignatureNonce" => RandomStr(16),
    "Timestamp" => gmdate("Y-m-d\TH:i:s\Z")
);
ksort($params);
$CanonicalizedQueryString = "";
foreach ($params as $k => $v) {
    $CanonicalizedQueryString .= "&".urlencode($k)."=".urlencode($v);
}
$CanonicalizedQueryString = substr($CanonicalizedQueryString, 1);
$StringToSign = "GET&".urlencode("/")."&".urlencode($CanonicalizedQueryString);
$signature = base64_encode(hash_hmac("sha1", $StringToSign, $sk."&", true));
$url = "https://alidns.aliyuncs.com?".$CanonicalizedQueryString."&Signature=".urlencode($signature);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ret = curl_exec($ch);
curl_close($ch);
$ret .= "\n\n";
// 添加解析
$params = array(
    "Action" => "AddDomainRecord",
    "DomainName" => $domainname,
    "RR" => $rr,
    "Type" => "A",
    "Value" => $_SERVER['REMOTE_ADDR'],
    "Format" => "JSON",
    "Version" => "2015-01-09",
    "AccessKeyId" => $ak,
    "SignatureMethod" => "HMAC-SHA1",
    "SignatureVersion" => "1.0",
    "SignatureNonce" => RandomStr(16),
    "Timestamp" => gmdate("Y-m-d\TH:i:s\Z")
);
ksort($params);
$CanonicalizedQueryString = "";
foreach ($params as $k => $v) {
    $CanonicalizedQueryString .= "&".urlencode($k)."=".urlencode($v);
}
$CanonicalizedQueryString = substr($CanonicalizedQueryString, 1);
$StringToSign = "GET&".urlencode("/")."&".urlencode($CanonicalizedQueryString);
$signature = base64_encode(hash_hmac("sha1", $StringToSign, $sk."&", true));
$url = "https://alidns.aliyuncs.com?".$CanonicalizedQueryString."&Signature=".urlencode($signature);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ret .= curl_exec($ch);
curl_close($ch);
$ret .= "\n\n";

echo $ret;
SetDdnsLog($_SERVER['REMOTE_ADDR'], 1, $ret);
