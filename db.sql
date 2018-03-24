create database db;

use db;
drop table users;

create table users(
	name varchar(40) ,
    email varchar(40),
    points numeric,
    phone	varchar(40),
    password varchar(15),
    type char(3),
    primary key(email)
);
INSERT INTO users(name, email, points, phone, password, type) VALUES ('bikal', 'sdfsd@thoo.com',0,'3343725014','anthem','emp');
select * from users;
