let alapObj = document.getElementById('alap');
let magassagObj = document.getElementById('magassag');
let szamolGomb = document.getElementById('szamolGomb');
let teruletObj = document.getElementById('terulet');

szamolGomb.addEventListener('click', function() {
	let alap = Number(alapObj.value);
	let magassag = Number(magassagObj.value);
	let terulet = alap * magassag / 2;
	console.log(terulet);
	teruletObj.innerHTML = "Terület: " + terulet;
	teruletObj.style.display = 'block';
});

