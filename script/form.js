$(function () {

	$('.hero__btn').click(function () {
		$('.booking').addClass('booking--active');
	});

	$('#reserv-cancel').click(function () {
		$('.booking').removeClass('booking--active');
	});

	$('#booking-form').submit(function (e) {
		e.preventDefault();
		$.ajax({
			url: './handler.php',
			method: 'post',
			dataType: 'html',
			data: $(this).serialize(),
			success: function (data) {
				console.log(data);
				$('.booking__message').html(data);
				let s = $('.booking__message').html;

			}
		});

		if ($('.booking__message').html == 'Succesfull') {
			$('#booking-form').removeClass('booking--active');
		}
	});

});	
