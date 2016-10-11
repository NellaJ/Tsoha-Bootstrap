<?php

class Kayttaja extends BaseModel {

//Attribuutit
    public $id, $nimi, $salasana, $email;

//Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_name', 'validate_password', 'validate_email');
    }

    public static function authenticate($nimi, $salasana) {
        $query = DB::connection()->prepare('SELECT * FROM Kayttaja WHERE nimi=:nimi AND salasana=:salasana LIMIT 1');
        $query->execute(array('nimi' => $nimi, 'salasana' => $salasana));
        $row = $query->fetch();
        if ($row) {
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

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Kayttaja (nimi, salasana, email) VALUES (:nimi, :salasana, :email) RETURNING id');
        $query->execute(array('nimi' => $this->nimi, 'salasana' => $this->salasana, 'email' => $this->email));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

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
    public function validate_name() {
        $errors = array();
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Käyttäjätunnus ei saa olla tyhjä!';
        }
        return $errors;
    }

    public function validate_password() {
        $errors = array();
        if ($this->salasana == '' || $this->salasana == null) {
            $errors[] = 'Salasana ei saa olla tyhjä!';
        }
        if(strlen($this->salasana)<5) {
            $errors[] = 'Salasanan oltava vähintään 5 merkkiä!';
        }
        return $errors;
    }

    public function validate_email() {
        $errors = array();
        if ($this->email == '' || $this->email == null) {
            $errors[] = 'E-mail ei saa olla tyhjä!';
        }
        return $errors;
    }

}
