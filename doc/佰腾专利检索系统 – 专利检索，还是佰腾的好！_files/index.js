//总命名空间
window['PDBScript'] = {};
window['PDBScript']['List'] = {};

//预加载图片
jQuery.preloadImages = function (imgs) {
    for (var i = 0; i < imgs.length; i++) {
        $("<img />").attr('src', imgs[i]);
    }
};

PDBScript.Index = {
    config: { 'bg_newYear': false},
    //需要滑动的dom区域
    slideBlocks: $(".searchHolder"),
    //检索框
    searchInput: $(".search"),
    //背景图地址数组
    bgImgs: [
                "/Content/Styles/Default/img/bg_01.jpg",
                "/Content/Styles/Default/img/bg_02.jpg",
                "/Content/Styles/Default/img/bg_03.jpg",
                "/Content/Styles/Default/img/bg_04.jpg",
                "/Content/Styles/Default/img/bg_05.jpg",
                "/Content/Styles/Default/img/bg_06.jpg",
                "/Content/Styles/Default/img/bg_07.jpg",
                "/Content/Styles/Default/img/bg_08.jpg",
                "/Content/Styles/Default/img/bg_09.jpg",
                "/Content/Styles/Default/img/bg_10.jpg",
                "/Content/Styles/Default/img/bg_11.jpg",
                "/Content/Styles/Default/img/bg_12.jpg",
                "/Content/Styles/Default/img/bg_13.jpg",
                "/Content/Styles/Default/img/bg_14.jpg",
                "/Content/Styles/Default/img/bg_15.jpg",
                "/Content/Styles/Default/img/bg_16.jpg",
                "/Content/Styles/Default/img/bg_17.jpg",
                "/Content/Styles/Default/img/bg_18.jpg",
                "/Content/Styles/Default/img/bg_19.jpg",
                "/Content/Styles/Default/img/bg_20.jpg",
                "/Content/Styles/Default/img/bg_21.jpg",
                "/Content/Styles/Default/img/bg_22.jpg",
                "/Content/Styles/Default/img/bg_23.jpg",
                "/Content/Styles/Default/img/bg_24.jpg",
                "/Content/Styles/Default/img/bg_25.jpg",
                "/Content/Styles/Default/img/bg_26.jpg",
                "/Content/Styles/Default/img/bg_27.jpg",
                "/Content/Styles/Default/img/bg_28.jpg",
                "/Content/Styles/Default/img/bg_29.jpg",
                "/Content/Styles/Default/img/bg_30.jpg",
                "/Content/Styles/Default/img/bg_31.jpg",
                "/Content/Styles/Default/img/bg_32.jpg",
                "/Content/Styles/Default/img/bg_33.jpg",
                "/Content/Styles/Default/img/bg_34.jpg",
                "/Content/Styles/Default/img/bg_35.jpg",
                "/Content/Styles/Default/img/bg_36.jpg",
                "/Content/Styles/Default/img/bg_37.jpg",
                "/Content/Styles/Default/img/bg_38.jpg",
                "/Content/Styles/Default/img/bg_39.jpg",
                "/Content/Styles/Default/img/bg_40.jpg",
                "/Content/Styles/Default/img/bg_41.jpg",
                "/Content/Styles/Default/img/bg_42.jpg",
                "/Content/Styles/Default/img/bg_43.jpg",
                "/Content/Styles/Default/img/bg_44.jpg",
                "/Content/Styles/Default/img/bg_45.jpg",
                "/Content/Styles/Default/img/bg_46.jpg",
                "/Content/Styles/Default/img/bg_47.jpg",
                "/Content/Styles/Default/img/bg_48.jpg",
                "/Content/Styles/Default/img/bg_49.jpg",
                "/Content/Styles/Default/img/bg_50.jpg",
                "/Content/Styles/Default/img/bg_51.jpg",
                "/Content/Styles/Default/img/bg_52.jpg",
                "/Content/Styles/Default/img/bg_53.jpg",
                "/Content/Styles/Default/img/bg_54.jpg",
                "/Content/Styles/Default/img/bg_55.jpg",
                "/Content/Styles/Default/img/bg_56.jpg",
                "/Content/Styles/Default/img/bg_57.jpg",
                "/Content/Styles/Default/img/bg_58.jpg",
                "/Content/Styles/Default/img/bg_59.jpg",
                "/Content/Styles/Default/img/bg_60.jpg",
                "/Content/Styles/Default/img/bg_61.jpg",
                "/Content/Styles/Default/img/bg_62.jpg",
                "/Content/Styles/Default/img/bg_63.jpg",
                "/Content/Styles/Default/img/bg_64.jpg",
                "/Content/Styles/Default/img/bg_65.jpg",
                "/Content/Styles/Default/img/bg_66.jpg",
                "/Content/Styles/Default/img/bg_67.jpg",
                "/Content/Styles/Default/img/bg_68.jpg",
                "/Content/Styles/Default/img/bg_69.jpg",
                "/Content/Styles/Default/img/bg_70.jpg",
                "/Content/Styles/Default/img/bg_71.jpg",
                "/Content/Styles/Default/img/bg_72.jpg",
                "/Content/Styles/Default/img/bg_73.jpg",
                "/Content/Styles/Default/img/bg_74.jpg",
                "/Content/Styles/Default/img/bg_75.jpg",
                "/Content/Styles/Default/img/bg_76.jpg",
                "/Content/Styles/Default/img/bg_77.jpg",
                "/Content/Styles/Default/img/bg_78.jpg",
                "/Content/Styles/Default/img/bg_79.jpg",
                "/Content/Styles/Default/img/bg_80.jpg",
                "/Content/Styles/Default/img/bg_newyear.jpg"
            ],
    //顶部导航球球
    nav: $("#sectionNav").find("span"),
    Slide: {
        //滑动函数—参数如下：
        //b:滑动对象（选择器）
        //sIndex:滑动元素的index
        //speed:滑动的速度（毫秒）
        //shake：滑入滑出振幅大小（px）
        slideFunc: function (b, sIndex, speed, shake, module) {
            console.log(module + "|" + b + "|" + sIndex);
            if (module !== "pc") {
                $(".search").val("");
                i = sIndex;
                PDBScript.Index.nav.eq(sIndex).addClass("navHover");
                PDBScript.Index.nav.eq(sIndex).siblings().removeClass("navHover");
                var bgImgsCount = PDBScript.Index.bgImgs.length - 1;
                var bgIndex = bgImgsCount;
                if ((!PDBScript.Index.config.bg_newYear))
                    bgIndex = parseInt(bgImgsCount * Math.random());
                $(".current").css("background-image", "url(" + PDBScript.Index.bgImgs[bgIndex] + ")");
            }
            b.eq(sIndex).siblings().animate({
                opacity: 0.0,
                left: '+=' + shake
            }, speed, function () {
                b.eq(sIndex).css({ display: "block", left: shake + "px", opacity: "100" });
                if (PDBScript.Index.Slide.hasSlide <= 0) {
                    PDBScript.Index.Slide.hasSlide += 1;
                    b.eq(sIndex).animate({
                        left: '-=' + shake
                    }, speed, function () {
                        PDBScript.Index.Slide.hasAnimateEnd = 0;
                        PDBScript.Index.Slide.hasSlide = 0;
                    });
                }
                b.eq(sIndex).siblings().css({ left: '0', display: 'none' });
            });
        },
        //记录当前显示的是第几个块
        i: 0,
        //放置滑动动画重复执行的戳变量
        hasAnimateEnd: 0,
        hasSlide: 0
    }
};

