<div id="srl-m-sholder">
    <style>
        .srl-m-s-cclist.cn{ width: 560px;} .srl-m-s-cclist.foreign{ width: 880px;}
    </style>
    <div id="srl-m-shoder" class="clearfix">
        <div id="srl-m-s-lholder" class="fl">
            <!-- <img src="/Content/Styles/Default/img/R.png" style="position: absolute;left: 154px;width: 14px;height: 14px;top: 20px;"> -->
            <a class="srl-m-s-logo" href="http://www.baiten.cn/" target="_blank">
            </a>
        </div>
        <form action="<?php e(URL)?>result/index" id="formbox" method="get">
            <div id="srl-m-s" class="fl dn" style="display: block;">
                <div id="srl-m-sbox" class="clearfix">
                    <div id="srl-m-s-iholder" class="fl">
                        <input type="text" id="srl-m-s-input" class="f14" name="q" value="<?php e($this->searchText)?>">
                        <div id="srl-m-s-sop">
                            <span title="二次检索">
                            </span>
                        </div>
                        <div id="srl-m-s-ih-menu">
                            <span class="close">
                            </span>
                            <b>
                                二次检索
                            </b>
                            <div class="srl-m-s-ih-m-l">
                                <div class="srl-m-s-ih-m-i clearfix">          
                                </div>
                            </div>                                                    
                        </div>
                    </div>
                    <div id="srl-m-s-btn" class="fl">
                        <button class="f14" type="submit" id="srl-sb-submit" data-actiontype="search">
                            搜索
                            <span>
                            </span>
                        </button>
                    </div>
                    <div class="fl">
                        <a class="sbox-ipcLink" href="#">
                            IPC分类检索
                        </a>
                        <a class="sbox-locLink" href="#">
                            Locarno分类检索
                        </a>
                        <a class="sbox-adsLink" href="#">
                            高级检索
                        </a>
                    </div>
                </div>              
            </div>
        </form>
    </div>
