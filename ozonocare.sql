-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2019 at 07:16 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ozonocare`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen_completa` varchar(50) NOT NULL,
  `imagen_mini` varchar(50) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `descripcion` longtext NOT NULL,
  `descripcion_corta` text NOT NULL,
  `clave_prod` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `imagen_completa`, `imagen_mini`, `precio`, `descripcion`, `descripcion_corta`, `clave_prod`) VALUES
(5, 'Aceite de Argán - Regenerador (30ml)', 'o001', 'o001_mini', '350.00', 'Suaviza, hidrata a profundidad y promueve la elasticidad a la piel.\r\nIdeal para tratamiento de acné, arrugas, heridas leves, neurodermitis\r\ny la psoriasis.', 'Suaviza, hidrata a profundidad y promueve la elasticidad a la piel.\r\nIdeal para tratamiento de acné, arrugas, heridas leves, neurodermitis\r\ny la psoriasis.', 'O-001'),
(6, 'Aceite de Coco Ozonizado (30 ml) -\r\nSerum Regenerador', 'o002', 'o002_mini', '350.00', 'Propiedades antibióticas y antimicrobianas que ayudan a prevenir y\r\ncombatir infecciones en la piel. Contiene ácidos grasos de cadena\r\nmedia, estos ayudan a restablecer el pH de la piel.', 'Propiedades antibióticas y antimicrobianas que ayudan a prevenir y\r\ncombatir infecciones en la piel. Contiene ácidos grasos de cadena\r\nmedia, estos ayudan a restablecer el pH de la piel.', 'O-002'),
(7, 'Aceite Ozonizado de Oliva (30 gr)', 'o003', 'o003_mini', '350.00', 'Eficaz para la inflamación de la piel, (dermatitis-seborrea), útil en\r\ncelulitis, foliculitis, impétigo, psoriasis, tiña, piel seca, eczema, el pie\r\nde atleta, quemaduras solares y úlceras en la piel.', 'Eficaz para la inflamación de la piel, (dermatitis-seborrea), útil en\r\ncelulitis, foliculitis, impétigo, psoriasis, tiña, piel seca, eczema, el pie\r\nde atleta, quemaduras solares y úlceras en la piel.', 'O-003-30'),
(8, 'Aceite Ozonizado de Oliva (60 gr)', 'o003', 'o003_mini', '550.00', 'Eficaz para la inflamación de la piel, (dermatitis-seborrea), útil en\r\ncelulitis, foliculitis, impétigo, psoriasis, tiña, piel seca, eczema, el pie\r\nde atleta, quemaduras solares y úlceras en la piel.', 'Eficaz para la inflamación de la piel, (dermatitis-seborrea), útil en\r\ncelulitis, foliculitis, impétigo, psoriasis, tiña, piel seca, eczema, el pie\r\nde atleta, quemaduras solares y úlceras en la piel.', 'O-003-60'),
(9, 'Aceite Ozonizado de Oliva (1000gr)', 'o003', 'o003_mini', '3500.00', 'Eficaz para la inflamación de la piel, (dermatitis-seborrea), útil en\r\ncelulitis, foliculitis, impétigo, psoriasis, tiña, piel seca, eczema, el pie\r\nde atleta, quemaduras solares y úlceras en la piel.', 'Eficaz para la inflamación de la piel, (dermatitis-seborrea), útil en\r\ncelulitis, foliculitis, impétigo, psoriasis, tiña, piel seca, eczema, el pie\r\nde atleta, quemaduras solares y úlceras en la piel.', 'O-003-K'),
(10, 'Aceite Regenerador para Pestañas (10 ml)', 'o004', 'o004_mini', '250.00', 'Rico en Aceite de Almendras, Hueso de Mamey, Ricino, Oliva y\r\nRosa Mosqueta. Hidrata, egrosa y da un crecimiento rapido.', 'Rico en Aceite de Almendras, Hueso de Mamey, Ricino, Oliva y\r\nRosa Mosqueta. Hidrata, egrosa y da un crecimiento rapido.', 'O-004'),
(11, 'Jabón Ozonizado de Oliva (100gr)', 'o005a', 'o005a_mini', '100.00', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'O-005-A'),
(12, 'Jabón Ozonizado de Oliva con AVENA -\r\nPiel Sensible(100gr)', 'o005b', 'o005b_mini', '105.00', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'O-005-B'),
(13, 'Jabón Ozonizado de Oliva con CARBON\r\nACTIVADO - Piel Ocluida (100gr)', 'o005c', 'o005c_mini', '105.00', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'O-005-c'),
(14, 'Jabón Ozonizado de Oliva con Aceite de\r\nCoco Organico - Piel Envejecida100gr)', 'o005d', 'o005d_mini', '110.00', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'O-005-d'),
(15, 'Jabón Ozonizado de Oliva con ESPONJA\r\n(100gr)', 'o005e', 'o005e_mini', '115.00', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'UNICO con Ozono, lo que le confiere acción GERMICIDA,\r\noxigenante y revitalizadora, restaura la dermis, estabiliza el manto\r\nácido de la piel. Prubelo para uso localizado como barra dermica o\r\nbien para uso corporal conESPONJA o bien con las propiedades de\r\nla AVENA para regenerar la piel sensible, tambien con CARBON\r\nACTIVADO para piel obstruida por comedones.', 'O-005-e'),
(27, 'Shampoo Ozonizado Capilar (240 ml)', 'o006', 'o006_mini', '210.00', 'Elimina del cuero cabelludo microorganismos dañinos que pueden\r\ncausar la caída del cabello, estimula el proceso de regeneración en\r\nla piel, elimina tanto hongos como bacterias evitando infecciones en\r\nel cuero cabelludo. NO RESECA. Con Keratrix: Activo reparador\r\nnatural para cabello dañado y debilitado, fortalece el cabello\r\nreparando la estructura interna.', 'Elimina del cuero cabelludo microorganismos dañinos que pueden\r\ncausar la caída del cabello, estimula el proceso de regeneración en\r\nla piel, elimina tanto hongos como bacterias evitando infecciones en\r\nel cuero cabelludo. NO RESECA. Con Keratrix: Activo reparador\r\nnatural para cabello dañado y debilitado, fortalece el cabello\r\nreparando la estructura interna.', 'O-006'),
(28, 'Shampoo Ozonizado Capilar (1000 ml)', 'o006l', 'o006l_mini', '600.00', 'Elimina del cuero cabelludo microorganismos dañinos que pueden\r\ncausar la caída del cabello, estimula el proceso de regeneración en\r\nla piel, elimina tanto hongos como bacterias evitando infecciones en\r\nel cuero cabelludo. NO RESECA. Con Keratrix: Activo reparador\r\nnatural para cabello dañado y debilitado, fortalece el cabello\r\nreparando la estructura interna.', 'Elimina del cuero cabelludo microorganismos dañinos que pueden\r\ncausar la caída del cabello, estimula el proceso de regeneración en\r\nla piel, elimina tanto hongos como bacterias evitando infecciones en\r\nel cuero cabelludo. NO RESECA. Con Keratrix: Activo reparador\r\nnatural para cabello dañado y debilitado, fortalece el cabello\r\nreparando la estructura interna.', 'O-006-L'),
(29, 'Shampoo Ozonizado Facial (100 ml)', 'o007', 'o007_mini', '140.00', 'Especialmente diseñado para la piel delicado de la mujer mexicana,\r\ncon una combinacipon de Aceites Escenciales Ozonizados como\r\nOLIVA, Semilla de Uva, Jojoba, Aguacate, y Karite prometen\r\nregresar la lozania y elasticidad a la piel al mismo tiempo quejan el\r\nrostro limpio y libre de bacterias y microorganismo nocivos que\r\npueden dañar la capa cornea.', 'Especialmente diseñado para la piel delicado de la mujer mexicana,\r\ncon una combinacipon de Aceites Escenciales Ozonizados como\r\nOLIVA, Semilla de Uva, Jojoba, Aguacate, y Karite prometen\r\nregresar la lozania y elasticidad a la piel al mismo tiempo quejan el\r\nrostro limpio y libre de bacterias y microorganismo nocivos que\r\npueden dañar la capa cornea.', 'O-007-AP'),
(30, 'Shampoo Ozonizado Facial (240 ml)', 'o007', 'o007_mini', '290.00', 'Especialmente diseñado para la piel delicado de la mujer mexicana,\r\ncon una combinacipon de Aceites Escenciales Ozonizados como\r\nOLIVA, Semilla de Uva, Jojoba, Aguacate, y Karite prometen\r\nregresar la lozania y elasticidad a la piel al mismo tiempo quejan el\r\nrostro limpio y libre de bacterias y microorganismo nocivos que\r\npueden dañar la capa cornea.', 'Especialmente diseñado para la piel delicado de la mujer mexicana,\r\ncon una combinacipon de Aceites Escenciales Ozonizados como\r\nOLIVA, Semilla de Uva, Jojoba, Aguacate, y Karite prometen\r\nregresar la lozania y elasticidad a la piel al mismo tiempo quejan el\r\nrostro limpio y libre de bacterias y microorganismo nocivos que\r\npueden dañar la capa cornea.', 'O-007'),
(31, 'Shampoo Facial con AHAS (100 ml)', 'o008', 'o008_mini', '250.00', 'Son Acidos alfa hidróxidos (AHA) también conocidos como AHA, son\r\nmaravillosos para una gran cantidad de cuestiones referidas al\r\ncuidado del cutis. Por esto mismo es que están siendo muy\r\nutilizados últimamente en productos relacionados con la piel. Entre\r\nlos beneficios se encuentran la eliminación de células muertas, el\r\nmejoramiento de la textura de la piel o la eliminación de las manchas\r\nde la edad.', 'Son Acidos alfa hidróxidos (AHA) también conocidos como AHA, son\r\nmaravillosos para una gran cantidad de cuestiones referidas al\r\ncuidado del cutis. Por esto mismo es que están siendo muy\r\nutilizados últimamente en productos relacionados con la piel. Entre\r\nlos beneficios se encuentran la eliminación de células muertas, el\r\nmejoramiento de la textura de la piel o la eliminación de las manchas\r\nde la edad.', 'O-008-AP'),
(32, 'ShampooFAcial con AHAS (240 ml)', 'o008', 'o008_mini', '480.00', 'Son Acidos alfa hidróxidos (AHA) también conocidos como AHA, son\r\nmaravillosos para una gran cantidad de cuestiones referidas al\r\ncuidado del cutis. Por esto mismo es que están siendo muy\r\nutilizados últimamente en productos relacionados con la piel. Entre\r\nlos beneficios se encuentran la eliminación de células muertas, el\r\nmejoramiento de la textura de la piel o la eliminación de las manchas\r\nde la edad.', 'Son Acidos alfa hidróxidos (AHA) también conocidos como AHA, son\r\nmaravillosos para una gran cantidad de cuestiones referidas al\r\ncuidado del cutis. Por esto mismo es que están siendo muy\r\nutilizados últimamente en productos relacionados con la piel. Entre\r\nlos beneficios se encuentran la eliminación de células muertas, el\r\nmejoramiento de la textura de la piel o la eliminación de las manchas\r\nde la edad.', 'O-008'),
(33, 'Ozonic Derm Colagene - Gel de Colageno\r\nOzonizado (30ml)', 'o009', 'o009_mini', '550.00', 'Tratamiento nocturno de uso continúo A base de extractos de aceite\r\nde nuez, semilla de uva, colageno al 100%. Tratamiento de\r\natenuación de líneas de expresión en contorno de ojos, labios y\r\nfrente.', 'Tratamiento nocturno de uso continúo A base de extractos de aceite\r\nde nuez, semilla de uva, colageno al 100%. Tratamiento de\r\natenuación de líneas de expresión en contorno de ojos, labios y\r\nfrente.', 'O-009'),
(34, 'Filtro Solar Ozonizado FPS 40 (60 gr)', 'o010', 'o010_mini', '550.00', 'Rico en extractos de Zanahoria, Frambuesa y Aceite de Oliva\r\nOzonizado, que hacen a este protector un inhbidor de rayos UVA y al\r\nmismo tiempo regeneradores de la piel.', 'Rico en extractos de Zanahoria, Frambuesa y Aceite de Oliva\r\nOzonizado, que hacen a este protector un inhbidor de rayos UVA y al\r\nmismo tiempo regeneradores de la piel.', 'O-010'),
(35, 'Ozonic White (60 gr)\r\nCrema para manchas', 'o011', 'o011_mini', '550.00', 'Única crema con acción desmanchadora de la piel, efecto aclarante\r\ngracias a su elevado nivel de penetración. Su formula con tecnología\r\nde punta permite la incorporación del ozono que ejerce un efecto de\r\nestimulación celular y aclarante de la piel, sus potentes activos\r\nayudan aclarar el tono de la piel y a cubrir imperfecciones.', 'Única crema con acción desmanchadora de la piel, efecto aclarante\r\ngracias a su elevado nivel de penetración. Su formula con tecnología\r\nde punta permite la incorporación del ozono que ejerce un efecto de\r\nestimulación celular y aclarante de la piel, sus potentes activos\r\nayudan aclarar el tono de la piel y a cubrir imperfecciones.', 'O-011'),
(36, 'Ozonic Rejuvenece (60 gr) Crema\r\nde día - Pieles jovenes prematauramente\r\nenvejecidas', 'o012', 'o012_mini', '550.00', 'Mejora la cohesión de la matriz extracelular y mantiene el estado\r\ncompacto de las monocapas lípidicas de la epidermis. Incrementa\r\nlos niveles de proteína celular e induce la formación de colágeno. -\r\nPIELES JOVENES PREMATURAMENTE ENVEJECIDAS', 'Mejora la cohesión de la matriz extracelular y mantiene el estado\r\ncompacto de las monocapas lípidicas de la epidermis. Incrementa\r\nlos niveles de proteína celular e induce la formación de colágeno. -\r\nPIELES JOVENES PREMATURAMENTE ENVEJECIDAS', 'O-012'),
(37, 'Ozonic Complexe (60 gr) Crema de\r\nnoche - Pieles maduras', 'o013', 'o013_mini', '550.00', 'Es una crema enriquecida con activos marinos, vitaminas y\r\nminerales que permiten atenuar las arrugas y retardar el proceso de\r\nenvejecimiento prematuro de la piel.Acción dérmica reparadora y\r\natenuante de arrugas ya que es un revitalizante antiedad. Tiene\r\nefecto desintoxicante y de estimulación celular. - PIELES MADURAS', 'Es una crema enriquecida con activos marinos, vitaminas y\r\nminerales que permiten atenuar las arrugas y retardar el proceso de\r\nenvejecimiento prematuro de la piel.Acción dérmica reparadora y\r\natenuante de arrugas ya que es un revitalizante antiedad. Tiene\r\nefecto desintoxicante y de estimulación celular. - PIELES MADURAS', 'O-013'),
(38, 'Plasti-Mask Facial y Corporal (Grande)', 'm01', 'm01_mini', '550.00', 'Mascarilla Plastica Tensora rica en Colageno, Elastina y Antioxidantes\r\nderivados de la semilla de uva - Ideal para pieles\r\ndesvitalizadas.', 'Mascarilla Plastica Tensora rica en Colageno, Elastina y Antioxidantes\r\nderivados de la semilla de uva - Ideal para pieles\r\ndesvitalizadas.', 'M-01'),
(39, 'Mascarilla de Velo BIO-ANTIOXIDANTE -\r\nFRUTOS ROJOS (5 PZAS)', 'm02', 'm02_mini', '450.00', 'Retarda la senectud de las células esenciales\r\nCombate el envejecimiento cronológico, Conserva la apariencia\r\njuvenil y la vitalidad de la piel.', 'Retarda la senectud de las células esenciales\r\nCombate el envejecimiento cronológico, Conserva la apariencia\r\njuvenil y la vitalidad de la piel.', 'M-02'),
(40, 'Mascarilla de Velo BIO-Acido Hialuronico -\r\nHidratante y Tensora (5 PZAS)', 'm03', 'm03_mini', '450.00', 'El ácido hialurónico Posee La Capacidad de retener el agua en un\r\nPorcentaje Equivalente A MILES De Veces Su Peso, Hidratando la\r\nepidermis para regenerar las fibras que sostienen los tejidos de la\r\npiel.', 'El ácido hialurónico Posee La Capacidad de retener el agua en un\r\nPorcentaje Equivalente A MILES De Veces Su Peso, Hidratando la\r\nepidermis para regenerar las fibras que sostienen los tejidos de la\r\npiel.', 'M-03'),
(41, 'Mascarilla de Velo BIO-Reafirmante -\r\nCOLAGENO, CAVIAR Y ELASTINA, (5 PZAS)', 'm04', 'm04_mini', '450.00', 'Mascarilla rica en Silicio Organico oligoelemento responsable de la\r\nunión de los glicosaminoglicanos y los poliurónicos, determinando la\r\nformación estructural del tejido conectivo. Enirquerida con PERLAS\r\nDE CAVIAR', 'Mascarilla rica en Silicio Organico oligoelemento responsable de la\r\nunión de los glicosaminoglicanos y los poliurónicos, determinando la\r\nformación estructural del tejido conectivo. Enirquerida con PERLAS\r\nDE CAVIAR', 'M-04'),
(42, 'Mascarilla Desintoxicante y Aclarente con\r\nCarbon Activado y Vitamina C - (60gr)', 'm05', 'm05_mini', '190.00', 'Nutre, hidrata y purifica la piel, Desinfecta las heridas, Es ideal para\r\ntratar pieles grasas, Ayuda a blanquear la piel, Facilita que los poros\r\nse cierren y Equilibra el PH de la piel', 'Nutre, hidrata y purifica la piel, Desinfecta las heridas, Es ideal para\r\ntratar pieles grasas, Ayuda a blanquear la piel, Facilita que los poros\r\nse cierren y Equilibra el PH de la piel', 'M-05'),
(43, 'Mascarilla Desintoxicante y Aclarente con\r\nCarbon Activado y Vitamina C - (100gr)', 'm05', 'm05_mini', '300.00', 'Nutre, hidrata y purifica la piel, Desinfecta las heridas, Es ideal para\r\ntratar pieles grasas, Ayuda a blanquear la piel, Facilita que los poros\r\nse cierren y Equilibra el PH de la piel', 'Nutre, hidrata y purifica la piel, Desinfecta las heridas, Es ideal para\r\ntratar pieles grasas, Ayuda a blanquear la piel, Facilita que los poros\r\nse cierren y Equilibra el PH de la piel', 'M-05-100'),
(44, 'Mascarilla Desintoxicante y Aclarente con\r\nCarbon Activado y Vitamina C - (240gr)', 'm05', 'm05_mini', '650.00', 'Nutre, hidrata y purifica la piel, Desinfecta las heridas, Es ideal para\r\ntratar pieles grasas, Ayuda a blanquear la piel, Facilita que los poros\r\nse cierren y Equilibra el PH de la piel', 'Nutre, hidrata y purifica la piel, Desinfecta las heridas, Es ideal para\r\ntratar pieles grasas, Ayuda a blanquear la piel, Facilita que los poros\r\nse cierren y Equilibra el PH de la piel', 'M-05-240'),
(45, 'Placenta Anti-Age (60 gr)', 'fr03', 'fr03_mini', '450.00', 'Ayuda a que proceso de envejecimiento se haga más lento, ya que\r\nlas células viven más tiempo. Hay mejor producción de colágeno y\r\nelastina.', 'Ayuda a que proceso de envejecimiento se haga más lento, ya que\r\nlas células viven más tiempo. Hay mejor producción de colágeno y\r\nelastina.', 'FR-03'),
(46, 'Acido Hialuronico (30 ml)', 'fr05', 'fr05_mini', '450.00', 'Es junto al colágeno, un gran producto de relleno de las arrugas. Es\r\nmás duradero, provoca menos reacciones alérgicas y contribuye a\r\nborrar las arrugas.', 'Es junto al colágeno, un gran producto de relleno de las arrugas. Es\r\nmás duradero, provoca menos reacciones alérgicas y contribuye a\r\nborrar las arrugas.', 'FR-05'),
(47, 'Exfoliante de Choco-Café: (60 gr)', 'fb01', 'fb01_mini', '199.50', 'Ingredientes activos: •Extracto de Cafe Anti-inflamatorio,\r\nastringente y cicatrizante. •Canela: Vaso-constrictor, calmante y\r\nastringente. •Miel Real: Suavizante y Regenerante •Aceite de Oliva\r\nOzonizado: Da tono, Regenera y promueve a la cicatrización.', 'Ingredientes activos: •Extracto de Cafe Anti-inflamatorio,\r\nastringente y cicatrizante. •Canela: Vaso-constrictor, calmante y\r\nastringente. •Miel Real: Suavizante y Regenerante •Aceite de Oliva\r\nOzonizado: Da tono, Regenera y promueve a la cicatrización.', 'FB-01'),
(48, 'Exfoliante de Choco-Café: (100 gr)', 'fb01', 'fb01_mini', '300.00', 'Ingredientes activos: •Extracto de Cafe Anti-inflamatorio,\r\nastringente y cicatrizante. •Canela: Vaso-constrictor, calmante y\r\nastringente. •Miel Real: Suavizante y Regenerante •Aceite de Oliva\r\nOzonizado: Da tono, Regenera y promueve a la cicatrización.', 'Ingredientes activos: •Extracto de Cafe Anti-inflamatorio,\r\nastringente y cicatrizante. •Canela: Vaso-constrictor, calmante y\r\nastringente. •Miel Real: Suavizante y Regenerante •Aceite de Oliva\r\nOzonizado: Da tono, Regenera y promueve a la cicatrización.', 'FB-0100'),
(49, 'Exfoliante de Choco-Café: (240 gr)', 'fb01', 'fb01_mini', '588.00', 'Ingredientes activos: •Extracto de Cafe Anti-inflamatorio,\r\nastringente y cicatrizante. •Canela: Vaso-constrictor, calmante y\r\nastringente. •Miel Real: Suavizante y Regenerante •Aceite de Oliva\r\nOzonizado: Da tono, Regenera y promueve a la cicatrización.', 'Ingredientes activos: •Extracto de Cafe Anti-inflamatorio,\r\nastringente y cicatrizante. •Canela: Vaso-constrictor, calmante y\r\nastringente. •Miel Real: Suavizante y Regenerante •Aceite de Oliva\r\nOzonizado: Da tono, Regenera y promueve a la cicatrización.', 'FB-01-C'),
(50, 'Gel Exfoliante para Piel Grasa (60 gr)', 'fb02', 'fb02_mini', '199.50', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'FB-02'),
(51, 'Gel Exfoliante para Piel Grasa (100 gr)', 'fb02', 'fb02_mini', '300.00', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'FB-02-100'),
(52, 'Gel Exfoliante para Piel Grasa (240 gr)', 'fb02', 'fb02_mini', '588.00', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'FB-02-C'),
(53, 'Crema Exfoliante para Piel con Manchas\r\n(60 GR)', 'fb03', 'fb03_mini', '199.50', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'FB-03'),
(54, 'Crema Exfoliante para Piel con Manchas\r\n(100 GR)', 'fb03', 'fb03_mini', '300.00', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'FB-03-100'),
(55, 'Crema Exfoliante para Piel con Manchas\r\n(240 GR)', 'fb03', 'fb03_mini', '588.00', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'Todo tipo de pieles, especialmente grasas, con tendencia a grasa,\r\ncon acné y mixtas. Beneficios: Da limpieza y exfoliación a la vez\r\nque deja una piel suave facilitando la eliminación de grasa,\r\nimpurezas y células muertas.', 'FB-03-C'),
(56, 'Gel Detox Eyes (60 gr)', 'fb04', 'fb04_mini', '200.00', 'Por su alto concnetración de Acido Hialuronico y Extracto de Cafeina\r\nlo hace el gel ideal para combatrir las ojeras y el area abultada de\r\nlos ojos.', 'Por su alto concnetración de Acido Hialuronico y Extracto de Cafeina\r\nlo hace el gel ideal para combatrir las ojeras y el area abultada de\r\nlos ojos.', 'FB-04'),
(57, 'Gel Detox Eyes (240 gr)', 'fb04', 'fb04_mini', '650.00', 'Por su alto concnetración de Acido Hialuronico y Extracto de Cafeina\r\nlo hace el gel ideal para combatrir las ojeras y el area abultada de\r\nlos ojos.', 'Por su alto concnetración de Acido Hialuronico y Extracto de Cafeina\r\nlo hace el gel ideal para combatrir las ojeras y el area abultada de\r\nlos ojos.', 'FB-04-C'),
(58, 'Gel de Agavetherapy - Hidrogel\r\nRevitalizante (60 gr)', 'fb05', 'fb05_mini', '199.50', 'Con su extracto de Aloe Vera y Vitamina E, proporcionan alimento\r\npara la piel, lucha contra el brillo facial y restaura la piel irritada .', 'Con su extracto de Aloe Vera y Vitamina E, proporcionan alimento\r\npara la piel, lucha contra el brillo facial y restaura la piel irritada .', 'FB-05'),
(59, 'Gel de Agavetherapy - Hidrogel\r\nRevitalizante (100 gr)', 'fb05', 'fb05_mini', '300.00', 'Con su extracto de Aloe Vera y Vitamina E, proporcionan alimento\r\npara la piel, lucha contra el brillo facial y restaura la piel irritada .', 'Con su extracto de Aloe Vera y Vitamina E, proporcionan alimento\r\npara la piel, lucha contra el brillo facial y restaura la piel irritada .', 'FB-05-100'),
(60, 'Gel de Agavetherapy - Hidrogel\r\nRevitalizante (240 gr)', 'fb05', 'fb05_mini', '588.00', 'Con su extracto de Aloe Vera y Vitamina E, proporcionan alimento\r\npara la piel, lucha contra el brillo facial y restaura la piel irritada .', 'Con su extracto de Aloe Vera y Vitamina E, proporcionan alimento\r\npara la piel, lucha contra el brillo facial y restaura la piel irritada .', 'FB-05-C'),
(61, 'Gel de Caviar Colagene (60 gr)', 'fb06', 'fb06_mini', '199.50', 'Ideal para contrarrestar los daños causados por agresiones\r\nclimáticas, aporta proteínas naturales para regenerar y los efectos\r\ncausados.', 'Ideal para contrarrestar los daños causados por agresiones\r\nclimáticas, aporta proteínas naturales para regenerar y los efectos\r\ncausados.', 'FB-06'),
(62, 'Gel de Caviar Colagene (100 gr)', 'fb06', 'fb06_mini', '300.00', 'Ideal para contrarrestar los daños causados por agresiones\r\nclimáticas, aporta proteínas naturales para regenerar y los efectos\r\ncausados.', 'Ideal para contrarrestar los daños causados por agresiones\r\nclimáticas, aporta proteínas naturales para regenerar y los efectos\r\ncausados.', 'FB-06-100'),
(63, 'Gel de Caviar Colagene (240 gr)', 'fb06', 'fb06_mini', '588.00', 'Ideal para contrarrestar los daños causados por agresiones\r\nclimáticas, aporta proteínas naturales para regenerar y los efectos\r\ncausados.', 'Ideal para contrarrestar los daños causados por agresiones\r\nclimáticas, aporta proteínas naturales para regenerar y los efectos\r\ncausados.', 'FB-06-C'),
(64, 'Gel de UVA - Winetheapy (60 gr)', 'fb07', 'fb07_mini', '199.50', 'Rico en Resveratrol, Protección Antioxidante:Ideal para luchar contra\r\nlas manchas oscuras y combatir las arrugas,permite regresar su\r\nluminosidad.', 'Rico en Resveratrol, Protección Antioxidante:Ideal para luchar contra\r\nlas manchas oscuras y combatir las arrugas,permite regresar su\r\nluminosidad.', 'FB-07'),
(65, 'Gel de UVA - Winetheapy (100 gr)', 'fb07', 'fb07_mini', '300.00', 'Rico en Resveratrol, Protección Antioxidante:Ideal para luchar contra\r\nlas manchas oscuras y combatir las arrugas,permite regresar su\r\nluminosidad.', 'Rico en Resveratrol, Protección Antioxidante:Ideal para luchar contra\r\nlas manchas oscuras y combatir las arrugas,permite regresar su\r\nluminosidad.', 'FB-07-100'),
(66, 'Gel de UVA - Winetheapy (250 gr)', 'fb07', 'fb07_mini', '588.00', 'Rico en Resveratrol, Protección Antioxidante:Ideal para luchar contra\r\nlas manchas oscuras y combatir las arrugas,permite regresar su\r\nluminosidad.', 'Rico en Resveratrol, Protección Antioxidante:Ideal para luchar contra\r\nlas manchas oscuras y combatir las arrugas,permite regresar su\r\nluminosidad.', 'FB-07-C'),
(67, 'Gel Lifting Efecto Botox (60 gr)', 'fb08', 'fb08_mini', '199.50', 'Para Levantamiento y Tensor: Rico en colágeno y elastina, fibras\r\nque se encargan de mantener tensos nuestros tejidos.', 'Para Levantamiento y Tensor: Rico en colágeno y elastina, fibras\r\nque se encargan de mantener tensos nuestros tejidos.', 'FB-08'),
(68, 'Gel Lifting Efecto Botox (100 gr)', 'fb08', 'fb08_mini', '300.00', 'Para Levantamiento y Tensor: Rico en colágeno y elastina, fibras\r\nque se encargan de mantener tensos nuestros tejidos.', 'Para Levantamiento y Tensor: Rico en colágeno y elastina, fibras\r\nque se encargan de mantener tensos nuestros tejidos.', 'FB-08-100'),
(69, 'Gel Lifting Efecto Botox (240 gr)', 'fb08', 'fb08_mini', '588.00', 'Para Levantamiento y Tensor: Rico en colágeno y elastina, fibras\r\nque se encargan de mantener tensos nuestros tejidos.', 'Para Levantamiento y Tensor: Rico en colágeno y elastina, fibras\r\nque se encargan de mantener tensos nuestros tejidos.', 'FB-08-C'),
(70, 'Loción Plus Azuleno (120 ml)', 'tf01', 'tf01_mini', '189.00', 'Astirngente y Reafirmante. Para pieles con tendencia a grasa, grasa\r\ncon acné y mixtas, comedolítico y no comedogénico, reduce los\r\nporos, disminuye el brillo, actividad bacteriostática.', 'Astirngente y Reafirmante. Para pieles con tendencia a grasa, grasa\r\ncon acné y mixtas, comedolítico y no comedogénico, reduce los\r\nporos, disminuye el brillo, actividad bacteriostática.', 'TF-01'),
(71, 'Loción Plus Azuleno (240 ml)', 'tf01', 'tf01_mini', '350.00', 'Astirngente y Reafirmante. Para pieles con tendencia a grasa, grasa\r\ncon acné y mixtas, comedolítico y no comedogénico, reduce los\r\nporos, disminuye el brillo, actividad bacteriostática.', 'Astirngente y Reafirmante. Para pieles con tendencia a grasa, grasa\r\ncon acné y mixtas, comedolítico y no comedogénico, reduce los\r\nporos, disminuye el brillo, actividad bacteriostática.', 'TF-01-C'),
(72, 'Loción Plus Hidratante y Limpiadora (120\r\nml)', 'tf02', 'tf02_mini', '189.00', 'Gracias a su ingrediente activo “Extracto de Flor de Pivoine tiene\r\npropiedades curativas, suavizantes e hidratantes, y Dulcemín,\r\nproteínas de almendra que brindan suavidad.', 'Gracias a su ingrediente activo “Extracto de Flor de Pivoine tiene\r\npropiedades curativas, suavizantes e hidratantes, y Dulcemín,\r\nproteínas de almendra que brindan suavidad.', 'TF-02'),
(73, 'Loción Plus Hidratante y Limpiadora (240\r\nml)', 'tf02', 'tf02_mini', '350.00', 'Gracias a su ingrediente activo “Extracto de Flor de Pivoine tiene\r\npropiedades curativas, suavizantes e hidratantes, y Dulcemín,\r\nproteínas de almendra que brindan suavidad.', 'Gracias a su ingrediente activo “Extracto de Flor de Pivoine tiene\r\npropiedades curativas, suavizantes e hidratantes, y Dulcemín,\r\nproteínas de almendra que brindan suavidad.', 'TF-02-C'),
(74, 'Loción Tonic Aclarant C (120 ml)', 'tf03', 'tf03_mini', '189.00', 'Gracias a sus activos ricos en vitamina C y E combate los radicales\r\nlibres, inhibe la pigmentación de la piel, deprimiendo la enzima\r\ntirosina, descompone la melanina para favorecer a un aclaramiento\r\nde la piel de manera progresiva.', 'Gracias a sus activos ricos en vitamina C y E combate los radicales\r\nlibres, inhibe la pigmentación de la piel, deprimiendo la enzima\r\ntirosina, descompone la melanina para favorecer a un aclaramiento\r\nde la piel de manera progresiva.', 'TF-03'),
(75, 'Loción Tonic Aclarant C (240 ml)', 'tf03c', 'tf03c_mini', '350.00', 'Gracias a sus activos ricos en vitamina C y E combate los radicales\r\nlibres, inhibe la pigmentación de la piel, deprimiendo la enzima\r\ntirosina, descompone la melanina para favorecer a un aclaramiento\r\nde la piel de manera progresiva.', 'Gracias a sus activos ricos en vitamina C y E combate los radicales\r\nlibres, inhibe la pigmentación de la piel, deprimiendo la enzima\r\ntirosina, descompone la melanina para favorecer a un aclaramiento\r\nde la piel de manera progresiva.', 'TF-03-C'),
(76, 'Colageno Hidrolizado + Acido\r\nHialuronico (500 gr)', 'com02', 'com02_mini', '800.00', '• Formula con Aminoácidos Libres con la más alta biodisponibilidad y\r\navanzada tecnología nutricional de adsorción inmediata que\r\ncontribuyen a la regeneración natural de los tejidos conectivos y\r\nmusculares.\r\n• Adicionado con Acido Hialuronico “Factor Hiper hidratante” permite\r\nrecuperar la viscosidad y la elasticidad así como la flexibilidad y\r\nlubricación de las articulaciones y Cartílago, ayuda a mantener la\r\ntersura de la piel.', '• Formula con Aminoácidos Libres con la más alta biodisponibilidad y\r\navanzada tecnología nutricional de adsorción inmediata que\r\ncontribuyen a la regeneración natural de los tejidos conectivos y\r\nmusculares.\r\n• Adicionado con Acido Hialuronico “Factor Hiper hidratante” permite\r\nrecuperar la viscosidad y la elasticidad así como la flexibilidad y\r\nlubricación de las articulaciones y Cartílago, ayuda a mantener la\r\ntersura de la piel.', 'COM-02');

