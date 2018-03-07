--RELACIONES N-N

drop TABLE Donadores_UsoCFDI;
drop TABLE Donadores_MetodoPago;
drop TABLE Rol_Funcion;
drop TABLE Usuario_Rol;
drop TABLE Usuario_Noticia;

--TABLAS

drop TABLE UsoCFDI;
drop TABLE Donadores;
drop TABLE MetodoPago;
drop TABLE PlantillaDeCorreo;
drop TABLE Funcion;
drop TABLE Rol;
drop TABLE Usuario;
drop TABLE Noticia;
drop TABLE Comentario;
drop TABLE ArchivoMultimedia;
drop TABLE Thumbnail;
drop TABLE Evento;

--------------------------------------Table creation----------------------------------------------

CREATE TABLE UsoCFDI
(
IdCFDI char(3) not null constraint pkIdCFDI PRIMARY KEY,
Nombre text
)

CREATE TABLE Donadores
(
RFC varchar(13),
Nombre varchar(50),
ApellidoPaterno varchar(50),
ApellidoMaterno varchar(50),
FechadeNacimiento DATETIME,
Direccion text,
Telefono varchar(15),
Email varchar(254) not null constraint pkEmail PRIMARY KEY,
Ocupacion text,
Validado bit
)

CREATE TABLE MetodoPago
(
IdMetodo varchar(20) not null constraint pkIdMetodo PRIMARY KEY,
Descripcion text
)

CREATE TABLE PlantillaDeCorreo
(
IdCorreo char(6) not null constraint pkIdCorreo PRIMARY KEY,---habia error porque estaba en 4 en vez de 6
Asunto varchar(50),
Contenido text,
Fecha DATETIME
)

CREATE TABLE Funcion
(
IdFuncion char(4) not null constraint pkIdFuncion PRIMARY KEY,
Nombre text
)

CREATE TABLE Rol
(
IdRol char(3) not null constraint pkIdRol PRIMARY KEY,
Nombre text
)

CREATE TABLE Usuario
(
Username varchar(10) not null constraint pkUsername PRIMARY KEY,
Pswd varchar(20)
)

CREATE TABLE Noticia
(
IdNoticia char(5) not null constraint pkIdNoticia PRIMARY KEY,
Titulo text,
Cuerpo text,
Fecha DATETIME
)

CREATE TABLE Comentario
(
IdComentario char(7) not null constraint pkIdComentario PRIMARY KEY,
Comentario text,
Autor varchar(57),
Fecha DATETIME,
IdNoticia char(5)
)

CREATE TABLE ArchivoMultimedia
(
Filepath varchar(900) not null constraint pkFilepath PRIMARY KEY,
Nombre varchar(50),
Fecha DATETIME,
IdNoticia char(5),
ThumbnailUrl varchar(900)
)

CREATE TABLE Thumbnail
(
Thurl varchar(900) not null constraint pkThurl PRIMARY KEY
)

CREATE TABLE Evento
(
IdEvento char(4) not null constraint pkIdEvento PRIMARY KEY,
Nombre text,
Fecha DATETIME,
Lugar text,
Descripcion text
)

--RELACIONES N-N

CREATE TABLE Donadores_UsoCFDI
(
Email varchar(254) not null constraint fkEmail FOREIGN KEY references Donadores(Email),
IdCFDI char(3) not null constraint fkIdCFDI FOREIGN KEY references UsoCFDI(IdCFDI),
Fecha DATETIME
)

CREATE TABLE Donadores_MetodoPago
(
IdMetodo char(20) not null constraint fkIdMetodo FOREIGN KEY references MetodoPago(IdMetodo),
Email varchar(254) not null constraint fkCorreo FOREIGN KEY references Donadores(Email),
Fecha DATETIME,
Observaciones text
)

CREATE TABLE Rol_Funcion
(
IdFuncion char(4) not null constraint fkIdFuncion FOREIGN KEY references Funcion(IdFuncion),
IdRol char(3) not null constraint fkIdRol FOREIGN KEY references Rol(IdRol)
)

