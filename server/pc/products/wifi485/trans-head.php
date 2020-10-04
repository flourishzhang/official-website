<div class="y-content-box1">
    <div class="y-content-body  clearfix">
        <div class="y-content-left">
            <div>
                <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifiswitch/wifi/left.png">
            </div>
        </div>
        <div class="y-content-right">
            <h1>智能转换器</h1>
            <p>
                开放全部的api接口，可以方便的支持其他软件平
                台。开放，任何想自己开发系统，需要使用到这类
                设备的系统提供商，均可以接入自己的系统用于特
                定的项目当中，大大降低了成本。
            </p>
            <ul  class="clearfix">
                <li>
                    <span>工作电压：</span>
                    <span>220V交流/5-24直流</span>
                </li>
                <li>
                    <span>最大功耗：</span>
                    <span>3W</span>
                </li>
                <li>
                    <span>平均功耗：</span>
                    <span>1.6W</span>
                </li>
                <li>
                    <span>主要功能：</span>
                    <span style="width: 50%;">将232/485信号转换为wifi无线信号</span>
                </li>
            </ul>
            <ul   class="button">
                <li class="content-btns">
                    <a href="">直接购买
                        <i class="iconfont icon-tongbushoucang2" style="font-size: 30px;"></i>
                    </a>
                </li>
                <li  class="content-btns2">
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $webmsg["QQ"];?>&site=qq&menu=yes">批量订购
                        <span  class="iconfont icon-kefu"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="y-content-box2">
    <ul class="clearfix">
        <li<?php if ($to == "translator") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "translator") echo "#";else echo $webmsg["siteurl"]."/wifi485.html";?>">概述特点</a>
        </li>
        <li<?php if ($to == "param") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "param") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-param.html";?>">性能参数</a>
        </li>
        <li<?php if ($to == "case") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "case") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-case.html";?>">使用场景</a>
        </li>
        <li<?php if ($to == "down") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "down") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-down.html";?>">相关下载</a>
        </li>
        <li<?php if ($to == "video") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "video") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-video.html";?>">相关视频</a>
        </li>
        <li<?php if ($to == "order") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "order") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-order.html";?>">订购方式</a>
        </li>
        <li<?php if ($to == "ques") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "ques") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-ques.html";?>">常见问题</a>
        </li>
        <li<?php if ($to == "prod") echo " class=\"active\"";?>>
            <a href="<?php if ($to == "prod") echo "#";else echo $webmsg["siteurl"]."/wifi485-to-prod.html";?>">系列产品</a>
        </li>
    </ul>
</div>
