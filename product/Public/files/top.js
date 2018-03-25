//收藏本站
function ZkAddFavorite(obj, url, title) 
{   
    
    var e = window.event || arguments.callee.caller.arguments[0];
    var B = {
        IE : /MSIE/.test(window.navigator.userAgent) && !window.opera
        , FF : /Firefox/.test(window.navigator.userAgent)
        , OP : !!window.opera
    };
    obj.onmousedown = null;

    if (B.IE) 
    {
        obj.attachEvent("onmouseup", function () {
            try {
                window.external.AddFavorite(url, title);
                window.event.returnValue = false;
            } catch (exp) {}
        });
    } 
    else {
        if (B.FF || obj.nodeName.toLowerCase() == "a") {
            obj.setAttribute("rel", "sidebar"), obj.title = title, obj.href = url;
        } else if (B.OP) {
            var a = document.createElement("a");
            a.rel = "sidebar", a.title = title, a.href = url;
            obj.parentNode.insertBefore(a, obj);
            a.appendChild(obj);
            a = null;
        }
    }
}

//设置首页
function SetHome(obj, url) {
    try {
        obj.style.behavior = 'url(#default#homepage)';
        //obj.setHomePage('http://www.baidu.com/');
        obj.setHomePage(url);


    } catch (e) {
        if (window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            }
            catch (e) {
                alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
            }
        } else {
            alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【" + url + "】设置为首页。");
        }
    }
} 

$(function(){
    var singleImageList=document.getElementById("singleImageList");
    if(singleImageList!=null && singleImageList.getElementsByTagName("li")!=null && singleImageList.getElementsByTagName("li").length > 3){
        $(function(){
            var clearTimer = null;
            var SleepTime = 3000;   //停留时长，单位毫秒
            $("#singleImageList").jCarouselLite({
                btnNext: "#singleImage_btn_focus_next",
                btnPrev: "#singleImage_btn_focus_prev",
                visible: 3,
                scroll:1,
                speed: 1500,//滚动速度，单位毫秒
                auto:1000,
                mouseOver:true
            });
        });
    }
});