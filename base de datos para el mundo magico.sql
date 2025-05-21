-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS Personas;

-- Usar la base de datos
USE Personas;

-- Crear la tabla datos
CREATE TABLE IF NOT EXISTS datos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    curp VARCHAR(18) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    rasa VARCHAR(50) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar algunos datos de ejemplo (opcional)
INSERT INTO datos (nombre, edad, curp, telefono, direccion, correo, rasa) VALUES
('Kirito Kazuto', 16, 'KAZU041007HDFZTR05', '5551234567', 'Tokio, Japón', 'kirito@sao.com', 'Humano'),
('Asuna Yuuki', 17, 'YUUK050930MDFSTR08', '5559876543', 'Setagaya, Tokio', 'asuna@sao.com', 'Humano'),
('Klein Ryotaro', 22, 'RYOT010185HDFKLM02', '5555555555', 'Osaka, Japón', 'klein@sao.com', 'Mitad Bestia'),
('Silica Keiko', 13, 'KEIK071210MDFSLC09', '5552468135', 'Kyoto, Japón', 'silica@sao.com', 'Tripido'),
('Lisbeth Rika', 15, 'RIKA120909MDFLSB07', '5557891234', 'Nagoya, Japón', 'liz@sao.com', 'Humano');

-- Mostrar la estructura de la tabla
DESCRIBE datos;

-- Mostrar todos los registros
SELECT * FROM datos;