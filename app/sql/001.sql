CREATE TABLE users(
    id INT PRIMARY KEY SERIAL NOT NULL,
    username VARCHAR(25),
    password VARCHAR(30),
    nombre VARCHAR(25),
    apellido VARCHAR(15),
    created DATETIME NOT NULL 
);