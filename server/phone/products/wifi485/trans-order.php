<?php
require("phone/head.php");
require("trans-head.php");
?>
<div class="y-ph-Torder-box3">
    <ul class="clearfix">
        <li>
            <div  class="y-ph-Torder-title">
                <h4>淘宝购买链接</h4>
            </div>
            <div  class="y-ph-Torder-download clearfix"  style="height:70px;line-height: 70px;">
                <a > 这里是链接可点击
                    <span class="iconfont icon-taobao"  style="margin-top: -6.5%;color: #FF5C00;"> </span>
                </a>
            </div>
        </li>
        <li>
            <div  class="y-ph-Torder-title">
                <h4>批量订购</h4>
            </div>
            <div class="y-ph-Torder-download2  clearfix">
                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $webmsg["QQ"];?>&site=qq&menu=yes">
                    <p>联系电话:<span><?php echo $webmsg["telephone"];?></span></p>
                    <p>微信:<span><?php echo $webmsg["mobile"];?></span></p>
                    <p>邮箱:<span><?php echo $webmsg["email"];?></span></p>
                    <span class="iconfont icon-kefu" style="color:#BE8078;margin-top: -30%;"></span>
                </a>
            </div>
        </li>
    </ul>
</div>
<?php require("phone/foot.php");?>
