
    <div class="w-foot">
        <div class="w-foot-title fromTop">
            <div class="title">
                <img class="w-left" src="<?php AssetsUrl ();?>/img/titleleft.png"> 联系我们
                <img class="w-right" src="<?php AssetsUrl ();?>/img/titleright.png">
            </div>
        </div>
        <div class="w-foot-adress clearfix">
            <div class="w-foot-map fromRight" id="container"></div>
            <div class="w-foot-text fromLeft">
                <div>地址:<?php WebsiteAddress ();?></div>
                <div>QQ: <?php WebsiteQQ ();?></div>
                <div>电话:<?php WebsiteTelephone ();?></div>
                <div>手机:<?php WebsiteMobile ();?></div>
                <div>邮箱:<?php WebsiteEmail ();?></div>
            </div>
        </div>
        <div class="w-foot-name">
            <div class="clearfix">
                <div class="w-left clearfix">
                    <div class="w-tu">
                        <img src="<?php AssetsUrl ();?>/img/logo3.png" alt="">
                    </div>
                    <div class="w-zi">
                        <p>沃航(武汉)科技股份有限公司版权所有</p>
                        <p>
                            <a href="http://www.beian.miit.gov.cn">备案号:<?php WebsiteRecord ();?></a>
                        </p>
                    </div>
                </div>
                <div class="w-right">
                    <img src="<?php AssetsUrl ();?>/img/logo4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="w-right-fixed">
        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php WebsiteQQ ();?>&site=qq&menu=yes">
            <div class="creafix">
                <div class="tu"><img src="<?php AssetsUrl ();?>/img/qq.png"></div>
                <div class="zi"><?php WebsiteQQ ();?></div>
            </div>
        </a>
        <a>
            <div class="creafix">
                <div class="tu"><img src="<?php AssetsUrl ();?>/img/phone.png"></div>
                <div class="zi"><?php WebsiteMobile ();?></div>
            </div>
        </a>
    </div>
</body>
<script>
var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(<?php echo $webmsg['baidumapx'];?>,<?php echo $webmsg['baidumapy'];?>),<?php echo $webmsg['baidumapzoom'];?>);
map.enableScrollWheelZoom(true);
// 用经纬度设置地图中心点114.415836, 30.500568
function theLocation() {
    map.clearOverlays();
    var new_point = new BMap.Point(<?php echo $webmsg['baidumapx'];?>,<?php echo $webmsg['baidumapy'];?>);
    var marker = new BMap.Marker(new_point); // 创建标注
    map.addOverlay(marker); // 将标注添加到地图中
    map.panTo(new_point);
}
theLocation();

let keyword1 = $("#w_input_news").val()
let url1 = $("#w_news_search").attr('data-url')
if(keyword1){
    $("#w_news_search").attr('href',url1+'-'+ keyword1+'.html')
}else{
    $("#w_news_search").attr('href','javascript:')
}


$("#w_input_news").bind("input propertychange",function(event){
    let keyword = $("#w_input_news").val()
    let url = $("#w_news_search").attr('data-url')
    if(keyword.length!=0){
    $("#w_news_search").attr('href',url+ keyword+'.html')
    }else{
    $("#w_news_search").attr('href','javascript:')
    }
});
</script>
</html>