(function () {
    //左右按钮点击事件
    var clickFunc = (function () {
        var btn = $(".section-turn");
        btn.click(function () {
            var t = $(this);
            if (PDBScript.Index.Slide.hasAnimateEnd <= 0) {
                var isNext = t.hasClass("next");
                if (isNext) {
                    PDBScript.Index.Slide.i += 1;
                } else {
                    PDBScript.Index.Slide.i -= 1;
                }
                var count = 3;
                if (PDBScript.Index.Slide.i >= count) {
                    PDBScript.Index.Slide.i = 0;
                }
                if (PDBScript.Index.Slide.i < 0) {
                    PDBScript.Index.Slide.i = count - 1;
                }
                PDBScript.Index.Slide.hasAnimateEnd += 1;
                PDBScript.Index.Slide.slideFunc(PDBScript.Index.slideBlocks, PDBScript.Index.Slide.i, 200, 300);
            }
        });
    } ()),
    stockFunc = (function () {
        $(".stocklink").click(function () {
            $(".section-turn").eq(0).click();
        });
    } ()),
    //顶部滑动球球hover事件
    navHoverFunc = (function () {
        var hasHover = 0;
        var moveFunc;
        PDBScript.Index.nav.hover(function () {
            var t = $(this);
            var index = t.index();
            moveFunc = setInterval(function () {
                hasHover += 1;
                if (hasHover === 1) {
                    PDBScript.Index.Slide.slideFunc(PDBScript.Index.slideBlocks, index, 200, 300);
                }
            }, 300);
        }, function () {
            clearInterval(moveFunc);
            hasHover = 0;
        });
    } ()),
    //左右键盘事件
    keyDownSlide = (function () {
        var isFocus = false;
        $(".search,.feedback-title,.feedback-content").live('focusin', function() {
            isFocus = true; 
        }).live('focusout',(function () {
            isFocus = false;
        }));
        
        $(document).keydown(function (event) {
            if (PDBScript.Index.Slide.hasAnimateEnd <= 0) {
                var count = 3;
                if (event.keyCode == 37) {
                    if (!isFocus) {
                        //<--
                        PDBScript.Index.Slide.i -= 1;
                        if (PDBScript.Index.Slide.i >= count) {
                            PDBScript.Index.Slide.i = 0;
                        }
                        if (PDBScript.Index.Slide.i < 0) {
                            PDBScript.Index.Slide.i = count - 1;
                        }
                        PDBScript.Index.Slide.hasAnimateEnd += 1;
                        PDBScript.Index.Slide.slideFunc(PDBScript.Index.slideBlocks, PDBScript.Index.Slide.i, 200, 300);
                        $("#endtour").trigger('click');
                    }
                }
                if (event.keyCode == 39) {
                    if ($(".search").eq(PDBScript.Index.Slide.i).val() == "" || !isFocus) {
                        //-->
                        PDBScript.Index.Slide.i += 1;
                        if (PDBScript.Index.Slide.i >= count) {
                            PDBScript.Index.Slide.i = 0;
                        }
                        if (PDBScript.Index.Slide.i < 0) {
                            PDBScript.Index.Slide.i = count - 1;
                        }

                        PDBScript.Index.Slide.hasAnimateEnd += 1;
                        PDBScript.Index.Slide.slideFunc(PDBScript.Index.slideBlocks, PDBScript.Index.Slide.i, 200, 300);
                        $("#endtour").trigger('click');
                    }
                }
            }
        });
    } ());

    //中外文专利库切换事件
    var isF = 1, changeClassBtn = $(".changeClass"), pclass = $(".pClass");
    changeClassBtn.click(function () {
        if (isF >= 2) {
            isF = 0;
        }
        if (isF === 0) {
            $("input[name='pc_isChinese']").val("1");
            $("#CNpclass").find("span").removeClass("pc-cb-u");
            $("#CNpclass").find(":checkbox").prop("checked", true);
        } else {
            $("input[name='pc_isChinese']").val("0");
            $("#Fpclass").find("span").removeClass("pc-cb-u");
            $("#Fpclass").find(":checkbox").prop("checked", true);
        }
        PDBScript.Index.Slide.slideFunc(pclass, isF, 150, 100, "pc");
        changeClassBtn.eq(isF).fadeIn(500);
        changeClassBtn.not(changeClassBtn.eq(isF)).fadeOut(100);
        isF += 1;
        PDBScript.Index.searchInput.focus();
    });
} ());

