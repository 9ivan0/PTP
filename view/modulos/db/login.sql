CREATE DATABASE login;
USE login;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `usuarios` (
  `idusuario` int(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `cargo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE TipoUsuario
(
IdTipoUsuario VARCHAR (15),
TipoUsuario VARCHAR (15),
PRIMARY KEY (IdTipoUsuario),
idusuario INT,
FOREIGN KEY (idusuario) references usuarios (idusuario)
);

CREATE TABLE TipoDocumento
(
IdTipoDocumento VARCHAR (20),
NombreTipoDocumento VARCHAR (20),
PRIMARY KEY (IdTipoDocumento)
);

CREATE TABLE TipoProducto
(
IdTipoProducto VARCHAR (15),
TipoProducto VARCHAR (15),
PRIMARY KEY (IdTipoProducto)
);

CREATE TABLE Vendedor
(
DocumentoVendedor INT (20),
Nombre VARCHAR (20),
Apellido VARCHAR (20),
Direccion VARCHAR (25),
Telefono INT,
Correo VARCHAR (30),
primary key (DocumentoVendedor),
idusuario INT,
FOREIGN KEY (idusuario) REFERENCES usuarios (idusuario),
IdTipoDocumento VARCHAR (20),
FOREIGN KEY (IdTipoDocumento) REFERENCES TipoDocumento (IdTipoDocumento)
);

CREATE TABLE Administrador
(
DocumentoAdministrador INT (20),
Nombre VARCHAR (20),
Apellido VARCHAR (20),
Direccion VARCHAR (25),
Telefono INT,
Correo VARCHAR (30),
primary key (DocumentoAdministrador),
idusuario INT,
FOREIGN KEY (idusuario) REFERENCES usuarios (idusuario),
IdTipoDocumento Varchar (20),
FOREIGN KEY (IdTipoDocumento) REFERENCES TipoDocumento (IdTipoDocumento)
);

CREATE TABLE Cliente
(
DocumentoCliente INT (20),
Nombre VARCHAR (20),
Apellido VARCHAR (20),
Direccion VARCHAR (25),
Telefono INT,
Correo VARCHAR (30),
PRIMARY KEY (DocumentoCliente),
IdTipoDocumento VARCHAR (20),
FOREIGN KEY (IdTipoDocumento) REFERENCES tipodocumento (IdTipoDocumento)
);


CREATE TABLE Factura
(
IdFactura INT,
NumeroFactura INT,
FechaFactura DATE,
ValorFactura INT,
PRIMARY KEY (IdFactura),
DocumentoVendedor INT (20),
FOREIGN KEY (DocumentoVendedor) REFERENCES Vendedor (DocumentoVendedor),
DocumentoCliente INT (20),
FOREIGN KEY (DocumentoCliente) REFERENCES Cliente (DocumentoCliente)
);

CREATE TABLE Proveedor
(
DocumentoProveedor INT (20),
Nombre VARCHAR (20),
Apellido VARCHAR (20),
Direccion VARCHAR (25),
Telefono INT,
Correo VARCHAR (30),
PRIMARY KEY (DocumentoProveedor),
IdTipoDocumento VARCHAR (20),
FOREIGN KEY (IdTipoDocumento) REFERENCES TipoDocumento (IdTipoDocumento)
);

CREATE TABLE Producto
(
id INT,
NombreProducto VARCHAR (20),
CodigoProducto VARCHAR (20),
Precio INT(15),
img BLOB,
PRIMARY KEY (id),
DocumentoProveedor INT (20),
FOREIGN KEY (DocumentoProveedor) REFERENCES Proveedor (DocumentoProveedor),
IdTipoProducto Varchar (15),
FOREIGN KEY (IdTipoProducto) REFERENCES TipoProducto (IdTipoProducto)
);

CREATE TABLE Envios
(
CodigoEnvio VARCHAR (20),
Nombre VARCHAR (20),
Direccion VARCHAR (25),
FechaEnvio DATE,
ValorEnvio INT,
PRIMARY KEY (CodigoEnvio),
id INT,
DocumentoCliente INT (20),
foreign key (id) REFERENCES Producto (id),
foreign key (DocumentoCliente) REFERENCES Cliente (DocumentoCliente)
);

INSERT INTO factura (IdFactura, NumeroFactura, FechaFactura, ValorFactura) VALUES (1, '1', '2018-06-11', '85000');

INSERT INTO `usuarios` (`idusuario`, `nombre`, `email`, `clave`, `cargo`) VALUES
(1, 'andres', 'andresfelipevega567@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1');

INSERT INTO producto (id, NombreProducto, CodigoProducto, Precio) VALUES ('1', 'camiseta cuello polo', '35CBF65B', '35000');

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

ALTER TABLE `usuarios`
  MODIFY `idusuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
