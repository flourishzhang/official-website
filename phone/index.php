<?php $newsList = GetNewsList ("`articleid`,`title`,`thumbnail`,`desc`,`createtime`,`publishtime`", 1, null, null, 1, 1, 3, true);?>
<?php require ("phone/head.php");?>
    <div class="w-p-index-box1">
        <img src="../img/phone_index/index_box1.png" alt="">
    </div>
    <div class="w-p-index-box2">
        <div class="w-index-title">
            <div>
                公司简介
                <img src="../img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant">
            <img src="../img/phone_index/index_box2.png" alt="">
        </div>
        <div class="w-index-btn"><a href="">查看更多<span class="iconfont iconxiangyou"></span></a></div>
    </div>
    <div class="w-p-index-box3">
        <div class="w-index-title">
            <div>
                <img style="margin-right: .5em;" src="../img/titleleft.png">
                解决方案
                <img style="margin-left: .5em;" src="../img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant clearfix">
            <a href="<?php SiteUrl();?>/phonesCang.html"><img src="../img/phone_index/index_box3-1.png" alt=""></a>
            <a href="<?php SiteUrl();?>/phonesQu.html"><img src="../img/phone_index/index_box3-2.png" alt=""></a>
            <a href="<?php SiteUrl();?>/phonepower.html"><img src="../img/phone_index/index_box3-3.png" alt=""></a>
            <a href="<?php SiteUrl();?>/phonefarming.html"><img src="../img/phone_index/index_box3-4.png" alt=""></a>
            <a href="<?php SiteUrl();?>/phonemovie.html"><img src="../img/phone_index/index_box3-5.png" alt=""></a>
            <a href="<?php SiteUrl();?>/phoneInternet.html"><img src="../img/phone_index/index_box3-6.png" alt=""></a>
        </div>
    </div>
    <div class="w-p-index-box4">
        <div class="w-index-title">
            <div>
                公司案例
                <img src="../img/titleright.png">
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
                    <img class="active2" src="../img/phone_index/index_box4_1.png" alt="">
                    <img src="../img/phone_index/index_box4_2.png" alt="">
                    <img src="../img/phone_index/index_box4_3.png" alt="">
                    <img src="../img/phone_index/index_box4_4.png" alt="">
                    <img src="../img/phone_index/index_box4_5.png" alt="">
                    <img src="../img/phone_index/index_box4_6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="w-p-index-box5">
        <div class="w-index-title">
            <div>
                <img style="margin-right: .5em;" src="../img/titleleft.png">
                新闻动态
                <img style="margin-left: .5em;" src="../img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant">
            <div class="w-index-li">
                <a href="<?php echo isset($newsList[0]) ? SiteUrl ()."/phonenews_det-id-".$newsList[0]["articleid"].".html":SiteUrl ()."/phonenews.html";?>">
                    <div>
                        <div>
                            <div></div>
                            <?php echo isset($newsList[0]) ? $newsList[0]["title"] : "暂无内容";?>
                        </div>
                        <p><?php echo isset($newsList[0]) ? date('Y/m/d',strtotime($newsList[0]["createtime"])):"";?></p>
                    </div>
                </a>
                <a href="<?php echo isset($newsList[1]) ? SiteUrl ()."/phonenews_det-id-".$newsList[1]["articleid"].".html":SiteUrl ()."/phonenews.html";?>">
                    <div>
                        <div>
                            <div></div>
                            <?php echo isset($newsList[1]) ? $newsList[1]["title"] : "暂无内容";?>
                        </div>
                        <p><?php echo isset($newsList[1]) ? date('Y/m/d',strtotime($newsList[1]["createtime"])):"";?></p>
                    </div>
                </a>
                <a href="<?php echo isset($newsList[2]) ? SiteUrl ()."/phonenews_det-id-".$newsList[2]["articleid"].".html":SiteUrl ()."/phonenews.html";?>">
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
    <div class="w-p-index-box6">
        <div class="w-index-title">
            <div>
                <img style="margin-right: .5em;" src="../img/titleleft.png">
                新闻动态
                <img style="margin-left: .5em;" src="../img/titleright.png">
            </div>
        </div>
        <div class="w-index-contant">
            <img src="../img/phone_index/index_box6.png" alt="">
        </div>
    </div>
    <div class="w-p-index-box1"></div>
    <div class="w-p-index-box1"></div>
<?php require ("phone/foot.php");?>