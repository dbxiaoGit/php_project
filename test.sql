create database phptest;
use phptest;
create table users (id int primary key auto_increment ,username varchar(50),
password varchar(50));
insert into users(username,password) values('dbxiao','123456'),('x','123456'),
('db','123456'),('admin','123456');
create table userinfo(id int  primary key auto_increment ,title varchar(50),
thref varchar(50),content varchar(1024),serverlist varchar(50)
,imghref varchar(50));
insert into userinfo(title ,content) values('1111','111'),('222','222')
,('333','333');