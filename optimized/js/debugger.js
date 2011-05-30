jQuery(document).ready(function($) {

	$('#dir_switch').toggle(function() {
  		$(this).val('RTL');
  		$("#container").addClass('rtl').removeClass('ltr');
	}, function() {
  		$(this).val('LTR');
  		$("#container").addClass('ltr').removeClass('rtl');
	});
});