-- --------------------------------------------------------

--
-- Table structure for table `productos_salud`
--

CREATE TABLE `productos_salud` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen_completa` varchar(50) NOT NULL,
  `imagen_mini` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `descripcion_corta` text NOT NULL,
  `clave_prod` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productos_salud`
--

INSERT INTO `productos_salud` (`id`, `nombre`, `imagen_completa`, `imagen_mini`, `descripcion`, `descripcion_corta`, `clave_prod`) VALUES
(77, 'Purificador de ambiente', 'purificadorAmbiente', 'purificadorAmbiente_mini', 'Un purificador de ambiente por medio del ozono es un aparato de sencilla instalación y que no requiere consumibles.\r\n\r\nUn generador de ozono es el elemento indispensable para que nuestros ambientes no estén contaminados:\r\n\r\nReduce el riesgo de contagio de enfermedades\r\nElimina el stress y vitaliza\r\nDestruye olores desagradables\r\nPreviene la aparición de alergias y la crisis del asma\r\nDestruye rápidamente la mayor parte de los microbios, así como las toxinas difteriana y tetánicas', 'Un generador de ozono es el elemento indispensable para que nuestros ambientes no estén contaminados.', 'puramb01'),
(78, 'Purificador de agua', 'purificadorAgua', 'purificadorAgua_mini', 'Water Life Ozone-Generator desinfecta el agua, quita el mal sabor y olor del agua de toma directa, también elimina los virus, bacterias y otros elementos patógenos que contiene el agua.\r\n\r\nLos generadores de ozono para agua por sus cualidades únicas se utilizan desde hace más de cien años tanto como un medio poderosamente efectivo para la potabilización del agua como para mejorar su calidad y particularmente sus condiciones organolépticas. En la actualidad, el procesamiento del agua potable con ozono está experimentando un constante incremento a nivel internacional, principalmente como alternativa a los productos químicos tradicionales.\r\n\r\nLos efectos principales efectos de los generadores de ozono Biozonic para agua son:\r\n\r\nDesinfección bacterial e inactivación viral.\r\nOxidación de inorgánicos como hierro, manganeso, metales pesados ligados orgánicamente, cianuros, sulfuros y nitratos.\r\nOxidación de orgánicos como detergentes, pesticidas, herbicidas, fenoles, sabor, olor y color causados por impurezas.', 'Water Life Ozone-Generator desinfecta el agua, quita el mal sabor y olor del agua de toma directa, también elimina los virus, bacterias y otros elementos patógenos que contiene el agua.', 'puragua01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos_salud`
--
ALTER TABLE `productos_salud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `productos_salud`
--
ALTER TABLE `productos_salud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;