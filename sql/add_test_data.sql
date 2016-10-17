INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Testi', 'salasana', 'a@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Tyyppi', 'password', 'email');

--INSERT INTO Yllapitaja (nimi, salasana, email) VALUES ('Timppa', '7ye7', 'ab@h.fi');

INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Lorvikatarri','LK','LKTR','Tekstiä' ,'090906');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Familiaalinen hyperkolesterolemia','FH','LDLR','...' ,'090906');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Pitkä-QT-syndrooma','LQTS','SCN5A','Viittaa jonnekin' ,'090906');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Lorvikatarri','LK','LKTR','Plaaplaa' ,'090906');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Hypertrofinen kardiomyopatia','HCM','MYH7, TNNT2, TPM1, TTN, MYL2','Kuvaus oireista' ,'090906');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Huntingtonin tauti','HD','HTT','Plaaplaa' ,'2015-11-11');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Pitkä-QT-syndrooma','LQTS','KCNQ1, SCN5A, KCNE1, KCNJ2','Plaaplaa' ,'2016-10-17');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Marfan syndrooma','MFS','FBN1','Plaaplaa' ,'2011-03-03');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Kammiovärinä','VF','Unknown','Plaaplaa' ,'2016-08-01');
INSERT INTO Sairaus (nimi,lyhenne,geenit, kuvaus, lisayspvm) VALUES ('Pöllöys','','','' ,'2000-01-01');

INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('SCN5A','sodium channel jotain', 'LQTS','Plaaplaa','2016-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('KCNQ1','Potassium channel piu', 'LQTS','Tekstiä','2016-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('KCNH2','Potassium channel plaa','LQTS', '...','2016-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('LDLR','LDL reseptori','FH', '','2016-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('TTN','Titin','DCM, lihasdystrofia', '','2013-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('OBSCN','Obscurin','Unknown', 'The lähdeviite','2016-03-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('CD46','','?', '','2016-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('FLNC','Filamin C','HCM', 'Text','2016-08-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('LMNA','Lamin A/C','EDMD, LGMD, DCM, CMT, progeria', 'Oirekuvauksia ja lähdeviitteitä','1999-01-01');
INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES ('APOE','Apolipoproteiini E','Alzheimer, ateroskleroosi', '','2016-08-01');


INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Trp66Gly', 'Patogeeninen', '2016-10-10', 'LDLR', 'Familiaalinen hyperkolesterolemia');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Glu207Lys', 'Patogeeninen', '2016-10-10', 'LDLR', 'Familiaalinen hyperkolesterolemia');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Ala410Thr', 'Patogeeninen', '2016-10-10', 'LDLR', 'Familiaalinen hyperkolesterolemia');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg453Trp', 'Patogeeninen', '2016-10-10', 'LMNA', 'EDMD');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Leu84Arg', 'Patogeeninen', '2016-10-10', 'LMNA', 'Kardiomyopatia');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg377His', 'Patogeeninen', '2016-10-10', 'LMNA', 'LGMD');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Gly608Gly', 'Patogeeninen', '2016-10-10', 'LMNA', 'Progeria');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Ala178Pro', 'Patogeeninen', '2016-10-10', 'KCNQ1', 'Pitkä-QT-Syndrooma');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Ala561Val', 'Patogeeninen', '2016-10-10', 'LMNA', 'Pitkä-QT-Syndrooma');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Asn1325Ser', 'Patogeeninen', '2016-10-10', 'LMNA', 'Pitkä-QT-Syndrooma');
INSERT INTO Mutaatio(sijainti, tyyppi, lisayspvm, geeni, sairaus) VALUES ('Arg1788Trp', 'Patogeeninen', '2016-10-10', 'LMNA', 'Pitkä-QT-Syndrooma');

INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Dude', 'piipaa', 'c@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Henkilo', 'password', 'd@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Joku', 'jokunen', 'e@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Snoopy', 'koira', 'f@b.fi');
INSERT INTO Kayttaja (nimi, salasana, email) VALUES ('Garfield', 'kissa', 'g@b.fi');
