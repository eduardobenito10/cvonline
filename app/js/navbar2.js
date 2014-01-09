$(function() {

	// Do our DOM lookups beforehand
	var nav_container = $(".nav-container");
	var nav = $("nav");
	
	var top_spacing = 15;
	var waypoint_offset = 40;

	nav_container.waypoint({
		handler: function(event, direction) {
			
			if (direction == 'down') {
				nav_container.css({ 'height':nav.outerHeight() });		
				nav.stop().addClass("sticky").css("top",-nav.outerHeight()).animate({"top":top_spacing});
                                nav.css({'background-color':'rgba(88, 97, 67, 0.5)','padding-left':'2em'});
                                
				
			} else {
			
				nav_container.css({ 'height':'auto' });
				//nav.stop().removeClass("sticky").css("top",nav.outerHeight()+waypoint_offset).animate({"top":""});
				nav.stop().removeClass("sticky").css("top",nav.outerHeight()-waypoint_offset).animate({"top":""});
                                nav.css({'background-color':'rgb(228, 77, 38)','padding-left':'0em'});
			}
			
		},
		offset: function() {
			return -nav.outerHeight()+waypoint_offset;
		}
	});
	
	var sections = $("section");
	var navigation_links = $("nav a");
	
	sections.waypoint({
		handler: function(event, direction) {
		
			var active_section;
			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();

			var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("selected");
			active_link.addClass("selected");

		},
		offset: '25%'
	})
	
	
	navigation_links.click( function(event) {

		$.scrollTo(
			$(this).attr("href"),
			{
				duration: 500,
				offset: { 'left':0, 'top':-0.15*$(window).height() }
			}
		);
	});


});