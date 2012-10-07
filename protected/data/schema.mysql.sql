
-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'tbl_items'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_items`;
		
CREATE TABLE `tbl_items` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `teaser_image` VARCHAR(255) NOT NULL,
  `index_teaser_image` VARCHAR(255) NOT NULL,
  `teaser_text` MEDIUMTEXT NOT NULL,
  `trailer` VARCHAR(255) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `order` TINYINT NOT NULL,
  `created` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_schedule'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_schedule`;
		
CREATE TABLE `tbl_schedule` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `item_id` INT(10) NOT NULL,
  `hall_id` INT NOT NULL,
  `start_date_time` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_genres'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_genres`;
		
CREATE TABLE `tbl_genres` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_halls'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_halls`;
		
CREATE TABLE `tbl_halls` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_genres_items'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_genres_items`;
		
CREATE TABLE `tbl_genres_items` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `item_id` INT(10) NOT NULL,
  `genre_id` INT(10) NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_schedule_uploader'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_schedule_uploader`;
		
CREATE TABLE `tbl_schedule_uploader` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `filename` VARCHAR(255) NOT NULL,
  `type` TINYINT NOT NULL,
  `created` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Table 'tbl_schedule_premieres'
-- 
-- ---

DROP TABLE IF EXISTS `tbl_schedule_premieres`;
		
CREATE TABLE `tbl_schedule_premieres` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `item_id` INT(10) NOT NULL,
  `start_date_time` DATE NOT NULL,
  PRIMARY KEY (`id`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `tbl_items` ADD FOREIGN KEY (id) REFERENCES `tbl_schedule_premieres` (`id`);
ALTER TABLE `tbl_schedule` ADD FOREIGN KEY (item_id) REFERENCES `tbl_items` (`id`);
ALTER TABLE `tbl_schedule` ADD FOREIGN KEY (hall_id) REFERENCES `tbl_halls` (`id`);
ALTER TABLE `tbl_genres_items` ADD FOREIGN KEY (item_id) REFERENCES `tbl_items` (`id`);
ALTER TABLE `tbl_genres_items` ADD FOREIGN KEY (genre_id) REFERENCES `tbl_genres` (`id`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `tbl_items` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_schedule` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_genres` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_halls` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_genres_items` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_schedule_uploader` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `tbl_schedule_premieres` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `tbl_items` (`id`,`title`,`teaser_image`,`index_teaser_image`,`teaser_text`,`trailer`,`description`,`order`,`created`) VALUES
-- ('','','','','','','','','');
-- INSERT INTO `tbl_schedule` (`id`,`item_id`,`hall_id`,`start_date_time`) VALUES
-- ('','','','');
-- INSERT INTO `tbl_genres` (`id`,`title`) VALUES
-- ('','');
-- INSERT INTO `tbl_halls` (`id`,`title`) VALUES
-- ('','');
-- INSERT INTO `tbl_genres_items` (`id`,`item_id`,`genre_id`) VALUES
-- ('','','');
-- INSERT INTO `tbl_schedule_uploader` (`id`,`filename`,`type`,`created`) VALUES
-- ('','','','');
-- INSERT INTO `tbl_schedule_premieres` (`id`,`item_id`,`start_date_time`) VALUES
-- ('','','');
