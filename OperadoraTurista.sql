create database Operadora_Turistica;

use Operadora_Turistica;

CREATE TABLE Empleado (
    Id_Empleado INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Tipo VARCHAR(45),
    Fecha_Nacimiento DATE,
    CURP VARCHAR(45),
    Genero VARCHAR(45),
    Telefono VARCHAR(45),
    Correo VARCHAR(45)
);

CREATE TABLE Cliente (
    Id_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Telefono VARCHAR(45),
    Correo VARCHAR(45),
    CURP VARCHAR(45)
);

CREATE TABLE Chat (
    Id_Chat INT AUTO_INCREMENT PRIMARY KEY,
    Id_Cliente INT,
    Id_Empleado INT,
    Id_Mensaje INT,
    Contenido VARCHAR(150),
    Fecha_Hora DATETIME,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_Empleado) REFERENCES Empleado(Id_Empleado)
);

CREATE TABLE TipoServicios (
    Id_TipoServicios INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45)
);

CREATE TABLE Servicios (
    Id_Servicios INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Descripcion VARCHAR(45),
    Id_TipoServicios INT,
    Costo DECIMAL(10, 2),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

CREATE TABLE Paquete (
    Id_Paquete INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Costo DECIMAL(10, 2)
);

CREATE TABLE DetallePaquete (
    Id_DetallePaquete INT AUTO_INCREMENT PRIMARY KEY,
    Id_Paquete INT,
    Id_Servicios INT,
    Id_TipoServicios INT,
    Hora_Salida TIME,
    Hora_Llegada TIME,
    Fecha DATE,
    Cupo INT,
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

CREATE TABLE Reserva (
    Id_Reserva INT AUTO_INCREMENT PRIMARY KEY,
    Fecha DATETIME,
    Pasajeros INT,
    Estatus VARCHAR(45),
    Id_Cliente INT,
    Precio DECIMAL(10, 2),
    Id_Servicios INT,
    Id_TipoServicios INT,
    Id_Paquete INT,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios),
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete)
);

CREATE TABLE Notificaciones (
    Id_Notificaciones INT AUTO_INCREMENT PRIMARY KEY,
    Aviso VARCHAR(50),
    Id_Cliente INT,
    Id_DetallePaquete INT,
    Id_Paquete INT,
    Id_Servicios INT,
    Id_TipoServicios INT,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_DetallePaquete) REFERENCES DetallePaquete(Id_DetallePaquete),
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

SELECT * FROM Empleado;

INSERT INTO Empleado (Nombre, Apellido, Tipo, Fecha_Nacimiento, CURP, Genero, Telefono, Correo) 
VALUES 
('Juan', 'Perez', 'Vendedor', '1985-06-15', 'PEPJ850615HCSRNN03', 'Masculino', '9617414312', 'juan@gmail.com'),
('Maria', 'Garcia', 'Administrador', '1990-09-23', 'GARM900923MCSRRN06', 'Femenino', '9617689015', 'maria@gmail.com'),
('Carlos', 'Lopez', 'Supervisor', '1982-11-01', 'LOPC821101HCSRRL04', 'Masculino', '9611412113', 'carlos@gmail.com'),
('Ana', 'Sanchez', 'Vendedor', '1995-02-12', 'SAAE950212MCSRRN08', 'Femenino', '9611712468', 'ana@gmail.com'),
('Luis', 'Rodriguez', 'Contador', '1988-04-10', 'RODL880410HCSRRN05', 'Masculino', '9614156198', 'luis@gmail.com');

INSERT INTO Cliente (Nombre, Apellido, Telefono, Correo, CURP) 
VALUES 
('Jose', 'Martinez', '9611234561', 'jose@gmail.com', 'MAJJ850101HCSRRS06'),
('Laura', 'Fernandez', '9611234562', 'laura@gmail.com', 'FELM900503MCSRRL07'),
('Pedro', 'Hernandez', '9611234563', 'pedro@gmail.com', 'HEHP860702HCSRRT04'),
('Carmen', 'Diaz', '9611234564', 'carmen@gmail.com', 'DIAC920821MCSRRN08'),
('Sofia', 'Castillo', '9611234565', 'sofia@gmail.com', 'CASM951202MCSRRS05');

