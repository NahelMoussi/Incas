var container_action = $('.nm_container_action'),
	border_bottom =$('.border_bottom'),
	border_top =$('.border_top'),
	border_left =$('.border_left'),
	border_right =$('.border_right');


$(function() {
	container_action.click(function(){
		border_bottom.addClass("bounce_border_bottom").removeClass("border_bottom");
		border_top.addClass("bounce_border_top").removeClass("border_top");
		border_left.addClass("bounce_border_left").removeClass("border_left");
		border_right.addClass("bounce_border_right").removeClass("border_right");
		setTimeout(
			function(){
			 document.location.href="http://localhost/t_silex/web/information/1";
			}
		, 5000);
	});
});