//ipc,locarno 切换事件
var categoryClassBtnFunc = (function () {
    var isF = 1, changeClassBtn = $(".categoryClass");
    changeClassBtn.click(function () {
        if (isF >= 2) {
            isF = 0;
        }
        changeClassBtn.eq(isF).fadeIn(500);
        changeClassBtn.not(changeClassBtn.eq(isF)).fadeOut(100);
        isF += 1;
        if ($(this).html().indexOf("IPC") == 0) {
            $("[name='searchType']").val("1");
            $("#commoLocarno").show();
            $("#commonIpc").hide();
        }
        else {
            $("[name='searchType']").val("0");
            $("#commonIpc").show();
            $("#commoLocarno").hide();
        }
    });
} ());

//自定义checkbox事件
PDBScript.Index.PatentClassCheck = (function () {
    var pcHolder = $(".pc-cbHolder");
    pcHolder.click(function () {
        var t = $(this), p = t.find(".pc-cb"), c = $(this).find(":checkbox");
        if (c.prop("checked") == true) {

            p.addClass("pc-cb-u");
            c.prop("checked", false);
            if (c.attr("id") == "f-cbAll") {
                $("#Fpclass").find(":checkbox").not("#f-cbAll").each(function () {
                    $(this).prop("checked", false);
                    $(this).parent().addClass("pc-cb-u");
                });
            } else if (c.attr("id") == "c-cbAll") {
                $("#CNpclass").find(":checkbox").not("#c-cbAll").each(function () {
                    $(this).prop("checked", false);
                    $(this).parent().addClass("pc-cb-u");
                });
            } else {
                $("#c-cbAll").prop("checked", false);
                $("#c-cbAll").parent().addClass("pc-cb-u");
                $("#f-cbAll").prop("checked", false);
                $("#f-cbAll").parent().addClass("pc-cb-u");
            }
        } else {

            p.removeClass("pc-cb-u");
            c.prop("checked", true);
            if ($("#Fpclass").length == 1) {

                var allength = $("#Fpclass").find(":checkbox").not("#f-cbAll").length;
                var cblength = $("#Fpclass").find(":checked").not("#f-cbAll").length;
                var cnallength = $("#CNpclass").find(":checkbox").not("#c-cbAll").length;
                var cncblength = $("#CNpclass").find(":checked").not("#c-cbAll").length;
                if (allength == cblength) {
                    $("#f-cbAll").prop("checked", true);
                    $("#f-cbAll").parent().removeClass("pc-cb-u");
                } else if (c.attr("id") == "f-cbAll") {
                    $("#Fpclass").find(":checkbox").not("#f-cbAll").each(function () {
                        $(this).prop("checked", true);
                        $(this).parent().removeClass("pc-cb-u");
                    });
                } else {
                    $("#f-cbAll").prop("checked", false);
                    $("#f-cbAll").parent().addClass("pc-cb-u");
                }
                if (cnallength == cncblength) {
                    $("#c-cbAll").prop("checked", true);
                    $("#c-cbAll").parent().removeClass("pc-cb-u");
                } else if (c.attr("id") == "c-cbAll") {
                    $("#CNpclass").find(":checkbox").not("#c-cbAll").each(function () {
                        $(this).prop("checked", true);
                        $(this).parent().removeClass("pc-cb-u");
                    });
                } else {
                    $("#c-cbAll").prop("checked", false);
                    $("#c-cbAll").parent().addClass("pc-cb-u");
                }
            }
        }
    });
} ());

