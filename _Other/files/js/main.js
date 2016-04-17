jQuery(document).ready(function($) {
	// Hover effect on social icons
	jQuery(".social_links img").hover(
		function() {
			jQuery(this).stop().animate({"opacity": "0"}, "400");
		},
		function() {
			jQuery(this).stop().animate({"opacity": "1"}, "400");
		});
			
	// Show & Hide rows
	$(".faq_toggle").click(function () {
		var content = $(this).next('.faq_open');	
		content.slideToggle();
	});
});