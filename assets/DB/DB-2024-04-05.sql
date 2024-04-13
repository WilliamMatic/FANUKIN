SHOW TABLES;
SELECT * FROM tb_astuce;

CREATE TABLE tb_cordination_provincial (
	id INT PRIMARY KEY AUTO_INCREMENT,
	libelle TEXT;
	ville INT
);

CREATE TABLE tb_cordination_uraine(
	id INT PRIMARY KEY AUTO_INCREMENT,
	libelle TEXT;
	cordination_provincial INT
);