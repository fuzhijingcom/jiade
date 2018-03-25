
/*banner*/
$(function(){
	jQuery(".banner,.banner_s").hover(function(){ jQuery(this).find(".prev,.next").stop(true,true).fadeTo("show",0.5) },function(){ jQuery(this).find(".prev,.next").fadeOut() });
    /*SuperSlide图片切换*/
	jQuery(".banner,.banner_s").slide({ mainCell:".pic",effect:"fold", autoPlay:true, delayTime:600, trigger:"click"});
});	
