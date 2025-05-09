use cdl;

SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 1;

SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 2;

SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 3;

SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 4;

SELECT id, nombre, stock, precio, descripcion FROM Producto WHERE id = '.$id.';

-- SELECT COUNT(*) FROM Producto WHERE id_categoria = 1;

-- SELECT * FROM Producto WHERE id_categoria = 1 LIMIT $limit OFFSET $offset;