


$( document ).ready(function() {
    
	$('.menu-item').click(function(e){
    	e.preventDefault();

    	console.log($(this).find("a").attr('href'));

    	$(document).scrollTop( $($(this).find("a").attr('href')).offset().top );

	})
});
