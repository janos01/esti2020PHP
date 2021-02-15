
$('#felGomb').click(function(){
	let marka = $('#marka option:selected').val();
	console.log(marka);
	
	let vono = $('#vonohorog:checked').val();
	let klima = $('#klima:checked').val();
	let alufelni = $('#alufelni:checked').val();
	
	vono = $('#vonohorog').is(':checked');
	if(vono) {
		console.log("vonohorog bejelölve");
	}
	console.log(vono, klima, alufelni);
	
	
	//Listadbozo bejárása
	$('#marka').each(function(index, element){
		console.log(index,   $(element).text() );
	});
	
	$('#marka').append('<option>Suzuki</option>');
	
	$('body').data('marka', marka);
	
});

$('#kerGomb').click(function(){
	console.log($('body').data('marka'));
});


