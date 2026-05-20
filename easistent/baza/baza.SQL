DROP DATABASE IF EXISTS easistent;
CREATE DATABASE easistent;
USE easistent;

-- ======================
-- Table zupnije
-- ======================
CREATE TABLE zupnije (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  naslov VARCHAR(50) NOT NULL,
  kraj VARCHAR(20) NOT NULL
);

-- ======================
-- Table ucitelji
-- ======================
CREATE TABLE ucitelji (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  priimek VARCHAR(20) NOT NULL,
  telefon VARCHAR(15),
  email VARCHAR(40)
);

-- ======================
-- Table otroci
-- ======================
CREATE TABLE otroci (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  priimek VARCHAR(20) NOT NULL,
  datum_rojstva DATE NOT NULL,
  datum_krsta DATE,
  razred VARCHAR(20),
  id_zupnije INT NOT NULL,
  id_ucitelja INT,
  FOREIGN KEY (id_zupnije) REFERENCES zupnije(id),
  FOREIGN KEY (id_ucitelja) REFERENCES ucitelji(id)
);

-- ======================
-- Table razredi
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
-- Table starsi
-- ======================
CREATE TABLE starsi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ime VARCHAR(20) NOT NULL,
  priimek VARCHAR(20) NOT NULL,
  dekliski_priimek VARCHAR(20),
  datum_rojstva DATE,
  poklic VARCHAR(20),
  telefon VARCHAR(15),
  naslov VARCHAR(50),
  id_otroka INT,
  FOREIGN KEY (id_otroka) REFERENCES otroci(id)
);

-- ======================
-- Table molitve
-- ======================
CREATE TABLE molitve (
  id INT AUTO_INCREMENT PRIMARY KEY,
  naslov_molitve VARCHAR(50)
);

-- ======================
-- Table ocene
-- ======================
CREATE TABLE ocene (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ocena VARCHAR(10),
  snov VARCHAR(20),
  id_otroka INT,
  FOREIGN KEY (id_otroka) REFERENCES otroci(id)
);

-- ======================
-- Table izostanki
-- ======================
CREATE TABLE izostanki (
  id INT AUTO_INCREMENT PRIMARY KEY,
  datum_izostanka DATE,
  razlog VARCHAR(50),
  opravicljivost BOOLEAN,
  id_otroka INT,
  FOREIGN KEY (id_otroka) REFERENCES otroci(id)
);
