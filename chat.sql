CREATE DATABASE CHAT;
CONNECT CHAT;

CREATE TABLE CHAT(
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NAME VARCHAR(255) NOT NULL,
    MESSAGE VARCHAR(255) NOT NULL,
    DATE TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO CHAT
VALUES (DEFAULT,'RAZIEL', 'HELLO!', DEFAULT);
INSERT INTO CHAT
VALUES (DEFAULT,'IGOR', 'HELLO, HOW ARE YOU!', DEFAULT);