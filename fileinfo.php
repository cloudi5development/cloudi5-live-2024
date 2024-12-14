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