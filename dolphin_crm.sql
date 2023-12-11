DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;
USE dolphin_crm;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users(
    ID INT PRIMARY KEY AUTO_INCREMENT, 
    firstname VARCHAR(255), 
    lastname VARCHAR(255),
    email VARCHAR(60),  
    Password VARCHAR(55), 
    role VARCHAR(255), 
    created_at DATETIME);


DROP TABLE IF EXISTS Contacts;
CREATE TABLE Contacts(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255), 
    firstname VARCHAR(255), 
    lastname VARCHAR(255), 
    email VARCHAR(60), 
    Password VARCHAR(55), 
    telephone INT,
    company VARCHAR(255),
    type VARCHAR(255),
    assigned_to INT, 
    created_by INT,
    updated_at DATETIME,
    FOREIGN KEY(assigned_to) REFERENCE Users(ID),
    FOREIGN KEY(created_by) REFERENCE Users(ID),

) AUTO_INCREMENT=4000;

DROP TABLE IF EXISTS Notes;
CREATE TABLE Notes(
    id INT PRIMARY KEY AUTO_INCREMENT;
    contact_id INT,
    comment VARCHAR(255),
    created_by INT,
    created_at DATETIME,
    FOREIGN KEY(created_by) REFERENCE Users(ID),

);