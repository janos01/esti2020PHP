let mehetGomb = document.getElementById('mehetGomb');
let doboz = document.getElementById('doboz');
let kulso = document.getElementById('kulso');

doboz.addEventListener('click', function(){
    alert('naracs kattintás');
});

kulso.addEventListener('click', function(){
    kulso.style.backgroundColor = 'orange';
    kulso.style.color = 'black';
    doboz.style.backgroundColor = 'white';
    mehetGomb.style.backgroundColor = 'navy';
    mehetGomb.style.color = 'white';
});