//自定义Radio事件
PDBScript.Index.PatentClassRadio = (function () {
    var pcHolder = $(".cs-cbHolder");
    pcHolder.click(function () {
        var t = $(this), tsb = $(this).siblings(".cs-cbHolder"), p = t.find(".inChecked"), c = $(this).find(":radio");
        if (c.prop("checked") != true) {
            p.removeClass("inxunchecked");
            c.prop("checked", true);
            tsb.find(".inChecked").find(":radio").prop("checked", false);
            tsb.find(".inChecked").addClass("inxunchecked");
            if (c.attr("name") == "cs_radio0") {
                $("[name='cs_keyword']").val("0");
            }
            else {
                $("[name='cs_keyword']").val("1");
            }
        }
    });
} ());

//常用导航删除按钮事件
PDBScript.Index.DelFav = (function () {
    var delBtn = $(".fs-m-i-del");
    delBtn.click(function () {
        var that = $(this);
        $.ajax({
            url: encodeURI("/asyn/Delcookie?cookieId=" + $(this).attr("id") + "&currentdate=" + new Date().getMilliseconds().toString()),
            async: false,
            success: function (data) {
                if (data == "True") {
                    that.parent().remove();
                }
            }
        });
    });
} ());

//检索事件
PDBScript.Index.SubForm = (function () {
    var submigBtn = $("#searchSubmit");
    //判断juqery ui的库脚本是否已经加载
    var hasScriptLoaded = 0;
    submigBtn.click(function () {
        var isCn = $("input[name='pc_isChinese']").val();
        if (isCn == 1) {
            $("#Fpclass").find("span").addClass("pc-cb-u");
            $("#Fpclass").find(":checkbox").prop("checked", false);
        } else {
            $("#CNpclass").find("span").addClass("pc-cb-u");
            $("#CNpclass").find(":checkbox").prop("checked", false);
        }
        if ($.trim($("[name='searchQuerystring']").val()) != "" && $("#ixcfpclass").find(":checked").length < 1) {
            if (hasScriptLoaded === 0) {
                $.getScript("/Scripts/jquery-ui-1.9.0.min.js", function () {
                    hasScriptLoaded += 1;
                    $("#dialog").dialog({ autoOpen: false, modal: true, height: 196, width: 307, resizable: false,
                        buttons: {
                            确定: function () {
                                $(this).dialog("close");
                            }
                        }
                    });
                    $(".ui-widget-header").css("font-weight", "normal");
                    if (isCn == 1) {
                        $(".search-propContent").html("至少选择一种专利类型！");
                    } else {
                        $(".search-propContent").html("至少选择一种国别！");
                    }
                    $("#dialog").dialog("open");
                });
            }
            else {
                $("#dialog").dialog({ autoOpen: false, modal: true, height: 196, width: 307, resizable: false, buttons: {
                    确定: function () {
                        $(this).dialog("close");
                    }
                }
                });
                $(".ui-widget-header").css("font-weight", "normal");
                if (isCn == 1) {
                    $(".search-propContent").html("至少选择一种专利类型！");
                } else {
                    $(".search-propContent").html("至少选择一种国别！");
                }
                $("#dialog").dialog("open");
            }
            return false;
        }
        else {
            var patentclass = 0;
            if (isCn == 1) {
                $("#CNpclass").find(":checked").not("#c-cbAll").each(function () {
                    patentclass += parseInt($(this).val());
                });
            } else {
                $("#Fpclass").find(":checked").not("#f-cbAll").each(function () {
                    patentclass += parseInt($(this).val());
                });
            }
            $("[name='pc_ptype']").val(patentclass);
            return true;
        }

    });
} ());

