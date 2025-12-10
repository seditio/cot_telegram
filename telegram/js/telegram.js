$(function() {
	$('.telegram').submit(function(e) {
		e.preventDefault();

		$(this).find('.alert').hide();

		const action = $(this).attr('action');
		const that = this;

		$.post(action, $(this).serialize(), function(response) {
			if (response.status) {
				// Okay, message sent
				$(that).find('.alert-success').html(response.message).slideDown().delay(3000).slideUp();
			} else {
				// Show errors
				$(that).find('.alert-danger').html(response.message).slideDown().delay(3000).slideUp();
			}
		});

		setTimeout(
		  function() {
		    $(that).find('input[type=text], input[type=email], textarea').val('');
		  }, 3000);

	});
});
