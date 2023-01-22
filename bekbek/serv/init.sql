CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;

CREATE TABLE IF NOT EXISTS logine(
	id_login INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  	person_name VARCHAR(50) NOT NULL,
  	pasword VARCHAR(50) NOT NULL
);

INSERT INTO logine (person_name, pasword) VALUES ('admin', 'admin');
INSERT INTO logine (person_name, pasword) VALUES ('user1', 'admin');
INSERT INTO logine (person_name, pasword) VALUES ('user2', 'admin');

CREATE TABLE IF NOT EXISTS menu(
	id_menu INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  	name_food VARCHAR(200) NOT NULL,
  	price FLOAT NOT NULL
);

INSERT INTO menu (name_food, price) VALUES ('Pasta', '520.50');
INSERT INTO menu (name_food, price) VALUES ('Soup', '410.50');
INSERT INTO menu (name_food, price) VALUES ('Napoleon', '600.50');
INSERT INTO menu (name_food, price) VALUES ('Matcha', '230.50');