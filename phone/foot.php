

                <div class="w-p-foot">
                    <div>
                        <div class="clearfix">
                            <p>手机：<?php echo $webmsg["mobile"];?></p>
                            <p>QQ：<?php echo $webmsg["QQ"];?></p>
                        </div>
                        <p>邮箱：<?php echo $webmsg["address"];?></p>
                        <p>地点：<?php echo $webmsg["email"];?></p>
                        <p>
                            <a href="http://www.beian.miit.gov.cn"><?php echo $webmsg["record"];?></a>
                        </p>
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

$(window).load(()=>{
    $("#w_index_header1").height($("#w_index_header2").height())
    $("#w_index_header1 .w-index-left div").css("line-height",$("#w_index_header2").height()/6 + "px")
})

$('#w_index_header1 .w-index-left').on("tap","div",function(){
    $('#w_index_header1 .w-index-left div').removeClass('active1');
    $('#w_index_header2 div img').removeClass('active2');
    var i = $(this).index();
    $('#w_index_header2 div img').eq(i).addClass('active2');
    $(this).addClass('active1');
})

function enterSearch(event){
    if(event.keyCode == 13) {
        let keyword = $("#searchInput").val()
        let url = $("#searchInput").attr('data-url')
        if(keyword.length!=0){
            $(location).attr('href', url + keyword + ".html");
        }
    }
}
</script>
</body>
</html>
