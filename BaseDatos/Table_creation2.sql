SET DATEFORMAT dmy;

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'UsoCFDI')
	CREATE TABLE UsoCFDI
	(
	IdCFDI char(3) not null,
	Nombre text
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Donadores')
	CREATE TABLE Donadores
	(
	RFC varchar(13),
	Nombre varchar(50),
	ApellidoPaterno varchar(50),
	ApellidoMaterno varchar(50),
	FechadeNacimiento DATETIME,
	Direccion text,
	Telefono varchar(15),
	Email varchar(254) not null,
	Ocupacion varchar(100),
	Validado bit
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Donadores_CFDI')
	CREATE TABLE Donadores_UsoCFDI
	(
	IdCFDI char(3) not null,
	Email varchar(254) not null,
	Fecha DATETIME
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'MetodoPago')
	CREATE TABLE MetodoPago
	(
	IdMetodo char(20) not null,
	Descripcion text
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Donadores_MetodoPago')
	CREATE TABLE Donadores_MetodoPago
	(
	IdMetodo char(11) not null,
	Email varchar(254) not null,
	Fecha DATETIME,
	Observaciones text
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'PlanillaDeCorreo')
	CREATE TABLE PlantillaDeCorreo
	(
	IdCorreo char(4) not null,
	Asunto varchar(50),
	Contenido text,
	Fecha DATETIME
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Funcion')
	CREATE TABLE Funcion
	(
	IdFuncion char(4),
	Nombre text
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Rol')
	CREATE TABLE Rol
	(
	IdRol char(3),
	Nombre text
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Rol_Funcion')
	CREATE TABLE Rol_Funcion
	(
	IdFuncion char(4) not null,
	IdRol char(3) not null
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Usuario')
	CREATE TABLE Usuario
	(
	Username varchar(10) not null,
	Pswd varchar(20)
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Usuario_Rol')
	CREATE TABLE Usuario_Rol
	(
	Username varchar(10) not null,
	IdRol char(3) not null,
	Fecha DATETIME
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Entidad')
	CREATE TABLE Entidad
	(
	IdNoticia char(5) not null,
	Titulo text,
	Cuerpo text,
	Fecha DATETIME
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Usuario_Noticia')
	CREATE TABLE Usuario_Noticia
	(
	IdNoticia char(5) not null,
	Username varchar(10) not null,
	Fecha DATETIME
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Comentario')
	CREATE TABLE Comentario
	(
	IdComentario char(7),
	Comentario text,
	Autor varchar(57),
	Fecha DATETIME,
	IdNoticia char(5)
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'ArchivoMultimedia')
	CREATE TABLE ArchivoMultimedia
	(
	Filepath varchar(2083) not null,
	Nombre varchar(50),
	Fecha DATETIME,
	IdNoticia char(5),
	ThumbnailUrl varchar(2083)
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Thumbnail')
	CREATE TABLE Thumbnail
	(
	Thurl varchar(2083)
	)

IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Evento')
	CREATE TABLE Evento
	(
	IdEvento char(4),
	Nombre text,
	Fecha DATETIME,
	Lugar text,
	Descripcion text
	)