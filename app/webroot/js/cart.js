$(document).ready(function() {

	// resize tag input
	

	$('input[type="text"]')
	    // event handler
	    .keyup(resizeInput)
	    // resize on page load
	    .each(resizeInput);

	//click button increase decrease
	var cartButtons = $('.cart-plus-minus').find('button');
	$(cartButtons).on('click', function(e) {
	  e.preventDefault();
	  var $this = $(this);
	  var target = $this.parent().data('target');
	  var target = $('#' + target);
	  var current = parseFloat($(target).val());
	  if ($this.hasClass('cart-plus-1'))
	    target.val(current + 1);
	  else {
	    (current < 2) ? null: target.val(current - 1);
	  }
	  
	  var total = 0;
	  $('.cart-plus-minus input').each(function(){
	    total += +this.value;
	  });
	  
	  $("#total").val(total);
	  
	});
});

function resizeInput() {
    $(this).attr('size', $(this).val().length);
}