CREATE TABLE IF NOT EXISTS `blog`.`publications` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NULL DEFAULT NULL,
  `summary` VARCHAR(200) NULL DEFAULT NULL,
  `date` TIMESTAMP NULL DEFAULT NULL,
  `post_content` TEXT NULL DEFAULT NULL,
  `thumb` VARCHAR(50) NULL DEFAULT NULL,
  `user_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_publications_id_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_user_publications_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `blog`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3