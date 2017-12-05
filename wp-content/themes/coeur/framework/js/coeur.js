
jQuery(document).ready(function($) { //noconflict wrapper

	$('input#submit').addClass('btn btn-primary');
	$('.dropdown-menu').addClass('animated fadeIn');
	
	$("#commentform").removeAttr("novalidate");

	$("[rel='tooltip']").tooltip();

	// Comment toggle
	$('.comment-toggle').click(function () {
    $('#commentreveal').slideToggle('2000', function () {
        // Animation complete.
    });
	});

	// Search toggle
	$('#account-toggle').click(function () {
    $('.accountShortcuts').slideToggle(200, function () {
        // Animation complete.
    });
    });

	// Search toggle
	$('#search_toggle').toggle(
	function(){
		$('ul.navbar-primary').slideToggle(150);
		$('.search-box').delay(300).animate({width:'toggle'},300);
	},
	function(){
		$('ul.navbar-primary').delay(300).slideToggle(150);
		$('.search-box').animate({width:'toggle'},300);
	});

	// Mobile Search
	$('.mobile-search-icon').click(function () {
	if($('.collapse').is(':visible')) {
		$('#mobile-navbar-collapse').collapse('hide');
		$('.mobile-search').slideToggle('300');
	} else {
		$('.mobile-search').slideToggle('300');
	}
	});

	$('.navbar-toggle').click(function () {
	if($('.mobile-search').is(':visible')) {
		$('.mobile-search').slideToggle('300');
	}});

	$("#video-frame").fitVids();

	// Mobile - Put cursor in input field after click
	$('.mobile-search-icon').live("click", function(e) {
	e.preventDefault();
	$('.mobile-search input.search-field').focus();
	return false;
	});


});//end noconflict