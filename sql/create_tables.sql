CREATE TABLE Kayttaja(
id SERIAL PRIMARY KEY,
nimi varchar(50) NOT NULL,
salasana varchar(50) NOT NULL,
email varchar(50) NOT NULL
);

--Näkyy nettisivulla, vanhasta jäänyt
--CREATE TABLE Yllapitaja(
--id SERIAL PRIMARY KEY,
--nimi varchar(50) NOT NULL,
--salasana varchar(50) NOT NULL,
--email varchar(50) NOT NULL
--);
--Sairaus-Geeni-osaston yhdistäminen vielä auki
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

--Mutaatiotaulu ei ilmesty mihinkään/ Nyt löytyy! :)
CREATE TABLE Mutaatio(
id SERIAL PRIMARY KEY,
sijainti varchar(50) NOT NULL,
tyyppi varchar(50) NOT NULL,
lisayspvm date NOT NULL,
geeni INTEGER REFERENCES Geeni(id) NOT NULL,
sairaus INTEGER REFERENCES Sairaus(id) NOT NULL
);