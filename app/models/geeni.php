<?php

class Geeni extends BaseModel {

    //Attribuutit
    public $id, $nimi, $mutaatiot, $sairaudet, $lisayspvm;

    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_name', 'validate_mutations', 'validate_diseases', 'validate_date');
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
                'mutaatiot' => $row['mutaatiot'],
                'sairaudet' => $row['sairaudet'],
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
                'mutaatiot' => $row['mutaatiot'],
                'sairaudet' => $row['sairaudet'],
                'lisayspvm' => $row['lisayspvm']
            ));
            return $geeni;
        }
        return null;
    }

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Geeni (nimi, mutaatiot, sairaudet, lisayspvm) VALUES (:nimi, :mutaatiot, :sairaudet, :lisayspvm) RETURNING id');
        $query->execute(array('nimi' => $this->nimi, 'mutaatiot' => $this->mutaatiot, 'sairaudet' => $this->sairaudet, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function update() {
        $query = DB::connection()->prepare('UPDATE Geeni (nimi, mutaatiot, sairaudet, lisayspvm SET (:nimi, :mutaatiot, :sairaudet, :lisayspvm) WHERE ID = id');
        $query->execute(array('nimi' => $this->nimi, 'mutaatiot' => $this->mutaatiot, 'sairaudet' => $this->sairaudet, 'lisayspvm' => $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

    public function destroy() {
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

    //Tässä voisi olla tarkempia ehtoja
    public function validate_mutations() {
        $errors = array();
        if ($this->mutaatiot == '' || $this->mutaatiot == null) {
            $errors[] = 'Ei saa olla tyhjä!';
        }
        if (strlen($this->mutaatiot) < 7) {
            $errors[] = 'Pituus liian lyhyt';
        }
        return $errors;
    }

    public function validate_diseases() {
        $errors = array();
        if ($this->sairaudet == '' || $this->sairaudet == null) {
            $errors[] = 'Ei saa olla tyhjä!';
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
