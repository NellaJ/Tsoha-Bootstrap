--INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Testi', 'salasana', 'a@b.fi');
--INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Tyyppi', 'password', 'email');

--INSERT INTO Yllapitaja (nimi, salasana, email) VALUES ('Timppa', '7ye7', 'ab@h.fi');

--INSERT INTO Sairaus (nimi, lisayspvm) VALUES ('Lorvikatarri', '090906');
--INSERT INTO Sairaus (nimi,geenit, mutaatiot, lisayspvm) VALUES ('Lorvikatarri','LKTR','Pro123Gly' ,'090906');
--INSERT INTO Sairaus (nimi,geenit, mutaatiot, lisayspvm) VALUES ('Familiaalinen hyperkolesterolemia','LDLR','Gly823Asp' ,'090906');
--INSERT INTO Sairaus (nimi,geenit, mutaatiot, lisayspvm) VALUES ('Pitkä-QT-syndrooma','SCN5A','Ser941Asn' ,'090906');

--INSERT INTO Geeni (nimi, lisayspvm) VALUES ('SHH', '121214');
--INSERT INTO Geeni (nimi, mutaatiot, sairaudet,lisayspvm) VALUES ('SCN5A','Arg1644His', 'LQTS','121214');
--INSERT INTO Geeni (nimi,mutaatiot, sairaudet, lisayspvm) VALUES ('SCN5A','Ser941Asn', 'LQTS','121214');
--INSERT INTO Geeni (nimi,mutaatiot, sairaudet, lisayspvm) VALUES ('KCNH2','Ala561Val','LQTS', '121214');
--INSERT INTO Geeni (nimi, mutaatiot, sairaudet, lisayspvm) VALUES ('LDLR','Gly823Asp','FH', '121214');


--INSERT INTO Mutaatio (sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg1644His', 'OK', '090906', 7, 9);
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Trp66Gly', 'Patogeeninen', '2016-10-10', 'LDLR', 'Familiaalinen hyperkolesterolemia');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Glu207Lys', 'Patogeeninen', '2016-10-10', 'LDLR', 'Familiaalinen hyperkolesterolemia');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Ala410Thr', 'Patogeeninen', '2016-10-10', 'LDLR', 'Familiaalinen hyperkolesterolemia');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg453Trp', 'Patogeeninen', '2016-10-10', 'LMNA', 'EDMD');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Leu84Arg', 'Patogeeninen', '2016-10-10', 'LMNA', 'Kardiomyopatia');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg377His', 'Patogeeninen', '2016-10-10', 'LMNA', 'LGMD');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Gly608Gly', 'Patogeeninen', '2016-10-10', 'LMNA', 'Progeria');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Ala178Pro', 'Patogeeninen', '2016-10-10', 'KCNQ1', 'Pitkä-QT-Syndrooma');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Ala561Val', 'Patogeeninen', '2016-10-10', 'LMNA', 'Pitkä-QT-Syndrooma');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Asn1325Ser', 'Patogeeninen', '2016-10-10', 'LMNA', 'Pitkä-QT-Syndrooma');
-- INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg1788Trp', 'Patogeeninen', '2016-10-10', 'LMNA', 'Pitkä-QT-Syndrooma');

INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Dude', 'piipaa', 'c@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Henkilo', 'password', 'd@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Joku', 'jokunen', 'e@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Snoopy', 'koira', 'f@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Garfield', 'kissa', 'g@b.fi');
