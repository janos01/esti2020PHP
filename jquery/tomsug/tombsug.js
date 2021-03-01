/* Nagy János, 2/14 esti Szoft, 2021-03-01 */

$('#szamitGomb').click(function(){
    console.log('működik');
    let oldal = Number($('#oldal').val());
    let alfaszog = Number($('#alfaszog').val());
    
    let rad = alfaszog * Math.PI / 180;
    let sugar = 1.0/2.0 * oldal * Math.sin(rad);
    console.log(sugar);
    $('#sugar').val(sugar);
    $('#eredmeny').fadeIn(1400);
});
