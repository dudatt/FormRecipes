USE form_recipes;

CREATE TABLE USUARIOS (
  ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NOME_USER VARCHAR(50) NOT NULL,
  GENERO VARCHAR(30) NOT NULL,
  EMAIL VARCHAR(100) NOT NULL,
  SENHA VARCHAR(15) NOT NULL
);

ALTER TABLE usuarios
CHANGE NOME_USER USER_NAME VARCHAR(50),
CHANGE PRONOME EMAIL VARCHAR(100),
CHANGE EMAIL PRONOUN VARCHAR(30),
CHANGE SENHA PASSWORD_ VARCHAR(15);

select * from usuarios;

-- Desativa temporariamente as chaves estrangeiras
SET foreign_key_checks = 0;

-- Realiza a operação DELETE ou TRUNCATE
TRUNCATE TABLE usuarios;

-- Ativa novamente as chaves estrangeiras
SET foreign_key_checks = 1;