</div>
<div id="main" class="clearfix" style="*min-width:1100px;">
    <div id="srl-m-aside" class="fl">
        <div class="srl-m-a-op">
            <h2 class="current f16 cp">
                快捷统计操作
            </h2>
            <ul class="f14">
                <li class="alr-typeItem bc">
                    <a data-type="0" class="alr-ti-title">
                        申请日
                    </a>
                    <div class="alr-statHolder dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="ad:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="ad:" data-actiontype="qs" data-type="ad" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
                <li class="alr-typeItem bc">
                    <a data-type="1" class="alr-ti-title">
                        公开日
                    </a>
                    <div class="alr-statHolder dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="pd:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="pd:" data-actiontype="qs" data-type="pd" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
                <li class="alr-typeItem bc">
                    <a data-type="2" class="alr-ti-title">
                        申请人
                    </a>
                    <div class="alr-statHolder dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="pa_ana:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="pa_ana:" data-actiontype="qs" data-type="pa_ana" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
                <li class="alr-typeItem bc">
                    <a data-type="3" class="alr-ti-title">
                        发明人
                    </a>
                    <div class="alr-statHolder  dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="in_ana:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="in_ana:" data-actiontype="qs" data-type="in_ana" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
                <li class="alr-typeItem bc">
                    <a data-type="4" class="alr-ti-title">
                        分类号
                    </a>
                    <div class="alr-statHolder dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="ic1:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="ic1:" data-actiontype="qs" data-type="ic1" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
                <li class="alr-typeItem bc">
                    <a data-type="6" class="alr-ti-title">
                        外观分类
                    </a>
                    <div class="alr-statHolder dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="ic1:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="lc1:" data-actiontype="qs" data-type="lc1" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
                <li class="alr-typeItem bc">
                    <a data-type="5" class="alr-ti-title">
                        法律状态
                    </a>
                    <div class="alr-statHolder dn">
                        <span class="alr-loading f12">
                            统计中...
                        </span>
                        <ul class="alr-statList f12" data-qt="ls1:">
                        </ul>
                        <div class="alr-statBtn f12">
                            <a data-qt="ls1:" data-actiontype="qs" data-type="ls1" class="sc-log">
                                显示
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="srl_main">
        <input type="hidden" value="2813" id="totalCount">
        <div id="srl-m-hop" style="padding-right: 60px;">
            <ul id="srl-m-hop-l" class="f14 clearfix">
                <li title="搜索视图" id="srl-m-h-l-v-s" class="srl-m-h-l-v fl clearfix ">
                    <span>
                    </span>
                    <a name="viewmode_s" href="/results?q=jiu&amp;type=63&amp;v=s">
                    </a>
                </li>
                <li title="列表视图" id="srl-m-h-l-v-l" class="srl-m-h-l-v fl clearfix ">
                    <span>
                    </span>
                    <a name="viewmode_l" href="/results?q=jiu&amp;type=63&amp;v=l">
                    </a>
                </li>
                <li title="图形视图" id="srl-m-h-l-v-p" class="srl-m-h-l-v fl clearfix                                                                                             c
                ">
                    <span>
                    </span>
                    <a name="viewmode_p" href="/results?q=jiu&amp;type=63&amp;v=p">
                    </a>
                </li>
                <li id="srl-m-h-l-s" class="fl">
                    <span>
                    </span>
                    <a>
                        相关度排序
                    </a>
                    <div class="srl-m-h-l-menu">
                        <div>
                            <span>
                            </span>
                            <a name="sSort_0" data-actiontype="ds" data-sort="default" class="db-dateSort">
                                相关度排序
                            </a>
                        </div>
                        <div>
                            <a name="sSort_1" data-actiontype="ds" data-sort="ad_asc" class="db-dateSort">
                                申请日升序
                            </a>
                        </div>
                        <div>
                            <a name="sSort_2" data-actiontype="ds" data-sort="ad_desc" class="db-dateSort">
                                申请日降序
                            </a>
                        </div>
                        <div>
                            <a name="sSort_3" data-actiontype="ds" data-sort="pd_asc" class="db-dateSort">
                                公开/公告日升序
                            </a>
                        </div>
                        <div>
                            <a name="sSort_4" data-actiontype="ds" data-sort="pd_desc" class="db-dateSort">
                                公开/公告日降序
                            </a>
                        </div>
                    </div>
                </li>
                <li id="srl-m-h-l-c" class="fl">
                    <span>
                    </span>
                    <a>
                        全部专利
                    </a>
                    <div class="srl-m-h-l-menu">
                        <div>
                            <span>
                            </span>
                            <a name="lgstate_" data-q="全部专利" data-actiontype="ls" data-sort="all"
                            class="db-lawSort">
                                全部专利
                            </a>
                        </div>
                        <div>
                            <a name="lgstate_1" data-q="有效专利" data-actiontype="ls" data-sort="all"
                            class="db-lawSort">
                                有效专利
                            </a>
                        </div>
                        <div>
                            <a name="lgstate_2" data-q="失效专利" data-actiontype="ls" data-sort="all"
                            class="db-lawSort">
                                失效专利
                            </a>
                        </div>
                        <div>
                            <a name="lgstate_4" data-q="实质审查" data-actiontype="ls" data-sort="all"
                            class="db-lawSort">
                                实质审查
                            </a>
                        </div>
                        <div>
                            <a name="lgstate_8" data-actiontype="ls" data-sort="all" class="db-lawSort">
                                公开发明
                            </a>
                        </div>
                        <div>
                            <a name="lgstate_16" data-actiontype="ls" data-sort="all" class="db-lawSort">
                                部分有效
                            </a>
                        </div>
                    </div>
                </li>
                <li id="srl-m-h-l-ay" class="fl">
                    <a href="#" id="analysisLink"
                    target="_blank">
                        统计分析
                    </a>
                </li>
                <li id="srl-m-h-l-r" class="fr">
                    检索结果[
                    <span class="count" id="sop-totalCount">
                        <?php e($this->count) ?>
                    </span>
                    ]
                    <div id="resultsCount" class="srl-m-h-l-menu">
                        <div id="rc-cbAll" class="f12">
                            <span class="srl-m-s-cb">
                                <input type="checkbox">
                            </span>
                            全选
                        </div>
                        <ul id="rc-cbHolder" class="f12 clearfix">
                            <li class="fl">
                                <span class="srl-m-s-cb ">
                                    <input type="checkbox" checked="checked" value="1">
                                </span>
                                <span>
                                    发明专利（33）
                                </span>
                            </li>
                            <li class="fl">
                                <span class="srl-m-s-cb ">
                                    <input type="checkbox" checked="checked" value="2">
                                </span>
                                <span>
                                    实用新型（ 0 ）
                                </span>
                            </li>
                            <li class="fl">
                                <span class="srl-m-s-cb ">
                                    <input type="checkbox" checked="checked" value="4">
                                </span>
                                <span>
                                    外观设计（2）
                                </span>
                            </li>
                            <li class="fl">
                                <span class="srl-m-s-cb ">
                                    <input type="checkbox" checked="checked" value="8">
                                </span>
                                <span>
                                    发明授权专利（16）
                                </span>
                            </li>
                            <li class="fl">
                                <span class="srl-m-s-cb ">
                                    <input type="checkbox" checked="checked" value="16">
                                </span>
                                <span>
                                    中国台湾专利（2647）
                                </span>
                            </li>
                            <li class="fl">
                                <span class="srl-m-s-cb ">
                                    <input type="checkbox" checked="checked" value="32">
                                </span>
                                <span>
                                    香港特区（131）
                                </span>
                            </li>
                        </ul>
                        <div id="rc-showBtn">
                            <a id="rc-btn">
                                显示
                            </a>
                            <input type="hidden" value="True" id="sop-isCn">
                        </div>
                        <span style="position: absolute; left: 100px; bottom: 22px; color: red; display: none;"
                        id="opTip">
                            至少选择一种专利类型！
                        </span>
                    </div>
                    <span class="arrow">
                    </span>
                </li>
                <li id="srl-m-h-l-pt" class="fr">
                    <span class="processTime">
                        耗时：0.905s
                    </span>
                </li>
            </ul>
            <input type="hidden" id="cnftype" value="True">
        </div>
        <div id="srl-m-vc" class="" style="padding-top: 0px;">
    <?php 
        if($this->result == false){
            echo("搜索结果为0");
        }else{
            foreach ($this->result as $key => $value) {           
    ?>
        <div class="sm-c clearfix" data-iscnmain="True">
            <!-- <div class="fl sm-c-leftp">
                <div class="mbox">
                    <div class="mleft">
                        <span class="mmove" style="display: none; left: 51px; top: 44px;">
                        </span>
                        <span class="mmask">
                        </span>
                        <img class="sm-c-left fl" xsrc="http://ft.baiten.cn/view/cn_pub/CN201010608795.6/1/86/126"
                        src="http://ft.baiten.cn/view/cn_pub/CN201010608795.6/1/86/126" alt="一种通过智能卡开展数字媒体互动业务的方法">
                    </div>
                </div>
            </div> -->
            <ul class="sm-c-right fl">
                <li class="sm-c-r-color">
                    <span class="sm-cb-outer ">
                        <span class="srl-m-s-cb uc">
                            <input type="checkbox" id="CN201010608795.6" name="CN201010608795.6">
                        </span>
                    </span>
                    <span class="mlr256" name="1">
                        [发明专利]
                    </span>
                    <a class="srl-detail-ti f16 result-area">
                       <?php e($value["Title"])?>
                    </a>
                    <span class="mlr6">
                        -
                    </span>
                    <a class="srl-detail-an result-area">
                        <?php e($value["PubNumber"])?>
                    </a>
                    <span class="mrl6 lawState-yx">
                        <?php e($value["LawState"])?>
                    </span>
                </li>
                <li class="srl-detail-translate-li dn">
                </li>
                <li class="sm-c-r-color">
                    <label>
                        申请人：
                    </label>
                    <span>
                        <a href="#" target="_blank" class="result-area">
                           <?php e($value["ApplicantName"])?>
                        </a>
                    </span>
                </li>
                <li>
                    <label>
                        申请日：
                    </label>
                    <a href="#" target="_blank" class="result-area">
                        <?php e($value["AppDate"])?>
                    </a>
                    <span class="mlr6">
                        -
                    </span>
                    <label>
                        主分类号：
                    </label>
                    <a href="#" target="_blank" class="result-area">
                        <?php e($value["IPC"])?>
                    </a>
                </li>
                <li>
                    <p>
                        <label>
                            摘要：
                        </label>
                        <span class="srl-detail-summary result-area">
                            <?php e($value["Abstract"])?>
                        </span>
                    </p>
                </li>
                <li class="srl-detail-translate-summary dn">
                </li>
                <li class="sm-opLink clearfix">
                    <a class="srl-detail-ft fl">
                        阅读全文
                    </a>
                    <a class="fl srl-detail-cnGPat">
                        全文下载
                    </a>
                    <a class="srl-detail-ls fl" data-id="CN201010608795.6" data-type="63"
                    data-pages="14" data-index="0">
                        法律状态
                    </a>
                    <a class="fl" href="/Search/GoToSearch?sq=ic1%3A(%22H04L29%2F06%22)&amp;type=63"
                    target="_blank">
                        同类专利
                    </a>
                    <a class="srl-detail-is fl" data-id="CN201010608795.6" data-type="63"
                    data-pages="14" data-index="0">
                        信息查询
                    </a>
                </li>
            </ul>           
        </div>
    <?php
        }
    }
    ?>
        <div class="paging f14">   
            <div class="pages" style="text-align:center" data-pageCount="<?php e($this->pageCount) ?>">
                <a disabled="disabled">
                    首页
                </a>
                <a disabled="disabled">
                    上一页
                </a>
                <?php
                    for($i = 1;$i<=$this->pageCount;$i++){
                        if($i == $this->pageIndex){
                ?>
                <span class="cpb">
                    <?php e($i) ?>
                </span>
                <?php            
                        }else{
                ?>
                <span class="item">
                    <a href="<?php e(URL)?>result/index?q=<?php e($this->searchText)?>&amp;page=<?php e($i)?>">
                        <?php e($i) ?>
                    </a>
                </span>
                <?php            
                        }
                    }
                ?>                
                <a href="#">
                    下一页
                </a>
                <a href="#">
                    末页
                </a>
                <span class="gotoPage">
                    转到第
                    <input type="text" id="_MvcPager_Ctrl0_pib" value="1" onkeydown="_MvcPager_Keydown(event)">
                    页
                    <input type="button" value="Go">                   
                </span>
            </div>
        </div>
    </div>
    </div>
</div>
<script type="text/javascript">
    var Model = {
        searchText : "<?php e($this->searchText)?>"
    }
    var json = <?php e(json_encode($this->result))?>
</script>



