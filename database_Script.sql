create schema hotel;
use hotel;

CREATE TABLE IF NOT EXISTS user_table (
    userID INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone VARCHAR(20),
    email VARCHAR(50),
    adress VARCHAR(200),
    zip_code VARCHAR(15),
    user_password VARCHAR(100),
    PRIMARY KEY (userID)
);

CREATE TABLE IF NOT EXISTS room (
    room_number INT,
    capacity INT,
    price DECIMAL(8,2),
    description VARCHAR(300),
    room_type VARCHAR(100),
    PRIMARY KEY (room_number)
);

CREATE TABLE IF NOT EXISTS reservation (
    reservationID INT AUTO_INCREMENT,
    room_number INT,
    userID INT,
    start_date DATE,
    end_date DATE,
    PRIMARY KEY (reservationID),
    FOREIGN KEY (room_number)
        REFERENCES room (room_number),
    FOREIGN KEY (userID)
        REFERENCES user_table (userID)
);

CREATE TABLE IF NOT EXISTS invoice (
    invoiceID INT NOT NULL AUTO_INCREMENT,
    userID INT,
    reservationID INT,
    total_price DOUBLE,
    PRIMARY KEY (invoiceID),
    FOREIGN KEY (userID)
        REFERENCES user_table (userID),
    FOREIGN KEY (reservationID)
        REFERENCES reservation (reservationID)
);

insert into room
values (101,1,69.00,"Standard room with 1 single bed, tv, and bathroom.","Standard");
insert into room
values (102,2,89.00,"Standard room with 1 king size bed, tv, and bathroom.","Standard");
insert into room
values (103,2,89.00,"Standard room with 1 king size bed, tv, and bathroom.","Standard");
insert into room
values (104,3,109.00,"Standard room with 1 king size bed and 1 single bed, tv, and bathroom.","Standard");
insert into room
values (105,4,119.00,"Standard room with 2 king size beds, tv and bathroom.","Standard");

insert into room
values (301,1,69.00,"Standard room with 1 single bed, tv, and bathroom.","Standard");
insert into room
values (302,2,89.00,"Standard room with 1 king size bed, tv, and bathroom.","Standard");
insert into room
values (303,2,89.00,"Standard room with 1 king size bed, tv, and bathroom.","Standard");
insert into room
values (304,3,109.00,"Standard room with 1 king size bed and 1 single bed, tv, and bathroom.","Standard");
insert into room
values (305,4,119.00,"Standard room with 2 king size beds, tv and bathroom.","Standard");

insert into room
values (601,1,69.00,"Standard room with 1 single bed, tv, and bathroom.","Standard");
insert into room
values (602,2,89.00,"Standard room with 1 king size bed, tv, and bathroom.","Standard");
insert into room
values (603,2,89.00,"Standard room with 1 king size bed, tv, and bathroom.","Standard");
insert into room
values (604,3,109.00,"Standard room with 1 king size bed and 1 single bed, tv, and bathroom.","Standard");
insert into room
values (605,4,119.00,"Standard room with 2 king size beds, tv and bathroom.","Standard");

insert into room
values (201,1,89.00,"Prime room with 1 single bed, tv, and bathtub.","Prime");
insert into room
values (202,2,109.00,"Prime room with 1 king size bed, tv, and bathtub.","Prime");
insert into room
values (203,2,109.00,"Prime room with 1 king size bed, tv, and bathtub.","Prime");
insert into room
values (204,3,129.00,"Prime room with 1 king size bed and 1 single bed, tv, and bathtub.","Prime");
insert into room
values (205,4,149.00,"Prime room with 2 king size beds, tv and bathtub.","Prime");

insert into room
values (401,1,89.00,"Prime room with 1 single bed, tv, and bathtub.","Prime");
insert into room
values (402,2,109.00,"Prime room with 1 king size bed, tv, and bathtub.","Prime");
insert into room
values (403,2,109.00,"Prime room with 1 king size bed, tv, and bathtub.","Prime");
insert into room
values (404,3,129.00,"Prime room with 1 king size bed and 1 single bed, tv, and bathtub.","Prime");
insert into room
values (405,4,149.00,"Prime room with 2 king size beds, tv and bathtub.","Prime");

insert into room
values (701,1,89.00,"Prime room with 1 single bed, tv, and bathtub.","Prime");
insert into room
values (702,2,109.00,"Prime room with 1 king size bed, tv, and bathtub.","Prime");
insert into room
values (703,2,109.00,"Prime room with 1 king size bed, tv, and bathtub.","Prime");
insert into room
values (704,3,129.00,"Prime room with 1 king size bed and 1 single bed, tv, and bathtub.","Prime");
insert into room
values (705,4,149.00,"Prime room with 2 king size beds, tv and bathtub.","Prime");




