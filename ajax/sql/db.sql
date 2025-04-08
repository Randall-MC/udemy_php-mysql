-- Creación de la base de datos
CREATE DATABASE php_ajax
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

-- CHARACTER SET utf8mb4: Establece que la base de datos usará UTF-8, incluyendo compatibilidad ampliada para emojis si lo necesitas.
-- COLLATE utf8mb4_general_ci: Indica el tipo de ordenamiento de cadenas de texto. La opción "ci" significa case insensitive, lo que evita que distinga entre mayúsculas y minúsculas en comparaciones.

-- Creación de la tabla usuarios
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  edad INT NOT NULL,
  pais VARCHAR(100),
  correo VARCHAR(100) NOT NULL
);

-- Inserción de registros de prueba
INSERT INTO usuarios (nombre, edad, pais, correo) VALUES
('Carlos López', 28, 'México', 'carlos.lopez@gmail.com'),
('María González', 34, 'España', 'maria.gonzalez@yahoo.es'),
('Juan Pérez', 22, 'Colombia', 'juan.perez@hotmail.com'),
('Ana Martínez', 30, 'Argentina', 'ana.martinez@outlook.com'),
('Pedro Ramírez', 40, 'Chile', 'pedro.ramirez@gmail.com'),
('Sofía Torres', 25, 'México', 'sofia.torres@hotmail.com'),
('Luis Fernández', 36, 'España', 'luis.fernandez@yahoo.com'),
('Elena Castro', 27, 'Colombia', 'elena.castro@gmail.com'),
('Miguel Vargas', 29, 'Argentina', 'miguel.vargas@outlook.com'),
('Isabela Díaz', 21, 'Chile', 'isabela.diaz@gmail.com'),
('Fernando Cruz', 33, 'México', 'fernando.cruz@yahoo.com'),
('Paula Rojas', 26, 'España', 'paula.rojas@gmail.com'),
('Diego Méndez', 37, 'Colombia', 'diego.mendez@outlook.com'),
('Valeria Herrera', 23, 'Argentina', 'valeria.herrera@hotmail.com'),
('Andrés Sánchez', 31, 'Chile', 'andres.sanchez@gmail.com'),
('Camila García', 24, 'México', 'camila.garcia@gmail.com'),
('Jorge Navarro', 38, 'España', 'jorge.navarro@yahoo.es'),
('Lucía Vega', 20, 'Colombia', 'lucia.vega@hotmail.com'),
('Ricardo Morales', 32, 'Argentina', 'ricardo.morales@outlook.com'),
('Natalia Flores', 28, 'Chile', 'natalia.flores@gmail.com');
