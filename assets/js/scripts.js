$(function() {

	/* QUESTIONS CHECKBOX && PROGRESS BAR */
	$('input').on('click', function() {
		var thisForm = $(this).parent().parent();
		var checkbox_count = thisForm.find('input:checkbox').length;
		var checkbox_checked_count = thisForm.find('input:checked').length;
		var progress_val = checkbox_checked_count / checkbox_count * 100;
		var progress = thisForm.parent().find('.progress-bar');
		progress.css('width', progress_val+'%').attr('aria-valuenow', progress_val);	
		progress.text(parseInt(progress_val)+'%');


		var total_checkbox_count = $('input:checkbox').length;
		var total_checkbox_checked_count = $('input:checked').length;
		var total_progress_val = total_checkbox_checked_count / total_checkbox_count * 100;
		$('#progress_total .progress-bar').css('width', total_progress_val+'%').attr('aria-valuenow', total_progress_val);
		$('#progress_total .progress-bar').text(parseInt(total_progress_val)+'%');
	});


	/* TOOGLE CHECKBOX INFORMATION */
	$( ".checkbox-information-button" ).click(function() {
  		$( this ).next().slideToggle();
	});
});