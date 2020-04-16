
    <div class="w-foot">
        <div class="w-foot-title">
            <div class="title">
                <img class="w-left" src="../img/titleleft.png"> 联系我们
                <img class="w-right" src="../img/titleright.png">
            </div>
        </div>
        <div class="w-foot-adress clearfix">
            <div class="w-foot-map" id="container"></div>
            <div class="w-foot-text">
                <div>地址:武汉市东湖高新开发区光谷总部国际1栋2412室</div>
                <div>QQ: 932773931</div>
                <div>电话: 027-59761089</div>
                <div>手机: 13397 158231</div>
                <div>邮箱: jevian__ ma@worldlying.cn</div>
            </div>
        </div>
        <div class="w-foot-name">
            <div class="clearfix">
                <div class="w-left clearfix">
                    <div class="w-tu">
                        <img src="../img/logo3.png" alt="">
                    </div>
                    <div class="w-zi">
                        <p>沃航(武汉)科技股份有限公司版权所有</p>
                        <p>
                            <a href="">备案号:鄂ICP备16014230号-1</a>
                        </p>
                    </div>
                </div>
                <div class="w-right">
                    <img src="../img/logo4.png" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
var map = new BMap.Map("container");
map.centerAndZoom(new BMap.Point(116.404, 39.915),15);
map.enableScrollWheelZoom(true);
// 用经纬度设置地图中心点114.415836, 30.500568
function theLocation() {
    map.clearOverlays();
    var new_point = new BMap.Point(116.404, 39.915);
    var marker = new BMap.Marker(new_point); // 创建标注
    map.addOverlay(marker); // 将标注添加到地图中
    map.panTo(new_point);
}
theLocation();

let keyword1 = $("#w_input_news").val()
let url1 = $("#w_news_search").attr('data-url')
if(keyword1.length!=0){
    $("#w_news_search").attr('href',url1+'-'+ keyword1+'.html')
}else{
    $("#w_news_search").attr('href','javascript:')
}


$("#w_input_news").bind("input propertychange",function(event){
       console.log($("#w_input_news").val())
       console.log($("#w_news_search").attr('data-url'))
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