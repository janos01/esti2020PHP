

$("#rejtGomb").click(function(){
	$("#bek").fadeOut(4000);
});

$("#mutatGomb").click(function() {
	$("#bek").fadeIn(4000);
});

$("#valtGomb").click(function() {
	$("#bek").fadeToggle(4000);
	$("#bek").css("background-color", "navy");
	$("#bek").css("color", "white");
});
