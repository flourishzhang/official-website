
            
                <div class="w-p-foot">
                    <div>
                        <div class="clearfix">
                            <p>手机：13397158231</p>
                            <p>QQ：932773931</p>
                        </div>
                        <p>邮箱：jevian_ma@worldflying.cn</p>
                        <p>地点：武汉市东湖高新开发区光谷总部国际1栋2412室</p>
                        <p>鄂ICP备16014230号-1</p>
                    </div>
                </div>
            </div>
        </div>
      <div class="mui-off-canvas-backdrop" style="
      background: none;
      box-shadow: -4px 0 2px rgba(182, 178, 178, 0.5) inset;"></div>
    </div>
</div>
<script>
mui('.mui-scroll-wrapper').on('tap','a' ,function(){location.href = this.getAttribute('href')});
mui.init({
    swipeBack: false,
});
mui('.mui-scroll-wrapper').scroll({
    deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
});
$("#w_index_header1").height($("#w_index_header2").height())
$("#w_index_header1 .w-index-left div").css("line-height",$("#w_index_header2").height()/6 + "px")
$('#w_index_header1 .w-index-left').on("tap","div",function(){
    $('#w_index_header1 .w-index-left div').removeClass('active1');
    $('#w_index_header2 div img').removeClass('active2');
    var i = $(this).index();
    $('#w_index_header2 div img').eq(i).addClass('active2');
    $(this).addClass('active1');
})
$(".w-p-it-box4>.w-tu>div").height($("#w_it_box4").height())
</script>
</body>
</html>