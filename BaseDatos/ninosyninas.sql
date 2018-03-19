-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 06:29 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninosyninas`
--

-- --------------------------------------------------------

--
-- Table structure for table `archivomultimedia`
--

CREATE TABLE `archivomultimedia` (
  `Filepath` varchar(254) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `IdNoticia` char(5) DEFAULT NULL,
  `ThumbnailUrl` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archivomultimedia`
--

INSERT INTO `archivomultimedia` (`Filepath`, `Nombre`, `Fecha`, `IdNoticia`, `ThumbnailUrl`) VALUES
('lorem1.jpg', 'lorem1', '2018-01-02 00:00:00', 'N0001', 'thurl/ipsum1.jpg'),
('lorem10.jpg', 'lorem10', '2009-11-06 00:00:00', 'N0010', 'thurl/ipsum10.jpg'),
('lorem11.jpg', 'lorem11', '2008-12-10 00:00:00', 'N0001', 'thurl/ipsum11.jpg'),
('lorem12.jpg', 'lorem12', '2008-01-14 00:00:00', 'N0002', 'thurl/ipsum12.jpg'),
('lorem13.jpg', 'lorem13', '2007-02-17 00:00:00', 'N0003', 'thurl/ipsum13.jpg'),
('lorem14.jpg', 'lorem14', '2006-03-23 00:00:00', 'N0004', 'thurl/ipsum14.jpg'),
('lorem15.jpg', 'lorem15', '2005-04-26 00:00:00', 'N0005', 'thurl/ipsum15.jpg'),
('lorem16.jpg', 'lorem16', '2004-05-30 00:00:00', 'N0006', 'thurl/ipsum16.jpg'),
('lorem17.jpg', 'lorem17', '2003-07-04 00:00:00', 'N0007', 'thurl/ipsum17.jpg'),
('lorem18.jpg', 'lorem18', '2002-08-07 00:00:00', 'N0008', 'thurl/ipsum18.jpg'),
('lorem19.jpg', 'lorem19', '2001-09-10 00:00:00', 'N0009', 'thurl/ipsum19.jpg'),
('lorem2.jpg', 'lorem2', '2017-02-05 00:00:00', 'N0002', 'thurl/ipsum2.jpg'),
('lorem20.jpg', 'lorem20', '2000-10-14 00:00:00', 'N0010', 'thurl/ipsum20.jpg'),
('lorem3.jpg', 'lorem3', '2016-03-11 00:00:00', 'N0003', 'thurl/ipsum3.jpg'),
('lorem4.jpg', 'lorem4', '2015-04-15 00:00:00', 'N0004', 'thurl/ipsum4.jpg'),
('lorem5.jpg', 'lorem5', '2014-05-19 00:00:00', 'N0005', 'thurl/ipsum5.jpg'),
('lorem6.jpg', 'lorem6', '2013-06-22 00:00:00', 'N0006', 'thurl/ipsum6.jpg'),
('lorem7.jpg', 'lorem7', '2012-07-26 00:00:00', 'N0007', 'thurl/ipsum7.jpg'),
('lorem8.jpg', 'lorem8', '2011-08-30 00:00:00', 'N0008', 'thurl/ipsum8.jpg'),
('lorem9.jpg', 'lorem9', '2010-10-03 00:00:00', 'N0009', 'thurl/ipsum9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `IdComentario` char(7) NOT NULL,
  `Comentario` text,
  `Autor` varchar(57) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  `IdNoticia` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`IdComentario`, `Comentario`, `Autor`, `Fecha`, `IdNoticia`) VALUES
('C000001', 'Hola soy yo', 'Elmer Homero', '2018-01-01 00:00:00', 'N0001'),
('C000002', 'Peponks es el mejor', 'Edi Ficio', '2018-02-01 00:00:00', 'N0002'),
('C000003', 'Buena noticia', 'Elvis tek', '2018-03-01 00:00:00', 'N0003'),
('C000004', 'Me gusta la bamba', 'Dolores Delano', '2018-04-01 00:00:00', 'N0004'),
('C000005', 'Dago rockea', 'Armando Casas', '2018-05-01 00:00:00', 'N0005'),
('C000006', 'Cesar es Buenfil', 'Elba Calao', '2018-06-01 00:00:00', 'N0006'),
('C000007', 'Si todo buenfo es cesar entonces todo cesar es buenfo?', 'Aquiles Castro', '2018-07-01 00:00:00', 'N0007'),
('C000008', 'Siganme en twitter @twitter', 'Aquiles Bailo', '2018-08-01 00:00:00', 'N0008'),
('C000009', 'Me gusta la mayonesa', 'Mary Conazo', '2018-09-01 00:00:00', 'N0009'),
('C000010', 'Lorem Ipsum Ipsum Lorem', 'Benito Camelo', '2018-10-01 00:00:00', 'N0010');

-- --------------------------------------------------------

--
-- Table structure for table `donadores`
--

