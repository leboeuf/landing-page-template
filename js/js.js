$(function(){
	$('.btn-submit').click(function()
	{
		$('.btn-submit').attr('disabled', 'disabled');
		$.ajax(
		{
			type: "POST",
			url: "ajax/subscribe.php",
			data: { email: $('#email').val() },
			success: function(data)
			{
				if (data==1)
				{
					$('#email').val('');
					$('.btn-submit').css('background-color', '#3DB461');
					$('.btn-submit').html('SUBMIT_SUCCESS');
				}
				else
				{
					$('.btn-submit').css('background-color', '#BE4347');
					$('.btn-submit').html('SUBMIT_ERROR');
					$('.btn-submit').removeAttr('disabled');
				}
			},
			error: function(data)
			{
				$('.btn-submit').css('background-color', '#BE4347');
				$('.btn-submit').html('SUBMIT_ERROR');
				$('.btn-submit').removeAttr('disabled');
			}
		});
	});
});