CREATE TABLE Usuario_Rol
(
Username varchar(10) not null constraint fkUsername FOREIGN KEY references Usuario(Username),
IdRol char(3) not null constraint fkRol FOREIGN KEY references Rol(IdRol),
Fecha DATETIME
)

CREATE TABLE Usuario_Noticia
(
IdNoticia char(5) not null constraint fkIdNoticia FOREIGN KEY references Noticia(IdNoticia),
Username varchar(10) not null constraint fkUser FOREIGN KEY references Usuario(Username),
Fecha DATETIME
)

---------------------------------------------DB FILL--------------------------------------------

BULK INSERT equipo07.equipo07.[UsoCFDI]
   FROM 'e:\wwwroot\equipo07\usoCFDI.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t',
         ROWTERMINATOR = '\n'
      )

SELECT *
FROM rol

SET DATEFORMAT dmy;
BULK INSERT equipo07.equipo07.[Donadores]
   FROM 'e:\wwwroot\equipo07\donadores.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t', ---error con acentos
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[MetodoPago]
   FROM 'e:\wwwroot\equipo07\MetodoPago.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT mdy;
BULK INSERT equipo07.equipo07.[PlantillaDeCorreo]
   FROM 'e:\wwwroot\equipo07\PlantillaDeCorreo.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t',
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[Funcion]
   FROM 'e:\wwwroot\equipo07\Funcion.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[Rol]
   FROM 'e:\wwwroot\equipo07\Rol.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[Usuario]
   FROM 'e:\wwwroot\equipo07\Usuario.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT dmy;
BULK INSERT equipo07.equipo07.[Noticia]
   FROM 'e:\wwwroot\equipo07\Noticias.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT dmy;
BULK INSERT equipo07.equipo07.[Comentario]
   FROM 'e:\wwwroot\equipo07\Comentarios.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT mdy;
BULK INSERT equipo07.equipo07.[ArchivoMultimedia]
   FROM 'e:\wwwroot\equipo07\ArchivosMultimedia.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[Thumbnail]
   FROM 'e:\wwwroot\equipo07\Thumbnail.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT mdy;
BULK INSERT equipo07.equipo07.[Evento]
   FROM 'e:\wwwroot\equipo07\evento.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t',
         ROWTERMINATOR = '\n'
      )
set dateformat mdy
BULK INSERT equipo07.equipo07.[Donadores_UsoCFDI]
   FROM 'e:\wwwroot\equipo07\donadores_usoCFDI.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t',
         ROWTERMINATOR = '\n'
      )

set dateformat mdy
BULK INSERT equipo07.equipo07.[Donadores_MetodoPago]
   FROM 'e:\wwwroot\equipo07\donadores_MetodoPago.tsv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = '\t',
         ROWTERMINATOR = '\n'
      )

BULK INSERT equipo07.equipo07.[Rol_Funcion]
   FROM 'e:\wwwroot\equipo07\Rol_Funcion.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT dmy;
BULK INSERT equipo07.equipo07.[Usuario_Rol]
   FROM 'e:\wwwroot\equipo07\Usuario_Rol.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT mdy;
BULK INSERT equipo07.equipo07.[Usuario_Noticia]
   FROM 'e:\wwwroot\equipo07\Usuario_Noticias.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

select * from evento

SELECT *
FROM sys.tables
insert into Donadores values('JEZWVAE2GBG0V','Kelsi','Quinn','Paul','10/24/2003','634 Apple Turnpike,Birmingham,MA,42258','4102079027','kquinn200@nniuqislek.net','Maestro',1);
insert into Funcion values('F001','Registrar noticia');
insert into Rol values('R01','Administrador');
insert into evento values('E001','Duis bibendum','1/2/2016','Purépero',
'Vivamus semper arcu et urna eleifend dapibus. Fusce porta pretium sodales. 
Phasellus eget luctus velit. Phasellus in aliquet ex. Pellentesque consequat 
consectetur odio, ut ultricies diam 
tempus vel. Maecenas facilisis porta nisl, non congue urna porta vitae. 
In vehicula tincidunt massa nec tempus. Duis sagittis pulvinar nisl et 
feugiat. Aliquam erat volutpat. Quisque ut odio massa.');
insert into Rol_Funcion values('F001','R01');
