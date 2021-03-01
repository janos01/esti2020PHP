$('#szamolGomb').click(function(){
	let alap = Number($('#alap').val());
	let magassag = Number($('#magassag').val());
	let terulet = alap*magassag/2;
	console.log(terulet);	
	$('#terulet').text(terulet);
	$('#terulet').fadeIn(4000);
});
