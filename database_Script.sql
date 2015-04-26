#create schema hotel;
use hotel;

create table IF NOT EXISTS user_table(
userID int not null AUTO_INCREMENT,
first_name varchar(50),
last_name varchar(50),
phone varchar (20),
email varchar(50),
adress varchar(200),
zip_code varchar(15),
password varchar(100),
primary key(userID));

create table IF NOT EXISTS room(
room_number int,
is_available boolean,
capacity int,
price double,
description varchar(300),
room_type varchar(100),
primary key(room_number));

create table IF NOT EXISTS reservation(
reservationID int auto_increment,
room_number int,
userID int,
start_date date,
end_date date,
PRIMARY KEY (reservationID),
FOREIGN KEY (room_number) REFERENCES room(room_number),
FOREIGN KEY (userID) REFERENCES user_table(userID));

create table IF NOT EXISTS invoice(
invoiceID int not null auto_increment,
userID int,
reservationID int,
total_price double,
PRIMARY KEY (invoiceID),
FOREIGN KEY (userID) REFERENCES user_table(userID),
FOREIGN KEY (reservationID) REFERENCES reservation(reservationID));




