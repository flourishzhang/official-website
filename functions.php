<?php
require_once("config.php");
$webmsg = WebsiteMsg();
function ExecuteSql ($sql, $params=array()) {
    global $config;
    $db = new PDO("mysql:host=".$config["dbhost"].";port=".$config["dbport"].";dbname=".$config["dbname"].";charset=utf8", $config["dbuser"], $config["dbpass"], array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_EMULATE_PREPARES => false));
    $stmt = $db->prepare($sql);
    $stmt->execute($params);
    return $stmt;
}

function IsMobile() {
    $mobile_list = array('Android', 'iPhone', 'iPod', 'Mobile', 'Google Wireless Transcoder', 'Windows CE', 'WindowsCE', 'Symbian', 'armv6l', 'armv5', 'CentOS', 'mowser', 'AvantGo', 'Opera Mobi',
        'J2ME/MIDP', 'Smartphone', 'Go.Web', 'Palm', 'iPAQ', 'Profile/MIDP', 'Configuration/CLDC-', '160×160', '176×220', '240×240', '240×320', '320×240', 'UP.Browser', 'UP.Link',
        'SymbianOS', 'PalmOS', 'PocketPC', 'SonyEricsson', 'Nokia', 'BlackBerry', 'Vodafone', 'BenQ', 'Novarra-Vision', 'Iris', 'NetFront', 'HTC_', 'Xda_', 'SAMSUNG-SGH', 'Wapaka',
        'DoCoMo');
    $found_mobile = false;
    foreach($mobile_list as $v) {
        if(strstr($_SERVER['HTTP_USER_AGENT'], $v) != null) {
            $found_mobile = true;
            break;
        }
    }
    return $found_mobile;
}

function WebsiteMsg () {
    static $webmsg = null;
    if ($webmsg === null) {
        $webmsg = array();
        $stmt = ExecuteSql ("SELECT `ckey`,`cvalue` FROM `wf_config`");
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $count = count ($arr);
        for ($i = 0 ; $i < $count ; $i++) {
            $webmsg[$arr[$i]["ckey"]] = $arr[$i]["cvalue"];
        }
    }
    return $webmsg;
}

function WebsiteTitle () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["title"];
}

function WebsiteKeyWords () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["keywords"];
}

function WebsiteDescription () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["description"];
}

function WebsiteAddress () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["address"];
}

function WebsiteQQ () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["QQ"];
}

function WebsiteTelephone () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["telephone"];
}

function WebsiteMobile () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["mobile"];
}

function WebsiteEmail () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["email"];
}

function WebsiteRecord () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["record"];
}

function WebsiteImportantWord () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["importantword"];
}

function GetSiteUrl () {
    $webmsg = WebsiteMsg ();
    return $webmsg["siteurl"];
}

function SiteUrl () {
    echo GetSiteUrl ();
}

function AssetsUrl () {
    $webmsg = WebsiteMsg ();
    if($_SERVER['HTTP_HOST']=='localhost'){
        echo '..';
    }else{
        echo $webmsg["assetsurl"];
    }
}

function RecommendName () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["recommendname"];
}

function RecommendPcUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["recommendpcurl"];
}

function RecommendMobileUrl () {
    $webmsg = WebsiteMsg ();
    echo $webmsg["recommendmobileurl"];
}

function GetBaiduPushToken () {
    $webmsg = WebsiteMsg ();
    return $webmsg["baidupushtoken"];
}

function GetBaiduAppId () {
    $webmsg = WebsiteMsg ();
    return $webmsg["baiduappid"];
}

function GetBaiduAppToken () {
    $webmsg = WebsiteMsg ();
    return $webmsg["baiduapptoken"];
}

function GetNewsList ($column, $status, $type, $keyword, $order, $page, $size, $now) {
    static $newsList = null;
    if ($newsList === null) {
        $sql = "SELECT ".$column." FROM `wf_news`,`wf_user` WHERE `wf_news`.`userid` = `wf_user`.`userid`";
        $params = array();
        if ($status !== null) {
            $sql .= " AND `articlestatus` = ?";
            array_push ($params, $status);
        }
        if ($type !== null) {
            $sql .= " AND `articletype` = ?";
            array_push ($params, $type);
        }
        if ($keyword !== null) {
            $sql .= " AND `title` or `content` LIKE ?";
            array_push ($params, "%".$keyword."%");
        }
        if ($now) {
            $sql .= " AND `publishtime` < NOW()";
        }
        if ($order) {
            $sql .= " ORDER BY `publishtime` DESC";
        } else {
            $sql .= " ORDER BY `articleid` DESC";
        }
        if ($page !== null && $size !== null) {
            $offset = $size*($page-1);
            $sql .= " LIMIT ?,?";
            array_push ($params, $offset, $size);
        }
/*
        print_r(array(
            "sql" => $sql,
            "params" => $params
        ));
*/
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $newsList = $res;
    }
    return $newsList;
}

