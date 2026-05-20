DROP DATABASE IF EXISTS easistent;
CREATE DATABASE easistent;
USE easistent;
ALTER DATABASE easistent CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- ======================
-- Tabela uporabniki
-- ======================
CREATE TABLE uporabniki (
  uporabnisko_ime VARCHAR(20) PRIMARY KEY,
  geslo VARCHAR(100) NOT NULL
);

INSERT INTO uporabniki (uporabnisko_ime, geslo) VALUES
('ucitelj1', 'geslo1'),
('ucitelj2', 'geslo2'),
('ucitelj3', 'geslo3'),
('ucitelj4', 'geslo4'),
('ucitelj5', 'geslo5'),
('otrok1', 'geslo1'),
('otrok2', 'geslo2'),
('otrok3', 'geslo3'),
('otrok4', 'geslo4'),
('otrok5', 'geslo5'),
('starse1', 'geslo1'),
('starse2', 'geslo2'),
('starse3', 'geslo3'),
('starse4', 'geslo4'),
('starse5', 'geslo5'),
('admin1', 'geslo1');

-- ======================
-- Tabela zupnije
-- ======================
CREATE TABLE zupnije (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  naslov VARCHAR(50) NOT NULL,
  kraj VARCHAR(20) NOT NULL
);

-- ======================
-- Tabela ucitelji
-- ======================
CREATE TABLE ucitelji (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  priimek VARCHAR(20) NOT NULL,
  telefon VARCHAR(15),
  email VARCHAR(40),
  uporabnisko_ime VARCHAR(20),
  FOREIGN KEY (uporabnisko_ime) REFERENCES uporabniki(uporabnisko_ime)
);

-- ======================
-- Tabela otroci
-- ======================
CREATE TABLE otroci (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  priimek VARCHAR(20) NOT NULL,
  datum_rojstva DATE NOT NULL,
  datum_krsta DATE,
  razred INT,
  id_zupnije INT NOT NULL,
  id_ucitelja INT,
  uporabnisko_ime VARCHAR(20),
  FOREIGN KEY (uporabnisko_ime) REFERENCES uporabniki(uporabnisko_ime),
  FOREIGN KEY (id_zupnije) REFERENCES zupnije(id),
  FOREIGN KEY (id_ucitelja) REFERENCES ucitelji(id)
);

-- ======================
-- Tabela razredi
-- ======================
CREATE TABLE razredi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime_razreda VARCHAR(10),
  id_otroka INT,
  id_zupnije INT,
  FOREIGN KEY (id_otroka) REFERENCES otroci(id),
  FOREIGN KEY (id_zupnije) REFERENCES zupnije(id)
);

-- ======================
-- Tabela starsi
-- ======================
CREATE TABLE starsi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  priimek VARCHAR(20) NOT NULL,
  dekliski_priimek VARCHAR(20),
  datum_rojstva DATE,
  poklic VARCHAR(30),
  telefon VARCHAR(15),
  naslov VARCHAR(50),
  id_otroka INT,
  uporabnisko_ime VARCHAR(20),
  FOREIGN KEY (uporabnisko_ime) REFERENCES uporabniki(uporabnisko_ime),
  FOREIGN KEY (id_otroka) REFERENCES otroci(id)
);

-- ======================
-- Tabela molitve
-- ======================
CREATE TABLE molitve (
  id INT AUTO_INCREMENT PRIMARY KEY,
  naslov_molitve VARCHAR(50)
);

-- ======================
-- Tabela ocene
-- ======================
CREATE TABLE ocene (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ocena VARCHAR(10),
  snov VARCHAR(20),
  id_otroka INT,
  id_ucitelja INT,
  FOREIGN KEY (id_otroka) REFERENCES otroci(id),
  FOREIGN KEY (id_ucitelja) REFERENCES ucitelji(id)
  
);

-- ======================
-- Tabela izostanki
-- ======================
CREATE TABLE izostanki (
  id INT AUTO_INCREMENT PRIMARY KEY,
  datum_izostanka DATE,
  razlog VARCHAR(50),
  opravicljivost VARCHAR(15),
  id_otroka INT,
  id_ucitelja INT,
  FOREIGN KEY (id_otroka) REFERENCES otroci(id),
  FOREIGN KEY (id_ucitelja) REFERENCES ucitelji(id)
);

