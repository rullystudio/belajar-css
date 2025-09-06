
   CREATE TABLE `user` (
       `id` INT(11) NOT NULL AUTO_INCREMENT,
       `nama` VARCHAR(40) NOT NULL,
       `email` VARCHAR(40) NOT NULL,
       PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
   
   INSERT INTO `user` (nama, email) VALUES
    ('Rully', 'rully@email.com'),
    ('Andi', 'andi@email.com'),
    ('Sinta', 'sinta@email.com');