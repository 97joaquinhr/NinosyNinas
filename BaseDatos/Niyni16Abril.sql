-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2018 at 06:13 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Niyni`
--

-- --------------------------------------------------------

--
-- Table structure for table `donadores`
--

CREATE TABLE IF NOT EXISTS `donadores` (
  `RFC` varchar(13) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoPaterno` varchar(50) DEFAULT NULL,
  `ApellidoMaterno` varchar(50) DEFAULT NULL,
  `FechadeNacimiento` datetime DEFAULT NULL,
  `Direccion` text,
  `Telefono` varchar(15) DEFAULT NULL,
  `Email` varchar(254) NOT NULL,
  `Ocupacion` text,
  `Validado` int(1) DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donadores`
--

INSERT INTO `donadores` (`RFC`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `FechadeNacimiento`, `Direccion`, `Telefono`, `Email`, `Ocupacion`, `Validado`) VALUES
('', 'Aubrey', 'Bates', 'Ramos', '1998-09-26 00:00:00', '960 Chocolate Turnpike,Anchorage,MO,17977', '6997079161', 'abates592@setabyerbua.net', 'N/A', 1),
('M619B3PK17FJH', 'Alicia', 'Hill', 'Luna', '2018-04-05 00:00:00', '109 en mi casa', '4422813518', 'ahill609@llihaicila.biz', 'N/A', 1),
('RHS2WC3FCGDRQ', 'Ashton', 'Paul', 'Nguyen', '1994-10-15 00:00:00', '824 Sweet Avenue,Winchester,IA,51315', '3277992185', 'apaul46@luapnothsa.net', 'Obrero', 1),
('', 'Pepe', 'Jomene', 'ZOMANTE', '0000-00-00 00:00:00', 'Paseo de las lomas 105', '4422813518', 'Arraca@arraca.com', 'ES GORDO0', 1),
('', 'Captura', 'as', 'as', '2018-04-06 00:00:00', '', '4422813518', 'asda@eesa.come', '', 1),
('LLQ47FMEJJM2B', 'Amanda', 'Watkins', 'Adams', '0000-00-00 00:00:00', '116 East 4th Way,Greenville,IN,54621', '2073775162', 'awatkins182@sniktawadnama.biz', 'N/A', 1),
('KI26DFUTI55S3', 'Brandi', 'Elliott', 'Oconnor', '1954-10-25 00:00:00', '476 Mahogany Lane,New Haven,ID,48836', '3622658843', 'belliott903@ttoilleidnarb.biz', 'Maestro', 1),
('ZP1Q30GYE221P', 'Brianne', 'Marsh', 'Silva', '1983-03-23 00:00:00', '624 Elm Lane,Stamford,IL,45524', '4225702446', 'bmarsh14@hsramennairb.biz', 'Empresario', 1),
('UBZRGNAUVN6D6', 'Brendon', 'Silva', 'Hill', '1984-10-25 00:00:00', '79 West Johnson Expressway,Arlington,NM,25999', '2408995618', 'bsilva515@avlisnodnerb.biz', 'Empresario', 1),
('P5MEKZH8VKNY4', 'Bryce', 'Watkins', 'Peterson', '1974-12-06 00:00:00', '570 East Lemon Loop,Phoenix,UT,62228', '7585127867', 'bwatkins578@sniktawecyrb.com', 'Doctor', 1),
('I33P3K2A86P7I', 'Cassie', 'Gilbert', 'Rowe', '1961-05-09 00:00:00', '525 Blueberry Lane,Indianapolis,CT,54412', '5832523866', 'cgilbert401@trebligeissac.biz', 'Empleado', 1),
('DYC5EJSMPBDOO', 'Chad', 'Hardy', 'Ayala', '1937-09-24 00:00:00', '328 Lakeview Street,Lubbock,WV,39033', '7273353893', 'chardy488@ydrahdahc.biz', 'Bombero', 1),
('0X6CBWGOLWLM6', 'Clarissa', 'Hubbard', 'Figueroa', '1939-07-02 00:00:00', '539 Hoover Highway,Birmingham,DC,84024', '6556073813', 'chubbard147@drabbuhassiralc.biz', 'Empleado', 1),
('U1G1PTNVM6XFB', 'Callie', 'Munoz', 'Thornton', '1950-12-02 00:00:00', '692 Hickory Highway,Fort Worth,WV,23583', '5874321177', 'cmunoz134@zonumeillac.net', 'Profesor', 1),
('7NBU24Y5V5PA0', 'Colton', 'Nguyen', 'Terry', '1989-07-02 00:00:00', '401 North Melon Street,New Haven,LA,66755', '9227372565', 'cnguyen676@neyugnnotloc.net', 'Maestro', 1),
('1I4PY3ACP8N26', 'Connor', 'Peterson', 'Klein', '1961-01-17 00:00:00', '496 Willow Turnpike,Westminster,WV,82316', '2152341881', 'cpeterson979@nosretepronnoc.net', 'Bombero', 1),
('0J39CR0BABTGX', 'Chad', 'Rowe', 'Elliott', '1951-03-03 00:00:00', '246 North Washington Highway,Jackson,PA,47655', '4275955057', 'crowe302@ewordahc.net', 'Diseñador', 1),
('ITBCAIQT8YZYH', 'Devin', 'Mcdaniel', 'Mcguire', '1952-04-12 00:00:00', '170 South Hickory Garden,Norman,NV,11208', '9974974697', 'dmcdaniel380@leinadcmnived.org', 'Obrero', 1),
('6JJSQKJL662B2', 'Esther', 'Oconnor', 'Munoz', '1945-07-11 00:00:00', '613 Coolidge Terrace,Aurora,VA,02550', '7067766049', 'eoconnor522@ronnocorehtse.net', 'Obrero', 1),
('20IZVB37GCYZE', 'Forrest', 'Adkins', 'Porter', '1956-03-19 00:00:00', '49 Buchanan Boulevard,Frisco,OK,22381', '7733597384', 'fadkins923@snikdatserrof.biz', 'Diseñador', 1),
('1E8KLTZQA9OLJ', 'Fabian', 'Thornton', 'Medina', '1941-08-18 00:00:00', '730 Truman Place,Tempe,NV,28307', '3567793066', 'fthornton47@notnrohtnaibaf.net', 'Bombero', 1),
('O0RQQFZP7Q11B', 'Geoffrey', 'Mitchell', 'Clarke', '1958-06-13 00:00:00', '836 South 6th Garden,Port St. Lucie,VA,57248', '9266217944', 'gmitchell133@llehctimyerffoeg.net', 'Maestro', 0),
('A435X8Q7ABAJK', 'Heather', 'Bowman', 'Watkins', '1977-08-08 00:00:00', '685 North Willow Highway,Killeen,RI,64005', '6235394796', 'hbowman225@namwobrehtaeh.biz', 'Obrero', 1),
('X4ZEP9CQ2J53T', 'Haley', 'Gomez', 'Lang', '1983-12-29 00:00:00', '752 Coolidge Circle,Garland,MN,85039', '3299349901', 'hgomez561@zemogyelah.com', 'Profesor', 1),
('XBL6Q1I8NRSPV', 'India', 'Adams', 'Griffith', '1945-08-27 00:00:00', '845 Harrison Way,Antioch,ME,34648', '9278714277', 'iadams847@smadaaidni.com', 'Diseñador', 1),
('N01RIVBP0R3BN', 'Ian', 'Mcguire', 'Patton', '1943-12-19 00:00:00', '154 South Ford Boulevard,Escondido,NH,13389', '9024806221', 'imcguire589@eriugcmnai.net', 'Obrero', 1),
('I3TD9V0V8VBCJ', 'Justice', 'Griffith', 'Mcguire', '1941-02-25 00:00:00', '308 Buchanan Highway,San Antonio,TX,80071', '6749131598', 'jgriffith19@htiffirgecitsuj.net', 'Maestro', 1),
('CMFXBGLMV8RY9', 'Joseph', 'Klein', 'Adkins', '1972-01-31 00:00:00', '48 Watermelon Way,Ontario,DC,11259', '7156314715', 'jklein369@nielkhpesoj.org', 'Diseñador', 1),
('CQR2IKW9B5MOW', 'Jordan', 'Lang', 'Parker', '1979-06-09 00:00:00', '552 Guava Place,Sunnyvale,WA,61354', '8444620163', 'jlang288@gnalnadroj.org', 'Doctor', 1),
('SQZGZQ4DGXJI1', 'Jonathan', 'Munoz', 'Watkins', '1953-08-11 00:00:00', '1 Cleveland Expressway,Athens,TX,65009', '6357228533', 'jmunoz155@zonumnahtanoj.org', 'Empresario', 1),
('ZQ2TISAYZCKGB', 'Joshua', 'Patton', 'Hardy', '1937-10-13 00:00:00', '905 Jefferson Way,Visalia,CT,23066', '7555751043', 'jpatton359@nottapauhsoj.biz', 'Obrero', 1),
('08Q6E2M6D562L', 'Jeanette', 'Pratt', 'Marsh', '1985-04-30 00:00:00', '605 Beech Terrace,Wichita,DE,45962', '4786604920', 'jpratt513@ttarpettenaej.org', 'Pepenador', 1),
('6B1NOW8PI7XPD', 'Kirsten', 'Flynn', 'Hubbard', '1941-01-19 00:00:00', '334 South Grapefruit Road,Austin,CT,72822', '8508596030', 'kflynn782@nnylfnetsrik.com', 'Doctor', 1),
('HNONUBNADKZYN', 'Kassandra', 'Medina', 'Flynn', '1944-11-06 00:00:00', '328 Lime Garden,Midland,NH,39125', '9353411872', 'kmedina60@anidemardnassak.biz', 'Doctor', 1),
('NG4C2ZXCF266E', 'Kathryn', 'Pierce', 'Pratt', '1988-05-07 00:00:00', '505 Harding Highway,Naperville,NE,61404', '9433873100', 'kpierce871@ecreipnyrhtak.biz', 'Pepenador', 1),
('ï»¿JEZWVAE2GB', 'Kelsi', 'Quinn', 'Paul', '1936-06-25 00:00:00', '634 Apple Turnpike,Birmingham,MA,42258', '4102079027', 'kquinn200@nniuqislek.net', 'Maestro', 1),
('T6M7YM11UXQDA', 'Kendrick', 'Wilson', 'Brady', '1963-11-12 00:00:00', '109 South Truman Turnpike,Gainesville,CA,91175', '3809795907', 'kwilson465@nosliwkcirdnek.com', 'Empleado', 1),
('TGXEWESXSAYY6', 'Larry', 'Luna', 'Bowman', '1983-06-13 00:00:00', '83 Van Buren Way,Peoria,MI,63885', '7462953315', 'lluna809@anulyrral.biz', 'Profesor', 1),
('C4CW1MY6QXSNA', 'Lorena', 'Malone', 'Gomez', '1982-11-05 00:00:00', '233 Cleveland Lane,Oakland,OR,24956', '2476791529', 'lmalone916@enolamanerol.org', 'Profesor', 1),
('L13X67HBN0XY8', 'Marcos', 'Figueroa', 'Quinn', '1937-04-26 00:00:00', '842 Vine Garden,Chattanooga,HI,23893', '2889474828', 'mfigueroa269@aoreugifsocram.com', 'Empleado', 1),
('UK85K9PVH40V1', 'Mia', 'Ross', 'Munoz', '1946-12-09 00:00:00', '520 Sunset Garden,Corpus Christi,AR,42551', '3314242161', 'mross991@ssoraim.net', 'Doctor', 1),
('8HECC9HYL7PZJ', 'Mercedes', 'Steele', 'Gilbert', '1955-02-28 00:00:00', '652 South Mountain Expressway,Oklahoma City,MS,14596', '9017515228', 'msteele252@eleetssedecrem.org', 'Doctor', 1),
('5MXY74KAHZJ3L', 'Juancho', 'Cross', 'Harrington', '1985-08-18 00:00:00', '490 North Hickory Drive,Kansas City ,IL,00450', '9679332420', 'pcross184@ssorcordep.biz', 'ES GORDO0', 1),
('ZYFWLWRPWFR2J', 'Ramon', 'Ramos', 'Pierce', '1992-06-06 00:00:00', '128 Ash Lane,Fremont,CA,13276', '8382702587', 'rramos192@somarnomar.org', 'Empleado', 1),
('DA8HGBEWM9T0Q', 'Sasha', 'Mcguire', 'Ross', '1959-10-01 00:00:00', '641 Van Buren Circle,Dayton,NY,29698', '3503194456', 'smcguire509@eriugcmahsas.net', 'Bombero', 1),
('L1YBTTPQMIQHW', 'Skyler', 'Porter', 'Mcdaniel', '1966-01-10 00:00:00', '736 West Watermelon Drive,Fayetteville,TX,14556', '5484795187', 'sporter881@retroprelyks.org', 'Obrero', 1),
('6IOB09WPH1DUD', 'Sonia', 'Terry', 'Cross', '1989-07-15 00:00:00', '253 Banana Place,Denver,NC,42627', '8586867341', 'sterry223@yrretainos.org', 'Bombero', 1),
('WEFMGOFYU8ED5', 'Talia', 'Brady', 'Mitchell', '1973-11-28 00:00:00', '684 Van Buren Street,Odessa,NJ,89086', '3915879438', 'tbrady527@ydarbailat.com', 'Obrero', 1),
('1RHSPI5K4AC5O', 'Trey', 'Harrington', 'Malone', '1985-01-07 00:00:00', '79 West Taylor Way,Dallas,NH,13686', '7616407327', 'tharrington995@notgnirrahyert.net', 'Polí­tico', 1),
('QDUXCGMIW8I77', 'Ty', 'Parker', 'Wilson', '1976-11-19 00:00:00', '719 Adams Highway,Tempe,KY,18904', '7284930051', 'tparker145@rekrapyt.net', 'Diseñador', 1),
('5OZGGGUJIGCCO', 'Pepe', 'Clarke', 'Steele', '1969-10-04 00:00:00', '397 East Johnson Garden,Lafayette,NE,03416', '7629536456', 'wclarke48@ekralcretlaw.com', 'ES GORDO0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donadores_metodopago`
--