//最新公告日公告牌效果
PDBScript.Index.Board = (function () {
    var hasHover = 0, board = $(".board-ul"), arrow = $(".b-arrow"), dn;
    var moveFunc;
    board.toggle(function () {
        dn = board.find(".dn");
        arrow.addClass("up");
        board.find("ul").addClass("out");
        dn.slideDown("fast", function () {
        });
    }, function () {
        arrow.removeClass("up");
        board.find("ul").removeClass("out");
        dn.slideUp("fast", function () {
        });
    });
} ());

//快捷入口
PDBScript.Index.QuickEnter = (function () {
    var quickTimeOut,
        quickBox = $(".quick-box");
    quickBox.hover(function () {
        quickTimeOut = setTimeout(function () {
            quickBox.animate({ right: "-2px" }, "fast");
        }, 200);
    }, function () {
        clearTimeout(quickTimeOut);
        quickBox.animate({ right: "-140px" }, "fast");
    });
})();

//页面加载初始动作
PDBScript.Index.OnLoad = (function () {
    $(function () {
        PDBScript.Index.searchInput.eq(0).focus();
        //预加载背景图
        //$.preloadImages(PDBScript.Index.bgImgs);
        var bgImgsCount = PDBScript.Index.bgImgs.length - 1;
        var bgIndex = bgImgsCount;
        if (!PDBScript.Index.config.bg_newYear)
            bgIndex = parseInt(bgImgsCount * Math.random());
        $(".current").css("background-image", "url(" + PDBScript.Index.bgImgs[bgIndex] + ")");
    });
} ());

