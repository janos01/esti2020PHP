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
