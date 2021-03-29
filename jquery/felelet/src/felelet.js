$('body').data('pont', 0);
$('#doboz1').draggable();
$('#doboz2').draggable();
$('#doboz3').draggable();
$('#doboz4').draggable();

$('#cel1').droppable({
	drop: function(event, ui) {
		var id = $(ui.draggable).prop('id');
		if( id == 'doboz1') {
			$('body').data('pont');
			var pont = $('body').data('pont');
			pont++;
			$('body').data('pont', pont);
		}
		if( id == 'doboz4') {
			$('body').data('pont');
			var pont = $('body').data('pont');
			pont++;
			$('body').data('pont', pont);
		}		
	}
});
$('#cel2').droppable({
	drop: function(event, ui) {
		var id = $(ui.draggable).prop('id');
		console.log(id);		
	}
});
$('#cel3').droppable({
	drop: function(event, ui) {
		var id = $(ui.draggable).prop('id');
		console.log(id);		
	}
});
$('#cel4').droppable({
	drop: function(event, ui) {
		var id = $(ui.draggable).prop('id');
		console.log(id);		
	}
});

$('#kov_gomb').click(function() {
	var pont = $('body').data('pont');
	console.log('Eredmény: ' + pont);
	
});

