<?php

class Sairaus extends BaseModel {

    //Attribuutit
    public $id, $nimi, $lyhenne, $geenit, $kuvaus, $lisayspvm;

    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_name', 'validate_date');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Sairaus');
        $query->execute();
        $rows = $query->fetchAll();
        $sairaudet = array();
        foreach ($rows as $row) {
            $sairaudet[] = new Sairaus(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'lyhenne' => $row['lyhenne'],
                'geenit' => $row['geenit'],
                'kuvaus' => $row['kuvaus'],
                'lisayspvm' => $row['lisayspvm']
            ));
        }
        return $sairaudet;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Sairaus WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $sairaus = new Sairaus(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'lyhenne' => $row['lyhenne'],
                'geenit' => $row['geenit'],
                'kuvaus' => $row['kuvaus'],
                'lisayspvm' => $row['lisayspvm']
            ));
            return $sairaus;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Sairaus (nimi, lyhenne, geenit, kuvaus, lisayspvm) VALUES (:nimi, :lyhenne, :geenit, :kuvaus, :lisayspvm) RETURNING id');
        $query->execute(array('nimi' => $this->nimi, 'lyhenne' => $this->lyhenne, 'geenit' => $this->geenit, 'kuvaus' => $this->kuvaus, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function update($id) {
        $query = DB::connection()->prepare('UPDATE Sairaus SET nimi = :nimi, lyhenne = :lyhenne, geenit = :geenit, kuvaus = :kuvaus, lisayspvm = :lisayspvm WHERE id=:id');
        $query->execute(array('id' => $this->id, 'nimi' => $this->nimi, 'lyhenne' => $this->lyhenne, 'geenit' => $this->geenit, 'kuvaus' => $this->kuvaus, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function destroy($id) {
        $query = DB::connection()->prepare('DELETE FROM Sairaus WHERE id=:id');
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
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Päivämäärä ei saa olla tyhjä!';
        }
        return $errors;
    }

}
