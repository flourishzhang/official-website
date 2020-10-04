<?php
require("pc/head.php");
require("trans-head.php");
?>
<div class="y-translator-box3">
    <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/trans/banner1.png" alt="">
    <div  class="y-translator-introduce">
        <p>为何选择我们的产品？</p>
        <h3>因为我们</h3>
        <div class="y-translator-img">
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/trans/prou1.png" alt="">
        </div>
    </div>
</div>
<div class="y-translator-box4">
    <ul  class="clearfix">
        <li>
            <p>1.Tcp协议转485协议(双.向)</p>
        </li>
        <li>
            <p>2.Tcp协议转232协议(双向)</p>
        </li>
        <li>
            <p>3.网络gpio功能，支持gpio获取状态，状态变化触发提醒。</p>
        </li>
        <li>
            <p>4.支持mqtt,tcp server,tcp client,http server,http client等协议。</p>
        </li>
    </ul>
</div>
<div class="y-translator-box5">
    <div class="y-box5-title">
        <h3>功能结构图</h3>
        <p class="y-box5-line"></p>
    </div>
    <div class="y--box5-img">
        <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/trans/banner2.png" alt="">
    </div>
</div>
<div class="y-translator-box6">
    <div class="y-box6-title">
        <h3>产品优势</h3>
        <p class="y-box6-line"></p>
    </div>
    <ul class="clearfix">
        <li>
            <div>
                <h3>1、开放全部的api接口</h3>
                <p>开放全部的api接口，可以方便的支持其他软件平台开放，任何想自己开发系统，需要使用到这类设备的系统提供商，均可以接入自己的系统用于特定的项目当中，大大降低了成本。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>2、宽温</h3>
                <p>工业级标准设计，适用各种现场温度需求。支持25°C到75"C温度环境，全球大部分环境均能正常使用。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>3、宽压</h3>
                <p>工业级标准设计，适用各种现场电压需求。交流电输入支持85v ~ 265v、50Hz ~ 60Hz,可支持全球使用。直流输入实际支持4.5v~40v,可支持市面上所有已知电源适配器。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>4、防雷击</h3>
                <p>保证线路中出现瞬间大电流(如雷击、电源切换等)时，设备硬件不损坏。接入市电网络的地方，当遇到打雷的天气，并且落雷到该设备的供电网络中,不会造成永久性损坏。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>5、看门狗</h3>
                <p>精心设计的外部看门狗电路，二十四小时不宕机，稳定运行。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>6、赠送服务</h3>
                <p>支持内网部署，送内网使用的管理平台。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>7、型号</h3>
                <p>有多种型号，可根据不同使用场景选择不同型号。</p>
            </div>
        </li>
        <li>
            <div>
                <h3>8、功能</h3>
                <p>除了tcp转232/485,还支持3路gpio。</p>
            </div>
        </li>
    </ul>
</div>
<div class="y-translator-box7">
    <div class="y-box7-title">
        <h3>工作模式</h3>
        <p class="y-box7-line"></p>
    </div>
    <ul class="clearfix">
        <li>
            <h3>tcp server 模式</h3>
            <p>模块设置监听端口与等待tcp客户端连接(只能连接一路)，串口设备发送的数据将通过模块透明传输给连接成功的客户端。连接成功的客户端也可以通过tcp传输将数据通过模块透明传输给串口设备。</p>
        </li>
        <li>
            <h3>tcp client 模式</h3>
            <p> 模块设置去连接某个特定的tcp服务，串口设备发送的数据将通过模块透明传输给被连接的服务器。被连接的服务器也可以通过tcp传输将数据通过模块透明传输给串口设备。</p>
        </li>
        <li>
            <h3>mqtt client模式</h3>
            <p>模块设置去连接某个特定的mqtt服务,并监听特定的topic,串口设备发送的数据将通过模块透明根据特定的topic传输给被连接的服务器。被连接的服务器也可以通过mqtt传输将数据通过模块透明传输给串口设备。</p>
        </li>
        <li>
            <h3>http server模式</h3>
            <p>模块可接收restfulapi,实现对gpio的控制</p>
        </li>
        <li>
            <h3>http client模式</h3>
            <p>模块可设置监听gpio的变化，并且发送restful api给特定服务器实现异常报警实时提醒功能。</p>
        </li>
    </ul>
</div>
<div class="y-translator-box8">
    <div class="y-box8-title">
        <h3>细节展示</h3>
        <p class="y-box8-line"></p>
    </div>
    <ul class="clearfix">
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/trans/prou1.png" alt="">
        </li>
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/trans/prou2.png" alt="">
        </li>
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/trans/prou4.png" alt="">
        </li>
    </ul>
</div>
<?php require("pc/foot.php");?>
