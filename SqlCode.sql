CREATE TABLE `id8362320_optimus`.`admin_master` ( `id` INT(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `status` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


INSERT INTO `admin_master` (`id`, `email`, `password`, `status`) VALUES ('2', 'ruchiroptimus@gmail.com', 'ruchir2', '1');

CREATE TABLE `id8362320_optimus`.`enrform` ( `id` INT(255) NOT NULL , `fname` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `contact` INT(10) NOT NULL , `select2` VARCHAR(5) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

