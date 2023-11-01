USE equipos;

CREATE TABLE IF NOT EXISTS `equipos`.`laptops` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(45) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `memoria` VARCHAR(45) NOT NULL,
  `disco-duro` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;