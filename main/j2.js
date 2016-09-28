$(window).load(function() {
	$("#loading").delay(100).fadeOut(500);
	$("#loading-center").click(function() {
	$("#loading").fadeOut(500);
	$(".preloader").delay(100).fadeOut(500); 
	})
})
