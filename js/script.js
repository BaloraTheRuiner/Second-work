$(document).ready(function(){

	$(".harc").click(function(){
		let value = $(this).val();
		$(".patasxan" + value).toggle();
	})

	$(".parunakutyun").click(function(){
		let value = $(this).val();
		$("html, body").animate({
			scrollTop: $(".title" + value).offset().top
		});
	})

	$(".up_arrow").click(function(){
		$("html, body").animate({
			scrollTop: 0
		});
	})

	$(".het_forma").click(function(){
		$(".mutq_block").toggle();
		$(".reg_block").toggle();
	})
	
})