/********** 16-12-2024************** */

ALTER TABLE `user_privilege` ADD `clients` VARCHAR(255) NULL DEFAULT NULL AFTER `teams`;

/********** 16-122024************** */

CREATE TABLE clients (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    image_alt_tag VARCHAR(255) NULL,
    priority INT NOT NULL,
    is_show_in_home TINYINT(1) DEFAULT 0,
    status TINYINT(1) DEFAULT 0
 
);

/********** 14-12-2024************** */

CREATE TABLE teams (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    image_alt_tag VARCHAR(255) DEFAULT NULL,
    department VARCHAR(255) DEFAULT NULL,
    designation VARCHAR(255) DEFAULT NULL,
    priority INT NOT NULL,
    status TINYINT DEFAULT 1
);

/********** 14-12-2024************** */

ALTER TABLE `user_privilege` ADD `teams` VARCHAR(255) NULL DEFAULT NULL AFTER `portfolio`;


/********** 28-11-2024************** */

CREATE TABLE `cloudi5_website`.`write_for_us` (
    `id` INT(11) NOT NULL AUTO_INCREMENT, 
    `first_name` VARCHAR(255) NULL, 
    `last_name` VARCHAR(255) NULL, 
    `email` VARCHAR(255) NULL,
    `phone_number` VARCHAR(15) NULL, 
    `post_title` VARCHAR(255) NULL, 
    `post_type` VARCHAR(255) NULL, 
    `post_summary` VARCHAR(255) NULL, 
    `ip` VARCHAR(25) NULL DEFAULT NULL,
    `status` INT(11) NOT NULL DEFAULT '0',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
) ENGINE = InnoDB;

 
 ALTER TABLE `user_privilege` ADD `write_for_us_enquiry` VARCHAR(150) NULL DEFAULT NULL AFTER `enquiries`;

 /********** 28-11-2023************** */

 ALTER TABLE `blog` ADD `image_alt_tag` VARCHAR(255) NULL DEFAULT NULL AFTER `image`;