console.log("Működik");

let szamok = new Array(8, 9, 5);
szamok.push(4);

console.log(szamok.length);

let kimenet = '';
for (let i in szamok) {
	kimenet += szamok[i] + ' ';
}
console.log(kimenet);

// 8, 9, 5 4

szamok.splice(1, 2);

kimenet = '';
for (let i in szamok) {
	kimenet += szamok[i] + ' ';
}
console.log(kimenet);
console.log('Típus: ' + typeof szamok);

let gyumolcsok = {
  0: 'Alma',
  1: 'Körte',
  2: 'Barack',
  3: 'Szilva',
  'aaa': 'Málna'
}
console.log(gyumolcsok['aaa']);
console.log('Típus: ' + typeof gyumolcsok);


let dolgozo = {
	'nev': 'Nagy János',
	'telepules': 'Szolnok',
	'fizetes': 8_550_000
}
console.log(dolgozo['nev']);
