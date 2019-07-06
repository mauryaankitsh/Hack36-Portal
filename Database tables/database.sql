create table coordinates (cid integer(10) primary key AUTO_INCREMENT,cname varchar(60),ccontact varchar(15),cemail varchar(60),team varchar(60),password varchar(60),status integer(10),year integer(5));

create table admin (aemail varchar(60) primary key,apassword varchar(60),year integer(5));
 
create table member (mid integer(10) primary key AUTO_INCREMENT,mname varchar(60),memail varchar(60),mgithub varchar(60),tid integer(10),year integer(5));

create table project (pid integer(10) primary key AUTO_INCREMENT,pname varchar(60),year integer(5));

create table sponsors (sid integer(10) primary key AUTO_INCREMENT,sname varchar(60),amount integer(10),contact integer(15),email varchar(60),year integer(5));

create table team (tid integer(10) primary key AUTO_INCREMENT,tname varchar(60),pid integer(10),year integer(5),college varchar(100),pgithub varchar(60));

create table teammember (tid integer(10),mid integer(10));

create table expenditure(item varchar(60),amount integer(10),year integer(5));

create table judge(name varchar(60),contact varchar(15),email varchar(60),profile varchar(60),year integer(10));

create table mentor(name varchar(60),contact varchar(15),email varchar(60),year integer(5));

create table winners(tname varchar(60),tposition varchar(60),amount integer(10),year integer(5));
