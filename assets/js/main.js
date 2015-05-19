$(document).ready(function(){
	$('#hamberger-btn').mouseover(function(event){
		$(this).siblings('.nav-dropdown').css('opacity', 1)
	})
	// $('.nav-dropdown').mouseout(function(event){
	// 	$(this).css('opacity', 0)
	// })
})