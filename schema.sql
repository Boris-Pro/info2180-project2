DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;
USE dolphin_crm;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;

CREATE TABLE `Users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(35) NOT NULL DEFAULT '',
  `lastname` VARCHAR(35) NOT NULL DEFAULT '',
  `password` VARCHAR(255) NOT NULL DEFAULT '',
  `email` VARCHAR(35) NOT NULL DEFAULT '',
  `role` VARCHAR(35) NOT NULL DEFAULT '',
  `created_at` DATETIME,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `Users`
--




--
-- Table structure for table `Contacts`
--

DROP TABLE IF EXISTS `Contacts`;

CREATE TABLE `Contacts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(35) NOT NULL DEFAULT '',
  `firstname` VARCHAR(35) NOT NULL DEFAULT '',
  `lastname` VARCHAR(35) NOT NULL DEFAULT '',
  `email` VARCHAR(35) NOT NULL DEFAULT '',
  `telephone` VARCHAR(35) NOT NULL DEFAULT '',
  `company` VARCHAR(35) NOT NULL DEFAULT '',
  `type` VARCHAR(35) NOT NULL DEFAULT '',
  `assigned_to` INT(11) NOT NULL,
  `created_by` INT(11) NOT NULL,
  `created_at` DATETIME,
  `updated_at` DATETIME,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Contacts`
--

INSERT INTO `Contacts` (`title`, `firstname`, `lastname`, `email`, `telephone`, `company`, `type`, `assigned_to`,`created_by`,  `created_at`, `updated_at`)
VALUES ('Mr', 'Boris', 'Morris', 'borismorris@gmail.com', '876-123-4567', 'Amazon', 'Sales Lead', 2, 2, NOW(), NOW()),
('Ms', 'Jada-Ann', 'Vite', 'jadaann@gmail.com', '876-123-4567', 'Apple', 'Sales Lead', 3, 3, NOW(), NOW()),
('Mr', 'James', 'Bond', 'jamesbond@gmail.com', '876-123-4567', 'MI6', 'Support', 2, 2, NOW(), NOW()),
('Dr', 'Peter', 'Parker', 'peterparker@gmail.com', '876-123-4567', 'Oscorp', 'Support', 3, 3,  NOW(), NOW());



--
-- Table structure for table `Notes`
--

DROP TABLE IF EXISTS `Notes`;

CREATE TABLE `Notes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `contact_id` INT(11) NOT NULL,
  `comment` TEXT(200) NOT NULL DEFAULT '',
  `created_by` INT(11) NOT NULL,
  `created_at` DATETIME,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
