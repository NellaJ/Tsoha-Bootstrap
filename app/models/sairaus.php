<?php

class Sairaus extends BaseModel{
    //Attribuutit
    public $id, $nimi, $geenit, $mutaatiot, $lisayspvm;
    //Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
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
    //Hakee geenin id:n perusteella
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
}
    