//首页搜索日志
var setCustomVarType = 3,
    setCustomVarName = "login",
    asetCustomVarType = 4,
    asetCustomVarName = "Anonymous",
    index = 1,
    islogin = $("#login").length <= 0 ? true : false,
    userInfoHolder = $("#pdb-h-userName"),
    uname = userInfoHolder.attr("data-uname"),
    uid = userInfoHolder.attr("data-uid");

PDBScript.BaiduLogType = {
    //百度统计自定义变量枚举
    setCustomvar: {
        'HomeSearchBox': ['_setCustomVar', setCustomVarType, setCustomVarName, 'HomeSearchBox', index],
        'IpcCategorySearch': ['_setCustomVar', setCustomVarType, setCustomVarName, 'IpcCategorySearch', index],
        'AppearanceCategorySearch': ['_setCustomVar', setCustomVarType, setCustomVarName, 'AppearanceCategorySearch', index]
    },
    asetCustomvar: {
        'HomeSearchBox': ['_setCustomVar', setCustomVarType, setCustomVarName, 'PatentDetail', index],
        'IpcCategorySearch': ['_setCustomVar', setCustomVarType, setCustomVarName, 'ViewFulltext', index],
        'AppearanceCategorySearch': ['_setCustomVar', setCustomVarType, setCustomVarName, 'PatentFulltext', index]
    },
    trackEvent: {
        'HomeSearchBox': ['_trackEvent', 'HomeSearchBox', 'click', 'homeseachBtn'],
        'IpcCategorySearch': ['_trackEvent', 'IpcCategorySearch', 'click', 'ipcseachBtn'],
        'AppearanceCategorySearch': ['_trackEvent', 'AppearanceCategorySearch', 'click', 'appearanceseachBtn']
    }
};
//百度统计事件发送
PDBScript.BaidusendLog = function (actionType) {
    if (islogin) {
        _hmt.push(PDBScript.BaiduLogType.setCustomvar[actionType]);
    } else {
        _hmt.push(PDBScript.BaiduLogType.asetCustomvar[actionType]);
    }
    _hmt.push(PDBScript.BaiduLogType.trackEvent[actionType]);
};
//平台统计事件发送
PDBScript.Index.DbLog = function (url) {
    $.ajax({
        type: "POST",
        url: encodeURI(url)
    });
};

