<?php
$articleid = $_GET["id"];
$type = isset($_GET["type"]) ? $_GET["type"] : null;
$info = GetArticleInfo ($articleid, true);
$articleinfo = $info["articleinfo"];
$previousArticleInfo = $info["previousArticleInfo"];
$nextArticleInfo = $info["nextArticleInfo"];
?>

<?php require ("pc/head.php");?>
    <div class="y-detail-box1">
        <img src="<?php echo $webmsg["assetsurl"];?>/img/detail/banner4.png" alt="">
    </div>
    <div class="y-detail-box2">
        <div class="y-detail-title">
            <ul class="clearfix">
                <li  <?php if ($type == null) echo " class=\"active\"";?>>
                    <a href="<?php echo $webmsg["siteurl"];?>/news.html"> ALL +</a>
                </li>
                <li <?php if ($type == 1) echo " class=\"active\"";?>>
                    <a href="<?php echo $webmsg["siteurl"];?>/news-type-1.html"> 公司动态</a>
                </li>
                <li <?php if ($type == 2) echo " class=\"active\"";?>>
                    <a href="<?php echo $webmsg["siteurl"];?>/news-type-2.html"> 媒体报道</a>
                </li>
                <li <?php if ($type == 3) echo " class=\"active\"";?>>
                    <a href="<?php echo $webmsg["siteurl"];?>/news-type-3.html"> 行业资讯</a>
                </li>
            </ul>
        </div>
        <div class="y-detail-body">
            <div class="return">
                <a  href="<?php echo $webmsg["siteurl"];?>/news<?php if ($type != null) echo '-type-'.$type ?>.html" class="p1">返回ALL+列表
                    <span class="iconfont iconxiangzuo"></span>
                </a>
            </div>
            <div class="body-title">
                <h3 style="text-align:center;font-size:40px;padding-top:30px;"><?php echo $articleinfo["title"];?></h3>
                <p style="font-size: 20px;color: #444;text-align: center;padding-top:20px;padding-bottom:30px;"><?php echo $articleinfo["publishtime"];?></p>
                <div class="body-text" style="font-family: ''"><?php echo $articleinfo["content"];?></div>
            </div>
            <div class="body-foot">
                <ul class="clearfix">
                    <li>
                        <span>优秀解决方案推荐：</span>
                        <a href="<?php echo $webmsg["siteurl"].$webmsg["recommendpcurl"];?>"><span><?php echo $webmsg["recommendname"];?></span></a>
                    </li>
                    <?php if ($previousArticleInfo["articleid"] != 0) { ?>
                    <li>
                        <span>上一篇：</span>
                        <a href="<?php echo $webmsg["siteurl"];?>/article-id-<?php echo $previousArticleInfo["articleid"];?>.html"><span><?php echo $previousArticleInfo["title"];?></span></a>
                    </li>
                    <?php } ?>
                    <?php if ($nextArticleInfo["articleid"] != 0) { ?>
                    <li>
                        <span>下一篇：</span>
                        <a href="<?php echo $webmsg["siteurl"];?>/article-id-<?php echo $nextArticleInfo["articleid"];?>.html"><span><?php echo $nextArticleInfo["title"];?></span></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php require ("pc/foot.php");?>
