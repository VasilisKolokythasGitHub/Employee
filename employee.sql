-- Creating the database

CREATE DATABASE IF NOT EXISTS `test`;

-- Creating table employee

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `employee_name` varchar(255) NOT NULL COMMENT 'employee name',
  `employee_lastname` varchar(255) NOT NULL COMMENT 'employee lastname',
  `employee_email` varchar(255) NOT NULL COMMENT 'employee email',
  `employee_phone` int NOT NULL COMMENT 'employee phone',
  `employee_bridge` varchar(255) NOT NULL COMMENT 'employee bridge',
  `employee_comments` varchar(255) NOT NULL COMMENT 'employee comments',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=64 ;


--populating the table with values (optional)

INSERT INTO `employee` (`id`, `employee_name`, `employee_lastname`, `employee_email`,`employee_phone`,`employee_bridge`,`employee_comments`,) VALUES
(1, 'Vasilis', 'Kolokythas','vasilis.kolokythas@gmail.com','G&C','comment');


