
create database dblogin;

create table users (
    id int not null primary key auto_increment,
    name varchar(30),
    fullname varchar(50),
    pass varchar(150),
    enabled boolean
);

insert into users 
(name, fullname, pass, enabled)
values
('mari', 'Páros Mária', 'titok', 1),
('agota', 'Major Ágota', 'titok', 1);


grant all privileges 
on dblogin.*
to 'dblogin'@'localhost'
identified by 'titok';



select * from users 
where name = 'janos' 
and pass = 'titok'

select * from users 
where name = 'mari' 
and pass = 'titok'

