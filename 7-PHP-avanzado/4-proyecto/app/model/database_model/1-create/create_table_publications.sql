-- -----------------------------------------------------
-- Table `mydb`.`publications`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `blog`.`publications` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NULL,
  `summary` VARCHAR(200) NULL,
  `date` TIMESTAMP NULL,
  `post_content` TEXT NULL,
  `thumb` VARCHAR(50) NULL,
  PRIMARY KEY (`id`)
  ) ENGINE = InnoDB;