
<?php require ("pc/head.php");?>
    <div class="w-wh-box1">
        <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box1.png" alt="">
    </div>
    <div class="w-wh-box2">
        <a class="w-wh-return" href="<?php echo $webmsg["siteurl"];?>/solution.html">返回解决方案列表<span class="iconfont iconxiangzuo"></span></a>
        <div class="w-wh-title fromTop">
            <div>
                系统简介
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_title1.png" alt="">
            </div>
        </div>
        <ul class="clearfix">
            <li class="w-top fromBottom" style="animation-delay: 0.3s;">
                <h3>1.先进性</h3>
                <p>系统的起点要高,采用的软件平台要尽可能是目前世界上公认较先进的技术平台。在此基础上,采用先进的模块化程序设计和先进的设计思想,最终使系统在技术上达到国内领先水平
                </p>
            </li>
            <li class="w-top fromBottom" style="margin: 21px 42px;animation-delay: 0.5s;">
                <h3>2.良好得开放性</h3>
                <p>系统采用业界主流的硬件平台，操作系统平台，数据库平台以及标准的协议，保证系统的开放性。
                </p>
            </li>
            <li class="w-top fromBottom" style="animation-delay: 0.7s;">
                <h3>3.高可靠性</h3>
                <p>系统运行要建立在坚实的软件、硬件基础上,这是系统稳定可靠运行的前提。在此基础上,中心系统管理软件与操作系统及其他应用软件应有比较明确的接口规范。应用系统要经过反复测试,有较强的容错能力,确保可靠运行
                </p>
            </li>
            <li class="w-bottom fromBottom" style="animation-delay: 0.3s;">
                <h3>4.实用性</h3>
                <p>软件依据仓储管理的实际需求具体内容，必须达到相关功能、性能等需求;
                </p>
            </li>
            <li class="w-bottom fromBottom" style="margin: 21px 42px; animation-delay: 0.5s;">
                <h3>5.易维护性</h3>
                <p>系统硬件可以很方便的实现远程管理及维护;系统软件均采用模块化的设计并提供友好的人机接口,确保系统的易维护性。
                </p>
            </li>
            <li class="w-bottom fromBottom" style="animation-delay: 0.7s;">
                <h3>6.灵活得扩展性</h3>
                <p>软件系统架构充分利用网络的扩展性强的特点，采用分散控制、集中管理的结构，使得系统可扩充性很强,有足够的扩展升级的余地。
                </p>
            </li>
        </ul>
    </div>
    <div style="background:#f4f8ff;">
        <div class="w-wh-box3">
            <div class="w-wh-title fromTop">
                <div>
                    当前问题以及解决方法
                    <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_title1.png" alt="">
                </div>
            </div>
            <ul>
                <li class="clearfix">
                    <div class="w-wh-zi fromRight">
                        <h3>1.仓库内商品种类繁多,统计难度大</h3>
                        <p>解决办法:利用自动化仓储管理系统,对入库,出库,等全部进行记录,让盘点变得十分容易。
                        </p>
                    </div>
                    <div class="w-wh-ge"></div>
                    <div class="w-wh-tu fromLeft">
                        <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box3_1.png" alt="">
                    </div>
                </li>
                <li class="clearfix">
                    <div class="w-wh-tu fromRight">
                        <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box3_2.png" alt="">
                    </div>
                    <div class="w-wh-ge"></div>
                    <div class="w-wh-zi fromLeft">
                        <h3>2.仓储内商品借还管理难度大，出错率高,易出现物品丢失的情况
                        </h3>
                        <p>解决办法:利用当前最先进的rfid标签技术,来识别物品进出仓库的行为。无需人工操作,彻底实现0管理。通过软件,结合录像功能,保证物品进出仓库事件的可追溯性。
                        </p>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="w-wh-zi fromRight">
                        <h3>3.仓库比较大,即使物品在仓库内,寻找难度也很大</h3>
                        <p>解决办法:配备rfid手持设备,通过给fid手持设备输入需要寻找的物品,然后对着仓库的快速大范围的寻找,如果发现对应物品的rfid,手持设备发出响声。再提高精度缩小寻找范围,直到最终找到物品。
                        </p>
                    </div>
                    <div class="w-wh-ge"></div>
                    <div class="w-wh-tu fromLeft">
                        <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box3_3.png" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-wh-box4">
        <div class="w-wh-title fromTop">
            <div>
                功能说明
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_title1.png" alt="">
            </div>
        </div>
        <ul class="clearfix">
            <li class="fromBottom" style="animation-delay: 0.3s;margin: 21px 48px 21px 0px;">
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box4_1.png" alt="">
                <h3>1.物品批量导入功能</h3>
                <p>
                    当仓库有新的物品需要入仓库时,先将物品的名称,分组,对应的RFID标签信息等信息编辑成为-个表格文件,文件格式可以是xls或是xIsx。然后通过后台的管理员导入。需要导出时,通过后台的管理员账号将物品当前信息导出成为xls或是xIsx,导出范围可以根据物品分组,或是进仓库时间等条件。
                </p>
            </li>
            <li class="fromBottom" style="animation-delay: 0.5s;">
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box4_2.png" alt="">
                <h3>2.物品统计功能（盘点功能）</h3>
                <p>物品统计功能是对当前系统中已有物品的状态进行统计的功能,包括仓库内物品数量，种类统计。统计形式可以是表格,也可以是各种图 表。本功能可以用于辅助库存的人工盘点，提高工作效率。
                </p>
            </li>
            <li class="fromBottom" style="animation-delay: 0.3s;margin: 21px 48px 21px 0px;">
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box4_3.png" alt="">
                <h3>3.物品出入管理功能</h3>
                <p>在仓库的所有出入口,全部放置一个Rfid标签读卡器,当有Rfid标签从读卡器的可读取范围内读到标签信号,立刻发出信息给中央服务器,中央服务器通过数据库中当前Rfid标签所对应的物品是在仓库内还是在仓库外来判断该物品本次触发事件是出仓库还是入仓库,然后将本次事件记录到数据库中去。
                </p>
            </li>
            <li class="fromBottom" style="animation-delay: 0.5s;">
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box4_4.png" alt="">
                <h3>4.RFID管理</h3>
                <p>本功能是基于RFID可以复用的基础添加的，RFID本来与仓库中的物品没有直接关系，物理上我们通过胶布等手段让RFID绑定到某个物品上,然后在系统中将那个物品设置为某个RFID。
                </p>
            </li>
            <li class="fromBottom" style="animation-delay: 0.3s;margin: 21px 48px 21px 0px;">
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box4_5.png" alt="">
                <h3>5.管理员管理</h3>
                <p>当物品导入或是RFID新增时，可以选择批量导入。如果无法批量导入，需要人工一个一个的操作，就需要新建几个管理员，让他们各自分别导入物品或是RFID,因此本系统多管理员是必须的。
                </p>
            </li>
            <li class="fromBottom" style="animation-delay: 0.5s;">
                <img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box4_6.png" alt="">
                <h3>6.权限管理</h3>
                <p>权限管理不是针对某个单个管理员设置的,而是增对管理员分组设置的,分组下的下级管理员分组只能拥有小于或是登录当前分组的管理权限。
                </p>
            </li>
        </ul>
    </div>
    <div class="w-wh-box5 clearfix">
        <div class="w-wh-contant fromRight">当贴有RFID的物品从门禁中走过后,RFID读取设备发出信号给门禁控制板,门禁控制板接收到RFID读取器发出的信号后启动视频监控设备录像,然后将刚才的RFID读取设备接收到的信号以及视频监控设备监控到的视频一起发送给中央服务器。中央服务器根据数据库中存储的设备信息,修改对应物品的状态信息。如果使用的是手持设备,只需要在手持设备上输入设备信息,手持设备会直接访问中央服务器,拉取对应的RFID标签识别码,然后启动标签识别器,当用户需要快速寻找某个物体时,可以先将精度调高,当对应物品在扫描范围内时,设备发出响声。然后再进一步将扫描精度调低,将识别区域减小，一点一点的缩小扫描范围，直到最终找到物品。
        </div>
        <div class="w-wh-img fromLeft"><img src="<?php echo $webmsg["assetsurl"];?>/img/warehouse/wh_box5.png" alt=""></div>
    </div>
    <?php require ("pc/foot.php");?>
