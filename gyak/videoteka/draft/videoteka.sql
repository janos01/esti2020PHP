create database videoteka
character set utf8
collate utf8_hungarian_ci;


create table filmek (
	az int not null primary key auto_increment,
	cim varchar(50),
	ev int,
	rendezo varchar(50),
	leiras varchar(255),
	allapot int
);

insert into filmek 
(cim, ev, leiras, allapot)
values
('A temény rabjai', 1994, '1946-ban egy Andy Dufresne nevű bankárt - noha makacsul hangoztatja ártatlanságát - kettős gyilkosság elkövetése miatt életfogytiglani börtönbüntetésre ítélnek.', 0),
('Forrest Gump', 1994,  'A georgiai Savannah városka árnyas buszmegállójában különös mesemondó üldögél. ', 0),
('Halálsoron', 1999,  'Paul Edgecomb börtönőrként szolgál a Cold Mountain fegyház siralomházában a múlt század harmincas éveiben.', 0);

