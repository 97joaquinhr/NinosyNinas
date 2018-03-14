drop table if exists Donadores_UsoCFDI;
drop table if exists Donadores_MetodoPago;
drop table if exists Rol_Funcion;
drop table if exists Usuario_Rol;
drop table if exists Usuario_Noticia;

drop table if exists UsoCFDI;
drop table if exists Donadores;
drop table if exists MetodoPago;
drop table if exists PlantillaDeCorreo;
drop table if exists Funcion;
drop table if exists Rol;
drop table if exists Usuario;
drop table if exists Noticia;
drop table if exists Comentario;
drop table if exists ArchivoMultimedia;
drop table if exists Thumbnail;
drop table if exists Evento;


CREATE TABLE IF NOT EXISTS UsoCFDI
(
IdCFDI char(3) not null,
PRIMARY KEY (IdCFDI),
Nombre text
);

CREATE TABLE IF NOT EXISTS Donadores
(
RFC varchar(13),
Nombre varchar(50),
ApellidoPaterno varchar(50),
ApellidoMaterno varchar(50),
FechadeNacimiento DATETIME,
Direccion text,
Telefono varchar(15),
Email varchar(254) not null,
PRIMARY KEY (Email),
Ocupacion text,
Validado bit
);

CREATE TABLE IF NOT EXISTS MetodoPago
(
IdMetodo char(3) not null,
PRIMARY KEY (IdMetodo),
Descripcion text
);

CREATE TABLE IF NOT EXISTS PlantillaDeCorreo
(
IdCorreo char(6) not null,
PRIMARY KEY (IdCorreo),
Asunto varchar(50),
Contenido text,
Fecha DATETIME
);

CREATE TABLE IF NOT EXISTS Funcion
(
IdFuncion char(4) not null,
PRIMARY KEY (IdFuncion),
Nombre text
);

CREATE TABLE IF NOT EXISTS Rol
(
IdRol char(3) not null,
PRIMARY KEY (IdRol),
Nombre text
);

CREATE TABLE IF NOT EXISTS Usuario
(
Username varchar(10) not null,
PRIMARY KEY (Username),
Pswd varchar(20)
);

CREATE TABLE IF NOT EXISTS Noticia
(
IdNoticia char(5) not null,
PRIMARY KEY (IdNoticia),
Titulo text,
Cuerpo text,
Fecha DATETIME
);

CREATE TABLE IF NOT EXISTS Comentario
(
IdComentario char(7) not null,
PRIMARY KEY (IdComentario),
Comentario text,
Autor varchar(57),
Fecha DATETIME,
IdNoticia char(5)
);

CREATE TABLE IF NOT EXISTS ArchivoMultimedia
(
Filepath varchar(765) not null,
PRIMARY KEY (Filepath),
Nombre varchar(50),
Fecha DATETIME,
IdNoticia char(5),
ThumbnailUrl varchar(765)
);

CREATE TABLE IF NOT EXISTS Thumbnail
(
Thurl varchar(765) not null,
PRIMARY KEY (Thurl)
);

CREATE TABLE IF NOT EXISTS Evento
(
IdEvento char(4) not null,
PRIMARY KEY (IdEvento),
Nombre text,
Fecha DATETIME,
Lugar text,
Descripcion text
);



CREATE TABLE IF NOT EXISTS Donadores_UsoCFDI
(
Email varchar(254) not null,
FOREIGN KEY fkEmail_DU(Email)
references Donadores(Email),
IdCFDI char(3) not null,
FOREIGN KEY fkIdCFDI_DU(IdCFDI)
references UsoCFDI(IdCFDI),
Fecha DATETIME
);

CREATE TABLE IF NOT EXISTS Donadores_MetodoPago
(
IdMetodo char(3) not null,
FOREIGN KEY fkIdMetodo_DM(IdMetodo) 
references MetodoPago(IdMetodo),
Email varchar(254) not null,
FOREIGN KEY  fkEmail_DM(Email)
references Donadores(Email),
Fecha DATETIME,
Observaciones text
);

CREATE TABLE IF NOT EXISTS Rol_Funcion
(
IdFuncion char(4) not null,
FOREIGN KEY fkIdFuncion_RF(IdFuncion) 
references Funcion(IdFuncion),
IdRol char(3) not null,
FOREIGN KEY fkIdRol_RF(IdRol) 
references Rol(IdRol)
);

CREATE TABLE IF NOT EXISTS Usuario_Rol
(
Username varchar(10) not null,
 FOREIGN KEY  fkUsername_UR(Username)
 references Usuario(Username),
IdRol char(3) not null,
FOREIGN KEY fkIdRol_UR(IdRol) 
references Rol(IdRol),
Fecha DATETIME
);

CREATE TABLE IF NOT EXISTS Usuario_Noticia
(
IdNoticia char(5) not null,
FOREIGN KEY fkIdNoticia_UN(IdNoticia)
references Noticia(IdNoticia),
Username varchar(10) not null,
FOREIGN KEY fkUsername_UN(Username) 
references Usuario(Username),
Fecha DATETIME
);


load data local infile 'C:/Users/joaqu/public_html/usoCFDI.tsv' into table usoCFDI

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/donadores.tsv' into table donadores

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/MetodoPago.csv' into table MetodoPago

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/PlantillaDeCorreo.tsv' into table PlantillaDeCorreo

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Funcion.csv' into table Funcion

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Rol.csv' into table Rol

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Usuario.csv' into table Usuario

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Noticias.tsv' into table Noticia

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Comentarios.csv' into table Comentario

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/ArchivosMultimedia.csv' into table ArchivoMultimedia

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Thumbnail.csv' into table Thumbnail

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/evento.tsv' into table evento

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/donadores_usoCFDI.tsv' into table donadores_usoCFDI

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/donadores_usoCFDI.tsv' into table donadores_usoCFDI

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/donadores_MetodoPago.tsv' into table donadores_MetodoPago

fields terminated by '\t'

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Rol_Funcion.csv' into table Rol_Funcion

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Usuario_Rol.csv' into table Usuario_Rol

fields terminated by ','

lines terminated by '\n';

load data local infile 'C:/Users/joaqu/public_html/Usuario_Noticias.csv' into table Usuario_Noticias

fields terminated by ','

lines terminated by '\n';




insert into Donadores values('JEZWVAE2GBG0V','Kelsi','Quinn','Paul','10/24/2003','634 Apple Turnpike,Birmingham,MA,42258','4102079027','kquinn200@nniuqislek.net','Maestro',1);
insert into Funcion values('F001','Registrar noticia');
insert into Rol values('R01','Administrador');
insert into evento values('E001','Duis bibendum','1/2/2016','Pur�pero',
'Vivamus semper arcu et urna eleifend dapibus. Fusce porta pretium sodales. 
Phasellus eget luctus velit. Phasellus in aliquet ex. Pellentesque consequat 
consectetur odio, ut ultricies diam 
tempus vel. Maecenas facilisis porta nisl, non congue urna porta vitae. 
In vehicula tincidunt massa nec tempus. Duis sagittis pulvinar nisl et 
feugiat. Aliquam erat volutpat. Quisque ut odio massa.');
insert into Rol_Funcion values('F001','R01');

SELECT *
FROM sys.tables;

