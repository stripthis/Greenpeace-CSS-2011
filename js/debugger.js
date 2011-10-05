$('#debugger_txt_direction').live('change', function(){
	$('body').toggleClass('ltr rtl');
	
	console.info($(this).val());
	
	if ($(this).val() === 'rtl'){
		$('body').attr('dir', 'rtl');
	}
	else {
		$('body').removeAttr('dir');
	}
});

$(function(){
	$( "#debugger" ).dialog({
			autoOpen: false,
	});
	$( "#debugger_toggle" ).click(function() {
			$( "#debugger" ).dialog( "open" );
			return false;
	});

});