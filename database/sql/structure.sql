CREATE DATABASE IF NOT EXISTS sqli;
USE sqli;

CREATE TABLE users (
    userid int NOT NULL,
    username varchar(20),
    password varchar(20),
    PRIMARY KEY(userid)
);