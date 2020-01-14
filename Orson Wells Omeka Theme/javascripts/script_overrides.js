$(document).ready(function() {
	"use strict";
	
    $('#primary-nav-wrapper ul.primary-nav li:first-child').append('<img alt="" src="/welles/themes/cairril/images/listen_icon_grey.gif" class="listen-icon">');
    
    $('#primary-nav-wrapper ul.primary-nav li:nth-child(1)').after('<li class="separator"><span class="pipe">|</span></li>');
    $('#primary-nav-wrapper ul.primary-nav li:nth-child(3)').after('<li class="separator"><span class="pipe">|</span></li>');

    $('body').addClass('two-col');

});