function GetNewsTotalCount ($status, $type, $keyword, $now) {
    static $totalcount = null;
    if ($totalcount === null) {
        $sql = "SELECT COUNT(*) as count FROM `wf_news` WHERE 1";
        $params = array();
        if ($status !== null) {
            $sql .= " AND `articlestatus` = ?";
            array_push ($params, $status);
        }
        if ($type !== null) {
            $sql .= " AND `articletype` = ?";
            array_push ($params, $type);
        }
        if ($keyword !== null) {
            $sql .= " AND `title` LIKE ?";
            array_push ($params, "%".$keyword."%");
        }
        if ($now) {
            $sql .= " AND `publishtime` < NOW()";
        }
/*
        print_r(array(
            "sql" => $sql,
            "params" => $params
        ));
*/
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $totalcount = $res[0]["count"];
    }
    return (int) $totalcount;
}

function GetPreviousArticleInfo ($publishtime) {
    static $info = null;
    if ($info === null) {
        $stmt = ExecuteSql ("SELECT `articleid`,`title` FROM `wf_news` WHERE `publishtime`<? AND `publishtime` < NOW() AND `articlestatus`=1 ORDER BY `publishtime` DESC LIMIT 1",
                    array ($publishtime));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $info = $res[0];
        } else {
            $info = array (
                "articleid" => 0,
                "title" => "文章不存在"
            );
        }
    }
    return $info;
}

function GetNextArticleInfo ($publishtime) {
    static $info = null;
    if ($info === null) {
        $stmt = ExecuteSql ("SELECT `articleid`,`title` FROM `wf_news` WHERE `publishtime`>? AND `publishtime` < NOW() AND `articlestatus`=1 ORDER BY `publishtime` ASC LIMIT 1",
                    array ($publishtime));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $info = $res[0];
        } else {
            $info = array (
                "articleid" => 0,
                "title" => "文章不存在"
            );
        }
    }
    return $info;
}

function GetArticleInfo ($articleid, $opt) {
    static $info = null;
    if ($info === null) {
        $sql = "SELECT `title`,`desc`,`publishtime`,`content`,`thumbnail`,`articletype`,`articlestatus` FROM `wf_news` WHERE `articleid`=?";
        if ($opt) {
            $sql .=  " AND `publishtime` < NOW() AND `articlestatus`=1";
        }
        $stmt = ExecuteSql ($sql,
                    array ($articleid));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($res) != 0) {
            $articleinfo = $res[0];
            $previousArticleInfo = GetPreviousArticleInfo ($articleinfo["publishtime"]);
            $nextArticleInfo = GetNextArticleInfo ($articleinfo["publishtime"]);
        } else {
            $articleinfo = array (
                "title" => "文章不存在",
                "desc" => "文章不存在，请检查您的链接。",
                "publishtime" => "0000-00-00 00:00:00",
                "content" => "文章不存在，请检查您的链接。"
            );
            $previousArticleInfo = GetPreviousArticleInfo ($articleinfo["publishtime"]);
            $nextArticleInfo = GetNextArticleInfo ($articleinfo["publishtime"]);
        }
        $info = array (
            "articleinfo" => $articleinfo,
            "previousArticleInfo" => $previousArticleInfo,
            "nextArticleInfo" => $nextArticleInfo
        );
    }
    return $info;
}

function Login ($username, $password) {
    $chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $len = strlen($chars);
    $token = microtime(true)."-";
    for ($i = 0 ; $i < 32 ; $i++) {
        $token .= $chars[mt_rand(0, $len-1)];
    }
    $stmt = ExecuteSql ("UPDATE `wf_user` SET `token` = ?, `lastlogin` = NOW() WHERE `user` = ? AND `pass` = MD5(?)", array($token, $username, $password));
    if ($stmt->rowCount() == 0) {
        return false;
    } else {
        return $token;
    }
}

function GetUserInfo ($token) {
    $stmt1 = ExecuteSql ("SELECT `u`.`userid`, `u`.`nickname`, `u`.`lastlogin`, `g`.* FROM `wf_user` as u,`wf_group` as g WHERE `u`.`token` = ? AND `u`.`groupid` = `g`.`groupid`", array($token));
    $info = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    if (count($info) === 0) {
        return false;
    }
    return $info[0];
}

