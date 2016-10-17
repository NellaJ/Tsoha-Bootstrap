<?php

class Geeni extends BaseModel {

    //Attribuutit
    public $id, $nimi, $kokonimi, $sairaudet, $kuvaus, $lisayspvm;

    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_name', 'validate_date');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Geeni');
        $query->execute();
        $rows = $query->fetchAll();
        $geenit = array();
        foreach ($rows as $row) {
            $geenit[] = new Geeni(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'kokonimi' => $row['kokonimi'],
                'sairaudet' => $row['sairaudet'],
                'kuvaus' => $row['kuvaus'],
                'lisayspvm' => $row['lisayspvm']
            ));
        }
        return $geenit;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Geeni WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $geeni = new Geeni(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'kokonimi' => $row['kokonimi'],
                'sairaudet' => $row['sairaudet'],
                'kuvaus' => $row['kuvaus'],
                'lisayspvm' => $row['lisayspvm']
            ));
            return $geeni;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Geeni (nimi, kokonimi, sairaudet, kuvaus,lisayspvm) VALUES (:nimi, :kokonimi, :sairaudet, :kuvaus, :lisayspvm) RETURNING id');
        $query->execute(array('nimi' => $this->nimi, 'kokonimi' => $this->kokonimi, 'sairaudet' => $this->sairaudet, 'kuvaus' => $this->kuvaus, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function update($id) {
        $query = DB::connection()->prepare('UPDATE Geeni SET nimi = :nimi, kokonimi = :kokonimi, sairaudet = :sairaudet, kuvaus = :kuvaus, lisayspvm = :lisayspvm WHERE id=:id');
        $query->execute(array('id' => $this->id, 'nimi' => $this->nimi, 'kokonimi' => $this->kokonimi, 'sairaudet' => $this->sairaudet, 'kuvaus' => $this->kuvaus, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function destroy($id) {
        $query = DB::connection()->prepare('DELETE FROM Geeni WHERE id=:id');
        $query->execute(array('id' => $id));
    }

    public function validate_name() {
        $errors = array();
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Nimi ei saa olla tyhjä!';
        }
        return $errors;
    }

    public function validate_date() {
        $errors = array();
        if ($this->lisayspvm == '' || $this->lisayspvm == null) {
            $errors[] = 'Päivämäärä ei saa olla tyhjä!';
        }
        return $errors;
    }

}
