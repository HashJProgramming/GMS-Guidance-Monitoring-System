
CREATE DATABASE db_hashers;

USE db_hashers;

CREATE TABLE users (
	id int PRIMARY KEY auto_increment,
	username varchar(255),
	password varchar(255)
);

INSERT INTO users (Username, Password) VALUES ("admin", "$2y$10$WgL2d2fzi6IiGiTfXvdBluTLlMroU8zBtIcRut7SzOB6j9i/LbA4K");

CREATE TABLE students (
	id int PRIMARY KEY auto_increment,
	fullname varchar(255),
	birthday DATETIME,
	age varchar(255),
	sex varchar(255),
	strand varchar(255),
	guardian_name varchar(255),
	phone varchar(255)
);

CREATE TABLE violence (
	id int PRIMARY KEY auto_increment,
	student_id varchar(255),
	TypeOffense varchar(255),
	Offense varchar(255),
	LevelOffense varchar(255)
);