function CreateArticle ($title, $desc, $content, $type, $userid, $publishtime, $status, $file) {
    $timestamp = time();
    $path = "/uploads/article/".date("Y/m/d", $timestamp);
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($chars);
    $filepath = $path."/".$timestamp;
    for ($i = 0 ; $i < 4 ; $i++) {
        $filepath .= $chars[mt_rand(0, $len-1)];
    }
    $filepath .= ".png";
    if (!is_dir($path)) {
        mkdir (getcwd().$path, 0777, true);
    }
    move_uploaded_file($file["tmp_name"], getcwd().$filepath);
    $stmt = ExecuteSql ("INSERT `wf_news` (`title`, `desc`, `content`, `thumbnail`, `articletype`, `userid`, `createtime`, `modifytime`, `publishtime`, `articlestatus`) VALUES (?,?,?,?,?,?,NOW(),NOW(),?,?) ",
                array($title, $desc, $content, $filepath, $type, $userid, $publishtime, $status));
    return $stmt->rowCount();
}

function EditArticle ($articleid, $title, $desc, $content, $type, $userid, $publishtime, $status, $oldthumbnail, $file) {
    if ($file) {
        $oldfilepath = getcwd().$oldthumbnail;
        if (is_file($oldfilepath)) {
            unlink ($oldfilepath);
        }
        $timestamp = time();
        $path = "/uploads/article/".date("Y/m/d", $timestamp);
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $len = strlen($chars);
        $filepath = $path."/".$timestamp;
        for ($i = 0 ; $i < 4 ; $i++) {
            $filepath .= $chars[mt_rand(0, $len-1)];
        }
        $filepath .= ".png";
        if (!is_dir(getcwd().$path)) {
            mkdir (getcwd().$path, 0777, true);
        }
        move_uploaded_file($file["tmp_name"], getcwd().$filepath);
        $stmt = ExecuteSql ("UPDATE `wf_news` SET `title` = ?, `desc` = ?, `content` = ?, `thumbnail` = ?, `articletype` = ?, `userid` = ?, `modifytime` = NOW(), `publishtime` = ?, `articlestatus` = ? WHERE `articleid` = ?",
                    array($title, $desc, $content, $filepath, $type, $userid, $publishtime, $status, $articleid));
    } else {
        $stmt = ExecuteSql ("UPDATE `wf_news` SET `title` = ?, `desc` = ?, `content` = ?, `articletype` = ?, `userid` = ?, `modifytime` = NOW(), `publishtime` = ?, `articlestatus` = ? WHERE `articleid` = ?",
                    array($title, $desc, $content, $type, $userid, $publishtime, $status, $articleid));
    }
    return $stmt->rowCount();
}

function GetSpiderList ($spidertype, $page, $size) {
    static $list = null;
    if ($list === null) {
        $sql = "SELECT * FROM `wf_spiderlog` WHERE 1";
        $params = array ();
        if ($spidertype != null) {
            $sql .= " AND `name` = ?";
            array_push($params, $spidertype);
        }
        $offset = $size*($page-1);
        $sql .= " ORDER BY `spiderlogId` DESC LIMIT ?,?";
        array_push($params, $offset, $size);
/*
        print_r(array(
            "sql" => $sql,
            "params" => $params
        ));
*/
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $list = $res;
    }
    return $list;
}

function GetSpiderTotalCount ($spidertype) {
    static $list = null;
    if ($list === null) {
        $sql = "SELECT COUNT(*) as count FROM `wf_spiderlog` WHERE 1";
        $params = array ();
        if ($spidertype != null) {
            $sql .= " AND `name` = ?";
            array_push($params, $spidertype);
        }
        $stmt = ExecuteSql ($sql, $params);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $totalcount = $res[0]["count"];
    }
    return (int) $totalcount;
}

function SpiderLog() {
    $bots = array (
        'Googlebot' => '谷歌搜索',
        'Baiduspider' => '百度搜索',
        '360Spider' => '360搜索',
        'HaoSouSpider' => '360搜索',
        'Sogou web spider' => '搜狗搜索',
        'Sogou inst spider' => '搜狗搜索',
        'Sogou spider2' => '搜狗搜索',
        'Sogou blog' => '搜狗搜索',
        'Sogou News Spider' => '搜狗搜索',
        'Sogou Orion spider' => '搜狗搜索',
        'Sosospider' => '搜搜搜索'
    );
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    foreach ($bots as $k => $v) {
        if(stristr($useragent, $k) != null) {
            ExecuteSql ("INSERT `wf_spiderlog` (`name`, `target`, `IP`, `time`) VALUES (?,?,?,NOW())",
                array($v, $_SERVER["REQUEST_URI"], $_SERVER["REMOTE_ADDR"]));
            break;
        }
    }
}
