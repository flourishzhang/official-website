<?php
$articleid = $_GET["id"];
$type = isset($_GET["type"]) ? $_GET["type"] : null;
$info = GetArticleInfo ($articleid, true);
$articleinfo = $info["articleinfo"];
$previousArticleInfo = $info["previousArticleInfo"];
$nextArticleInfo = $info["nextArticleInfo"];
?>
<?php require ("phone/head.php");?>
    <div class="w-p-news-box1">
        <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/new_box1.png" alt="">
    </div>
    <div class="w-p-newsdet-box2">
        <a class="w-ct-return" href="<?php echo $webmsg["siteurl"];?>/phonenews.html">返回ALL+列表<span class="iconfont iconxiangzuo"></span></a>
    </div>
    <div class="w-p-newsdet-box3" style="font-family: ''">
        <?php echo $articleinfo["content"];?>
    </div>
    <div class="w-p-newsdet-box4">
        <ul class="clearfix">
            <li>
                <span>优秀解决方案推荐：</span>
                <a href="<?php echo $webmsg["siteurl"].$webmsg["recommendmobileurl"];?>"><?php echo $webmsg["recommendname"];?></a>
            </li>
            <li>
                <span>上一篇：</span>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilearticle-id-<?php echo $previousArticleInfo["articleid"];?>.html"><?php echo $previousArticleInfo["title"];?></a>
            </li>
            <li>
                <span>下一篇：</span>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilearticle-id-<?php echo $nextArticleInfo["articleid"];?>.html"><?php echo $nextArticleInfo["title"];?></a>
            </li>
        </ul>
    </div>
<?php require ("phone/foot.php");?>
