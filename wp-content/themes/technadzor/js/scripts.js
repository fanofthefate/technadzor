(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		$('.menu-item-has-children > a').click(function(event) {
			console.log('click');
			event.preventDefault();
			$(this).parent('li').find('ul').slideToggle();
		});

		$(".popup-btn").fancybox({
			padding		: 0,
		});
		
	});
	
})(jQuery, this);

jQuery(window).on('load', function(){
	jQuery('.burger').on('click', function(){
    if(!jQuery(this).hasClass('activeBrg')){
      jQuery('.navigation>.wrapper>.nav>ul').slideDown('fast');
      jQuery(this).addClass('activeBrg');
    } else {
      jQuery('.navigation>.wrapper>.nav>ul').slideUp('fast');
      jQuery(this).removeClass('activeBrg');
    };
    });
});
