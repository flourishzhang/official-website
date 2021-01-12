<?php
$newsList = GetNewsList ("`articleid`", 1, null, null, 1, null, null, true);
$len = count($newsList);
for ($i = 0 ; $i < $len ; $i++) {
?>
<?php echo $webmsg["siteurl"];?>/article-id-<?php echo $newsList[$i]["articleid"];?>.html
<?php echo $webmsg["siteurl"];?>/mobilearticle-id-<?php echo $newsList[$i]["articleid"];?>.html
<?php
}
?>
<?php echo $webmsg["siteurl"];?>/index.html
<?php echo $webmsg["siteurl"];?>/iot.html
<?php echo $webmsg["siteurl"];?>/solution.html
<?php echo $webmsg["siteurl"];?>/news.html
<?php echo $webmsg["siteurl"];?>/about.html
<?php echo $webmsg["siteurl"];?>/recruit.html
<?php echo $webmsg["siteurl"];?>/gym.html
<?php echo $webmsg["siteurl"];?>/agriculture.html
<?php echo $webmsg["siteurl"];?>/powerful.html
<?php echo $webmsg["siteurl"];?>/cinema.html
<?php echo $webmsg["siteurl"];?>/cybercafe.html
<?php echo $webmsg["siteurl"];?>/community.html
<?php echo $webmsg["siteurl"];?>/mobileindex.html
<?php echo $webmsg["siteurl"];?>/mobileiot.html
<?php echo $webmsg["siteurl"];?>/mobilesolution.html
<?php echo $webmsg["siteurl"];?>/mobilenews.html
<?php echo $webmsg["siteurl"];?>/mobileabout.html
<?php echo $webmsg["siteurl"];?>/mobilerecruit.html
<?php echo $webmsg["siteurl"];?>/mobilegym.html
<?php echo $webmsg["siteurl"];?>/mobileagriculture.html
<?php echo $webmsg["siteurl"];?>/mobilepowerful.html
<?php echo $webmsg["siteurl"];?>/mobilecinema.html
<?php echo $webmsg["siteurl"];?>/mobilecybercafe.html
<?php echo $webmsg["siteurl"];?>/mobilecommunity.html
