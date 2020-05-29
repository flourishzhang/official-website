<?php $newsList = GetNewsList ("`articleid`,`title`,`thumbnail`,`desc`,`createtime`,`publishtime`", 1, null, null, 1, 1, 3, true);?>
<?php require ("phone/head.php");?>
    <div class="w-p-index-box1">
        <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box1.png" alt="">
    </div>

    <div class="w-p-index-box2">
        <div class="w-index-title">
            <div>
                公司简介
                <img src="<?php echo $webmsg["assetsurl"];?>/img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant">
            <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box2.png" alt="">
            <p style="margin-top:10px;font-size:13px;">沃航(武汉)科技有限公司成立于2016年7月,是一家从事 软件外包,技术解决方案的互联网科技公司。以精湛的技术、丰富的经验、优质的服务来为客户提供互联网一站式解决方案。</p>
            <p style="font-size:13px;">经营范围为:系统集成;信息技术咨询服务;数据处理;软 件开发;设计服务;商标代理服务;知识产权代理服务;广告设计;会议及展览服务;动漫游戏软件在应用开发;翻译服务; 工业设计;服务器搬迁维护等。</p>
        </div>
        <div class="w-index-btn"><a href="<?php echo $webmsg["siteurl"];?>/mobileabout.html">查看更多<span class="iconfont iconxiangyou"></span></a></div>
    </div>

    <div style="background:#f4f8ff;">
        <div class="w-p-index-box3">
            <div class="w-index-title">
                <div>
                    <img style="margin-right: .5em;" src="<?php echo $webmsg["assetsurl"];?>/img/titleleft.png">
                    解决方案
                    <img style="margin-left: .5em;" src="<?php echo $webmsg["assetsurl"];?>/img/titleright.png">
                </div>
            </div>
            <div class="w-index-contant clearfix">
                <a href="<?php echo $webmsg["siteurl"];?>/mobilegym.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box3-1.png" alt=""></a>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilecommunity.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box3-2.png" alt=""></a>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilepowerful.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box3-3.png" alt=""></a>
                <a href="<?php echo $webmsg["siteurl"];?>/mobileagriculture.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box3-4.png" alt=""></a>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilecinema.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box3-5.png" alt=""></a>
                <a href="<?php echo $webmsg["siteurl"];?>/mobilecybercafe.html"><img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box3-6.png" alt=""></a>
            </div>
        </div>
    </div>

    <div class="w-p-index-box4">
        <div class="w-index-title">
            <div>
                公司案例
                <img src="<?php echo $webmsg["assetsurl"];?>/img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant clearfix" id="w_index_header1">
            <div class="w-index-left clearfix">
                <div class="active1">电力分析系统</div>
                <div>教育云平台</div>
                <div>智能喷码设备</div>
                <div>自助服务终端</div>
                <div>MiNi共享KTV</div>
                <div>校园O2O</div>
            </div>
            <div class="w-index-right" id="w_index_header2">
                <div>
                    <img class="active2" src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box4_1.png" alt="">
                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box4_2.png" alt="">
                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box4_3.png" alt="">
                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box4_4.png" alt="">
                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box4_5.png" alt="">
                    <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box4_6.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div style="background:#f4f8ff;">
        <div class="w-p-index-box5">
            <div class="w-index-title">
                <div>
                    <img style="margin-right: .5em;" src="<?php echo $webmsg["assetsurl"];?>/img/titleleft.png">
                    新闻动态
                    <img style="margin-left: .5em;" src="<?php echo $webmsg["assetsurl"];?>/img/titleright.png">
                </div>
            </div>
            <div class="w-index-contant">
                <div class="w-index-li">
                    <a href="<?php echo isset($newsList[0]) ? $webmsg["siteurl"]."/mobilearticle-id-".$newsList[0]["articleid"].".html":$webmsg["siteurl"]."/mobilenews.html";?>">
                        <div>
                            <div>
                                <div></div>
                                <?php echo isset($newsList[0]) ? $newsList[0]["title"] : "暂无内容";?>
                            </div>
                            <p><?php echo isset($newsList[0]) ? date('Y/m/d',strtotime($newsList[0]["createtime"])):"";?></p>
                        </div>
                    </a>
                    <a href="<?php echo isset($newsList[1]) ? $webmsg["siteurl"]."/mobilearticle-id-".$newsList[1]["articleid"].".html":$webmsg["siteurl"]."/mobilenews.html";?>">
                        <div>
                            <div>
                                <div></div>
                                <?php echo isset($newsList[1]) ? $newsList[1]["title"] : "暂无内容";?>
                            </div>
                            <p><?php echo isset($newsList[1]) ? date('Y/m/d',strtotime($newsList[1]["createtime"])):"";?></p>
                        </div>
                    </a>
                    <a href="<?php echo isset($newsList[2]) ? $webmsg["siteurl"]."/mobilearticle-id-".$newsList[2]["articleid"].".html":$webmsg["siteurl"]."/mobilenews.html";?>">
                        <div>
                            <div>
                                <div></div>
                                <?php echo isset($newsList[2]) ? $newsList[2]["title"] : "暂无内容";?>
                            </div>
                            <p><?php echo isset($newsList[2]) ? date('Y/m/d',strtotime($newsList[2]["createtime"])):"";?></p>
                        </div>
                    </a>
                </div>
                <div class="w-index-btn">查看更多<span class="iconfont iconxiangyou"></span></div>
            </div>
        </div>
    </div>

    <div class="w-p-index-box6">
        <div class="w-index-title">
            <div>
                <img style="margin-right: .5em;" src="<?php echo $webmsg["assetsurl"];?>/img/titleleft.png">
                合作伙伴
                <img style="margin-left: .5em;" src="<?php echo $webmsg["assetsurl"];?>/img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant">
            <img src="<?php echo $webmsg["assetsurl"];?>/img/phone_index/index_box6.png" alt="">
        </div>
    </div>
    <div class="w-p-index-box1"></div>
    <div class="w-p-index-box1"></div>
<?php require ("phone/foot.php");?>
