$(function(){
	var scrollTop = $('#cat_nav_home').offset().top;

	$(window).scroll(function(){

		// Category menu scrolling function
		if ($(window).scrollTop() >= scrollTop) {
			$('.home #cat_nav_home').css({
				position:'fixed',
				top:97,
				width:'100%',
			});

			$('.home #cat_nav_home .nav').css({
				boxShadow:'none',
				backgroundColor:'transparent'
			});
			$('.home #cat_nav_home .nav-item').css({
				visibility:'hidden',
			});
			$('.home #cat_nav_home .nav-item:first-child').css({
				visibility:'visible',
			});

		}else{
			$('.home #cat_nav_home').css({
				position:'relative',
				top: '-40px',
			})
			$('.home #cat_nav_home .nav').css({
				boxShadow:'6.7px 9.9px 16px 0 rgba(113,113,113,.07)',
				backgroundColor:'#FFF'
			});
			$('.home #cat_nav_home .nav-item').css({
				visibility:'visible',
			});
		}


		// Main menu Scrolling function

		if($(window).scrollTop() > 100){
			$('.navbar').addClass('fixed-top');
			$('.mobile-search-cart').addClass('fixed-top').css({
				top:52,
			});
		}else{
			$('.navbar').removeClass('fixed-top');
			$('.mobile-search-cart').removeClass('fixed-top').css({
				top:52,
			});
		}


	})


	$('#seeAllMenu').click(function(e){
		e.preventDefault();
		if($('#seeAllMenu .fas').hasClass('fa-times')){
			$('#seeAllMenu .fas').removeClass('fa-times');
		}else{
			$('#seeAllMenu .fas').addClass('fa-times');
		}
		if($('.see-all-menu').hasClass('showing-menu')){
			$('.see-all-menu').removeClass('showing-menu');

		}else{
			$('.see-all-menu').addClass('showing-menu');
		}
	})

})