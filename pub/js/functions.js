$(function($) {
    $('.main-navigation a').on('click', function() {
    	$('.main-navigation a').removeClass('active-menu');
    	$(this).addClass('active-menu');
        var __tab = $(this).attr('data-tab');
        $('.content').hide();
            $('.section-'+__tab).fadeIn();
        });
});

$(document).ready(function() {
	
});