<?php

class Geeni extends BaseModel{
    //Attribuutit
    public $id, $nimi, $mutaatiot, $sairaudet, $lisayspvm;
    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
    }
    
    public static function all(){
        $query = DB::connection()->prepare('SELECT * FROM Geeni');
        $query->execute();
        $rows = $query->fetchAll();
        $geenit = array();
        foreach ($rows as $row) {
            $geenit[]=new Geeni(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'mutaatiot' => $row['mutaatiot'],
                'sairaudet' => $row['sairaudet'],
                'lisayspvm' => $row['lisayspvm']
            ));
        }
        return $geenit;
    }
    //Hakee geenin id:n perusteella
    public static function find($id){
        $query = DB::connection()->prepare('SELECT * FROM Geeni WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();
        
        if($row){
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
        $query->execute(array('nimi'=> $this->nimi, 'mutaatiot'=>$this->mutaatiot, 'sairaudet'=>  $this->sairaudet, 'lisayspvm'=> $this->lisayspvm));
        $row = $query->fetch();
        $this->id = $row['id'];
    }
}
    

