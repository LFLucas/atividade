
CREATE SCHEMA mydb DEFAULT CHARACTER SET utf8 ;
USE mydb ;

CREATE TABLE IF NOT EXISTS mydb.montadora (
  codigo INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (codigo))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS mydb.automoveis (
  codigo INT NOT NULL AUTO_INCREMENT,
  modelo VARCHAR(45) NOT NULL,
  placa VARCHAR(45) NOT NULL,
  chassi VARCHAR(45) NOT NULL,
  montadora INT NOT NULL,
  PRIMARY KEY (codigo, montadora),
  CONSTRAINT fk_automoveis_montadora
    FOREIGN KEY (montadora)
    REFERENCES mydb.montadora (codigo))
ENGINE = InnoDB;


INSERT INTO mydb.montadora(nome)
VALUES("Volkswagen"),
	  ("Ford"),
	  ("Fiat"),
	  ("Chevrolet");
      

