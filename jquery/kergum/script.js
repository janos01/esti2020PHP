$('#kerGomb').click(function(){
    $.post('kuld.php', function(data){
        console.log('Átvett adat: ' + data);
    });
});


