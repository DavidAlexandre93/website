
CREATE TABLE usuario (
   login_id INT NOT NULL AUTO_INCREMENT,
   login VARCHAR(50) NOT NULL,
   senha VARCHAR(30) NOT NULL,
   data_cadastro DATETIME NOT NULL,
  PRIMARY KEY (login_id));



insert into usuario (login,senha,data_cadastro) values ('admdavid','abc123',now());

