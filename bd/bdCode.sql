
DROP DATABASE IF EXISTS `cdl`;
CREATE DATABASE IF NOT EXISTS `cdl`;
USE `cdl`;

#
# Table structure for table 'Usuario'
#

DROP TABLE IF EXISTS `Usuario`;

CREATE TABLE `Usuario` (
  `id` INT auto_increment, 
  `alias` VARCHAR(30), 
  `fecha_nac` DATE null, 
  `email` VARCHAR(50),
  `contraseña` varchar(30),
  `nombre` varchar(30),
  `direccion` varchar(50) null,
  `telefono` int(9) null,
  PRIMARY KEY (`id`)
);

#
# Dumping data for table 'Usuario'
#

INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('NoobSlayer99', '1988-03-15', 'noobslayer69@gmail.com', 'paceas', 'Paco', 'Calle Gran Vía 63, 28013 Madrid', 123456789);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('GamerSensei', '1995-11-20', 'gamersensei@gmail.com', 'asdpef', 'Marcos', 'Calle Leonardo Prieto Castro 8, 28040 Madrid', 234567891);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('ComboBreaker', '1999-07-04', 'combobraker@gmail.com', 'asdovr', 'Eufrasio', 'Calle Noviciado 5, 28015 Madrid', 345678912);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('ShadowBuyer', '1985-09-10', 'shadowbuyer@gmail.com', 'asdvrv', 'Vicente', 'Avenida de la Constitución 12, 41004 Sevilla', 456789123);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('RetroPixel', '2000-01-28', 'retropixel@gmail.com', 'asvrvfsa', 'Francisco', 'Calle de la Paz 45, 08002 Barcelona', 567891234);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('LagMaster', '1997-06-12', 'lagmaster@gmail.com', 'sd3f', 'Paca', 'Calle San Fernando 22, 29001 Málaga', 678912345);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('ManaHunter', '1992-12-01', 'manahunter@gmail.com', '8415vrass', 'Laura', 'Calle de la Libertad 10, 46001 Valencia', 789123456);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('AFKCollector', '1989-04-22', 'afkcollector@gmail.com', '821v5gd6c', 'Fernando', 'Calle Mayor 30, 37001 Salamanca', 891234567);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('LootSeeker', '1996-08-08', 'lootseeker@gmail.com', '854269asddd', 'Maria', 'Calle del Mar 5, 08003 Barcelona', 912345678);
INSERT INTO `Usuario` (`alias`, `fecha_nac`, `email`, `contraseña`, `nombre`, `direccion`, `telefono`) VALUES ('XPAddict', '1994-02-18', 'xpaddict@gmail.com', '165226dd7v1d5', 'Tomas', 'Calle de la Reina 18, 28004 Madrid', 134567982);

#
# Table structure for table 'Pedido'
#

DROP TABLE IF EXISTS `Pedido`;

CREATE TABLE `Pedido` (
  `id` INT auto_increment, 
  `fecha` DATE, 
  `total` FLOAT,
  `id_usuario` INT, 
  PRIMARY KEY (`id`),
  CONSTRAINT fk_pedido_usuario FOREIGN KEY (id_usuario) REFERENCES Usuario(id)
);

#
# Dumping data for table 'Pedido'
#

INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-01', 50, 1);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-03', 20, 9);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-05', 180, 3);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-08', 80, 4);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-10', 30, 5);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-11', 50, 6);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-12', 100, 7);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-14', 300, 5);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-15', 110, 9);
INSERT INTO Pedido (fecha, total, id_usuario) VALUES ('2025-04-16', 405, 1);

#
# Table structure for table 'Categoria'
#

DROP TABLE IF EXISTS `Categoria`;

CREATE TABLE `Categoria` (
  `id` INT, 
  `nombre` VARCHAR(30),
  PRIMARY KEY (`id`)
);

#
# Dumping data for table 'Categoria'
#

INSERT INTO Categoria (id, nombre) VALUES (1, 'videojuegos');
INSERT INTO Categoria (id, nombre) VALUES (2, 'juegos de mesa');
INSERT INTO Categoria (id, nombre) VALUES (3, 'figuras');
INSERT INTO Categoria (id, nombre) VALUES (4, 'libros');

#
# Table structure for table 'Producto'
#

DROP TABLE IF EXISTS `Producto`;

