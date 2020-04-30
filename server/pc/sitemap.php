<?php
$newsList = GetNewsList ("`articleid`", 1, null, null, 1, null, null, true);
$len = count($newsList);
for ($i = 0 ; $i < $len ; $i++) {
?>
https://www.worldflying.cn/article-id-<?php echo $newsList[$i]["articleid"];?>.html
https://www.worldflying.cn/mobilearticle-id-<?php echo $newsList[$i]["articleid"];?>.html
<?php
}
?>
https://www.worldflying.cn/index.html
https://www.worldflying.cn/iot.html
https://www.worldflying.cn/solution.html
https://www.worldflying.cn/news.html
https://www.worldflying.cn/about.html
https://www.worldflying.cn/recruit.html
https://www.worldflying.cn/gym.html
https://www.worldflying.cn/agriculture.html
https://www.worldflying.cn/powerful.html
https://www.worldflying.cn/cinema.html
https://www.worldflying.cn/cybercafe.html
https://www.worldflying.cn/community.html
https://www.worldflying.cn/mobileindex.html
https://www.worldflying.cn/mobileiot.html
https://www.worldflying.cn/mobilesolution.html
https://www.worldflying.cn/mobilenews.html
https://www.worldflying.cn/mobileabout.html
https://www.worldflying.cn/mobilerecruit.html
https://www.worldflying.cn/mobilegym.html
https://www.worldflying.cn/mobileagriculture.html
https://www.worldflying.cn/mobilepowerful.html
https://www.worldflying.cn/mobilecinema.html
https://www.worldflying.cn/mobilecybercafe.html
https://www.worldflying.cn/mobilecommunity.html