//首页日志
PDBScript.Index.BaiduLog = (function () {
    $('#searchSubmit').click(function () {
        PDBScript.BaidusendLog("HomeSearchBox");
        if (uname) {
            var homeseachurl = "/asyn/sendactionlog" + "?type=2" + "&at=17" + "&uid=" + uid + "&uname=" + uname + "&opdetail=首页搜索" + $("#searchQuerystring").val();
            PDBScript.Index.DbLog(homeseachurl);
        }
    });
    //ipc搜索日志
    $("#categorySubmit").click(function () {
        if ($("input[name=searchType]").val() == 0) {
            PDBScript.BaidusendLog("IpcCategorySearch");
            if (uname) {
                var ipcseachurl = "/asyn/sendactionlog" + "?type=2" + "&at=15" + "&uid=" + uid + "&uname=" + uname + "&opdetail=ipc分类搜索" + $("#categoryQuerystring").val();
                PDBScript.Index.DbLog(ipcseachurl);
            }
        } else {
            PDBScript.BaidusendLog("AppearanceCategorySearch");
            if (uname) {
                var appearanceseachurl = "/asyn/sendactionlog" + "?type=2" + "&at=16" + "&uid=" + uid + "&uname=" + uname + "&opdetail=外观分类搜索" + $("#categoryQuerystring").val();
                PDBScript.Index.DbLog(appearanceseachurl);
            }
        }
    });
} ());

/*首页引导*/
//PDBScript.Index.intro = (function () {
//    seajs.use(['/Scripts/AppScripts/IntroList.js'], function (Intro) {
//        var intro = new Intro({
//            cookieName: "db_Intro"
//        });
//        intro.IntroInit(PDBScript.Index.IntroShowCallBack, PDBScript.Index.IntroDefaultCallBack);
//    });
//} ());

//获取企业库信息
PDBScript.Index.GetAppInfo = (function () {
    var enterpriseLink = $("#enterpriseLink");
    var user = $("#pdb-h-userName");
    if (user.length > 0) {
        $.ajax({
            url: "/asyn/ApplicationInfo?userId=" + user.attr("data-uid"),
            type: "post",
            success: function (data) {
                var appInfo = $.parseJSON(data);
                if (appInfo != null) {
                    if (appInfo.isHaveApp) {
                        enterpriseLink.attr("href", "http://qyk.baiten.cn/db_" + appInfo.id);
                    } else {
                        enterpriseLink.attr("href", "http://i.baiten.cn/" + appInfo.name + "/AppCenter/AppDetail/EnterpriseApp?appCode=PersonalizedPD").text("开通个性化专利数据库");
                    }
                }
            },
            error: function () {
                enterpriseLink.text("获取失败！");
            }
        });
    } else {
        var curl = encodeURIComponent(location.href);
        enterpriseLink.attr("href", "http://login.baiten.cn?rurl=" + curl);
    }
} ());

var loadScript = function (elem, callback) {
    var url = "/Scripts/aq_auth.js",
		 parent = elem,
		docWrite = document.write,

		script = document.createElement('script'),
		head = document.head ||
			document.getElementsByTagName('head')[0] ||
			document.documentElement;

    // 重写document.write
    document.write = function (text) {
        parent.innerHTML = text;
    };

    script.type = 'text/javascript';
    script.src = url;
    script.onerror =
                script.onload =
                    script.onreadystatechange = function (e) {

                        e = e || window.event;
                        if (!script.readyState ||
                            /loaded|complete/.test(script.readyState) ||
                            e === 'error') {

                            // 恢复原生的document.write
                            document.write = docWrite;
                            head.removeChild(script);

                            // 卸载事件和断开DOM的引用
                            head = parent = elem = script = script.onerror = script.onload = script.onreadystatechange = null;
                            if (callback) {
                                callback();
                            }
                        }
                    };

    // 加载script
    head.insertBefore(script, head.firstChild);
};

var loadQueue = [];
// 入列
var queue = function (data, ele, callback) {
    loadQueue.push(data);
    if (loadQueue[0] !== 'runing') {
        dequeue(ele, callback);
    }
};
// 出列	
var dequeue = function (ele, callback) {
    var fn = loadQueue.shift();

    if (fn) {
        loadQueue.unshift('runing');
        fn(ele, callback);
    }
};
queue(loadScript, $("#aq_auth")[0], function () {
    loadScript($("#aq_auth1")[0]);
});