-- ======================
-- PODATKI
-- ======================

INSERT INTO zupnije (ime, naslov, kraj) VALUES
('Sv. Peter', 'Glavna 1', 'Ljubljana'),
('Sv. Pavel', 'Cerkvena 5', 'Maribor'),
('Sv. Janez', 'Trg 3', 'Celje'),
('Sv. Jožef', 'Pot 7', 'Kranj'),
('Sv. Marija', 'Ulica 9', 'Novo mesto');

INSERT INTO ucitelji (ime, priimek, telefon, email, uporabnisko_ime) VALUES
('Ana', 'Novak', '031111111', 'ana.novak@mail.si', 'ucitelj1'),
('Boris', 'Kovač', '031222222', 'boris.kovac@mail.si', 'ucitelj2'),
('Cvetka', 'Horvat', '031333333', 'cvetka.horvat@mail.si', 'ucitelj3'),
('David', 'Zupan', '031444444', 'david.zupan@mail.si', 'ucitelj4'),
('Eva', 'Mlakar', '031555555', 'eva.mlakar@mail.si', 'ucitelj5');

INSERT INTO otroci
(ime, priimek, datum_rojstva, datum_krsta, razred, id_zupnije, id_ucitelja, uporabnisko_ime)
VALUES
('Miha', 'Novak', '2014-05-12', '2014-06-01', 3, 1, 1, 'otrok1'),
('Lana', 'Kovač', '2013-04-10', '2013-05-01', 4, 2, 2, 'otrok2'),
('Tina', 'Horvat', '2015-03-08', '2015-04-01', 2, 3, 3, 'otrok3'),
('Jakob', 'Zupan', '2014-07-20', '2014-08-10', 3, 4, 4, 'otrok4'),
('Neža', 'Mlakar', '2013-09-15', '2013-10-01', 4, 5, 5, 'otrok5');

INSERT INTO razredi (ime_razreda, id_otroka, id_zupnije) VALUES
('3A', 1, 1),
('4A', 2, 2),
('2A', 3, 3),
('3B', 4, 4),
('4B', 5, 5),
('9B', 5, 5);


INSERT INTO starsi
(ime, priimek, dekliski_priimek, datum_rojstva, poklic, telefon, naslov, id_otroka, uporabnisko_ime)
VALUES
('Marija', 'Novak', 'Kralj', '1985-02-10', 'Učiteljica', '041111111', 'Glavna 1', 1, 'starse1'),
('Peter', 'Kovač', NULL, '1982-06-12', 'Inženir', '041222222', 'Cerkvena 5', 2, 'starse2'),
('Nina', 'Horvat', 'Zore', '1987-09-30', 'Medicinska sestra', '041333333', 'Trg 3', 3, 'starse3'),
('Gregor', 'Zupan', NULL, '1980-11-22', 'Električar', '041444444', 'Pot 7', 4, 'starse4'),
('Mateja', 'Mlakar', 'Vidmar', '1984-01-18', 'Računovodja', '041555555', 'Ulica 9', 5, 'starse5');

INSERT INTO molitve (naslov_molitve) VALUES
('Oče naš'),
('Zdrava Marija'),
('Slava Očetu'),
('Angel varuh'),
('Večni počitek');

INSERT INTO ocene (ocena, snov, id_otroka, id_ucitelja) VALUES
('5', 'Molitev', 1, 1),
('4', 'Kateheza', 2, 2),
('5', 'Sveto pismo', 3, 3),
('3', 'Sodelovanje', 4, 4),
('4', 'Zvezek', 5, 5);

INSERT INTO izostanki (datum_izostanka, razlog, opravicljivost, id_otroka, id_ucitelja) VALUES
('2025-01-10', 'Bolezen', 'Opravičeno', 1,1),
('2025-01-12', 'Dopust', 'Neopravičeno', 2,2),
('2025-01-15', 'Zdravnik', 'Opravičeno', 3,3),
('2025-01-18', 'Osebno', 'Neurejeno', 4,4),
('2025-01-20', 'Osebno', 'Neurejeno', 1,3),
('2025-01-20', 'Bolezen', 'Opravičeno', 5,3);

SELECT * FROM razredi