CREATE TABLE IF NOT EXISTS `donadores_metodopago` (
  `IdMetodo` char(3) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Observaciones` text,
  KEY `fkIdMetodo_DM` (`IdMetodo`),
  KEY `fkEmail_DM` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donadores_metodopago`
--

INSERT INTO `donadores_metodopago` (`IdMetodo`, `Email`, `Fecha`, `Observaciones`) VALUES
('M03', 'chardy488@ydrahdahc.biz', '2003-12-16 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M04', 'chubbard147@drabbuhassiralc.biz', '2004-06-24 00:00:00', 'est vitae euismod. Sed nec volutpat magna. Sed fermentum mauris vitae finibus mollis. Pellentesque sem nulla, cons'),
('M01', 'imcguire589@eriugcmnai.net', '2004-06-30 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M03', 'kmedina60@anidemardnassak.biz', '2005-01-03 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M05', 'iadams847@smadaaidni.com', '2005-02-20 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M02', 'cmunoz134@zonumeillac.net', '2007-04-25 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M03', 'jmunoz155@zonumnahtanoj.org', '2007-07-12 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M04', 'smcguire509@eriugcmahsas.net', '2009-08-20 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M02', 'sporter881@retroprelyks.org', '2010-02-01 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M03', 'wclarke48@ekralcretlaw.com', '2010-04-12 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M02', 'bwatkins578@sniktawecyrb.com', '2012-05-03 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M04', 'tparker145@rekrapyt.net', '2012-06-22 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M04', 'lluna809@anulyrral.biz', '2012-08-06 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M04', 'hgomez561@zemogyelah.com', '2012-12-30 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M04', 'bsilva515@avlisnodnerb.biz', '2014-03-10 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M03', 'tharrington995@notgnirrahyert.net', '2014-08-12 00:00:00', 'est vitae euismod. Sed nec volutpat magna. Sed fermentum mauris vitae finibus mollis. Pellentesque sem nulla, cons'),
('M03', 'jpratt513@ttarpettenaej.org', '2014-10-30 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M02', 'rramos192@somarnomar.org', '2016-04-29 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M02', 'apaul46@luapnothsa.net', '2017-02-09 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M02', 'mfigueroa269@aoreugifsocram.com', '2011-09-14 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M03', 'jpatton359@nottapauhsoj.biz', '2011-11-11 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M03', 'kflynn782@nnylfnetsrik.com', '2012-04-18 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M05', 'jgriffith19@htiffirgecitsuj.net', '2012-06-10 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M02', 'fthornton47@notnrohtnaibaf.net', '2012-10-23 00:00:00', 'est vitae euismod. Sed nec volutpat magna. Sed fermentum mauris vitae finibus mollis. Pellentesque sem nulla, cons'),
('M02', 'awatkins182@sniktawadnama.biz', '2013-02-17 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M04', 'eoconnor522@ronnocorehtse.net', '2013-04-06 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M04', 'mross991@ssoraim.net', '2013-05-04 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M05', 'crowe302@ewordahc.net', '2013-05-17 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M05', 'dmcdaniel380@leinadcmnived.org', '2013-10-19 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M02', 'msteele252@eleetssedecrem.org', '2013-11-15 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M03', 'fadkins923@snikdatserrof.biz', '2014-10-19 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M05', 'cpeterson979@nosretepronnoc.net', '2015-03-04 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M03', 'hbowman225@namwobrehtaeh.biz', '2015-12-25 00:00:00', 'eros at, pharetra libero. Pellentesque ultricies, augue vel condimentum dictum, dui turpis luctus erat, nec efficitur ex quam ac libero. In mollis fermentum ante ut tempus. In vel sollicitudin lectus. Quisque felis massa, fa'),
('M02', 'jlang288@gnalnadroj.org', '2016-01-18 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M01', 'ahill609@llihaicila.biz', '2016-12-12 00:00:00', 'Observaciones TEST'),
('M04', 'bmarsh14@hsramennairb.biz', '2017-04-12 00:00:00', 'erat a tincidunt. Pellentesque ornare ante sodales vestibulum iaculis. Integer rutrum est quis dolor tincidunt'),
('M03', 'pcross184@ssorcordep.biz', '2017-07-27 00:00:00', 'et metus a lacus fermentum commodo quis sit amet nisl. Vivamus ut nibh volutpat, gravida nunc vel, viverra turpis. Praesent fermentum tincidunt mauris, at egestas nulla commodo quis. Donec ornare a orci ac tempus. Aliquam erat volutpat. Sed v'),
('M05', 'cnguyen676@neyugnnotloc.net', '2018-04-05 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
('M01', 'abates592@setabyerbua.net', '2018-07-03 00:00:00', 'nte facilisis, sed fringilla felis consequat. Nullam laoreet justo ut augue interdum malesuada. Donec ipsum lacus, finibus eu vestibulum q'),
('M01', 'asda@eesa.come', '2018-04-06 00:00:00', ''),
('M01', 'asda@eesa.come', '2018-04-06 00:00:00', ''),
('M04', 'Arraca@arraca.com', '0000-00-00 00:00:00', 'pppp');

-- --------------------------------------------------------

--
-- Table structure for table `donadores_usocfdi`
--

CREATE TABLE IF NOT EXISTS `donadores_usocfdi` (
  `Email` varchar(254) NOT NULL,
  `IdCFDI` char(3) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  KEY `fkEmail_DU` (`Email`),
  KEY `fkIdCFDI_DU` (`IdCFDI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donadores_usocfdi`
--

INSERT INTO `donadores_usocfdi` (`Email`, `IdCFDI`, `Fecha`) VALUES
('chardy488@ydrahdahc.biz', 'D10', '2003-12-16 00:00:00'),
('chubbard147@drabbuhassiralc.biz', 'D10', '2004-06-24 00:00:00'),
('imcguire589@eriugcmnai.net', 'D10', '2004-06-30 00:00:00'),
('kmedina60@anidemardnassak.biz', 'D10', '2005-01-03 00:00:00'),
('iadams847@smadaaidni.com', 'D10', '2005-02-20 00:00:00'),
('cmunoz134@zonumeillac.net', 'D10', '2007-04-25 00:00:00'),
('jmunoz155@zonumnahtanoj.org', 'D10', '2009-08-20 00:00:00'),
('smcguire509@eriugcmahsas.net', 'D10', '2009-08-20 00:00:00'),
('sporter881@retroprelyks.org', 'D10', '2010-02-01 00:00:00'),
('wclarke48@ekralcretlaw.com', 'D10', '2010-04-12 00:00:00'),
('jklein369@nielkhpesoj.org', 'D10', '2011-08-28 00:00:00'),
('tbrady527@ydarbailat.com', 'D10', '2012-03-24 00:00:00'),
('bwatkins578@sniktawecyrb.com', 'D10', '2012-05-03 00:00:00'),
('lluna809@anulyrral.biz', 'D10', '2012-08-06 00:00:00'),
('bsilva515@avlisnodnerb.biz', 'D10', '2014-03-10 00:00:00'),
('tharrington995@notgnirrahyert.net', 'D10', '2014-08-12 00:00:00'),
('jpratt513@ttarpettenaej.org', 'D10', '2014-10-30 00:00:00'),
('sterry223@yrretainos.org', 'D10', '2015-07-05 00:00:00'),
('rramos192@somarnomar.org', 'D04', '0000-00-00 00:00:00'),
('apaul46@luapnothsa.net', 'D04', '2017-02-09 00:00:00'),
('mfigueroa269@aoreugifsocram.com', 'D04', '2011-09-14 00:00:00'),
('jpatton359@nottapauhsoj.biz', 'D04', '2011-11-11 00:00:00'),
('kflynn782@nnylfnetsrik.com', 'D04', '2012-04-18 00:00:00'),
('jgriffith19@htiffirgecitsuj.net', 'D04', '2012-06-10 00:00:00'),
('fthornton47@notnrohtnaibaf.net', 'D04', '2012-10-23 00:00:00'),
('awatkins182@sniktawadnama.biz', 'D04', '2013-02-17 00:00:00'),
('eoconnor522@ronnocorehtse.net', 'D04', '2013-04-06 00:00:00'),
('mross991@ssoraim.net', 'D04', '2013-05-04 00:00:00'),
('crowe302@ewordahc.net', 'D04', '2013-05-17 00:00:00'),
('dmcdaniel380@leinadcmnived.org', 'D04', '2013-10-19 00:00:00'),
('msteele252@eleetssedecrem.org', 'D04', '2013-11-15 00:00:00'),
('fadkins923@snikdatserrof.biz', 'D04', '2014-10-19 00:00:00'),
('gmitchell133@llehctimyerffoeg.net', 'D04', '2015-02-05 00:00:00'),
('cpeterson979@nosretepronnoc.net', 'D04', '2015-03-04 00:00:00'),
('kwilson465@nosliwkcirdnek.com', 'D04', '2015-07-28 00:00:00'),
('hbowman225@namwobrehtaeh.biz', 'D04', '2015-12-25 00:00:00'),
('jlang288@gnalnadroj.org', 'D04', '2016-01-18 00:00:00'),
('ahill609@llihaicila.biz', 'D04', '2016-12-12 00:00:00'),
('lmalone916@enolamanerol.org', 'D10', '2016-12-30 00:00:00'),
('bmarsh14@hsramennairb.biz', 'D10', '2017-04-12 00:00:00'),
('pcross184@ssorcordep.biz', 'D10', '2017-07-27 00:00:00'),
('kpierce871@ecreipnyrhtak.biz', 'D10', '2018-01-16 00:00:00'),
('cnguyen676@neyugnnotloc.net', 'D10', '2018-04-05 00:00:00'),
('abates592@setabyerbua.net', 'D10', '2018-07-03 00:00:00'),
('asda@eesa.come', 'D10', '2018-04-06 00:00:00'),
('asda@eesa.come', 'D10', '2018-04-06 00:00:00'),
('Arraca@arraca.com', 'G03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `informacion`
--

CREATE TABLE IF NOT EXISTS `informacion` (
  `IdInfo` int(11) NOT NULL AUTO_INCREMENT,
  `Seccion` varchar(254) NOT NULL,
  `Titulo` text,
  `Descripcion` text,
  PRIMARY KEY (`IdInfo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `informacion`
--

INSERT INTO `informacion` (`IdInfo`, `Seccion`, `Titulo`, `Descripcion`) VALUES
(1, 'QuienesSomos', '¿Quiénes Somos?', 'Somos un grupo de personas comprometidas con mejorar las condiciones de marginación en que viven muchos niños y sus familias, al hacer de la calle, su lugar de trabajo.'),
(2, 'Constitucion', NULL, 'Nos constituimos legalmente como una asociación civil sin fines de lucro, e iniciamos operaciones en Querétaro en 1998. Contamos con un equipo base de trabajo, responsable del desarrollo de los programas. Nos organizamos a través de un patronato, cuya tarea es velar por el buen funcionamiento de la institución.'),
(3, 'Patronato', 'Presidenta', 'Ana María Larragain González'),
(4, 'Patronato', 'Vice Presidente', NULL),
(5, 'Patronato', 'Secretario', 'José Luís Martínez Diez'),
(6, 'Patronato', 'Tesorero', 'Enrique Rubín Colea'),
(7, 'Patronato', 'Vocal', 'Beatriz López Venero'),
(8, 'Patronato', 'Vocal', 'Angélica Malagón Paulín'),
(9, 'Patronato', 'Vocal', 'Ana Isabel Niembro González'),
(10, 'Patronato', 'Vocal', 'María Rosa Rodríguez Segón'),
(11, 'Mision', 'Misión', 'Generamos un programa de formación integral con las niñas, niños y adolescentes que junto con su famlia han hecho de la calle su lugar de trabajo; para desarrollar sus capacidades básicas y construir alternativas que les permitan mejorar sus oportunidades de vida.'),
(12, 'Vision', 'Visión', 'Queremos ser un espacio en donde niños y niñas que viven en condiciones adversas por la marginación, encuentren opciones de desarrollo intelectual, emocional y social. Una oportunidad que les facilite una mejor calidad de vida y una opción laboral distinta a la calle.'),
(13, 'Objetivos', 'Objetivos', 'Llevar a cabo con los niños en situación de calle, un programa de desarrollo integral, que promueva alternativas, disminuya su marginación y mejore sus condiciones de vida.'),
(14, 'Objetivos', 'Objetivos', 'Fomentar el acceso a alguna modalidad educativa para toda la familia.'),
(15, 'Objetivos', 'Objetivos', 'Sensibilizar y difundir en nuestra sociedad la importancia de participar en la formación y desarrollo de los niños que trabajan en la calle, así como el respeto y dignificación de éstos.'),
(16, 'Objetivos', 'Objetivos', 'Promover acciones que les permitan a estas familias el acceso a bienes y servicios públicos.'),
(17, 'AreasdeAtencion', 'Áreas de Atención', 'La atención que brindamos esta organizada en tres áreas:\r\nArea de Promoción Social\r\nArea de Educación\r\nArea de Desarrollo Institucional'),
(18, 'PromocionSocial', 'Promoción Social', NULL),
(19, 'PromocionSocial', NULL, 'Esta área favorece la formación, información y orientación a padres y niños.'),
(20, 'DesarrolloInstitucional', 'Desarrollo Institucional', NULL),
(21, 'DesarrolloInstitucional', NULL, 'Promovemos el desarrollo, la sustentabilidad y la transparencia institucional, mediante la difusión y publicidad de la organización.'),
(22, 'DesarrolloInstitucional', NULL, 'Promovemos el fortalecimiento Institucional a través de relaciones con Fundaciones e Instituciones Gubernamentales y Civiles.'),
(23, 'DesarrolloInstitucional', NULL, 'NOTA: Estamos autorizados para expedir recibos deducibles de impuestos.'),
(24, 'Education', 'Educación', NULL),
(25, 'Education', NULL, 'Esta área apoya y fortalece el acceso a alguna modalidad educativa para toda la familia.\r\nMotivamos el interés tanto de los niños como de los padres por la escuela, a fin de lograr su incorporación y permanencia en la misma.'),
(26, 'ProgramasSocial', 'Programas', NULL),
(27, 'ProgramasSocial', NULL, 'Nutrición, alimentación y seguimiento de peso y talla'),
(28, 'ProgramasSocial', NULL, 'Salud preventiva y atención en nuestro centro y en diferentes instituciones de salud pública'),
(29, 'ProgramasSocial', NULL, 'Acceso a Servicios de salud pública: Hospitalización, Esquema de Vacunación, Desparacitación, Salud Bucal, Cartilla de la Mujer, Detección temprana de cáncer, seguimiento de Embarazo y salud Reproductiva.'),
(30, 'ProgramasSocial', NULL, 'Asesoría legal, familiar, psicológica y/o educativa para niños y padres'),
(31, 'ProgramasSocial', NULL, 'Apoyo para transporte'),
(32, 'ProgramasSocial', NULL, 'Talleres de capacitación.'),
(33, 'ProgramasEducacion', 'Programas', NULL),
(34, 'ProgramasEducacion', NULL, 'Programa de Estimulación Psicopedagógica'),
(35, 'ProgramasEducacion', NULL, 'Programa de Integración y Desarrollo Humano'),
(36, 'ProgramasEducacion', NULL, 'Programa de Formación Preescolar'),
(37, 'ProgramasEducacion', NULL, '"Ayúdame a estudiar" Apoyo académico a niñas escolarizados'),
(38, 'ProgramasEducacion', NULL, 'Programa 10-14 para niños desertores de la escuela'),
(39, 'ProgramasEducacion', NULL, 'Alfabetización y educación básica para niños y adultos no escolarizados'),
(40, 'ProgramasEducacion', NULL, 'Taller de Computación'),
(41, 'ProgramasEducacion', NULL, 'Actividades Deportivas'),
(42, 'ProgramasEducacion', NULL, 'Actividades de Verano'),
(43, 'Logros', 'Logros', 'A más de 12 años de labores, atendemos a 104 niños de 35 familias, impactamos a 189 personas desde nuestros diferentes programas.\r\n\r\nEl 100% de los niños está inscrito en alguna modalidad eductavia oficial.\r\n\r\nEl 100% de los niños lleva un seguimiento del esquema de vacunación oficial.\r\nSe da seguimiento de peso y talla a 40 niños, apoyándolos con una papilla reforzada.\r\n\r\nSe desparasita al 100% de los niños cada 6 meses.\r\n\r\nAtendemos un promedio de 35 consultas médicas por mes.\r\n\r\n29 madres de familia se han capacitado en nuestros talleres.\r\n\r\nContamos con un edificio propio y un vehículo.'),
(44, 'QueNecesitamos', '¿Qué necesitamos?', 'Profesionistas voluntarios que nos brinden sus servicios para ayudar a nuestros beneficiarios.\r\nComputadoras para capacitar a nuestros niños.\r\nAlimentos preparados para brindarle a nuestros niños una buena alimentación.\r\nBecas Escolares para promover la permanencia en la escuela.\r\nDonativos económicos para el desarrollo de los programas y la atención de problemas específicos.\r\nMateriales didácticos y mobiliario escolar para el área de educación.');

-- --------------------------------------------------------

--
-- Table structure for table `metodopago`
--

CREATE TABLE IF NOT EXISTS `metodopago` (
  `IdMetodo` char(3) NOT NULL,
  `Descripcion` text,
  PRIMARY KEY (`IdMetodo`)
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
-- Table structure for table `usocfdi`
--

CREATE TABLE IF NOT EXISTS `usocfdi` (
  `IdCFDI` char(3) NOT NULL,
  `Nombre` text,
  PRIMARY KEY (`IdCFDI`)
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
('I01', 'Adquisición de mercancias'),
('P01', 'Por definir');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` varchar(100) NOT NULL,
  `email` varchar(254) NOT NULL,
  `name` varchar(254) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `name`) VALUES
('102928741796831556293', 'juanpi.96.b@gmail.com', 'Juan Pablo Pino Bravo');

--
-- Constraints for dumped tables
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
