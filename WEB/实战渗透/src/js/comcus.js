$(function(){

	
	$(".search-submit").click(function(event) {
		$(this).removeAttr("name");
		event.preventDefault();
		var val = $.trim($(".search-title").val());
		if(val!==""){
			$(".search-window").find("form").submit();
			
		}else{
			alert("请输入关键词");
		}
		return false;
	});
	
	



	$("body,html").click(function(){
			$(".search-window").animate({"width":"45px"});
			$(".searchbtn").stop(true,true).fadeIn();
			$(".navlist").slideUp();
				
	});
	
	$(".searchbtn").click(function(){
		$(this).stop(true,true).fadeOut();
		$(".search-window").stop(true,true).animate({"width":"200px"});
		return false;
	});	
	$(".search-input").click(function(){
		return false;
	});
	


});


