$('.dropdown-toggle').click(function() {
    	var location = $(this).attr('href');
    	window.location.href = location;
		return false;
	});

$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});
