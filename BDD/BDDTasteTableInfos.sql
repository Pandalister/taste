SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `taste`
-- Création ds tables de Taste
--

CREATE TABLE `Client` (
    `idUser` varchar(50) NOT NULL,
    `emailUser` varchar(50) DEFAULT NULL,
    `nomUser` varchar(100) DEFAULT NULL,
    `preUser` varchar(100) DEFAULT NULL,
    `adrUser` varchar(100) DEFAULT NULL,
    `cpUser` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;

CREATE TABLE `Employe` (
    `idEmp` varchar(50) NOT NULL,
    `mdpEmp` varchar(50) DEFAULT NULL,
    `nomEmp` varchar(100) DEFAULT NULL,
    `preEmp` varchar(100) DEFAULT NULL,
    `adrEmp` varchar(100) DEFAULT NULL,
    `cpEmp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;

CREATE TABLE `Plat` (
    `matPlat` varchar(50) NOT NULL,
    `intitulPlat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;

CREATE TABLE `Tache` (
    `numTache` varchar(50) NOT NULL,
    `intitulTache` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
;

--
-- Insertion ds les tables de Taste
--
INSERT INTO `Employe` (`idEmp`, `mdpEmp`, `nomEmp`, `preEmp`, `adrEmp`, `cpEmp` ) VALUES
('pandalister0997', 'alpha0997', 'Miranda', 'Thomas', 'Langellier Bellevue, Imm Artaud, APT219', '97200');

INSERT INTO `Employe` (`idEmp`, `mdpEmp`, `nomEmp`, `preEmp`, `adrEmp`, `cpEmp` ) VALUES
('admin', 'password', 'admin', 'root', 'Les merguezs atomiques', '97200');


--
-- Définition des clés primaire
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`idUser`);

ALTER TABLE `Employe`
  ADD PRIMARY KEY (`idEmp`);

ALTER TABLE `Plat`
  ADD PRIMARY KEY (`matPlat`);


--
-- FOREIGN KEY (P_Id) REFERENCES Persons(P_Id)
--
