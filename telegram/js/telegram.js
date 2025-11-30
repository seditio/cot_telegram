$(function() {
	$('.telegram').submit(function(e) {
		e.preventDefault();

		$(this).find('.alert').hide();

		var action = $(this).attr('action');
		var that = this;

		$.post(action, $(this).serialize(), function(resp) {
			if (resp.status) {
				// Okay, message sent
				$(that).find('.alert-success').html(resp.message).slideDown().delay(3000).slideUp();
			} else {
				// Show errors
				$(that).find('.alert-danger').html(resp.message).slideDown().delay(3000).slideUp();
			}
		});

		setTimeout(
		  function() {
		    $(that).find('input[type=text], input[type=email], textarea').val('');
		  }, 3000);
	});
});
