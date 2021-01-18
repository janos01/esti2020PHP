

let nev = prompt('Mi a neved?');

switch(nev) {
	case 'Mari':	
	case 'János':
		console.log('Üdv ' + nev);
		break;
	case 'Béla':
		console.log('Jól vagy ' + nev + '?');
		break;
	default:
		console.log('Nem ismerlek!');
}
