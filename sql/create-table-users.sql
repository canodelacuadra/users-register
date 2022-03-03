DROP table if exists users;
create Table users(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(99) NOT NULL,
    user_email VARCHAR(99) NOT NULL UNIQUE,
    user_password VARCHAR(99) NOT NULL,
    user_state integer(1) DEFAULT 1,
    user_time_created DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_time_updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);