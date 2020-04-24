<?php
$newsList = GetNewsList ("`articleid`,`title`,`thumbnail`,`desc`,`createtime`,`publishtime`", 1, null, null, 1, 1, 3, true);
?>

<?php require ("pc/head.php");?>
    <div class="w-index-box1">
        <img src="<?php AssetsUrl ();?>/img/index/index_box1.png">
    </div>
    <div class="w-index-box2">
        <div class="w-index-title fromTop">
            <div>
                公司简介
                <img src="<?php AssetsUrl ();?>/img/titleright.png">
            </div>
        </div>
        <div class="w-index-content clearfix">
            <div class="w-index-left fromRight">
                <p style="padding-bottom:10px;">沃航(武汉)科技有限公司成立于2016年7月,是一家从事 软件外包,技术解决方案的互联网科技公司。, 以精湛的技 术、丰富的经验、优质的服务来为客户提供互联网- -站式解 决方案。
                </p>
                <p style="padding-top:10px;">经营范围为:系统集成;信息技术咨询服务;数据处理;软 件开发;设计服务;商标代理服务;知识产权代理服务;广告 设计;会议及展览服务;动漫游戏软件在应用开发;翻译服务; 工业设计;服务器搬迁维护等。
                </p>
                <div class="w-index-btn">
                    <a href="<?php SiteUrl();?>/about.html"> 查看更多<span class="iconfont iconxiangyou"></span></a>
                </div>
            </div>
            <div class="w-index-right fromLeft">
                <img src="<?php AssetsUrl ();?>/img/index/index_box2.png">
            </div>
        </div>
    </div>
    <div style="background:#f4f8ff;padding-bottom:50px;">
        <div class="w-index-box3">
            <div class="w-index-title fromTop">
                <div class="title">
                    <img class="w-left" src="<?php AssetsUrl ();?>/img/titleleft.png"> 解决方案
                    <img class="w-right" src="<?php AssetsUrl ();?>/img/titleright.png">
                </div>
            </div>
            <div class="w-index-ul clearfix">
                <div class="w-index-top fromBottom" style="animation-delay: 0.3s;">
                    <div class="w-index-iconfont">
                        <span class="iconfont icontubiaozhizuomoban"></span>
                    </div>
                    <h3>仓储管理系统</h3>
                    <p>系统采用业界主流的硬件平台、操 作系统平台、数据库平台以及标准 的协议,保证系统的开放性。采用 分散控制、集中管理的结构,使得 系统可扩充性很强。</p>
                    <div class="w-index-btn">
                        <a href="<?php SiteUrl();?>/gym.html">查看更多<span class="iconfont iconxiangyou"></span></a>
                    </div>
                </div>
                <div class="w-index-top fromBottom" style="margin: 20px 30px; animation-delay: 0.5s;">
                    <div class="w-index-iconfont">
                        <span class="iconfont iconhaofangtuo400iconfont2xiaoqu"></span>
                    </div>
                    <h3>智慧小区</h3>
                    <p>利用传感网、互联网、移动互联网 及4G网络和相关终端,将建筑小区 以物业管理系统为基础,把小区内 各类公共信息应用系统和业主家居 应用系统等系统进行集成。
                    </p>
                    <div class="w-index-btn"><a href="<?php SiteUrl();?>/community.html">查看更多<span class="iconfont iconxiangyou"></span></a></div>
                </div>
                <div class="w-index-top fromBottom" style="animation-delay: 0.7s;">
                    <div class="w-index-iconfont">
                        <span class="iconfont iconkongzhi"></span>
                    </div>
                    <h3>电力远程控制</h3>
                    <p>通过网络监控各个设备结点。以分 散监控集中管理的方式有效解决用 电单位电气线路老旧、小微企业无 专业电工、肉眼无法直观系统即时 排查电气隐患、隐蔽工程隐患检查 难等难题。
                    </p>
                    <div class="w-index-btn"><a href="<?php SiteUrl();?>/powerful.html">查看更多<span class="iconfont iconxiangyou"></span></a></div>
                </div>
                <div class="w-index-bottom fromBottom" style="animation-delay: 0.3s;">
                    <div class="w-index-iconfont">
                        <span class="iconfont iconnongye"></span>
                    </div>
                    <h3>智慧农业</h3>
                    <p>主要由农业温室大棚、各种无线传 感器、控制器及后台系统软件和用 户端APP等组成。

                    </p>
                    <div class="w-index-btn"><a href="<?php SiteUrl();?>/agriculture.html">查看更多<span class="iconfont iconxiangyou"></span></a></div>
                </div>
                <div class="w-index-bottom fromBottom" style="margin: 20px 30px; animation-delay: 0.5s;">
                    <div class="w-index-iconfont">
                        <span class="iconfont icondianyingyuan"></span>
                    </div>
                    <h3>影院服务平台</h3>
                    <p>影院服务平台方案包含线上用户端 小程序与影院后台两个部分，线下 无纸化检票系统。
                    </p>
                    <div class="w-index-btn"><a href="<?php SiteUrl();?>/cinema.html">查看更多<span class="iconfont iconxiangyou"></span></a></div>
                </div>
                <div class="w-index-bottom fromBottom" style="animation-delay: 0.7s;">
                    <div class="w-index-iconfont">
                        <span class="iconfont iconshubiao"></span>
                    </div>
                    <h3>无人网吧</h3>
                    <p>利用app开J，支付宝/微信收费的 方式实现无人化, 24小时营业的无 人网吧。
                    </p>
                    <div class="w-index-btn"><a href="<?php SiteUrl();?>/cybercafe.html">查看更多<span class="iconfont iconxiangyou"></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-index-box4" id="slideBox1">
        <div class="w-index-title fromTop">
            <div>
                公司案例
                <img src="<?php AssetsUrl ();?>/img/titleright.png">
            </div>
        </div>
        <a href="javascript:void(0)" class="prev"><span class="iconfont iconzuo"></span></a>
        <a href="javascript:void(0)" class="next"><span class="iconfont iconyou"></span></a>
        <div class="w-index-banner">
            <ul class="clearfix w-index-banner-ul">
                <li>
                    <img src="<?php AssetsUrl ();?>/img/index/index_banner1.png" alt="">
                    <h3>自助服务终端</h3>
                    <p>本项目是一个政务类软硬件相结合的系统集成类项目，不动产自助打印终端是以现有窗口登记业务流程为依据，进行简化和优化，将业务流程电子化、自助化办理的创新成果，不仅能大大提升办事效率，减少排队；同时，该设备可实现社区化部署，市民任何时间均可就近自助办理，是落实“简政放权”的切实工作体现，节省时间、人员成本。<br/> 产品的主要功能有：电子表单、指纹采集、高清摄像、电子签名、身份验证、资料扫描、人脸识别。 这是国内首台不动产预受理系统，做到真正的全自助办理、无纸化绿色政务，身份证的的调档做到高效率，高准确性，并具有防破坏报警，社区化部署等特点。
                    </p>
                </li>
                <li>
                    <img src="<?php AssetsUrl ();?>/img/index/index_banner2.png" alt="">
                    <h3>MiNi共享KTV</h3>
                    <p>MiNi共享KTV是一个由软件和硬件组成的综合性集成项目，包含了手机端的微信小程序，云端服务器，以及线下主机服务器，电子显示屏，等一系列连接控制。用户通过手机微信小程序来完成用户身份验证、充值押金、扫码开门、对唱歌机的控制、完成支付并查看自己的消费信息，以及在手机端的社交。</p>
                </li>
                <li>
                    <img src="<?php AssetsUrl ();?>/img/index/index_banner3.png" alt="">
                    <h3>智能喷码设备</h3>
                    <p>本项目产品是一款工业级应用设备，在各种物体表面上喷印上图案文字和数码，是集机电一体化的高科技产品。产品广泛应用于食品工业、化妆品工业、医药工业、汽车等零件加工行业、电线电缆行业、铝塑管行业、烟酒行业以及其它领域。可用于喷印生产日期、批号、条型码以及商标图案、防伪标记和中文字样，是贯彻卫生法和促进包装现代化强有力的设备。</p>
                </li>
                <li>
                    <img src="<?php AssetsUrl ();?>/img/index/index_banner4.png" alt="">
                    <h3>电力能效分析系统</h3>
                    <p>本系统是一个电力行业的能效管理系统，电力能效管理系统软件借助了计算机、通信设备、计量保护装置等，为系统的实时数据采集、开关状态检测及远程控制提供了基础平台。该电力监控系统可以为企业提供“监控一体化”的整体解决方案，主要包括实时历史数据库AcrSpace、工业自动化组态软件AcrControl、电力自动化软件AcrNetPower、“软”控制策略软件AcrStrategy、通信网关服务器AcrFieldComm、OPC产品、Web门户工具等，可以广泛地应用于企业信息化、DCS系统、PLC系统、SCADA系统。</p>
                </li>
                <li>
                    <img src="<?php AssetsUrl ();?>/img/index/index_banner5.png" alt="">
                    <h3>教育云平台</h3>
                    <p>为学校用户提供教育信息化所需的网络空间、资源获取与共享平台服务及教学、科研、管理等应用的云服务。为学校用户提供教育信息化所需的网络空间、资源获取与共享平台</p>
                </li>
                <li>
                    <img src="<?php AssetsUrl ();?>/img/index/index_banner6.png" alt="">
                    <h3>校园O2O</h3>
                    <p>校园o2o平台是一个新兴的电子商务平台，主要是为了广大学生群体建立一个实用性，广泛性，快捷性的消费平台。就大学生的消费的状况，市场份额相当巨大，消费潜力也是非常可观，这样的市场为该平台的发展提供了广大的发展前景。<br>校园o2o特点：与其他消费平台相比，该平台用户更为固定主要以学生为主，自身公司形式开展，更具有可靠性。消费手段和消费产品多元化，团队成员更贴近校园群体。以消费群体为主体，更加得到消费者的认可。</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-index-box5">
        <div class="w-index-title">
            <div class="title fromTop">
                <img class="w-left" src="<?php AssetsUrl ();?>/img/titleleft.png"> 新闻资讯
                <img class="w-right" src="<?php AssetsUrl ();?>/img/titleright.png">
            </div>
        </div>
        <div class="w-index-content clearfix">
            <div class="w-index-news fromRight">
                <a href=<?php echo isset($newsList[0]) ? SiteUrl ()."/article-id-".$newsList[0]["articleid"].".html":SiteUrl ()."/news.html";?>>
                    <img src=<?php echo isset($newsList[0]) ? $newsList[0]["thumbnail"] : "../img/index/index_box5.png";?> alt="">
                    <div><?php echo isset($newsList[0]) ? $newsList[0]["title"] : "暂无内容";?></div>
                    <p><?php echo isset($newsList[0]) ? $newsList[0]["desc"] : "暂无内容";?></p>
                </a>
            </div>
            <div class="w-index-more fromLeft">
                <div class="w-index-ul clearfix">
                    <div class="w-index-time">
                        <h3><?php echo isset($newsList[1]) ? date('m/d',strtotime($newsList[1]["createtime"])):"";?></h3>
                        <p><?php echo isset($newsList[1]) ? date('Y',strtotime($newsList[1]["createtime"])):"";?></p>
                    </div>
                    <div class="w-index-new-context">
                    <a href=<?php echo isset($newsList[1]) ? SiteUrl ()."/article-id-".$newsList[1]["articleid"].".html":SiteUrl ()."/news.html";?>>
                            <h3><?php echo isset($newsList[1]) ? $newsList[1]["title"] : "暂无内容";?></h3>
                            <p><?php echo isset($newsList[1]) ? $newsList[1]["desc"] : "暂无内容";?></p>
                        </a>
                    </div>
                </div>
                <div class="w-index-ul clearfix">
                    <div class="w-index-time">
                        <h3><?php echo isset($newsList[2]) ? date('m/d',strtotime($newsList[2]["createtime"])):"";?></h3>
                        <p><?php echo isset($newsList[2]) ? date('Y',strtotime($newsList[2]["createtime"])):"";?></p>
                    </div>
                    <div class="w-index-new-context">
                    <a href=<?php echo isset($newsList[2]) ? SiteUrl ()."/article-id-".$newsList[2]["articleid"].".html":SiteUrl ()."/news.html";?>>
                            <h3><?php echo isset($newsList[2]) ? $newsList[2]["title"] : "暂无内容";?></h3>
                            <p><?php echo isset($newsList[2]) ? $newsList[2]["desc"] : "暂无内容";?></p>
                        </a>
                    </div>
                </div>
                <div class="w-index-btn">
                    <a href="<?php SiteUrl();?>/news.html">
                        查看更多
                        <span class="iconfont iconxiangyou"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-index-box6">
        <div class="w-index-title fromTop">
            <div>
                服务结构
                <img src="<?php AssetsUrl ();?>/img/titleright.png">
            </div>
        </div>
        <div class="w-index-img fromBottom">
            <img src="<?php AssetsUrl ();?>/img/index/index_box6.png" alt="">
        </div>
    </div>
    <?php require ("pc/foot.php");?>
