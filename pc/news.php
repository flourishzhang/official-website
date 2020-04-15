<!DOCTYPE html>
<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$type = isset($_GET["type"]) ? $_GET["type"] : null;
$totalpage = ceil (GetNewsTotalCount (1, $type, null, true) / 5);
$newsList = GetNewsList ("`articleid`,`title`,`thumbnail`,`desc`,`publishtime`", 1, $type, null, 1, $page, 5, true);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>新闻资讯</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/init.css">
        <link rel="stylesheet" href="../css/wstyle.css">
        <link rel="stylesheet" href="../css/iconfont.css">
        <script src="../js/jquery-2.0.3.min.js"></script>
        <script src="../js/jquery.SuperSlide.2.1.1.js"></script>
        <script src="../js/banner.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
<body>
<?php require ("pc/head.php");?>
    <div class="w-news-box1">
        <img src="../img/news/news_box1.png" alt="">
    </div>
    <div class="w-news-box2">
        <ul class="clearfix">
            <li <?php if ($type == null) echo " class=\"active\"";?>>
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
    <div class="w-news-box3 clearfix">
        <div class="w-news-input">
            <input type="text" placeholder="请输入关键字搜索">
        </div>
        <div class="w-news-btn">
            <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$type;?>.html">搜索</a>
        </div>
    </div>
    <div class="w-news-box4">
        <ul class="clearfix">
        <?php foreach ($newsList as $news) { ?>
            <li>
                <a  href="<?php SiteUrl ();?>/detail-id-<?php echo $news["articleid"];?>.html">
                    <div class="new-left">
                        <img src="<?php SiteUrl ();echo $news["thumbnail"];?>">
                    </div>
                    <div class="new-right">
                        <p><?php echo $news["title"];?></p>
                        <p><?php echo $news["desc"];?></p>
                        <p><?php echo $news["publishtime"];?></p>
                    </div>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
    <div class="w-news-box5">
        <div class="new-page">
            <ul class="clearfix">
            <?php
if ($page > 1) {
?>
                <li>
                    <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$type;?>.html" class="bianse">首页</a>
                </li>
<?php
}
if ($totalpage < 5) {
    for ($i = 1 ; $i <= $totalpage ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else if ($i == 1) { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$type;?>.html"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$type;?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
} else if ($totalpage - $page <= 2) {
    for ($i = $totalpage-5 ; $i <= $totalpage ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$type;?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
} else if ($page <= 2) {
    for ($i = 1 ; $i <= 5 ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else if ($i == 1) { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news<?php if ($type != 0) echo "-type-".$type;?>.html"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$type;?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
} else {
    for ($i = $page-2 ; $i <= $page+2 ; $i++) {
        if ($i == $page) {
?>
                <li>
                    <a href="javascript:;" class="active-a"><?php echo $i;?></a>
                </li>
<?php   } else { ?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $i;if ($type != 0) echo "-type-".$type;?>.html"><?php echo $i;?></a>
                </li>
<?php
        }
    }
}
if ($page != $totalpage) {
?>
                <li>
                    <a href="<?php SiteUrl ();?>/news-page-<?php echo $totalpage;if ($type != 0) echo "-type-".$type;?>.html" class="bianse">尾页</a>
                </li>
<?php
}
?>
            </ul>
        </div>
    </div>
    <div class="w-news-box6">
        <img src="../img/news/news_box6.png" alt="">
    </div>
    <?php require ("pc/foot.php");?>
</body>

</html>