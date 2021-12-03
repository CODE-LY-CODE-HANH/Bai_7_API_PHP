CREATE TABLE Persons (
    id int NOT NULL AUTO_INCREMENT,
    name TEXT,

    PRIMARY KEY (id)
);


INSERT INTO `Persons`(`id`, `name`) VALUES (null,'Tạo tên mới')

UPDATE `Persons` SET `name`= 'Cập nhật' WHERE id = 2

DELETE FROM `Persons` WHERE id = 2