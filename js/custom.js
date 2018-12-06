$(function(){
	var scrollTop = $('#cat_nav_home').offset().top;
	console.log(scrollTop);
	$(window).scroll(function(){
		if ($(window).scrollTop() >= scrollTop) {
			$('.home #cat_nav_home').css({
				position:'fixed',
				top:137,
				width:'100%',
			})
		}else{
			$('.home #cat_nav_home').css({
				position:'relative',
				top: '-40px',
			})
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