INSERT INTO Chat (Id_Cliente, Id_Empleado, Id_Mensaje, Contenido, Fecha_Hora) 
VALUES 
(1, 1, 1, 'Hola, necesito información.', '2024-10-01 10:00:00'),
(2, 2, 2, 'Gracias por contactarnos.', '2024-10-01 11:00:00'),
(3, 3, 3, '¿Cuáles son sus servicios?', '2024-10-02 12:00:00'),
(4, 4, 4, 'Tenemos varias opciones.', '2024-10-02 13:00:00'),
(5, 5, 5, 'Gracias por la información.', '2024-10-03 14:00:00');

INSERT INTO TipoServicios (Nombre) 
VALUES 
('Transporte'),
('Hospedaje'),
('Alimentación'),
('Guía turístico'),
('Entradas');

INSERT INTO Servicios (Nombre, Descripcion, Id_TipoServicios, Costo) 
VALUES 
('Taxi aeropuerto', 'Servicio de transporte desde el aeropuerto', 1, 250.00),
('Hotel 4 estrellas', 'Hospedaje en hotel de 4 estrellas', 2, 1500.00),
('Comida buffet', 'Alimentación tipo buffet', 3, 300.00),
('Guía en ciudad', 'Guía para recorridos por la ciudad', 4, 500.00),
('Entrada a museo', 'Entradas al museo principal', 5, 200.00);

INSERT INTO Paquete (Nombre, Costo) 
VALUES 
('Paquete 1', 2500.00),
('Paquete 2', 3500.00),
('Paquete 3', 4500.00),
('Paquete 4', 5500.00),
('Paquete 5', 6500.00);

INSERT INTO DetallePaquete (Id_Paquete, Id_Servicios, Id_TipoServicios, Hora_Salida, Hora_Llegada, Fecha, Cupo) 
VALUES 
(1, 1, 1, '08:00:00', '10:00:00', '2024-11-01', 20),
(2, 2, 2, '12:00:00', '14:00:00', '2024-11-02', 30),
(3, 3, 3, '09:00:00', '11:00:00', '2024-11-03', 25),
(4, 4, 4, '10:00:00', '12:00:00', '2024-11-04', 15),
(5, 5, 5, '11:00:00', '13:00:00', '2024-11-05', 35);

INSERT INTO Reserva (Fecha, Pasajeros, Estatus, Id_Cliente, Precio, Id_Servicios, Id_TipoServicios, Id_Paquete) 
VALUES 
('2024-10-10 08:00:00', 2, 'Confirmado', 1, 3000.00, 1, 1, 1),
('2024-10-11 09:00:00', 3, 'Pendiente', 2, 4000.00, 2, 2, 2),
('2024-10-12 10:00:00', 4, 'Cancelado', 3, 5000.00, 3, 3, 3),
('2024-10-13 11:00:00', 5, 'Confirmado', 4, 6000.00, 4, 4, 4),
('2024-10-14 12:00:00', 6, 'Pendiente', 5, 7000.00, 5, 5, 5);

INSERT INTO Notificaciones (Aviso, Id_Cliente, Id_DetallePaquete, Id_Paquete, Id_Servicios, Id_TipoServicios) 
VALUES 
('Tu reserva ha sido confirmada', 1, 1, 1, 1, 1),
('Recuerda tu reserva para mañana', 2, 2, 2, 2, 2),
('Tu reserva ha sido cancelada', 3, 3, 3, 3, 3),
('Nuevo servicio añadido a tu paquete', 4, 4, 4, 4, 4),
('Reserva pendiente de pago', 5, 5, 5, 5, 5);
