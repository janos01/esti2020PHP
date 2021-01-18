//kockadobás generálása
let vel = Math.floor( Math.random() * 6 + 1 );
console.log(vel);

let szog = 1;
let rad = szog * Math.PI / 180;
console.log(Math.sin(rad));

let valosStr = '25';
console.log(typeof valosStr);
console.log(typeof parseFloat(valosStr));
console.log(typeof parseInt(valosStr));

//~ let nev = prompt('Neved: ', 'Névtelen');
//~ console.log('A neved: ' + nev);

let valasz = confirm('Biztos megtartod az adatot?');
console.log(typeof valasz);
if(valasz) {
	console.log('Megtartás');
}else {
	console.log('Elvetés');
}
