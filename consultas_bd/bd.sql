CREATE DATABASE users;

CREATE TABLE `usuarios` ( 
  `idusuario` INT(3) NOT NULL AUTO_INCREMENT, 
  `usuario` VARCHAR(20) NOT NULL, 
  `password` VARCHAR(10) NOT NULL, 
  PRIMARY KEY  (`idusuario`) 
);
INSERT INTO usuarios (idusuario, usuario, password) VALUES (1, "admin", "admin");
INSERT INTO usuarios (idusuario, usuario, password) VALUES (2, "user", "user");


CREATE TABLE `clientes` ( 
  `nif` INT(11) NOT NULL, 
  `nombre_cliente` VARCHAR(20) NOT NULL, 
  `apellido` VARCHAR(10) NOT NULL, 
  PRIMARY KEY  (`nif`) 
);
INSERT INTO clientes (nif, nombre_cliente, apellido) VALUES (0985858, "Juan", "Perez");
INSERT INTO clientes (nif, nombre_cliente, apellido) VALUES (0088883, "Pepe", "Ortega");
INSERT INTO clientes (nif, nombre_cliente, apellido) VALUES (0555555, "Raul", "Jiménez");
INSERT INTO clientes (nif, nombre_cliente, apellido) VALUES (0123456, "Jose", "Carrasco");


CREATE TABLE `bicis` ( 
  `id_bici` INT(3) NOT NULL AUTO_INCREMENT, 
  `marca` VARCHAR(20) NOT NULL, 
  `color` VARCHAR(10) NOT NULL, 
  fk_cliente INT(11),
  PRIMARY KEY  (`id_bici`), 
  foreign key (fk_cliente) references clientes(nif)
);
INSERT INTO bicis (id_bici, marca, color) VALUES (1, "rockrider", "naranja");
INSERT INTO bicis (id_bici, marca, color) VALUES (2, "lapierre", "negro");
INSERT INTO bicis (id_bici, marca, color) VALUES (3, "trek", "azul");
INSERT INTO bicis (id_bici, marca, color) VALUES (4, "bh", "rojo");
INSERT INTO bicis (id_bici, marca, color) VALUES (5, "ktm", "blanco");
INSERT INTO bicis (id_bici, marca, color) VALUES (6, "specialized", "amarillo");
INSERT INTO bicis (id_bici, marca, color) VALUES (7, "shimano", "verde");
INSERT INTO bicis (id_bici, marca, color) VALUES (8, "merida", "rosa");
INSERT INTO bicis (id_bici, marca, color) VALUES (9, "orbea", "morado");
INSERT INTO bicis (id_bici, marca, color) VALUES (10, "giant", "gris");



CREATE TABLE `piezas` ( 
  `nombre_pieza` varchar(15) NOT NULL, 
  `precio` INT(5) NOT NULL, 
  `cantidad` INT(3) NOT NULL, 
  fk_bici INT(2),
  PRIMARY KEY  (`nombre_pieza`),
  foreign key (fk_bici) references bicis(id_bici)
);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("cuadro", 250, 30);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("manillar", 40, 30);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("sillin", 30, 20);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("cambios", 50, 10);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("cadena", 60, 15);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("suspensión", 100, 5);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("frenos", 55, 25);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("rueda", 35, 12);
INSERT INTO piezas (nombre_pieza, precio, cantidad) VALUES ("cubierta", 20, 60);


