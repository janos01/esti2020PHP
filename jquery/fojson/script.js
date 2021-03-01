let janos = {
    nev: 'Nagy János',
    telepules: 'Szolnok',
    fizetes: 8500000
};

let jsonJanos = JSON.stringify(janos);

$('#kuldGomb').click(function(){
    $.post('fogad.php', {
        data: jsonJanos
    })
    .done(function(result){
        if(result == 'siker') {
            alert('A mentés sikeres');
        }else {
            alert(result);
        }
        console.log(result);
    });
});
