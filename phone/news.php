
<?php
$page = isset($_GET["page"]) ? $_GET["page"] : 1;
$type = isset($_GET["type"]) ? $_GET["type"] : null;
$keyword = isset($_GET["keyword"]) ? $_GET["keyword"] : null;
$totalpage = ceil (GetNewsTotalCount (1, $type, $keyword, true) / 5);
$newsList = GetNewsList ("`articleid`,`title`,`thumbnail`,`desc`,`publishtime`", 1, $type, $keyword, 1, $page, 5, true);
?>
<?php require ("phone/head.php");?>
    <div class="w-p-news-box1">
        <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/new_box1.png" alt="">
    </div>
    <div class="w-p-news-box2 clearfix">
        <div <?php if ($type == null) echo " class=\"active\"";?>><a href="<?php echo $webmsg["siteurl"];?>/mobilenews.html">ALL+</a></div>
        <div <?php if ($type == 1) echo " class=\"active\"";?>><a href="<?php echo $webmsg["siteurl"];?>/mobilenews-type-1.html">公司动态</a></div>
        <div <?php if ($type == 2) echo " class=\"active\"";?>><a href="<?php echo $webmsg["siteurl"];?>/mobilenews-type-2.html">媒体报道</a></div>
        <div <?php if ($type == 3) echo " class=\"active\"";?>><a href="<?php echo $webmsg["siteurl"];?>/mobilenews-type-3.html">行业资讯</a></div>
    </div>
    <div class="w-p-search">
        <div class="mui-input-row mui-search" id="searchInputclick">
            <!-- data-url 需要修改 -->
            <input type="search" id="searchInput" data-url="<?php echo $webmsg["siteurl"];?>/mobilenews<?php if ($type != 0) echo "-type-".$type;?>-keyword-" onkeyup="enterSearch(event)" class="mui-input-clear" placeholder="请输入关键字搜索">
        </div>
        <?php if ($keyword != null){?>
            <p class="w-p-huanhang">搜索词：<?php echo $keyword?$keyword:""?></p>
        <?php }?>
    </div>
    <div class="w-p-news-box3">
        <ul>
        <?php foreach ($newsList as $news) { ?>
            <li>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilearticle-id-<?php echo $news["articleid"];?>.html" class="clearfix">
                    <div class="w-p-news-zi">
                        <h3><?php echo $news["title"];?></h3>
                        <p><?php echo $news["publishtime"];?></p>
                    </div>
                    <div class="w-p-news-tu">
                        <img src="<?php echo $webmsg["siteurl"].$news["thumbnail"];?>" alt="">
                    </div>
                </a>
            </li>
        <?php } ?>
        </ul>
        <div class="take-more">
            <div class="take-more1" >
        <a href="<?php echo $webmsg["siteurl"];?>/mobilenews<?php if ($type != 0) echo "-type-".$type;?><?php if ($keyword != null) echo "-keyword-".$keyword;?>.html">
                                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/first.png" alt="<?php echo $webmsg["importantword"];?>">
                                </a>
<?php if ($page == 1) { ?>
                                <a href="#">
                                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/left.png" alt="<?php echo $webmsg["importantword"];?>">
                                </a>
<?php } else { ?>
                                <a href="<?php echo $webmsg["siteurl"];?>/mobilenews-page-<?php echo $page-1;if ($type != 0) echo "-type-".$type;?><?php if ($keyword != null) echo "-keyword-".$keyword;?>.html">
                                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/left.png" alt="<?php echo $webmsg["importantword"];?>">
                                </a>
<?php } ?>
                            </div>
                            <span>第 <?php echo $page;?> 页</span>
                            <div class="take-more1" style="float: right;">
<?php if ($page == $totalpage) { ?>
                                <a href="#"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/right.png" alt="<?php echo $webmsg["importantword"];?>"></a>
                                <a href="#"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/last.png" alt="<?php echo $webmsg["importantword"];?>"></a>
<?php } else { ?>
                                <a href="<?php echo $webmsg["siteurl"];?>/mobilenews-page-<?php echo $page+1;if ($type != 0) echo "-type-".$type;?><?php if ($keyword != null) echo "-keyword-".$keyword;?>.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/right.png" alt="<?php echo $webmsg["importantword"];?>"></a>
                                <a href="<?php echo $webmsg["siteurl"];?>/mobilenews-page-<?php echo $totalpage;if ($type != 0) echo "-type-".$type;?><?php if ($keyword != null) echo "-keyword-".$keyword;?>.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_news/last.png" alt="<?php echo $webmsg["importantword"];?>"></a>
<?php } ?>
        </div>
    </div>
</div>
<?php require ("phone/foot.php");?>
