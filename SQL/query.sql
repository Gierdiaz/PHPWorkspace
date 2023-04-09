CREATE DATABASE user;
DROP DATABASE user;

VARCHAR = text com caracteres
TEXT = text com bytes
INT = inteiros
BGINT = maior proporção que o int
DATE = data

CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    age INT
);

DROP TABLE users;

SELECT * FROM users 
SELECT * FROM users WHERE id = 1;

ALTER TABLE users ADD nacionality VARCHAR(255);
ALTER TABLE users DROP date INT;

ALTER TABLE users MODIFY COLUMN subscription TEXT;

INSERT INTO (id, name, age) VALUES (1, "Állison Luis", 25);


Constraints = campos que não podem ser nulos

id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
name VARHCAR(100) NOT NULL;
email VARCHAR(100) NOT NULL UNIQUE;


AND, OR e NOT com WHERE

Podemos ordernar de forma crescente(ASC) = em ordem
ou descendente(DESC) = decrecente

ORDER BY email ASC

SELECT * FROM users ORDER BY id DESC;

UPDATE sem WHERE vai atualizar todos os dados da tabela

DELETE sem WHERE vai deletar todos os dados da tabela

UPDATE users SET email = 'schzymmid@gmail.com' WHERE id = 1;

DELETE FROM users WHERE id = 3;


Criação do usuário via query

para ver: SELECT * FROM mysql.user;

CREATE USER 'gierdiaz'@'localhost' IDENTIFIED BY '33738326';
GRANT ALL PRIVILEGES ON *.* TO 'gierdiaz'@'localhost';
FLUSH PRIVILEGES;