CREATE TABLE `Producto` (
  `id` INT auto_increment, 
  `nombre` VARCHAR(100),
  `stock` INT,
  `precio` FLOAT,
  `descripcion` VARCHAR(500) null,
  `id_categoria` INT,
  PRIMARY KEY (`id`),
  CONSTRAINT fk_producto_categoria FOREIGN KEY (id_categoria) REFERENCES Categoria(id)
);

#
# Dumping data for table 'Producto'
#

INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Baldurs Gate 3', 20, 50, 'Baldurs Gate 3 es un juego de rol (RPG) de fantasía desarrollado por Larian Studios. Es la tercera entrega principal de la aclamada serie Baldurs Gate y se basa en el sistema de reglas de la quinta edición de Dungeons & Dragons (D&D). El juego te sumerge en un mundo rico y detallado, los Reinos Olvidados, donde tus decisiones moldean la historia y determinan tu legado.
La aventura comienza con tu personaje siendo infectado por un parásito mental de los azotamentes. En tu búsqueda por librarte de esta amenaza, te cruzarás con otros supervivientes con destinos entrelazados. Juntos, formaréis un grupo y os embarcaréis en un viaje épico lleno de compañerismo, traición, sacrificio y la tentación del poder absoluto.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('The elder scrolls V: Skyrim', 15, 5, 'The Elder Scrolls V: Skyrim es un juego de rol de mundo abierto desarrollado por Bethesda Game Studios. Lanzado originalmente en 2011, se ha convertido en un clásico moderno aclamado por su inmenso mundo, su libertad de exploración y su rica narrativa. Es la quinta entrega principal de la saga The Elder Scrolls. El juego te transporta a la gélida y montañosa provincia de Skyrim, situada en el norte del continente de Tamriel. La tierra está inmersa en una guerra civil entre los leales al Imperio y los rebeldes Stormcloaks, quienes buscan la independencia de Skyrim. En medio de este conflicto, una amenaza aún mayor emerge: el regreso de los dragones, criaturas legendarias que se creían extintas.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('The elder scrolls IV: Oblivion Remastered', 5, 55, 'Ambientado en la provincia de Cyrodiil, el juego te pone en el papel del Héroe de Kvatch. Tras el asesinato del emperador Uriel Septim VII, te ves envuelto en un conflicto con el reino Daédrico de Oblivion. Portales a esta aterradora dimensión se han abierto por todo Cyrodiil, liberando hordas de Daedra sobre la tierra. Depende de ti encontrar al heredero perdido del trono y desentrañar la siniestra trama que amenaza con destruir todo Tamriel.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Total war Warhammer 3', 50, 30, 'Total War: Warhammer III es la culminación épica de la trilogía de estrategia en tiempo real y por turnos de Creative Assembly, ambientada en el vibrante y brutal mundo de Warhammer Fantasy Battles de Games Workshop. Lanzado en 2022, este título lleva la escala y la fantasía de la serie a nuevas alturas, sumergiéndote en un conflicto cataclísmico que decidirá el destino del mundo.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Mass Effect Legendary Edition', 49, 10, 'La Mass Effect Legendary Edition es una remasterización completa de la aclamada trilogía original de Mass Effect, desarrollada por BioWare y publicada por Electronic Arts. Lanzada en 2021, esta edición reúne los tres juegos icónicos: Mass Effect, Mass Effect 2 y Mass Effect 3, junto con más de 40 contenidos descargables (DLC) de un jugador, incluyendo expansiones de la historia, armas y armaduras promocionales.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('The witcher 3: Wild Hunt', 100, 30, 'The Witcher 3: Wild Hunt es un juego de rol de acción de mundo abierto desarrollado y publicado por CD Projekt Red. Lanzado en 2015, es la tercera y última entrega de la saga de videojuegos basada en la serie de novelas de fantasía del escritor polaco Andrzej Sapkowski. Aclamado universalmente por su narrativa inmersiva, su vasto y detallado mundo, sus personajes complejos y sus decisiones impactantes, se ha convertido en un referente del género RPG.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('XCOM 2', 20, 50, 'XCOM 2 es la secuela del galardonado juego de estrategia XCOM: Enemy Unknown. Han pasado veinte años desde que los líderes mundiales se rindieran incondicionalmente a las fuerzas alienígenas. Ahora, los alienígenas gobiernan la Tierra y han construido brillantes ciudades que prometen un futuro espléndido para la humanidad en la superficie, mientras ocultan una agenda siniestra bajo ella.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Cyberpunk 2077', 59, 60, 'Cyberpunk 2077 es un RPG de acción y aventura en mundo abierto ambientado en Night City, una megalópolis obsesionada con el poder, el glamour 1 y las modificaciones corporales. Te pones en la piel de V, un mercenario ciberpunk que busca un implante único que es la clave para la inmortalidad.', 1);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Satisfactory', 68, 40, 'Satisfactory es un videojuego de construcción de fábricas en primera persona y mundo abierto, desarrollado y publicado por Coffee Stain Studios. Lanzado en acceso anticipado en 2019 y con su versión 1.0 en septiembre de 2024, el juego te desafía a automatizar la producción en un planeta alienígena extenso y lleno de recursos.', 1);

INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Catan', 30, 40, 'Catan (Los Colonos de Catán): El juego original donde los jugadores asumen el papel de colonos que llegan a una nueva isla. El objetivo es obtener puntos de victoria construyendo asentamientos, ciudades y carreteras, y desarrollando su civilización mediante la obtención e intercambio de recursos (madera, ladrillo, trigo, oveja y piedra). Es un juego de estrategia con elementos de azar y negociación.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Campaña del norte de africa', 1, 400, 'Un juego de mesa sobre la Campaña del Norte de África te sumerge en los desafíos militares de este crucial frente de la Segunda Guerra Mundial, obligándote a planificar movimientos, gestionar recursos, coordinar unidades y explotar las debilidades del enemigo en el implacable entorno del desierto. La complejidad y el enfoque específico varían significativamente entre los diferentes juegos disponibles.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Cthulhu Death May Never Die', 5, 100, 'Cthulhu: Death May Die es un juego de mesa cooperativo de horror y misterio para 1 a 5 jugadores, diseñado por Rob Daviau y Marco Portugal, y publicado por CMON. Ambientado en el universo de H.P. Lovecraft, el juego te pone en la piel de investigadores que se enfrentan a horrores cósmicos y Primigenios ancestrales.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Las mansiones de la locura', 10, 110, 'Mansions of Madness es un juego de mesa cooperativo de horror y misterio de 1 a 5 jugadores, inspirado en los relatos de H.P. Lovecraft y el universo de Cthulhu. Publicado por Fantasy Flight Games, el juego sumerge a los jugadores en escenarios llenos de secretos oscuros,monstruos aterradores y puzzles desafiantes.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Cartas contra la humanidad', 100, 30, 'Cartas contra la Humanidad! Un juego de cartas de fiesta notoriamente ofensivo, políticamente incorrecto y absolutamente hilarante (para algunos). A menudo descrito como un "juego de fiesta para gente horrible", su premisa es simple pero su potencial para la risa incómoda es inmenso.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Si señor oscuro', 30, 25, 'Un juego de mesa de fiesta hilarante y caótico donde los jugadores se ponen en la piel de esbirros incompetentes que intentan dar excusas patéticas a su malvado amo por sus recientes fracasos.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Risk Game of Thrones', 20, 75, 'Risk: Game of Thrones es en realidad una familia de juegos de mesa que combina la jugabilidad clásica de Risk con la ambientación y los personajes de la popular serie de libros Canción de Hielo y Fuego (y su adaptación televisiva Juego de Tronos). En lugar de conquistar el mundo, los jugadores luchan por el control de Poniente (Westeros) y/o Essos.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Risk Lord of the Rings', 20, 75, 'Risk: El Señor de los Anillos ofrece un giro temático al clásico juego de conquista mundial, sumergiendo a los jugadores en las épicas batallas por la Tierra Media. Deberás desplegar estratégicamente tus fuerzas, administrar tus recursos y utilizar los elementos únicos del escenario de El Señor de los Anillos para lograr la victoria, ya sea dominando el mapa o cumpliendo objetivos específicos relacionados con el Anillo Único y la búsqueda de la Comunidad.', 2);
INSERT INTO Producto (nombre, stock, precio, descripcion, id_categoria) VALUES ('Monopoly Game of Thrones', 10, 75, 'Monopoly: Game of Thrones es una edición especial del clásico juego de mesa Monopoly, ambientada en el universo de la popular serie de libros Canción de Hielo y Fuego (y su adaptación televisiva Juego de Tronos). En lugar de comprar propiedades en Atlantic City, los jugadores compran, venden y construyen en lugares icónicos de Poniente (Westeros) y, en algunas versiones, también de Essos.', 2);

INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Fragmento de C’Tan del Dragón de Vacío', 5, 105, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Szarekh, el Rey Silente', 3, 135, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('T’au Tiger Shark AX-1-0', 6, 260, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Skitarii Rangers', 10, 45, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Capellán con armadura Exterminador', 20, 40, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Space Wolves Venerable Dreadnought', 16, 55, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Bjorn the Fell-Handed', 9, 55, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Patrulla: Ligas de los Votann', 50, 130, 3);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Mars Pattern Warlord Titan Body', 1, 1550, 3);

INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('WH40K For the Emperor', 5, 45, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Cain’s Last Stand', 3, 60, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Ciaphas Cain: Choose Your Enemies', 4, 175, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('The Greater Good', 10, 50, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Horus, señor de la guerra', 20, 20, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Index: Ligas de los Votann (Español)', 16, 15, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('El señor de los anillos Edicion completa en caja', 10, 100, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Juego de tronos', 50, 27, 4);
INSERT INTO Producto (nombre, stock, precio, id_categoria) VALUES ('Choque de reyes', 50, 27, 4);

#
# Table structure for table 'DetallesPedido'
#

DROP TABLE IF EXISTS `DetallesPedido`;

CREATE TABLE `DetallesPedido` (
  `id` INT auto_increment, 
  `cantidad` INT, 
  `precio_unit` FLOAT, 
  `id_pedido` INT,
  `id_producto` INT,
  PRIMARY KEY (`id`),
  CONSTRAINT fk_detallesPedido_pedido FOREIGN KEY (id_pedido) REFERENCES Pedido(id),
  CONSTRAINT fk_detallesPedido_producto FOREIGN KEY (id_producto) REFERENCES Producto(id)
);

#
# Dumping data for table 'DetallesPedido'
#

-- Precios actualizados desde Producto
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (2, 25, 1, 16);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (1, 10, 2, 5);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (3, 60, 3, 8);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (2, 40, 4, 9);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (1, 30, 5, 4);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (5, 10, 6, 5);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (1, 100, 7, 13);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (2, 75, 8, 18);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (2, 55, 9, 22);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (3, 135, 10, 21);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (1, 10, 2, 5);
INSERT INTO DetallesPedido (cantidad, precio_unit, id_pedido, id_producto) VALUES (2, 75, 8, 18);


#
# Table structure for table 'Proveedor'
#

DROP TABLE IF EXISTS `Proveedor`;

CREATE TABLE `Proveedor` (
  `id` INT auto_increment, 
  `nombre` VARCHAR(30),
  `email` VARCHAR(50),
  `contacto` INT(9),
  PRIMARY KEY (`id`)
);

#
# Dumping data for table 'Proveedor'
#

INSERT INTO Proveedor (nombre, email, contacto) VALUES ('Games Workshop', 'partusac@gmail.com', 123456789);
INSERT INTO Proveedor (nombre, email, contacto) VALUES ('Steam', 'gave@gmail.com', 129456789);
INSERT INTO Proveedor (nombre, email, contacto) VALUES ('Board Gamer', 'scriptor@gmail.com', 123456719);

#
# Table structure for table 'Producto_Proveedor'
#

DROP TABLE IF EXISTS `Producto_Proveedor`;

CREATE TABLE `Producto_Proveedor` (
  `id_producto` INT, 
  `id_proveedor` INT,
  PRIMARY KEY (`id_producto`, `id_proveedor`),
  CONSTRAINT fk_productoProveedor_producto FOREIGN KEY (id_producto) REFERENCES Producto(id),
  CONSTRAINT fk_productoProveedor_proveedor FOREIGN KEY (id_proveedor) REFERENCES Proveedor(id)
);

#
# Dumping data for table 'Proveedor'
#

-- Videojuegos (Proveedor: Steam, id = 2)
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (1, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (2, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (3, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (4, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (5, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (6, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (7, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (8, 2);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (9, 2);

-- Juegos de mesa (Proveedor: Board Gamer, id = 3)
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (10, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (11, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (12, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (13, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (14, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (15, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (16, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (17, 3);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (18, 3);

-- Figuras (Proveedor: Games Workshop, id = 1)
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (19, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (20, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (21, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (22, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (23, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (24, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (25, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (26, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (27, 1);

-- Libros (Proveedor: Games Workshop, id = 1)
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (28, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (29, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (30, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (31, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (32, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (33, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (34, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (35, 1);
INSERT INTO Producto_Proveedor (id_producto, id_proveedor) VALUES (36, 1);