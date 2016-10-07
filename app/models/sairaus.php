<?php

class Sairaus extends BaseModel{
    //Attribuutit
    public $id, $nimi, $geenit, $mutaatiot, $lisayspvm;
    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
        $this->validators = array('validate_name', 'validate_mutations', 'validate_genes', 'validate_date');
    }
    
    public static function all(){
        $query = DB::connection()->prepare('SELECT * FROM Sairaus');
        $query->execute();
        $rows = $query->fetchAll();
        $sairaudet = array();
        foreach ($rows as $row) {
            $sairaudet[]=new Sairaus(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'geenit' => $row['geenit'],
                'mutaatiot' => $row['mutaatiot'],
                'lisayspvm' => $row['lisayspvm']
            ));
        }
        return $sairaudet;
    }

    public static function find($id){
        $query = DB::connection()->prepare('SELECT * FROM Sairaus WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();
        
        if($row){
            $sairaus = new Sairaus(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'geenit' => $row['geenit'],
                'mutaatiot' => $row['mutaatiot'],
                'lisayspvm' => $row['lisayspvm']
            ));
            return $sairaus;
        }
        return null;
    }
    
    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Sairaus (nimi, geenit, mutaatiot, lisayspvm) VALUES (:nimi, :geenit, :mutaatiot, :lisayspvm) RETURNING id');
        $query->execute(array('nimi'=> $this->nimi, 'geenit'=>  $this->geenit,'mutaatiot'=>$this->mutaatiot, 'lisayspvm'=> $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }
    
    public function update($id) {
        $query = DB::connection()->prepare('UPDATE Sairaus SET nimi = :nimi, geenit = :geenit, mutaatiot = :mutaatiot, lisayspvm = :lisayspvm WHERE id=:id');
        $query->execute(array('id'=>  $this->id, 'nimi'=>  $this->nimi, 'geenit'=>  $this->geenit, 'mutaatiot'=>  $this->mutaatiot, 'lisayspvm'=>  $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }
    
    public function destroy($id) {
        $query = DB::connection()->prepare('DELETE FROM Sairaus WHERE id=:id');
        $query->execute(array('id'=>$id));
    }
    
    public function validate_name() {
        $errors = array();
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Nimi ei saa olla tyhjä!';
        }
        return $errors;                
    }
    
    public function validate_genes() {
        $errors = array();
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Geenin nimi ei saa olla tyhjä!';
        }
        return $errors;  
    }
    
    public function validate_mutations() {
        $errors = array();
        if ($this->nimi == '' || $this->nimi == null) {
            $errors[] = 'Mutaatio ei saa olla tyhjä!';
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
    

