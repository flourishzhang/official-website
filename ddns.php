<?php
function RandomStr ($num) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($chars);
    $str = "";
    for ($i = 0 ; $i < $num ; $i++) {
        $str .= $chars[mt_rand(0, $len-1)];
    }
    return $str;
}

function ddns () {
    global $webmsg;
	if ($_GET["password"] !== 'dUbgmbA3k4zItiJKqfCbfLiKFwuVjPBP') {
		echo "password error.\n";
		return;
	}
	// $ret = dns_get_record("companyhost.worldflying.cn");
	$ret = json_decode(file_get_contents("http://203.107.1.33/180537/d?host=companyhost.worldflying.cn"), true)
	if (count($ret) === 1 && $ret[0]["type"] === "A" && $ret["ips"][0] === $_SERVER['REMOTE_ADDR']) {
		echo "no need change";
		SetDdnsLog($_SERVER['REMOTE_ADDR'], 0);
		return;
	}

	$ak = $webmsg["aliyunaccesskey"]; // AccessKey ID
	$sk = $webmsg["aliyunsecretkey"]; // AccessKey Secret
	// 删除主机下的全部解析
	$params = array(
		"Action" => "DeleteSubDomainRecords",
		"DomainName" => "worldflying.cn",
		"RR" => "companyhost",
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
	echo $ret."\n\n";
	// 添加解析
	$params = array(
		"Action" => "AddDomainRecord",
		"DomainName" => "worldflying.cn",
		"RR" => "companyhost",
		"Type" => "A",
		"Value" => $realip,
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
	echo $ret."\n\n";
	SetDdnsLog($_SERVER['REMOTE_ADDR'], 0);
}