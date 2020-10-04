<?php
require("phone/head.php");
require("trans-head.php");
?>
<div class="y-ph-Tcase-box3">
    <ul class="clearfix">
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/ph-trans-case/Tcase1.png" >
            <p>1、232， 485信号延长需要购买两个wifi、485/232转换器， 将其中一个配置为tcpserver,另-个配置为tcp c'lient，两边分别接485/232传感器即可。</p>
        </li>
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/ph-trans-case/Tcase2.png" >
            <p>2、232，485信 号转tcp普通电脑可以接入的com口数量有限，无法突破100个，但是可以接入的tcp信号却可以高达10万个，因此可以通过一个电脑同时控制10万个232设备。
            </p>
        </li>
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/ph-trans-case/Tcase4.png" >
            <p>3、读取设备输出的高低电平状态，以获取当前的设备状态，如烟雾报警器。可捕获瞬时量并发送http请求提醒服务器。</p>
        </li>
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/ph-trans-case/Tcase3.png" >
            <p>4、控制一些直接使用高低电平控制的设备可以使用本模块自带的gpio功能，给gpio输出高低电平，实现对这类设备的远程控制。如门锁，电机等。</p>
        </li>
        <li>
            <img src="<?php echo $webmsg["assetsurl"];?>/img/products/wifi485/ph-trans-case/Tcase5.png" >
            <p>5、可输出继电器的开关量，用来控制需要通过开关信号来控制的设备，如部分断路器等。</p>
        </li>
    </ul>
</div>
<?php require("phone/foot.php");?>
