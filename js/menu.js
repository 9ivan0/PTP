$(document).ready(function() {
	$('.bloque_pie .menu').addClass('empujar');
	$('.navegacion.empujar').hover(function() { 
		$(this).animate({ paddingLeft: '5px' }, 200);
	}, function() { 
	        $(this).animate({ paddingLeft: 0 }, 200);
	});
    });