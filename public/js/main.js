$(document).ready(function(){

	var bodyEl = $('.wrapper'),
		main = $('.eli-main'),
		navToggleBtn = bodyEl.find('.nav-toggle-btn');


		navToggleBtn.on('click', function(e){
			bodyEl.toggleClass('active-nav');
			e.preventDefault();

		});




	$(window).scroll(function(){
		  var sec = $('.eli-sec'),
		  	  sec2 = $('.box-left h1'),
		  	  sec2p =  $('.box-left p'),
		  	  boxh = $('.box-right h1'),

		      scroll = $(window).scrollTop();

		if (scroll >= 250){
			sec.addClass('fadeInUp animated'), 5000;
		} 


		if (scroll >= 450){
			sec2.addClass('fadeInLeft animated'), 5000;

		} 
		


		if (scroll >= 450){
			sec2p.addClass('fadeInRight animated'), 5000;

		} 

		if (scroll >= 450){
			boxh.addClass('fadeInDown animated'), 5000;

		} 

		
	});	




});