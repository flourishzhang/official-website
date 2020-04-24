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
        <img src="<?php AssetsUrl ();?>/img/detail/banner4.png" alt="">
    </div>
    <div class="y-detail-box2">
        <div class="y-detail-title">
            <ul class="clearfix">
                <li  <?php if ($type == null) echo " class=\"active\"";?>>
                    <a href="<?php SiteUrl();?>/news.html"> ALL +</a>
                </li>
                <li <?php if ($type == 1) echo " class=\"active\"";?>>
                    <a href="<?php SiteUrl();?>/news-type-1.html"> 公司动态</a>
                </li>
                <li <?php if ($type == 2) echo " class=\"active\"";?>>
                    <a href="<?php SiteUrl();?>/news-type-2.html"> 媒体报道</a>
                </li>
                <li <?php if ($type == 3) echo " class=\"active\"";?>>
                    <a href="<?php SiteUrl();?>/news-type-3.html"> 行业资讯</a>
                </li>
            </ul>
        </div>
        <div class="y-detail-body">
            <div class="return">
                <a  href="<?php SiteUrl();?>/news.html" class="p1">返回ALL+ 列表
                    <span class="iconfont iconxiangzuo"></span>
                </a>
            </div>
            <div class="body-title">
                <h3><?php echo $articleinfo["title"];?></h3>
                <p><?php echo $articleinfo["publishtime"];?></p>
                <div class="body-text"><?php echo $articleinfo["content"];?></div>
            </div>
            <div class="body-foot">
                <ul class="clearfix">
                    <li>
                        <span>文章来源：</span>
                        <a href="<?php SiteUrl();?><?php RecommendPcUrl ();?>"><span><?php RecommendName ();?></span></a>
                    </li>
                    <li>
                        <span>优秀解决方案推荐：</span>
                        <a href="<?php SiteUrl();?><?php RecommendPcUrl ();?>"><span><?php RecommendName ();?></span></a>
                    </li>
                    <?php if ($previousArticleInfo["articleid"] != 0) { ?>
                    <li>
                        <span>上一篇：</span>
                        <a href="<?php SiteUrl();?>/article-id-<?php echo $previousArticleInfo["articleid"];?>.html"><span><?php echo $previousArticleInfo["title"];?></span></a>
                    </li>
                    <?php } ?>
                    <?php if ($nextArticleInfo["articleid"] != 0) { ?>
                    <li>
                        <span>下一篇：</span>
                        <a href="<?php SiteUrl();?>/article-id-<?php echo $nextArticleInfo["articleid"];?>.html">"<span><?php echo $nextArticleInfo["title"];?></span></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php require ("pc/foot.php");?>
