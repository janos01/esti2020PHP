
create database dblogin;

create table users (
    id int not null primary key auto_increment,
    name varchar(30),
    fullname varchar(50),
    pass varchar(150),
    enabled boolean
);

insert into users 
(name, pass, enabled)
values
('Páros Mária', 'titok', 1),
('Major Ágota', 'titok', 1);


grant all privileges 
on dblogin.*
to 'dblogin'@'localhost'
identified by 'titok';

