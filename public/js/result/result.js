(function($){
	function controller(){
		this.resultTextArea = $(".result-area");
	}
	controller.prototype.init = function(){
		this.setTextHightlight();
	}
	controller.prototype.setTextHightlight = function(){
		this.resultTextArea.each(function(index, el) {	
		   var thisText = $(el).text();
		   var reg = new RegExp(Model.searchText,"g");
		   thisText = thisText.replace(reg,"<em>"+Model.searchText+"</em>");
		   $(el).html(thisText);
		});
	}
	new controller().init();
})(jQuery)