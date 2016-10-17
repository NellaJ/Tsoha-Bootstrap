  CREATE TABLE Kayttaja(
  id SERIAL PRIMARY KEY,
  nimi varchar(50) NOT NULL,
  salasana varchar(50) NOT NULL,
  email varchar(50) NOT NULL
  );

CREATE TABLE Sairaus(
 id SERIAL PRIMARY KEY,
 lyhenne varchar(10),
 nimi varchar(50) NOT NULL,
 geenit text,
 kuvaus text,
 lisayspvm date NOT NULL
 );
 
 CREATE TABLE Geeni(
 id SERIAL PRIMARY KEY,
 nimi varchar(15) NOT NULL,
kokonimi text, 
 sairaudet text,
kuvaus text,
 lisayspvm date NOT NULL
 );

CREATE TABLE Mutaatio(
id SERIAL PRIMARY KEY,
sijainti varchar(50) NOT NULL,
tyyppi varchar(50) NOT NULL,
lisayspvm date NOT NULL,
geeni varchar(50) NOT NULL,
sairaus varchar(50) NOT NULL
);