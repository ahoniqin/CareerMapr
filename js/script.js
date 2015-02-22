$(document).ready(function(){
    $('.fade').hide(0).delay(300).fadeIn('slow')
    
    $('#how-rank').click(function() {
	  $('.lightbox').fadeIn();
	  $('#rank-modal').show('slow', function() {
	  });
	});
	
	$('.exit').click(function() {
	  $('.lightbox').fadeOut();
	});
	
	$(document).mouseup(function (e)
	{
	    var container = $('.modal');
	
	    if (!container.is(e.target) // if the target of the click isn't the container...
	        && container.has(e.target).length === 0) // ... nor a descendant of the container
	    {
	        $('.lightbox').fadeOut();
	    }
	});

});