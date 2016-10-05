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
--Mutaatiotaulu hankala
--Miten viitata geeniin ja sairauteen? Ylläolevat numerot otettu olemassaolevista
--tauluista, geenin id esim. Ne pitäisi hakea jotenkin.
--Ja siis näkyy näkymässä numeroina