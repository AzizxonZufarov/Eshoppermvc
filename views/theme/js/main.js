function modal_items(res){
	$(".modal body").html(res);
}

$(".add-to-cart").click(function(e){
	e.preventDefault();

	var id = $(this).data("id");
	$.ajax({
		type:"GET",
		url:"?view=ajax",
		data:{id: id},
		success:function(res){
					modal_items(res);
		},
		error:function(){

		}
	});
	});



/*function cart(cart){

	$('.open-popup').click(function(e) {
    e.preventDefault();
    $('.popup-bg').fadeIn(800);
    $('.popup').html(cart);
    $('html').addClass('no-scroll');
});

$('.close-popup').click(function() {
    $('.popup-bg').fadeOut(800);
    $('html').removeClass('no-scroll');
    $('a #scrollUp').removeId('scrollUp');

});




$(document).ready(function(){*/
