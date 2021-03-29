$('#kuldGomb').click(function(){
    console.log('működik');
    $.post('fogad.php', {
        nev: 'Nagy János',
        telepules: 'Szolnok',
        fizetes: 8540000
    });
});
