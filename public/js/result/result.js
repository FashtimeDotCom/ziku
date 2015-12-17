(function($){
	function controller(){
		this.resultTextArea = $(".result-area");
		this.prjDetailBtn = $("[data-pubno]");
		this.prjDetailTab = $("#prj-tab");
	}
	controller.prototype.init = function(){
		this.setTextHightlight();
		this.bindEvent();
	}
	controller.prototype.setTextHightlight = function(){
		this.resultTextArea.each(function(index, el) {	
		   var thisText = $(el).text();
		   var reg = new RegExp(Model.searchText,"g");
		   thisText = thisText.replace(reg,"<em>"+Model.searchText+"</em>");
		   $(el).html(thisText);
		});
	}
	controller.prototype.getPrjDetail = function(PubNumber){
		var me = this;
		$.ajax({
			url:Model.prjDetailUrl,
			type:"POST",
			dataType:"json",
			data:{
				PubNumber:PubNumber
			},
			success:function(result){
				me.showDetailModal(result);
			},
			error:function(){

			}
		});
	}
	controller.prototype.bindEvent = function(){
		var me = this;
		this.prjDetailBtn.bind('click', function(event) {
			var pubNumber = $(this).data("pubno");
			me.getPrjDetail(pubNumber);
		});
		//点击关闭详情弹出
		this.prjDetailTab.find(".tab-close").bind("click",function(){
			me.prjDetailTab.hide();
		});
	}
	controller.prototype.showDetailModal = function(result){
		var me = this;
		var tabsContent = me.prjDetailTab.find('.cd-tabs-content');
		if(!!result.Status){
			for(var key in result.Data){
				console.log(key+":"+result.Data[key])
				tabsContent.find("[data-content="+key+"]").find(".tab-text").html(result.Data[key])
				tabsContent.find("[data-content="+key.toLowerCase()+"]").append("<p>"+result.Data[key]+"</p>")
			}
		}
		this.prjDetailTab.show();
		$(me.prjDetailTab.find('.cd-tabs-navigation li').eq(0)).click();
	}
	new controller().init();
})(jQuery)