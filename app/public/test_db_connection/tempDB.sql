CREATE DATABASE IF NOT EXISTS tempDB;

USE tempDB;

CREATE TABLE IF NOT EXISTS users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    remark VARCHAR(255),
    PRIMARY KEY (id)
);

-- INSERT MULTIPLE DUMMY DATA
INSERT IGNORE INTO users (id, username, password, remark) VALUES
    (1, 'admin', 'admin', ''),
    (2, 'user1', 'user1', 'user1 remark'),
    (3, 'user2', 'user2', '');
