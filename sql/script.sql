
CREATE TABLE IF NOT EXISTS `internship`(
    `userid` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP CURRENT_TIME,
    `verified` TINYINT 0
    `deleted` TINYINT 1

)
