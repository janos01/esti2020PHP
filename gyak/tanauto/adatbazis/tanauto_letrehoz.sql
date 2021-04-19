create database tanauto
character set utf8
collate utf8_hungarian_ci;

use tanauto;

create table jarmuvek (
	az int not null primary key auto_increment,
    rendszam varchar(10),
    vizsga datum,
	marka varchar(20),
	szin varchar(20)
);



insert into jarmuvek 
(rendszam, vizsga, marka, szin)
values
('ABC-832', '2021-08-19', 'Opel', 'fehér'),
('DHA-821', '2022-05-10', 'Ford', 'fehér'),
('ABC-526', '2022-01-11', 'Opel', 'piros');



grant all privileges 
on tanauto.*
to 'tanauto'@'localhost'
identified by '12345';




