<?php

class Mutaatio extends BaseModel {

    //Attribuutit
    public $id, $sijainti, $tyyppi, $geeni, $sairaus, $lisayspvm;

    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_position', 'validate_type', 'validate_gene', 'validate_disease', 'validate_date');
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Mutaatio');
        $query->execute();
        $rows = $query->fetchAll();
        $mutaatiot = array();
        foreach ($rows as $row) {
            $mutaatiot[] = new Mutaatio(array(
                'id' => $row['id'],
                'sijainti' => $row['sijainti'],
                'tyyppi' => $row['tyyppi'],
                'geeni' => $row['geeni'],
                'sairaus' => $row['sairaus'],
                'lisayspvm' => $row['lisayspvm']
            ));
        }
        return $mutaatiot;
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Mutaatio WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $mutaatio = new Mutaatio(array(
                'id' => $row['id'],
                'sijainti' => $row['sijainti'],
                'tyyppi' => $row['tyyppi'],
                'geeni' => $row['geeni'],
                'sairaus' => $row['sairaus'],
                'lisayspvm' => $row['lisayspvm']
            ));
            return $mutaatio;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Mutaatio (sijainti, tyyppi, geeni, sairaus, lisayspvm) VALUES (:sijainti, :tyyppi, :geeni, :sairaus, :lisayspvm) RETURNING id');
        $query->execute(array('sijainti' => $this->sijainti, 'tyyppi'=>  $this->tyyppi, 'geeni'=>  $this->geeni,'sairaus' => $this->sairaus, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function update($id) {
        $query = DB::connection()->prepare('UPDATE Mutaatio SET sijainti = :sijainti, tyyppi = :tyyppi, geeni = :geeni, sairaus = :sairaus, lisayspvm = :lisayspvm WHERE id=:id');
        $query->execute(array('sijainti' => $this->sijainti, 'tyyppi'=>  $this->tyyppi, 'geeni'=>  $this->geeni,'sairaus' => $this->sairaus, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function destroy($id) {
        $query = DB::connection()->prepare('DELETE FROM Mutaatio WHERE id=:id');
        $query->execute(array('id' => $id));
    }

    public function validate_position() {
        $errors = array();
        if ($this->sijainti == '' || $this->sijainti == null) {
            $errors[] = 'Sijainti ei saa olla tyhjä!';
        }
        if(strlen($this->sijainti)<7){
            $errors[] = 'Sijainnin kirjoitusasu on väärin!';
        }
        return $errors;
    }

    public function validate_type() {
        $errors = array();
        
        return $errors;
    }
    public function validate_gene() {
        $errors = array();
        if ($this->geeni == '' || $this->geeni == null) {
            $errors[] = 'Geeni ei saa olla tyhjä!';
        }
        return $errors;
    }


    public function validate_disease() {
        $errors = array();
        if ($this->sairaus == '' || $this->sairaus == null) {
            $errors[] = 'Sairaus ei saa olla tyhjä!';
        }
        return $errors;
    }

    //Päivämäärän osalta lisää/toisenlainen toteutus
    public function validate_date() {
        $errors = array();
        if ($this->lisayspvm == '' || $this->lisayspvm == null) {
            $errors[] = 'Ei saa olla tyhjä!';
        }
        return $errors;
    }

}
