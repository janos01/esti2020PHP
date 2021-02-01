let kep1 = document.getElementById('kep1');
let kep2 = document.getElementById('kep2');
let kep3 = document.getElementById('kep3');
let kep4 = document.getElementById('kep4');
let kep5 = document.getElementById('kep5');
let kep6 = document.getElementById('kep6');

kep1.style.backgroundImage = 'url(images/kep01.png)';
kep2.style.backgroundImage = 'url(images/kep02.png)';
kep3.style.backgroundImage = 'url(images/kep03.png)';
kep4.style.backgroundImage = 'url(images/kep04.png)';
kep5.style.backgroundImage = 'url(images/kep05.png)';
kep6.style.backgroundImage = 'url(images/kep05.png)';

kep1.addEventListener('click', function() {
    kep6.style.backgroundImage = 'url(images/kep01.png)';    
});
kep2.addEventListener('click', function() {
    kep6.style.backgroundImage = 'url(images/kep02.png)';    
});
kep3.addEventListener('click', function() {
    kep6.style.backgroundImage = 'url(images/kep03.png)';    
});
kep4.addEventListener('click', function() {
    kep6.style.backgroundImage = 'url(images/kep04.png)';    
});
kep5.addEventListener('click', function() {
    kep6.style.backgroundImage = 'url(images/kep05.png)';    
});


