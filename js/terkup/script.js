
function szamol() {
    var sugar = window.prompt('Sugár: ');
    var magassag = window.prompt('Magasság: ');
    var terfogat = 1.0/3.0 * Math.pow(sugar, 2) * Math.PI * magassag;
    alert('Térfogat: ' + terfogat);
}
