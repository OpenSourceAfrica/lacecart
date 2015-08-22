DROP TABLE IF EXISTS `administrator`;

CREATE TABLE `administrator` (
  `admin_id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(50) NULL,
  `last_name` VARCHAR(50) NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` CHAR(60) NOT NULL,
  `picture` VARCHAR(150) NULL,
  `login_method` ENUM('google','email') NOT NULL DEFAULT 'email',
  `department` TINYINT NOT NULL,
  `role` TINYINT NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  `last_seen` DATETIME NULL,
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `administrator` (`admin_id`, `first_name`, `last_name`, `email`, `password`)
    VALUES
      ('1', 'John', 'Doe', 'joen.doe@lacecart.com', md5('password'));


DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `dept_id` INT(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  `creator` INT(11) NOT NULL,
  `status` ENUM('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`dept_id`),
  FOREIGN KEY (`creator`) REFERENCES `administrator` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `departments` (`dept_id`, `dept_name`, `creator`)
VALUES
  (1,'Administrator', '1');

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `roles_id` INT(11) NOT NULL PRIMARY KEY,
  `description` VARCHAR(100) NULL,
  `dept_id` int(11) NOT NULL,
  `resources` TEXT,
  `roles` TEXT,
  `status` ENUM('enable','disable') NOT NULL DEFAULT 'enable',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`)
) ENGINE=InnoDB CHARSET=utf8;