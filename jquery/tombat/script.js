
$('#kerGomb').click(function(){
    $.post('akuld.php', function(data){
        console.log(data[1]);
    }, 'json')
    .fail(function(){
        console.log('Hiba! A kuld.php kérés sikertelen');
    });
    

});
