



drop database if EXISTS learn;
create database learn;
use learn;
show tables;
drop table users;

CREATE TABLE users(
   id int AUTO_INCREMENT primary key,
   name text not null, 
   age int not null 
);



