<?php

class Kayttaja extends BaseModel {

//Attribuutit
public $id, $nimi, $salasana, $email;

//Konstruktori
public function __construct($attributes) {
parent::__construct($attributes);
//$this->validators = array('validate_name', 'validate_mutations', 'validate_diseases', 'validate_date');
}

public static function authenticate($nimi, $salasana) {
$query = DB::connection()->prepare('SELECT * FROM Kayttaja WHERE nimi=:nimi AND salasana=:salasana LIMIT 1');
$query->execute(array('nimi' => $nimi, 'salasana' => $salasana));
$row = $query->fetch();
if($row){
return new Kayttaja(array(
'id' => $row['id'],
 'nimi' => $row['nimi'],
 'salasana' => $row['salasana'],
 'email' => $row['email']
        ));
} else {
return null;
}
}

public static function all() {
$query = DB::connection()->prepare('SELECT * FROM Kayttaja');
$query->execute();
$rows = $query->fetchAll();
$kayttajat = array();
foreach ($rows as $row) {
$kayttajat[] = new Geeni(array(
'id' => $row['id'],
 'nimi' => $row['nimi'],
 'salasana' => $row['salasana'],
 'email' => $row['email'],
));
}
return $kayttajat;
}

public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Kayttaja WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $kayttaja = new Kayttaja(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'salasana' => $row['salasana'],
                'email' => $row['email']
            ));
            return $kayttaja;
        }
        return null;
    }

//public function save() {
//$query = DB::connection()->prepare('INSERT INTO Geeni (nimi, mutaatiot, sairaudet, lisayspvm) VALUES (:nimi, :mutaatiot, :sairaudet, :lisayspvm) RETURNING id');
//$query->execute(array('nimi' => $this->nimi, 'mutaatiot' => $this->mutaatiot, 'sairaudet' => $this->sairaudet, 'lisayspvm' => $this->lisayspvm));
//$row = $query->fetch();
//$this->id = $row['id'];
//}
//
//public function update($id) {
//$query = DB::connection()->prepare('UPDATE Geeni SET nimi = :nimi, mutaatiot = :mutaatiot, sairaudet = :sairaudet, lisayspvm = :lisayspvm WHERE id=:id');
//$query->execute(array('id' => $this->id, 'nimi' => $this->nimi, 'mutaatiot' => $this->mutaatiot, 'sairaudet' => $this->sairaudet, 'lisayspvm' => $this->lisayspvm));
//$row = $query->fetch();
//$this->id = $row['id'];
//
//}
//
//public function destroy($id) {
//$query = DB::connection()->prepare('DELETE FROM Geeni WHERE id=:id');
//$query->execute(array('id' => $id));
//}
//
//public function validate_name() {
//$errors = array();
//if ($this->nimi == '' || $this->nimi == null) {
//$errors[] = 'Nimi ei saa olla tyhjä!';
//}
//return $errors;
//}
//
////Tässä voisi olla tarkempia ehtoja
//public function validate_mutations() {
//$errors = array();
//if ($this->mutaatiot == '' || $this->mutaatiot == null) {
//$errors[] = 'Ei saa olla tyhjä!';
//}
//if (strlen($this->mutaatiot) < 7) {
//$errors[] = 'Pituus liian lyhyt';
//}
//return $errors;
//}
//
//public function validate_diseases() {
//$errors = array();
//if ($this->sairaudet == '' || $this->sairaudet == null) {
//$errors[] = 'Ei saa olla tyhjä!';
//}
//return $errors;
//}
//
////Päivämäärän osalta lisää/toisenlainen toteutus
//public function validate_date() {
//$errors = array();
//if ($this->lisayspvm == '' || $this->lisayspvm == null) {
//$errors[] = 'Ei saa olla tyhjä!';
//}
//return $errors;
//}
//
//}

}