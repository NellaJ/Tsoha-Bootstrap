CREATE TABLE Kayttaja(
id SERIAL PRIMARY KEY,
nimi varchar(50) NOT NULL,
salasana varchar(50) NOT NULL,
email varchar(50) NOT NULL
);

CREATE TABLE Yllapitaja(
id SERIAL PRIMARY KEY,
nimi varchar(50) NOT NULL,
salasana varchar(50) NOT NULL,
email varchar(50) NOT NULL
);

CREATE TABLE Sairaus(
id SERIAL PRIMARY KEY,
nimi varchar(50) NOT NULL,
geenit text,
mutaatiot text,
lisayspvm date NOT NULL
);

CREATE TABLE Geeni(
id SERIAL PRIMARY KEY,
nimi varchar(50) NOT NULL,
mutaatiot text,
sairaudet text,
lisayspvm date NOT NULL
);

CREATE TABLE Mutaatio(
id SERIAL PRIMARY KEY,
sijainti varchar(50) NOT NULL,
tyyppi varchar(50) NOT NULL,
lisayspvm date NOT NULL,
geeni varchar(50) REFERENCES Geeni(nimi) NOT NULL,
sairaus varchar(50) REFERENCES Sairaus(nimi) NOT NULL
);