CREATE TABLE `donadores` (
  `RFC` varchar(13) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoPaterno` varchar(50) DEFAULT NULL,
  `ApellidoMaterno` varchar(50) DEFAULT NULL,
  `FechadeNacimiento` datetime DEFAULT NULL,
  `Direccion` text,
  `Telefono` varchar(15) DEFAULT NULL,
  `Email` varchar(254) NOT NULL,
  `Ocupacion` text,
  `Validado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donadores`
--

INSERT INTO `donadores` (`RFC`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `FechadeNacimiento`, `Direccion`, `Telefono`, `Email`, `Ocupacion`, `Validado`) VALUES
('I009FN0RQ3S0K', 'Aubrey', 'Bates', 'Ramos', '1998-09-26 00:00:00', '960 Chocolate Turnpike,Anchorage,MO,17977', '6997079161', 'abates592@setabyerbua.net', 'Bombero', b'1'),
('M619B3PK17FJH', 'Alicia', 'Hill', 'Luna', '1981-08-09 00:00:00', '201 North Sunrise Loop,Oxford,CA,01690', '3715611615', 'ahill609@llihaicila.biz', 'Diseñador', b'1'),
('RHS2WC3FCGDRQ', 'Ashton', 'Paul', 'Nguyen', '1994-10-15 00:00:00', '824 Sweet Avenue,Winchester,IA,51315', '3277992185', 'apaul46@luapnothsa.net', 'Obrero', b'1'),
('LLQ47FMEJJM2B', 'Amanda', 'Watkins', 'Adams', '1942-11-20 00:00:00', '116 East 4th Way,Greenville,IN,54621', '2073775162', 'awatkins182@sniktawadnama.biz', 'Empleado', b'1'),
('KI26DFUTI55S3', 'Brandi', 'Elliott', 'Oconnor', '1954-10-25 00:00:00', '476 Mahogany Lane,New Haven,ID,48836', '3622658843', 'belliott903@ttoilleidnarb.biz', 'Maestro', b'1'),
('ZP1Q30GYE221P', 'Brianne', 'Marsh', 'Silva', '1983-03-23 00:00:00', '624 Elm Lane,Stamford,IL,45524', '4225702446', 'bmarsh14@hsramennairb.biz', 'Empresario', b'1'),
('UBZRGNAUVN6D6', 'Brendon', 'Silva', 'Hill', '1984-10-25 00:00:00', '79 West Johnson Expressway,Arlington,NM,25999', '2408995618', 'bsilva515@avlisnodnerb.biz', 'Empresario', b'1'),
('P5MEKZH8VKNY4', 'Bryce', 'Watkins', 'Peterson', '1974-12-06 00:00:00', '570 East Lemon Loop,Phoenix,UT,62228', '7585127867', 'bwatkins578@sniktawecyrb.com', 'Doctor', b'1'),
('I33P3K2A86P7I', 'Cassie', 'Gilbert', 'Rowe', '1961-05-09 00:00:00', '525 Blueberry Lane,Indianapolis,CT,54412', '5832523866', 'cgilbert401@trebligeissac.biz', 'Empleado', b'1'),
('DYC5EJSMPBDOO', 'Chad', 'Hardy', 'Ayala', '1937-09-24 00:00:00', '328 Lakeview Street,Lubbock,WV,39033', '7273353893', 'chardy488@ydrahdahc.biz', 'Bombero', b'1'),
('0X6CBWGOLWLM6', 'Clarissa', 'Hubbard', 'Figueroa', '1939-07-02 00:00:00', '539 Hoover Highway,Birmingham,DC,84024', '6556073813', 'chubbard147@drabbuhassiralc.biz', 'Empleado', b'1'),
('U1G1PTNVM6XFB', 'Callie', 'Munoz', 'Thornton', '1950-12-02 00:00:00', '692 Hickory Highway,Fort Worth,WV,23583', '5874321177', 'cmunoz134@zonumeillac.net', 'Profesor', b'1'),
('7NBU24Y5V5PA0', 'Colton', 'Nguyen', 'Terry', '1989-07-02 00:00:00', '401 North Melon Street,New Haven,LA,66755', '9227372565', 'cnguyen676@neyugnnotloc.net', 'Maestro', b'1'),
('1I4PY3ACP8N26', 'Connor', 'Peterson', 'Klein', '1961-01-17 00:00:00', '496 Willow Turnpike,Westminster,WV,82316', '2152341881', 'cpeterson979@nosretepronnoc.net', 'Bombero', b'1'),
('0J39CR0BABTGX', 'Chad', 'Rowe', 'Elliott', '1951-03-03 00:00:00', '246 North Washington Highway,Jackson,PA,47655', '4275955057', 'crowe302@ewordahc.net', 'Diseñador', b'1'),
('ITBCAIQT8YZYH', 'Devin', 'Mcdaniel', 'Mcguire', '1952-04-12 00:00:00', '170 South Hickory Garden,Norman,NV,11208', '9974974697', 'dmcdaniel380@leinadcmnived.org', 'Obrero', b'1'),
('6JJSQKJL662B2', 'Esther', 'Oconnor', 'Munoz', '1945-07-11 00:00:00', '613 Coolidge Terrace,Aurora,VA,02550', '7067766049', 'eoconnor522@ronnocorehtse.net', 'Obrero', b'1'),
('20IZVB37GCYZE', 'Forrest', 'Adkins', 'Porter', '1956-03-19 00:00:00', '49 Buchanan Boulevard,Frisco,OK,22381', '7733597384', 'fadkins923@snikdatserrof.biz', 'Diseñador', b'1'),
('1E8KLTZQA9OLJ', 'Fabian', 'Thornton', 'Medina', '1941-08-18 00:00:00', '730 Truman Place,Tempe,NV,28307', '3567793066', 'fthornton47@notnrohtnaibaf.net', 'Bombero', b'1'),
('O0RQQFZP7Q11B', 'Geoffrey', 'Mitchell', 'Clarke', '1958-06-13 00:00:00', '836 South 6th Garden,Port St. Lucie,VA,57248', '9266217944', 'gmitchell133@llehctimyerffoeg.net', 'Maestro', b'1'),
('A435X8Q7ABAJK', 'Heather', 'Bowman', 'Watkins', '1977-08-08 00:00:00', '685 North Willow Highway,Killeen,RI,64005', '6235394796', 'hbowman225@namwobrehtaeh.biz', 'Obrero', b'1'),
('X4ZEP9CQ2J53T', 'Haley', 'Gomez', 'Lang', '1983-12-29 00:00:00', '752 Coolidge Circle,Garland,MN,85039', '3299349901', 'hgomez561@zemogyelah.com', 'Profesor', b'1'),
('XBL6Q1I8NRSPV', 'India', 'Adams', 'Griffith', '1945-08-27 00:00:00', '845 Harrison Way,Antioch,ME,34648', '9278714277', 'iadams847@smadaaidni.com', 'Diseñador', b'1'),
('N01RIVBP0R3BN', 'Ian', 'Mcguire', 'Patton', '1943-12-19 00:00:00', '154 South Ford Boulevard,Escondido,NH,13389', '9024806221', 'imcguire589@eriugcmnai.net', 'Obrero', b'1'),
('I3TD9V0V8VBCJ', 'Justice', 'Griffith', 'Mcguire', '1941-02-25 00:00:00', '308 Buchanan Highway,San Antonio,TX,80071', '6749131598', 'jgriffith19@htiffirgecitsuj.net', 'Maestro', b'1'),
('CMFXBGLMV8RY9', 'Joseph', 'Klein', 'Adkins', '1972-01-31 00:00:00', '48 Watermelon Way,Ontario,DC,11259', '7156314715', 'jklein369@nielkhpesoj.org', 'Diseñador', b'1'),
('CQR2IKW9B5MOW', 'Jordan', 'Lang', 'Parker', '1979-06-09 00:00:00', '552 Guava Place,Sunnyvale,WA,61354', '8444620163', 'jlang288@gnalnadroj.org', 'Doctor', b'1'),
('SQZGZQ4DGXJI1', 'Jonathan', 'Munoz', 'Watkins', '1953-08-11 00:00:00', '1 Cleveland Expressway,Athens,TX,65009', '6357228533', 'jmunoz155@zonumnahtanoj.org', 'Empresario', b'1'),
('ZQ2TISAYZCKGB', 'Joshua', 'Patton', 'Hardy', '1937-10-13 00:00:00', '905 Jefferson Way,Visalia,CT,23066', '7555751043', 'jpatton359@nottapauhsoj.biz', 'Obrero', b'1'),
('08Q6E2M6D562L', 'Jeanette', 'Pratt', 'Marsh', '1985-04-30 00:00:00', '605 Beech Terrace,Wichita,DE,45962', '4786604920', 'jpratt513@ttarpettenaej.org', 'Pepenador', b'1'),
('6B1NOW8PI7XPD', 'Kirsten', 'Flynn', 'Hubbard', '1941-01-19 00:00:00', '334 South Grapefruit Road,Austin,CT,72822', '8508596030', 'kflynn782@nnylfnetsrik.com', 'Doctor', b'1'),
('HNONUBNADKZYN', 'Kassandra', 'Medina', 'Flynn', '1944-11-06 00:00:00', '328 Lime Garden,Midland,NH,39125', '9353411872', 'kmedina60@anidemardnassak.biz', 'Doctor', b'1'),
('NG4C2ZXCF266E', 'Kathryn', 'Pierce', 'Pratt', '1988-05-07 00:00:00', '505 Harding Highway,Naperville,NE,61404', '9433873100', 'kpierce871@ecreipnyrhtak.biz', 'Pepenador', b'1'),
('ï»¿JEZWVAE2GB', 'Kelsi', 'Quinn', 'Paul', '1936-06-25 00:00:00', '634 Apple Turnpike,Birmingham,MA,42258', '4102079027', 'kquinn200@nniuqislek.net', 'Maestro', b'1'),
('T6M7YM11UXQDA', 'Kendrick', 'Wilson', 'Brady', '1963-11-12 00:00:00', '109 South Truman Turnpike,Gainesville,CA,91175', '3809795907', 'kwilson465@nosliwkcirdnek.com', 'Empleado', b'1'),
('TGXEWESXSAYY6', 'Larry', 'Luna', 'Bowman', '1983-06-13 00:00:00', '83 Van Buren Way,Peoria,MI,63885', '7462953315', 'lluna809@anulyrral.biz', 'Profesor', b'1'),
('C4CW1MY6QXSNA', 'Lorena', 'Malone', 'Gomez', '1982-11-05 00:00:00', '233 Cleveland Lane,Oakland,OR,24956', '2476791529', 'lmalone916@enolamanerol.org', 'Profesor', b'1'),
('L13X67HBN0XY8', 'Marcos', 'Figueroa', 'Quinn', '1937-04-26 00:00:00', '842 Vine Garden,Chattanooga,HI,23893', '2889474828', 'mfigueroa269@aoreugifsocram.com', 'Empleado', b'1'),
('UK85K9PVH40V1', 'Mia', 'Ross', 'Munoz', '1946-12-09 00:00:00', '520 Sunset Garden,Corpus Christi,AR,42551', '3314242161', 'mross991@ssoraim.net', 'Doctor', b'1'),
('8HECC9HYL7PZJ', 'Mercedes', 'Steele', 'Gilbert', '1955-02-28 00:00:00', '652 South Mountain Expressway,Oklahoma City,MS,14596', '9017515228', 'msteele252@eleetssedecrem.org', 'Doctor', b'1'),
('5MXY74KAHZJ3L', 'Pedro', 'Cross', 'Harrington', '1985-08-18 00:00:00', '490 North Hickory Drive,Kansas City ,IL,00450', '9679332420', 'pcross184@ssorcordep.biz', 'Polí­tico', b'1'),
('VC2Z7Z7Y9I4LR', 'Reed', 'Ayala', 'Bates', '1935-11-09 00:00:00', '439 Buchanan Loop,Anaheim,FL,84149', '5095250080', 'rayala461@alayadeer.com', 'Bombero', b'1'),
('ZYFWLWRPWFR2J', 'Ramon', 'Ramos', 'Pierce', '1992-06-06 00:00:00', '128 Ash Lane,Fremont,CA,13276', '8382702587', 'rramos192@somarnomar.org', 'Empleado', b'1'),
('DA8HGBEWM9T0Q', 'Sasha', 'Mcguire', 'Ross', '1959-10-01 00:00:00', '641 Van Buren Circle,Dayton,NY,29698', '3503194456', 'smcguire509@eriugcmahsas.net', 'Bombero', b'1'),
('L1YBTTPQMIQHW', 'Skyler', 'Porter', 'Mcdaniel', '1966-01-10 00:00:00', '736 West Watermelon Drive,Fayetteville,TX,14556', '5484795187', 'sporter881@retroprelyks.org', 'Obrero', b'1'),
('6IOB09WPH1DUD', 'Sonia', 'Terry', 'Cross', '1989-07-15 00:00:00', '253 Banana Place,Denver,NC,42627', '8586867341', 'sterry223@yrretainos.org', 'Bombero', b'1'),
('WEFMGOFYU8ED5', 'Talia', 'Brady', 'Mitchell', '1973-11-28 00:00:00', '684 Van Buren Street,Odessa,NJ,89086', '3915879438', 'tbrady527@ydarbailat.com', 'Obrero', b'1'),
('1RHSPI5K4AC5O', 'Trey', 'Harrington', 'Malone', '1985-01-07 00:00:00', '79 West Taylor Way,Dallas,NH,13686', '7616407327', 'tharrington995@notgnirrahyert.net', 'Polí­tico', b'1'),
('QDUXCGMIW8I77', 'Ty', 'Parker', 'Wilson', '1976-11-19 00:00:00', '719 Adams Highway,Tempe,KY,18904', '7284930051', 'tparker145@rekrapyt.net', 'Diseñador', b'1'),
('5OZGGGUJIGCCO', 'Walter', 'Clarke', 'Steele', '1969-10-04 00:00:00', '397 East Johnson Garden,Lafayette,NE,03416', '7629536456', 'wclarke48@ekralcretlaw.com', 'Doctor', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `donadores_metodopago`
--

CREATE TABLE `donadores_metodopago` (
  `IdMetodo` char(3) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donadores_metodopago`
--

INSERT INTO `donadores_metodopago` (`IdMetodo`, `Email`, `Fecha`, `Observaciones`) VALUES
('M03', 'chardy488@ydrahdahc.biz', '2003-12-16 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M04', 'chubbard147@drabbuhassiralc.biz', '2004-06-24 00:00:00', 'est vitae euismod. Sed nec volutpat magna. Sed fermentum mauris vitae finibus mollis. Pellentesque sem nulla, cons'),
('M05', 'imcguire589@eriugcmnai.net', '2004-06-30 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M03', 'kmedina60@anidemardnassak.biz', '2005-01-03 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M05', 'iadams847@smadaaidni.com', '2005-02-20 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M02', 'cmunoz134@zonumeillac.net', '2007-04-25 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M03', 'jmunoz155@zonumnahtanoj.org', '2007-07-12 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M04', 'smcguire509@eriugcmahsas.net', '2009-08-20 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M02', 'sporter881@retroprelyks.org', '2010-02-01 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M04', 'wclarke48@ekralcretlaw.com', '2010-04-12 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M02', 'bwatkins578@sniktawecyrb.com', '2012-05-03 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M04', 'tparker145@rekrapyt.net', '2012-06-22 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M04', 'lluna809@anulyrral.biz', '2012-08-06 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M04', 'hgomez561@zemogyelah.com', '2012-12-30 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M04', 'bsilva515@avlisnodnerb.biz', '2014-03-10 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M03', 'tharrington995@notgnirrahyert.net', '2014-08-12 00:00:00', 'est vitae euismod. Sed nec volutpat magna. Sed fermentum mauris vitae finibus mollis. Pellentesque sem nulla, cons'),
('M03', 'jpratt513@ttarpettenaej.org', '2014-10-30 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M02', 'rramos192@somarnomar.org', '2016-04-29 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M02', 'apaul46@luapnothsa.net', '2017-02-09 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M03', 'rayala461@alayadeer.com', '2010-10-25 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M02', 'mfigueroa269@aoreugifsocram.com', '2011-09-14 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M03', 'jpatton359@nottapauhsoj.biz', '2011-11-11 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M03', 'kflynn782@nnylfnetsrik.com', '2012-04-18 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M05', 'jgriffith19@htiffirgecitsuj.net', '2012-06-10 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M02', 'fthornton47@notnrohtnaibaf.net', '2012-10-23 00:00:00', 'est vitae euismod. Sed nec volutpat magna. Sed fermentum mauris vitae finibus mollis. Pellentesque sem nulla, cons'),
('M05', 'awatkins182@sniktawadnama.biz', '2013-02-17 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M04', 'eoconnor522@ronnocorehtse.net', '2013-04-06 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M04', 'mross991@ssoraim.net', '2013-05-04 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M05', 'crowe302@ewordahc.net', '2013-05-17 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M05', 'dmcdaniel380@leinadcmnived.org', '2013-10-19 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M02', 'msteele252@eleetssedecrem.org', '2013-11-15 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M03', 'fadkins923@snikdatserrof.biz', '2014-10-19 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M05', 'cpeterson979@nosretepronnoc.net', '2015-03-04 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M03', 'hbowman225@namwobrehtaeh.biz', '2015-12-25 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M02', 'jlang288@gnalnadroj.org', '2016-01-18 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M02', 'ahill609@llihaicila.biz', '2016-12-12 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M04', 'bmarsh14@hsramennairb.biz', '2017-04-12 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M05', 'pcross184@ssorcordep.biz', '2017-07-27 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M05', 'cnguyen676@neyugnnotloc.net', '2018-04-05 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M05', 'abates592@setabyerbua.net', '2018-07-03 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q');

-- --------------------------------------------------------

--
-- Table structure for table `donadores_usocfdi`
--

CREATE TABLE `donadores_usocfdi` (
  `Email` varchar(254) NOT NULL,
  `IdCFDI` char(3) NOT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donadores_usocfdi`
--

INSERT INTO `donadores_usocfdi` (`Email`, `IdCFDI`, `Fecha`) VALUES
('chardy488@ydrahdahc.biz', 'G03', '2003-12-16 00:00:00'),
('chubbard147@drabbuhassiralc.biz', 'I02', '2004-06-24 00:00:00'),
('imcguire589@eriugcmnai.net', 'I03', '2004-06-30 00:00:00'),
('kmedina60@anidemardnassak.biz', 'G02', '2005-01-03 00:00:00'),
('iadams847@smadaaidni.com', 'I02', '2005-02-20 00:00:00'),
('cmunoz134@zonumeillac.net', 'I03', '2007-04-25 00:00:00'),
('jmunoz155@zonumnahtanoj.org', 'I04', '2007-07-12 00:00:00'),
('smcguire509@eriugcmahsas.net', 'D02', '2009-08-20 00:00:00'),
('sporter881@retroprelyks.org', 'D03', '2010-02-01 00:00:00'),
('wclarke48@ekralcretlaw.com', 'D04', '2010-04-12 00:00:00'),
('jklein369@nielkhpesoj.org', 'D05', '2011-08-28 00:00:00'),
('tbrady527@ydarbailat.com', 'I03', '2012-03-24 00:00:00'),
('bwatkins578@sniktawecyrb.com', 'I04', '2012-05-03 00:00:00'),
('lluna809@anulyrral.biz', 'D02', '2012-08-06 00:00:00'),
('bsilva515@avlisnodnerb.biz', 'D03', '2014-03-10 00:00:00'),
('tharrington995@notgnirrahyert.net', 'D04', '2014-08-12 00:00:00'),
('jpratt513@ttarpettenaej.org', 'D05', '2014-10-30 00:00:00'),
('sterry223@yrretainos.org', 'D06', '2015-07-05 00:00:00'),
('rramos192@somarnomar.org', 'D07', '0000-00-00 00:00:00'),
('apaul46@luapnothsa.net', 'D08', '2017-02-09 00:00:00'),
('rayala461@alayadeer.com', 'D09', '2010-10-25 00:00:00'),
('mfigueroa269@aoreugifsocram.com', 'I07', '2011-09-14 00:00:00'),
('jpatton359@nottapauhsoj.biz', 'I08', '2011-11-11 00:00:00'),
('kflynn782@nnylfnetsrik.com', 'D01', '2012-04-18 00:00:00'),
('jgriffith19@htiffirgecitsuj.net', 'D02', '2012-06-10 00:00:00'),
('fthornton47@notnrohtnaibaf.net', 'D03', '2012-10-23 00:00:00'),
('awatkins182@sniktawadnama.biz', 'D04', '2013-02-17 00:00:00'),
('eoconnor522@ronnocorehtse.net', 'D05', '2013-04-06 00:00:00'),
('mross991@ssoraim.net', 'D06', '2013-05-04 00:00:00'),
('crowe302@ewordahc.net', 'D07', '2013-05-17 00:00:00'),
('dmcdaniel380@leinadcmnived.org', 'D08', '2013-10-19 00:00:00'),
('msteele252@eleetssedecrem.org', 'D09', '2013-11-15 00:00:00'),
('fadkins923@snikdatserrof.biz', 'D10', '2014-10-19 00:00:00'),
('gmitchell133@llehctimyerffoeg.net', 'I07', '2015-02-05 00:00:00'),
('cpeterson979@nosretepronnoc.net', 'I08', '2015-03-04 00:00:00'),
('kwilson465@nosliwkcirdnek.com', 'D01', '2015-07-28 00:00:00'),
('hbowman225@namwobrehtaeh.biz', 'D02', '2015-12-25 00:00:00'),
('jlang288@gnalnadroj.org', 'I04', '2016-01-18 00:00:00'),
('ahill609@llihaicila.biz', 'I05', '2016-12-12 00:00:00'),
('lmalone916@enolamanerol.org', 'I06', '2016-12-30 00:00:00'),
('bmarsh14@hsramennairb.biz', 'I07', '2017-04-12 00:00:00'),
('pcross184@ssorcordep.biz', 'I08', '2017-07-27 00:00:00'),
('kpierce871@ecreipnyrhtak.biz', 'D01', '2018-01-16 00:00:00'),
('cnguyen676@neyugnnotloc.net', 'D02', '2018-04-05 00:00:00'),
('abates592@setabyerbua.net', 'D03', '2018-07-03 00:00:00'),
('chardy488@ydrahdahc.biz', 'G03', '2003-12-16 00:00:00'),
('chubbard147@drabbuhassiralc.biz', 'I02', '2004-06-24 00:00:00'),
('imcguire589@eriugcmnai.net', 'I03', '2004-06-30 00:00:00'),
('kmedina60@anidemardnassak.biz', 'G02', '2005-01-03 00:00:00'),
('iadams847@smadaaidni.com', 'I02', '2005-02-20 00:00:00'),
('cmunoz134@zonumeillac.net', 'I03', '2007-04-25 00:00:00'),
('jmunoz155@zonumnahtanoj.org', 'I04', '2007-07-12 00:00:00'),
('smcguire509@eriugcmahsas.net', 'D02', '2009-08-20 00:00:00'),
('sporter881@retroprelyks.org', 'D03', '2010-02-01 00:00:00'),
('wclarke48@ekralcretlaw.com', 'D04', '2010-04-12 00:00:00'),
('jklein369@nielkhpesoj.org', 'D05', '2011-08-28 00:00:00'),
('tbrady527@ydarbailat.com', 'I03', '2012-03-24 00:00:00'),
('bwatkins578@sniktawecyrb.com', 'I04', '2012-05-03 00:00:00'),
('lluna809@anulyrral.biz', 'D02', '2012-08-06 00:00:00'),
('bsilva515@avlisnodnerb.biz', 'D03', '2014-03-10 00:00:00'),
('tharrington995@notgnirrahyert.net', 'D04', '2014-08-12 00:00:00'),
('jpratt513@ttarpettenaej.org', 'D05', '2014-10-30 00:00:00'),
('sterry223@yrretainos.org', 'D06', '2015-07-05 00:00:00'),
('rramos192@somarnomar.org', 'D07', '0000-00-00 00:00:00'),
('apaul46@luapnothsa.net', 'D08', '2017-02-09 00:00:00'),
('rayala461@alayadeer.com', 'D09', '2010-10-25 00:00:00'),
('mfigueroa269@aoreugifsocram.com', 'I07', '2011-09-14 00:00:00'),
('jpatton359@nottapauhsoj.biz', 'I08', '2011-11-11 00:00:00'),
('kflynn782@nnylfnetsrik.com', 'D01', '2012-04-18 00:00:00'),
('jgriffith19@htiffirgecitsuj.net', 'D02', '2012-06-10 00:00:00'),
('fthornton47@notnrohtnaibaf.net', 'D03', '2012-10-23 00:00:00'),
('awatkins182@sniktawadnama.biz', 'D04', '2013-02-17 00:00:00'),
('eoconnor522@ronnocorehtse.net', 'D05', '2013-04-06 00:00:00'),
('mross991@ssoraim.net', 'D06', '2013-05-04 00:00:00'),
('crowe302@ewordahc.net', 'D07', '2013-05-17 00:00:00'),
('dmcdaniel380@leinadcmnived.org', 'D08', '2013-10-19 00:00:00'),
('msteele252@eleetssedecrem.org', 'D09', '2013-11-15 00:00:00'),
('fadkins923@snikdatserrof.biz', 'D10', '2014-10-19 00:00:00'),
('gmitchell133@llehctimyerffoeg.net', 'I07', '2015-02-05 00:00:00'),
('cpeterson979@nosretepronnoc.net', 'I08', '2015-03-04 00:00:00'),
('kwilson465@nosliwkcirdnek.com', 'D01', '2015-07-28 00:00:00'),
('hbowman225@namwobrehtaeh.biz', 'D02', '2015-12-25 00:00:00'),
('jlang288@gnalnadroj.org', 'I04', '2016-01-18 00:00:00'),
('ahill609@llihaicila.biz', 'I05', '2016-12-12 00:00:00'),
('lmalone916@enolamanerol.org', 'I06', '2016-12-30 00:00:00'),
('bmarsh14@hsramennairb.biz', 'I07', '2017-04-12 00:00:00'),
('pcross184@ssorcordep.biz', 'I08', '2017-07-27 00:00:00'),
('kpierce871@ecreipnyrhtak.biz', 'D01', '2018-01-16 00:00:00'),
('cnguyen676@neyugnnotloc.net', 'D02', '2018-04-05 00:00:00'),
('abates592@setabyerbua.net', 'D03', '2018-07-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `IdEvento` char(4) NOT NULL,
  `Nombre` text,
  `Fecha` datetime DEFAULT NULL,
  `Lugar` text,
  `Descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`IdEvento`, `Nombre`, `Fecha`, `Lugar`, `Descripcion`) VALUES
('E001', 'bibendum bibendum', '2012-08-11 00:00:00', 'Casa', 'Vestibulum non dictum nunc. Aenean nisl lorem, fermentum ut finibus sit amet, placerat et neque. Vestibulum a magna id dolor lacinia sasfermentum sit amet arcu. Maecenas id interdum felis. Integer sdaut asdfvitae aliquam. Ut vitae condimentum felis, id tempus augue. Phasellus ut ligula quis turpis pellentesque suscipit. Morbi lacinia sapien venenatis lectus vehicula sollicitudin. Donec consectetur enim elit, quis laoreet eros congue sit amet. Phasellus quis elit ut sem ornare vulputate. Etiam vulputate massa risus. Praesent dapibus mauris diam, id sodales metus posuere in. Suspendisse eleifend, nisl eget imperdiet iaculis, dui ligula lacinia massa, quis accumsan velit nunc at neque. Etiam dictum dolor justo, ut congue felis pharetra nec. Morbi tristique suscipit diam at interdum. Donec feugiat finibus leo.'),
('E002', 'bibendum bibendum', '2011-07-21 00:00:00', 'Puruándiro', 'Vestibulum non dictum nunc. Aenean nisl lorem, fermentum ut finibus sit amet, placerat et neque. Vestibulum a magna id dolor lacinia dapibus fermentum sit amet arcu. Maecenas id interdum felis. Integer fringilla ut lorem vitae aliquam. Ut vitae condimentum felis, id tempus augue. Phasellus ut ligula quis turpis pellentesque suscipit. Morbi lacinia sapien venenatis lectus vehicula sollicitudin. Donec consectetur enim elit, quis laoreet eros congue sit amet. Phasellus quis elit ut sem ornare vulputate. Etiam vulputate massa risus. Praesent dapibus mauris diam, id sodales metus posuere in. Suspendisse eleifend, nisl eget imperdiet iaculis, dui ligula lacinia massa, quis accumsan velit nunc at neque. Etiam dictum dolor justo, ut congue felis pharetra nec. Morbi tristique suscipit diam at interdum. Donec feugiat finibus leo.'),
('E003', 'varius bibendum', '2011-10-09 00:00:00', 'Queréndaro', 'Quisque feugiat ut ligula id molestie. Curabitur elementum magna vitae dolor molestie, sit amet lacinia velit aliquet. Vivamus non orci a odio auctor commodo. Integer interdum felis a velit fermentum porttitor. Mauris lobortis, sem pharetra commodo commodo, dui odio posuere nunc, vel dapibus orci libero a diam. Sed eu augue auctor velit hendrerit bibendum sed et ex. Pellentesque sodales metus vitae sem ullamcorper, nec dignissim urna cursus.'),
('E004', 'feugiatDuis', '2012-03-24 00:00:00', 'Quiroga', 'Maecenas non mollis sapien, nec aliquam sapien. Donec urna orci, tincidunt rutrum elit quis, consequat cursus nisl. Vivamus pretium tempus lectus maximus ornare. Nam id blandit dolor, eget malesuada ligula. Vivamus sed nunc lacus. In eget dolor eget risus semper bibendum. Praesent ut sapien tincidunt, pulvinar orci nec, ultrices nisi. Quisque commodo varius faucibus. Nunc id justo tortor. Morbi ac egestas lorem. Sed elit velit, vestibulum laoreet metus quis, ullamcorper blandit lacus.'),
('E005', 'Ut lectusDuis', '2012-10-09 00:00:00', 'Cojumatlán de Régules', 'Vivamus semper arcu et urna eleifend dapibus. Fusce porta pretium sodales. Phasellus eget luctus velit. Phasellus in aliquet ex. Pellentesque consequat consectetur odio, ut ultricies diam tempus vel. Maecenas facilisis porta nisl, non congue urna porta vitae. In vehicula tincidunt massa nec tempus. Duis sagittis pulvinar nisl et feugiat. Aliquam erat volutpat. Quisque ut odio massa.'),
('E006', 'Duis Duis', '2012-12-18 00:00:00', 'Los Reyes', 'Vestibulum non dictum nunc. Aenean nisl lorem, fermentum ut finibus sit amet, placerat et neque. Vestibulum a magna id dolor lacinia dapibus fermentum sit amet arcu. Maecenas id interdum felis. Integer fringilla ut lorem vitae aliquam. Ut vitae condimentum felis, id tempus augue. Phasellus ut ligula quis turpis pellentesque suscipit. Morbi lacinia sapien venenatis lectus vehicula sollicitudin. Donec consectetur enim elit, quis laoreet eros congue sit amet. Phasellus quis elit ut sem ornare vulputate. Etiam vulputate massa risus. Praesent dapibus mauris diam, id sodales metus posuere in. Suspendisse eleifend, nisl eget imperdiet iaculis, dui ligula lacinia massa, quis accumsan velit nunc at neque. Etiam dictum dolor justo, ut congue felis pharetra nec. Morbi tristique suscipit diam at interdum. Donec feugiat finibus leo.'),
('E007', 'bibendum egestas', '2013-01-09 00:00:00', 'Sahuayo', 'Quisque feugiat ut ligula id molestie. Curabitur elementum magna vitae dolor molestie, sit amet lacinia velit aliquet. Vivamus non orci a odio auctor commodo. Integer interdum felis a velit fermentum porttitor. Mauris lobortis, sem pharetra commodo commodo, dui odio posuere nunc, vel dapibus orci libero a diam. Sed eu augue auctor velit hendrerit bibendum sed et ex. Pellentesque sodales metus vitae sem ullamcorper, nec dignissim urna cursus.'),
('E008', 'varius felis', '2013-02-08 00:00:00', 'San Lucas', 'Maecenas non mollis sapien, nec aliquam sapien. Donec urna orci, tincidunt rutrum elit quis, consequat cursus nisl. Vivamus pretium tempus lectus maximus ornare. Nam id blandit dolor, eget malesuada ligula. Vivamus sed nunc lacus. In eget dolor eget risus semper bibendum. Praesent ut sapien tincidunt, pulvinar orci nec, ultrices nisi. Quisque commodo varius faucibus. Nunc id justo tortor. Morbi ac egestas lorem. Sed elit velit, vestibulum laoreet metus quis, ullamcorper blandit lacus.'),
('E009', 'feugiatfelis', '2013-05-10 00:00:00', 'Senguio', 'Sed sem eros, laoreet in turpis fermentum, tristique bibendum arcu. Maecenas eget leo volutpat, venenatis odio sit amet, sagittis erat. Aliquam auctor diam non ipsum fringilla aliquam. Vestibulum mollis, augue non porttitor ullamcorper, elit nisi dapibus neque, sed interdum erat lacus in ligula. Quisque consectetur tellus a gravida vestibulum. Donec eu finibus lectus. Vivamus leo est, interdum convallis venenatis sit amet, egestas ac nisi. Suspendisse mollis mauris vel nibh sodales posuere. Duis rutrum tortor quis lacus sagittis, at aliquam ipsum auctor. Integer sed felis orci. Quisque dignissim turpis eget elit consequat auctor. Fusce tempor egestas massa, vitae lobortis risus ultricies vitae. Sed mattis neque metus, vel rhoncus enim pulvinar eu. Morbi feugiat risus id sapien sollicitudin dignissim. Suspendisse vehicula odio at neque interdum fermentum. Nullam tempor dui sit amet neque fringilla tincidunt.'),
('E010', 'Ut lectusfeugiat', '2013-09-04 00:00:00', 'Salvador Escalante', 'Sed convallis bibendum tortor quis ultrices. Donec in dolor placerat, sodales magna quis, pharetra nunc. Vestibulum dictum erat nec justo malesuada, ut dapibus arcu laoreet. Pellentesque tempor sodales augue eu vestibulum. Mauris eu fringilla nisi. Quisque viverra ut erat eget pellentesque. Curabitur eu venenatis enim. In urna ligula, imperdiet vitae erat sit amet, dignissim commodo mauris. Nunc condimentum egestas tortor ut porttitor. Etiam malesuada interdum sem.'),
('E011', 'felisfeugiat', '2014-01-19 00:00:00', 'Senguio', 'Donec ac purus venenatis, venenatis nibh in, congue augue. Integer feugiat suscipit magna quis lacinia. Fusce sit amet velit non augue hendrerit egestas. Donec id venenatis massa. Maecenas lobortis et arcu ac auctor. Praesent placerat eros tortor, id auctor justo elementum nec. Pellentesque posuere odio id turpis vehicula mollis. Nunc ut elementum lacus. Praesent at lacinia erat, quis porttitor ante. Mauris bibendum augue eget nunc facilisis, vitae vehicula diam tempor. Nulla tempor quam eget ante lacinia, ac ullamcorper justo aliquet.'),
('E012', 'egestas feugiat', '2014-04-30 00:00:00', 'Susupuato', 'Phasellus tincidunt pretium nunc in suscipit. Aliquam pharetra fermentum metus. Quisque sit amet rutrum lacus, ac elementum velit. Donec tempor libero nec elit molestie, sit amet ornare tellus aliquet. Nullam lacus sapien, rutrum tempor fringilla at, venenatis ac tortor. Fusce porttitor consectetur risus, et sagittis massa ultrices et. Fusce molestie dictum sollicitudin. Proin blandit eu magna eget porta. Vestibulum dictum arcu at eleifend vehicula. Ut efficitur erat nec neque scelerisque, a lobortis augue malesuada. Cras cursus tempus ligula. Duis at suscipit turpis. Vivamus turpis neque, elementum sit amet dolor a, interdum lacinia dui. Proin vitae convallis lectus.'),
('E013', 'vel ex sed', '2014-07-09 00:00:00', 'Salvador Escalante', 'Curabitur commodo placerat ultrices. Vivamus leo nisl, dictum ac imperdiet vitae, feugiat non dui. Ut convallis sapien nec nisi mollis, a sagittis metus porta. Nunc sed erat eros. Sed non dolor augue. Etiam vitae velit et massa commodo pretium sit amet maximus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut tortor pharetra, mollis dolor a, tincidunt augue. Aenean pharetra tempor augue, eget convallis dolor cursus eu. Etiam rhoncus nisi ac ipsum mattis, in porttitor tellus consectetur.'),
('E014', 'sedUt lectus', '2014-12-08 00:00:00', 'Senguio', 'Vivamus semper arcu et urna eleifend dapibus. Fusce porta pretium sodales. Phasellus eget luctus velit. Phasellus in aliquet ex. Pellentesque consequat consectetur odio, ut ultricies diam tempus vel. Maecenas facilisis porta nisl, non congue urna porta vitae. In vehicula tincidunt massa nec tempus. Duis sagittis pulvinar nisl et feugiat. Aliquam erat volutpat. Quisque ut odio massa.'),
('E015', 'Duis Ut lectus', '2016-02-29 00:00:00', 'Susupuato', 'Vestibulum non dictum nunc. Aenean nisl lorem, fermentum ut finibus sit amet, placerat et neque. Vestibulum a magna id dolor lacinia dapibus fermentum sit amet arcu. Maecenas id interdum felis. Integer fringilla ut lorem vitae aliquam. Ut vitae condimentum felis, id tempus augue. Phasellus ut ligula quis turpis pellentesque suscipit. Morbi lacinia sapien venenatis lectus vehicula sollicitudin. Donec consectetur enim elit, quis laoreet eros congue sit amet. Phasellus quis elit ut sem ornare vulputate. Etiam vulputate massa risus. Praesent dapibus mauris diam, id sodales metus posuere in. Suspendisse eleifend, nisl eget imperdiet iaculis, dui ligula lacinia massa, quis accumsan velit nunc at neque. Etiam dictum dolor justo, ut congue felis pharetra nec. Morbi tristique suscipit diam at interdum. Donec feugiat finibus leo.'),
('E016', 'bibendum Ut lectus', '2016-10-16 00:00:00', 'Purépero', 'Quisque feugiat ut ligula id molestie. Curabitur elementum magna vitae dolor molestie, sit amet lacinia velit aliquet. Vivamus non orci a odio auctor commodo. Integer interdum felis a velit fermentum porttitor. Mauris lobortis, sem pharetra commodo commodo, dui odio posuere nunc, vel dapibus orci libero a diam. Sed eu augue auctor velit hendrerit bibendum sed et ex. Pellentesque sodales metus vitae sem ullamcorper, nec dignissim urna cursus.'),
('E017', 'varius varius', '2017-06-26 00:00:00', 'Puruándiro', 'Maecenas non mollis sapien, nec aliquam sapien. Donec urna orci, tincidunt rutrum elit quis, consequat cursus nisl. Vivamus pretium tempus lectus maximus ornare. Nam id blandit dolor, eget malesuada ligula. Vivamus sed nunc lacus. In eget dolor eget risus semper bibendum. Praesent ut sapien tincidunt, pulvinar orci nec, ultrices nisi. Quisque commodo varius faucibus. Nunc id justo tortor. Morbi ac egestas lorem. Sed elit velit, vestibulum laoreet metus quis, ullamcorper blandit lacus.'),
('E018', 'feugiatvarius', '2017-10-28 00:00:00', 'Queréndaro', 'Phasellus tincidunt pretium nunc in suscipit. Aliquam pharetra fermentum metus. Quisque sit amet rutrum lacus, ac elementum velit. Donec tempor libero nec elit molestie, sit amet ornare tellus aliquet. Nullam lacus sapien, rutrum tempor fringilla at, venenatis ac tortor. Fusce porttitor consectetur risus, et sagittis massa ultrices et. Fusce molestie dictum sollicitudin. Proin blandit eu magna eget porta. Vestibulum dictum arcu at eleifend vehicula. Ut efficitur erat nec neque scelerisque, a lobortis augue malesuada. Cras cursus tempus ligula. Duis at suscipit turpis. Vivamus turpis neque, elementum sit amet dolor a, interdum lacinia dui. Proin vitae convallis lectus.'),
('E019', 'Ut lectusvarius', '2018-07-06 00:00:00', 'Quiroga', 'Curabitur commodo placerat ultrices. Vivamus leo nisl, dictum ac imperdiet vitae, feugiat non dui. Ut convallis sapien nec nisi mollis, a sagittis metus porta. Nunc sed erat eros. Sed non dolor augue. Etiam vitae velit et massa commodo pretium sit amet maximus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut tortor pharetra, mollis dolor a, tincidunt augue. Aenean pharetra tempor augue, eget convallis dolor cursus eu. Etiam rhoncus nisi ac ipsum mattis, in porttitor tellus consectetur.'),
('E020', 'felisvel ex', '2018-09-27 00:00:00', 'Cojumatlán de Régules', 'Donec ac purus venenatis, venenatis nibh in, congue augue. Integer feugiat suscipit magna quis lacinia. Fusce sit amet velit non augue hendrerit egestas. Donec id venenatis massa. Maecenas lobortis et arcu ac auctor. Praesent placerat eros tortor, id auctor justo elementum nec. Pellentesque posuere odio id turpis vehicula mollis. Nunc ut elementum lacus. Praesent at lacinia erat, quis porttitor ante. Mauris bibendum augue eget nunc facilisis, vitae vehicula diam tempor. Nulla tempor quam eget ante lacinia, ac ullamcorper justo aliquet.');

-- --------------------------------------------------------

--
-- Table structure for table `funcion`
--

CREATE TABLE `funcion` (
  `IdFuncion` char(4) NOT NULL,
  `Nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funcion`
--

INSERT INTO `funcion` (`IdFuncion`, `Nombre`) VALUES
('F001', 'Registrar noticia'),
('F002', 'Editar noticia'),
('F003', 'Borrar noticia'),
('F004', 'Consultar donadores'),
('F005', 'Modificar donadores'),
('F006', 'Validar donadores'),
('F007', 'Modificar cuentas de usuarios'),
('F008', 'Modificar perfil de usuario'),
('F009', 'Registrar rol'),
('F010', 'Asignar roles'),
('F011', 'Asignar privilegios a rol'),
('F012', 'Modificar roles'),
('F013', 'Eliminar rol'),
('F014', 'Registrar evento'),
('F015', 'Modificar evento'),
('F016', 'Borrar evento'),
('F017', 'Registrar plantilla de correo'),
('F018', 'Programar correo a donadores'),
('F019', 'Eliminar plantilla de correo'),
('F020', 'Modificar plantilla de correo'),
('F021', 'Registrar archivos multimedia'),
('F022', 'Eliminar archivos multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `metodopago`
--

CREATE TABLE `metodopago` (
  `IdMetodo` char(3) NOT NULL,
  `Descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metodopago`
--

INSERT INTO `metodopago` (`IdMetodo`, `Descripcion`) VALUES
('M01', 'Tarjeta de crédito o débito'),
('M02', 'Transferencia interbancaria'),
('M03', 'Cheque bancario'),
('M04', 'Paypal'),
('M05', 'Otro');

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE `noticia` (
  `IdNoticia` char(5) NOT NULL,
  `Titulo` text,
  `Cuerpo` text,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`IdNoticia`, `Titulo`, `Cuerpo`, `Fecha`) VALUES
('N0001', 'A los ninos les gusta la comida', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining e', '2010-06-22 00:00:00'),
('N0002', 'A los ninos les gusta la musica', 'essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2010-07-07 00:00:00'),
('N0003', 'Juan Rulfo Revive y dona a ninosyninas', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\',', '2010-11-28 00:00:00'),
('N0004', 'Michael Jackson no esta muerto, resulta ser donador de ninosyninas', 'making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2011-09-26 00:00:00'),
('N0005', 'Desdubre como ninosyninas ha resultado ser la organizacion mas fundada del mundo', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the c', '2013-03-31 00:00:00'),
('N0006', 'los ninos de ninosyninas estan cansados de que les digamos ninos', 'cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of e', '2013-05-02 00:00:00'),
('N0007', 'Titulo generico de noticia', 'f ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2014-07-25 00:00:00'),
('N0008', 'Termintaor Genisis genera 500 millones de dolares en Box Office, la mitad de las donaciones diarias de ninosyninas', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined ch', '2015-12-29 00:00:00'),
('N0009', 'Ronladinho se retira y dona toda su fortuna a ninosyninas', 'chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful', '2016-09-22 00:00:00'),
('N0010', 'Lorem Ipsum, Ipsum Lorem', 'of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2017-11-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `plantilladecorreo`
--

CREATE TABLE `plantilladecorreo` 
(  `IdCorreo` char(6) NOT NULL,
  `Asunto` text,
  `Contenido` text,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantilladecorreo`
--

INSERT INTO `plantilladecorreo` (`IdCorreo`, `Asunto`, `Contenido`, `Fecha`) VALUES
('C00001', 'Duis', 'Vivamus semper arcu et urna eleifend dapibus. Fusce porta pretium sodales. Phasellus eget luctus velit. Phasellus in aliquet ex. Pellentesque consequat consectetur odio, ut ultricies diam tempus vel. Maecenas facilisis porta nisl, non congue urna porta vitae. In vehicula tincidunt massa nec tempus. Duis sagittis pulvinar nisl et feugiat. Aliquam erat volutpat. Quisque ut odio massa.', '2011-04-25 00:00:00'),
('C00002', 'bibendum', 'Vestibulum non dictum nunc. Aenean nisl lorem, fermentum ut finibus sit amet, placerat et neque. Vestibulum a magna id dolor lacinia dapibus fermentum sit amet arcu. Maecenas id interdum felis. Integer fringilla ut lorem vitae aliquam. Ut vitae condimentum felis, id tempus augue. Phasellus ut ligula quis turpis pellentesque suscipit. Morbi lacinia sapien venenatis lectus vehicula sollicitudin. Donec consectetur enim elit, quis laoreet eros congue sit amet. Phasellus quis elit ut sem ornare vulputate. Etiam vulputate massa risus. Praesent dapibus mauris diam, id sodales metus posuere in. Suspendisse eleifend, nisl eget imperdiet iaculis, dui ligula lacinia massa, quis accumsan velit nunc at neque. Etiam dictum dolor justo, ut congue felis pharetra nec. Morbi tristique suscipit diam at interdum. Donec feugiat finibus leo.', '2011-06-14 00:00:00'),
('C00003', 'varius', 'Quisque feugiat ut ligula id molestie. Curabitur elementum magna vitae dolor molestie, sit amet lacinia velit aliquet. Vivamus non orci a odio auctor commodo. Integer interdum felis a velit fermentum porttitor. Mauris lobortis, sem pharetra commodo commodo, dui odio posuere nunc, vel dapibus orci libero a diam. Sed eu augue auctor velit hendrerit bibendum sed et ex. Pellentesque sodales metus vitae sem ullamcorper, nec dignissim urna cursus.', '2011-11-03 00:00:00'),
('C00004', 'feugiat', 'Maecenas non mollis sapien, nec aliquam sapien. Donec urna orci, tincidunt rutrum elit quis, consequat cursus nisl. Vivamus pretium tempus lectus maximus ornare. Nam id blandit dolor, eget malesuada ligula. Vivamus sed nunc lacus. In eget dolor eget risus semper bibendum. Praesent ut sapien tincidunt, pulvinar orci nec, ultrices nisi. Quisque commodo varius faucibus. Nunc id justo tortor. Morbi ac egestas lorem. Sed elit velit, vestibulum laoreet metus quis, ullamcorper blandit lacus.', '2012-03-10 00:00:00'),
('C00005', 'Ut lectus', 'Sed sem eros, laoreet in turpis fermentum, tristique bibendum arcu. Maecenas eget leo volutpat, venenatis odio sit amet, sagittis erat. Aliquam auctor diam non ipsum fringilla aliquam. Vestibulum mollis, augue non porttitor ullamcorper, elit nisi dapibus neque, sed interdum erat lacus in ligula. Quisque consectetur tellus a gravida vestibulum. Donec eu finibus lectus. Vivamus leo est, interdum convallis venenatis sit amet, egestas ac nisi. Suspendisse mollis mauris vel nibh sodales posuere. Duis rutrum tortor quis lacus sagittis, at aliquam ipsum auctor. Integer sed felis orci. Quisque dignissim turpis eget elit consequat auctor. Fusce tempor egestas massa, vitae lobortis risus ultricies vitae. Sed mattis neque metus, vel rhoncus enim pulvinar eu. Morbi feugiat risus id sapien sollicitudin dignissim. Suspendisse vehicula odio at neque interdum fermentum. Nullam tempor dui sit amet neque fringilla tincidunt.', '2015-09-02 00:00:00'),
('C00006', 'felis', 'Sed convallis bibendum tortor quis ultrices. Donec in dolor placerat, sodales magna quis, pharetra nunc. Vestibulum dictum erat nec justo malesuada, ut dapibus arcu laoreet. Pellentesque tempor sodales augue eu vestibulum. Mauris eu fringilla nisi. Quisque viverra ut erat eget pellentesque. Curabitur eu venenatis enim. In urna ligula, imperdiet vitae erat sit amet, dignissim commodo mauris. Nunc condimentum egestas tortor ut porttitor. Etiam malesuada interdum sem.', '2015-12-22 00:00:00'),
('C00007', 'egestas', 'Donec ac purus venenatis, venenatis nibh in, congue augue. Integer feugiat suscipit magna quis lacinia. Fusce sit amet velit non augue hendrerit egestas. Donec id venenatis massa. Maecenas lobortis et arcu ac auctor. Praesent placerat eros tortor, id auctor justo elementum nec. Pellentesque posuere odio id turpis vehicula mollis. Nunc ut elementum lacus. Praesent at lacinia erat, quis porttitor ante. Mauris bibendum augue eget nunc facilisis, vitae vehicula diam tempor. Nulla tempor quam eget ante lacinia, ac ullamcorper justo aliquet.', '2016-08-26 00:00:00'),
('C00008', 'vel ex', 'Phasellus tincidunt pretium nunc in suscipit. Aliquam pharetra fermentum metus. Quisque sit amet rutrum lacus, ac elementum velit. Donec tempor libero nec elit molestie, sit amet ornare tellus aliquet. Nullam lacus sapien, rutrum tempor fringilla at, venenatis ac tortor. Fusce porttitor consectetur risus, et sagittis massa ultrices et. Fusce molestie dictum sollicitudin. Proin blandit eu magna eget porta. Vestibulum dictum arcu at eleifend vehicula. Ut efficitur erat nec neque scelerisque, a lobortis augue malesuada. Cras cursus tempus ligula. Duis at suscipit turpis. Vivamus turpis neque, elementum sit amet dolor a, interdum lacinia dui. Proin vitae convallis lectus.', '2016-09-23 00:00:00'),
('C00009', 'sed', 'Curabitur commodo placerat ultrices. Vivamus leo nisl, dictum ac imperdiet vitae, feugiat non dui. Ut convallis sapien nec nisi mollis, a sagittis metus porta. Nunc sed erat eros. Sed non dolor augue. Etiam vitae velit et massa commodo pretium sit amet maximus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut tortor pharetra, mollis dolor a, tincidunt augue. Aenean pharetra tempor augue, eget convallis dolor cursus eu. Etiam rhoncus nisi ac ipsum mattis, in porttitor tellus consectetur.', '2016-12-14 00:00:00'),
('C00010', 'cursus', 'Maecenas vulputate, lectus quis maximus porta, odio elit suscipit justo, varius blandit dui dui placerat lectus. Praesent laoreet mi ut enim interdum mollis. Duis sed sollicitudin dolor. Phasellus ac imperdiet ante. Sed convallis quis arcu id viverra. Vestibulum vitae velit volutpat, ornare sem non, rutrum est. Curabitur efficitur ipsum id magna laoreet, dignissim iaculis elit sagittis.', '2017-09-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `IdRol` char(3) NOT NULL,
  `Nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`IdRol`, `Nombre`) VALUES
('R01', 'Administrador'),
('R02', 'Editor general'),
('R03', 'Fotografía'),
('R04', 'Eventos'),
('R05', 'Noticias'),
('R06', 'Roles');

-- --------------------------------------------------------

--
-- Table structure for table `rol_funcion`
--

CREATE TABLE `rol_funcion` (
  `IdFuncion` char(4) NOT NULL,
  `IdRol` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol_funcion`
--

INSERT INTO `rol_funcion` (`IdFuncion`, `IdRol`) VALUES
('F001', 'R05'),
('F002', 'R05'),
('F003', 'R05'),
('F014', 'R04'),
('F015', 'R04'),
('F016', 'R04'),
('F021', 'R03'),
('F022', 'R03'),
('F001', 'R02'),
('F002', 'R02'),
('F003', 'R02'),
('F014', 'R02'),
('F015', 'R02'),
('F016', 'R02'),
('F017', 'R02'),
('F018', 'R02'),
('F019', 'R02'),
('F020', 'R02'),
('F021', 'R02'),
('F022', 'R02'),
('F007', 'R06'),
('F008', 'R06'),
('F009', 'R06'),
('F010', 'R06'),
('F011', 'R06'),
('F012', 'R06'),
('F013', 'R06'),
('F001', 'R01'),
('F002', 'R01'),
('F003', 'R01'),
('F004', 'R01'),
('F005', 'R01'),
('F006', 'R01'),
('F007', 'R01'),
('F008', 'R01'),
('F009', 'R01'),
('F010', 'R01'),
('F011', 'R01'),
('F012', 'R01'),
('F013', 'R01'),
('F014', 'R01'),
('F015', 'R01'),
('F016', 'R01'),
('F017', 'R01'),
('F018', 'R01'),
('F019', 'R01'),
('F020', 'R01'),
('F021', 'R01'),
('F022', 'R01');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail`
--

CREATE TABLE `thumbnail` (
  `Thurl` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thumbnail`
--

INSERT INTO `thumbnail` (`Thurl`) VALUES
('thurl/ipsum1.jpg'),
('thurl/ipsum10.jpg'),
('thurl/ipsum11.jpg'),
('thurl/ipsum12.jpg'),
('thurl/ipsum13.jpg'),
('thurl/ipsum14.jpg'),
('thurl/ipsum15.jpg'),
('thurl/ipsum16.jpg'),
('thurl/ipsum17.jpg'),
('thurl/ipsum18.jpg'),
('thurl/ipsum19.jpg'),
('thurl/ipsum2.jpg'),
('thurl/ipsum20.jpg'),
('thurl/ipsum3.jpg'),
('thurl/ipsum4.jpg'),
('thurl/ipsum5.jpg'),
('thurl/ipsum6.jpg'),
('thurl/ipsum7.jpg'),
('thurl/ipsum8.jpg'),
('thurl/ipsum9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usocfdi`
--

CREATE TABLE `usocfdi` (
  `IdCFDI` char(3) NOT NULL,
  `Nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usocfdi`
--

INSERT INTO `usocfdi` (`IdCFDI`, `Nombre`) VALUES
('D01', 'Honorarios médicos, dentales y gastos hospitalarios'),
('D02', 'Gastos médicos por incapacidad o discapacidad'),
('D03', 'Gastos funerales'),
('D04', 'Donativos'),
('D05', 'Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación)'),
('D06', 'Aportaciones voluntarias al SAR'),
('D07', 'Primas por seguros de gastos médicos'),
('D08', 'Gastos de transportación escolar obligatoria'),
('D09', 'Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones'),
('D10', 'Pagos por servicios educativos (colegiaturas)'),
('G02', 'Devoluciones, descuentos o bonificaciones'),
('G03', 'Gastos en general'),
('I02', 'Mobilario y equipo de oficina por inversiones'),
('I03', 'Equipo de transporte'),
('I04', 'Equipo de computo y accesorios'),
('I05', 'Dados, troqueles, moldes, matrices y herramental'),
('I06', 'Comunicaciones telefónicas'),
('I07', 'Comunicaciones satelitales'),
('I08', 'Otra maquinaria y equipo'),
('ï»¿', 'Adquisición de mercancias'),
('P01', 'Por definir');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `Email` varchar(254) NOT NULL,
  `Pswd` varchar(20) DEFAULT NULL,
  `Nombre` varchar(250) DEFAULT Null,
  `Telefono` varchar(20) DEFAULT Null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`Email`, `Pswd`,`Nombre`,`Telefono`) VALUES
('admon@mail.com', 'nomad4123','admon','(108) 136-6273'),
('angelica@mail.com', 'abcdef','Angelica','(244) 148-0331'),
('cesar@mail.com', 'sa=9asd','cesar','(515) 336-7754'),
('dagoberto@mail.com', '123sada','dagoberto','(334) 303-8323'),
('jaunpi@mail.com', 'ipnuaj','jaunpi','(617) 476-2078'),
('joaquin@mail.com', 'asdasfas','Joaquin','(935) 529-7241'),
('lalo@mail.com', 'hockey','lalo','(395) 467-2922'),
('marcelo@mail.com', '1+92as','marcelo','(513) 740-9459'),
('peponks@mail.com', 'jajaxd345','peponks','(686) 119-7904'),
('suzana@mail.com', '123456','Suzana','(314) 122-0754');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_noticia`
--

CREATE TABLE `usuario_noticia` (
  `IdNoticia` char(5) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_noticia`
--

INSERT INTO `usuario_noticia` (`IdNoticia`, `Email`, `Fecha`) VALUES
('N0001', 'joaquin@mail.com', '2018-01-01 00:00:00'),
('N0002', 'suzana@mail.com', '2018-02-01 00:00:00'),
('N0003', 'marcelo@mail.com', '2018-03-01 00:00:00'),
('N0004', 'cesar@mail.com', '2018-04-01 00:00:00'),
('N0005', 'peponks@mail.com', '2018-05-01 00:00:00'),
('N0006', 'dagoberto@mail.com', '2018-06-01 00:00:00'),
('N0008', 'cesar@mail.com', '2018-08-01 00:00:00'),
('N0009', 'marcelo@mail.com', '2018-09-01 00:00:00'),
('N0010', 'joaquin@mail.com', '2018-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `Email` varchar(254) NOT NULL,
  `IdRol` char(3) NOT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_rol`
--

INSERT INTO `usuario_rol` (`Email`, `IdRol`, `Fecha`) VALUES
('angelica@mail.com', 'R02', '2018-01-09 00:00:00'),
('dagoberto@mail.com', 'R03', '2018-01-11 00:00:00'),
('marcelo@mail.com', 'R06', '2018-01-12 00:00:00'),
('jaunpi@mail.com', 'R05', '2018-01-14 00:00:00'),
('lalo@mail.com', 'R04', '2018-01-16 00:00:00'),
('peponks@mail.com', 'R04', '2018-01-17 00:00:00'),
('suzana@mail.com', 'R01', '2018-02-17 00:00:00');

CREATE TABLE `mision` (
  `IdMision` char(3) NOT NULL,
  `Mision` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mision` (`IdMision`, `Mision`) VALUES
('m01', 'Generamos un programa de formación integral con las niñas, niños y adolescentes que junto con su famlia han hecho de la calle su lugar de trabajo; para desarrollar sus capacidades básicas y construir alternativas que les permitan mejorar sus oportunidades de vida.');



CREATE TABLE `vision` (
  `IdVision` char(3) NOT NULL,
  `Vision` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `vision` (`IdVision`, `Vision`) VALUES
('v01', 'Queremos ser un espacio en donde niños y niñas que viven en condiciones adversas por la marginación, encuentren opciones de desarrollo intelectual, emocional y social. Una oportunidad que les facilite una mejor calidad de vida y una opción laboral distinta a la calle.');

CREATE TABLE `objetivo` (
  `IdObjetivo` char(3) NOT NULL,
  `Objetivo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `objetivo` (`IdObjetivo`, `Objetivo`) VALUES
('o01', 'Llevar a cabo con los niños en situación de calle, un programa de desarrollo integral, que promueva alternativas, disminuya su marginación y mejore sus condiciones de vida.'),
('o02', 'Fomentar el acceso a alguna modalidad educativa para toda la familia.'),
('o03', 'Sensibilizar y difundir en nuestra sociedad la importancia de participar en la formación y desarrollo de los niños que trabajan en la calle, así como el respeto y dignificación de éstos.'),
('o04', 'Promover acciones que les permitan a estas familias el acceso a bienes y servicios públicos.');

CREATE TABLE `areadeatencion` (
  `IdArea` char(3) NOT NULL,
  `Nombre` text,
  `Descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `areadeatencion` (`IdArea`, `Nombre`,`Descripcion`) VALUES
('a01','Area de Promoción Social','Nutrición, alimentación y seguimiento de peso y talla. Salud preventiva y atención en nuestro centro y en diferentes instituciones de salud pública. Acceso a Servicios de salud pública: Hospitalización, Esquema de Vacunación, Desparacitación, Salud Bucal, Cartilla de la Mujer, Detección temprana de cáncer, seguimiento de Embarazo y salud Reproductiva. Asesoría legal, familiar, psicológica y/o educativa para niños y padres. Apoyo para transporte. Talleres de capacitación.'),
('a02','Area de educacion','Nos enfocamos dentro de ésta area a apoyar y fortalecer el aceso a alguna modalidad educativa para toda la familia. Motivamos el interés tanto de los niños como de los padres por la escuela, a fin de lograr su incorporación y permanencia en la misma.'),
('a03','Area de desarrollo institucional','Promovemos el desarrollo, la sustentabilidad y la transparencia institucional, mediante la difusión y publicidad de la organización. Promovemos el fortalecimiento Institucional a través de relaciones con Fundaciones e Instituciones Gubernamentales y Civiles. 
Estamos autorizados para expedir recibos deducibles de impuestos'),
('a04','Voluntariado y servicio social','Funcionamos en gran parte gracias a las personas que nos brindan su tiempo, así como materiales y alimentos para apoyar nuestra labor. 
Contamos con alumnos de diversas instituciones que realizan su servicio social apoyando los programas de educación. Si quieres formar parte de nuestro equipo de trabajo, no dudes en ponerte en contacto con nosotros.');

CREATE TABLE `logro` (
  `IdLogro` char(4) NOT NULL,
  `Logro` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `logro` (`IdLogro`, `Logro`) VALUES
('l001','A más de 12 años de labores, atendemos a 104 niños de 35 familias, impactamos a 189 personas desde nuestros diferentes programas.'),
('l002','El 100% de los niños está inscrito en alguna modalidad eductavia oficial.'),
('l003','El 100% de los niños lleva un seguimiento del esquema de vacunación oficial.'),
('l004','Se da seguimiento de peso y talla a 40 niños, apoyándolos con una papilla reforzada.'),
('l005','Se desparasita al 100% de los niños cada 6 meses.'),
('l006','Atendemos un promedio de 35 consultas médicas por mes.'),
('l007','29 madres de familia se han capacitado en nuestros talleres.'),
('l008','Contamos con un edificio propio y un vehículo.');

CREATE TABLE `benefactor` (
  `IdBenefactor` char(4) NOT NULL,
  `Nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `benefactor` (`IdBenefactor`, `Nombre`) VALUES
('B001','Ganaderos Productores de Leche Pura S.A. de C.V.'),
('B002','Sistema Municipal DIF'),
('B003','Polipro S.A. de C.V.'),
('B004','Gastronomía la Palapa'),
('B005','Laboratorio Corregidora'),
('B006','Ganaderos Asociados de Querétaro'),
('B007','Marquesado de Guadalupe'),
('B008','Adex S.C.'),
('B009','Rutilo Mancera Ortíz'),
('B010','Linter Impresoras S.A de C.V.'),
('B011','Lupeqsa S.A. de C.V.'),
('B012','Manuel Orvañanos'),
('B013','María Rosa Rodríguez'),
('B014','Manuel González Juaristi'),
('B015','Eduardo Trujillo'),
('B016','Beatriz de Rubín'),
('B017','Ana Gómez'),
('B018','Sistema Estatal DIF'),
('B019','Leche Querétaro');

CREATE TABLE `contacto` (
  `IdContacto` char(4) NOT NULL,
  `Direccion` text,
  `Nombre` text,
  `Telefono` varchar(20) default null,
  `Email` varchar(254) default null,
  `Cuenta` varchar(50) default null,
  `NumeroCuenta` varchar(20) default null,
  `Banco` varchar(35) default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `contacto` (`IdContacto`, `Direccion`,`Nombre`,`Telefono`,`Email`,`Cuenta`,`NumeroCuenta`,`Banco`) VALUES
('c001','Francisco González de Cosio 109 
Col. San Francisquito 
CP 76040','Susana Vargas','442 182 79 87','ninosyninasdemexico@yahoo.com','Niños y Niñas de Méxio A.C.','0101426486','Bancomer');

CREATE TABLE `nosotros` (
  `IdNosotros` char(4) NOT NULL,
  `Titulo` text,
  `Subtitulo` text,
  `TextoPrincipal` text,
  `TextoSecundario` text default null,
  `Fecha` datetime default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `nosotros` (`IdNosotros`, `Titulo`,`Subtitulo`,`TextoPrincipal`,`TextoSecundario`,`Fecha`) VALUES
('No01','Nosotros','¿Quienes somos?','Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven muchos niños y sus familias, al hacer de la calle, su lugar de trabajo.','Nos constituimos legalmente como una asociación civil sin fines de lucro, e iniciamos operaciones en Querétaro en 1998. Contamos con un equipo base de trabajo, responsable del desarrollo de los programas. Nos organizamos a través de un patronato, cuya tarea es velar por el buen funcionamiento de la institución.','1998-12-12 00:00:00');


CREATE TABLE `miembro` (
  `IdMiembro` char(4) NOT NULL,
  `Nombre` text,
  `Sexo` varchar(10) default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `miembro` (`IdMiembro`,`Nombre`,`Sexo`) VALUES
('Mi01','Ana María Larragain González','Mujer'),
('Mi02','José Luís Martínez Diez','Hombre'),
('Mi03','Enrique Rubín Colea','Hombre'),
('Mi04','Beatriz López Venero','Mujer'),
('Mi05','Angélica Malagón Paulín','Mujer'),
('Mi06','Ana Isabel Niembro González','Mujer'),
('Mi07','María Rosa Rodríguez Segón','Mujer');


CREATE TABLE `patronato` (
  `IdPatronato` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `patronato` (`IdPatronato`) VALUES
('P001');

CREATE TABLE `puesto` (
  `IdPuesto` char(4) NOT NULL,
  `Nombre` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `puesto` (`IdPuesto`,`Nombre`) VALUES
('Pu01','Presidente'),
('Pu02','Tesorero'),
('Pu03','Secretario'),
('Pu04','Vocal');

CREATE TABLE `miembro_puesto` (
  `IdMiembro` char(4) NOT NULL,
  `IdPuesto` char(4) NOT NULL,
  `Fecha` datetime default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `miembro_puesto` (`IdMiembro`,`IdPuesto`,`Fecha`) VALUES
('Mi01','Pu01','2018-01-01 00:00:00'),
('Mi02','Pu03','2018-01-01 00:00:00'),
('Mi03','Pu02','2018-01-01 00:00:00'),
('Mi04','Pu04','2018-01-01 00:00:00'),
('Mi05','Pu04','2018-01-01 00:00:00'),
('Mi06','Pu04','2018-01-01 00:00:00'),
('Mi07','Pu04','2018-01-01 00:00:00');


CREATE TABLE `miembro_patronato` (
  `IdMiembro` char(4) NOT NULL,
  `IdPatronato` char(4) NOT NULL,
  `Fecha` datetime default null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `miembro_patronato` (`IdMiembro`,`IdPatronato`,`Fecha`) VALUES
('Mi01','P001','2018-01-01 00:00:00'),
('Mi02','P001','2018-01-01 00:00:00'),
('Mi03','P001','2018-01-01 00:00:00'),
('Mi04','P001','2018-01-01 00:00:00'),
('Mi05','P001','2018-01-01 00:00:00'),
('Mi06','P001','2018-01-01 00:00:00'),
('Mi07','P001','2018-01-01 00:00:00');









--
-- Indexes for dumped tables
--

--
-- Indexes for table `archivomultimedia`
--
ALTER TABLE `archivomultimedia`
  ADD PRIMARY KEY (`Filepath`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`IdComentario`);

--
-- Indexes for table `donadores`
--
ALTER TABLE `donadores`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `donadores_metodopago`
--
ALTER TABLE `donadores_metodopago`
  ADD KEY `fkIdMetodo_DM` (`IdMetodo`),
  ADD KEY `fkEmail_DM` (`Email`);

--
-- Indexes for table `donadores_usocfdi`
--
ALTER TABLE `donadores_usocfdi`
  ADD KEY `fkEmail_DU` (`Email`),
  ADD KEY `fkIdCFDI_DU` (`IdCFDI`);

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`IdEvento`);

--
-- Indexes for table `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`IdFuncion`);

--
-- Indexes for table `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`IdMetodo`);

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`IdNoticia`);

--
-- Indexes for table `plantilladecorreo`
--
ALTER TABLE `plantilladecorreo`
  ADD PRIMARY KEY (`IdCorreo`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indexes for table `rol_funcion`
--
ALTER TABLE `rol_funcion`
  ADD KEY `fkIdFuncion_RF` (`IdFuncion`),
  ADD KEY `fkIdRol_RF` (`IdRol`);

--
-- Indexes for table `thumbnail`
--
ALTER TABLE `thumbnail`
  ADD PRIMARY KEY (`Thurl`);

--
-- Indexes for table `usocfdi`
--
ALTER TABLE `usocfdi`
  ADD PRIMARY KEY (`IdCFDI`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `usuario_noticia`
--
ALTER TABLE `usuario_noticia`
  ADD KEY `fkIdNoticia_UN` (`IdNoticia`),
  ADD KEY `fkEmail_UN` (`Email`);

--
-- Indexes for table `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD KEY `fkEmail_UR` (`Email`),
  ADD KEY `fkIdRol_UR` (`IdRol`);

--
-- Constraints for dumped tables
--

ALTER TABLE `mision`
	ADD PRIMARY KEY(`IdMision`);




ALTER TABLE `vision`
	ADD PRIMARY KEY(`IdVision`);



ALTER TABLE `objetivo`
	ADD PRIMARY KEY(`IdObjetivo`);



ALTER TABLE `areadeatencion`
	ADD PRIMARY KEY(`IdArea`);




ALTER TABLE `logro`
	ADD PRIMARY KEY(`IdLogro`);



ALTER TABLE `benefactor`
	ADD PRIMARY KEY(`IdBenefactor`);


ALTER TABLE `contacto`
	ADD PRIMARY KEY(`IdContacto`);

ALTER TABLE `nosotros`
	ADD PRIMARY KEY(`IdNosotros`);

ALTER TABLE `patronato`
	ADD PRIMARY KEY(`IdPatronato`);

ALTER TABLE `miembro`
	ADD PRIMARY KEY(`IdMiembro`);

ALTER TABLE `puesto`
	ADD PRIMARY KEY(`IdPuesto`);

ALTER TABLE `miembro_puesto`
	ADD KEY `fkIdMiembro_MPu` (`IdMiembro`),
	ADD KEY `fkIdPuesto_MPu` (`IdPuesto`);

ALTER TABLE `miembro_patronato`
	ADD KEY `fkIdMiembro_MP` (`IdMiembro`),
	ADD KEY `fkIdPatronato_MP` (`IdPatronato`);
 	

--
-- Constraints for table `donadores_metodopago`
--
ALTER TABLE `donadores_metodopago`
  ADD CONSTRAINT `fkEmail_DM` FOREIGN KEY (`Email`) REFERENCES `donadores` (`Email`),
  ADD CONSTRAINT `fkIdMetodo_DM` FOREIGN KEY (`IdMetodo`) REFERENCES `metodopago` (`IdMetodo`);

--
-- Constraints for table `donadores_usocfdi`
--
ALTER TABLE `donadores_usocfdi`
  ADD CONSTRAINT `fkEmail_DU` FOREIGN KEY (`Email`) REFERENCES `donadores` (`Email`),
  ADD CONSTRAINT `fkIdCFDI_DU` FOREIGN KEY (`IdCFDI`) REFERENCES `usocfdi` (`IdCFDI`);

--
-- Constraints for table `rol_funcion`
--
ALTER TABLE `rol_funcion`
  ADD CONSTRAINT `fkIdFuncion_RF` FOREIGN KEY (`IdFuncion`) REFERENCES `funcion` (`IdFuncion`),
  ADD CONSTRAINT `fkIdRol_RF` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`);

--
-- Constraints for table `usuario_noticia`
--
ALTER TABLE `usuario_noticia`
  ADD CONSTRAINT `fkIdNoticia_UN` FOREIGN KEY (`IdNoticia`) REFERENCES `noticia` (`IdNoticia`),
  ADD CONSTRAINT `fkEmail_UN` FOREIGN KEY (`Email`) REFERENCES `usuario` (`Email`);

--
-- Constraints for table `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `fkIdRol_UR` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`),
  ADD CONSTRAINT `fkEmail_UR` FOREIGN KEY (`Email`) REFERENCES `usuario` (`Email`);


ALTER TABLE `miembro_puesto`
  ADD CONSTRAINT `fkIdMiembro_MPu` FOREIGN KEY (`IdMiembro`) REFERENCES `miembro` (`IdMiembro`),
  ADD CONSTRAINT `fkIdPuesto_MPu` FOREIGN KEY (`IdPuesto`) REFERENCES `puesto` (`IdPuesto`);


ALTER TABLE `miembro_patronato`
  ADD CONSTRAINT `fkIdMiembro_MP` FOREIGN KEY (`IdMiembro`) REFERENCES `miembro` (`IdMiembro`),
  ADD CONSTRAINT `fkIdPatronato_MP` FOREIGN KEY (`IdPatronato`) REFERENCES `patronato` (`IdPatronato`);


COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;