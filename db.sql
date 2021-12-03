CREATE TABLE Persons (
    id int NOT NULL AUTO_INCREMENT,
    name TEXT,

    PRIMARY KEY (id)
);

INSERT INTO `Persons`(`id`, `name`) VALUES (null ,"test")

UPDATE `Persons` SET `name`= 'Tên mới !!!' WHERE id = 1