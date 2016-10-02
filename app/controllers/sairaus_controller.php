<?php

class SairausController extends BaseController{
    public static function index() {
        //Hakee kaikki geenit tietokannasta
        $sairaudet = Sairaus::all();
        View::make('sairaus/index.html', array('sairaudet' => $sairaudet));
    }
    public static function create() {
        View::make('sairaus/new.html');
        echo "jotain";
    }
    public static function store(){
        $params = $_POST;
        
        $sairaus = new Sairaus(array(
                'nimi' => $params['nimi'],
                'geenit' => $params['geenit'],  
                'mutaatiot' => $params['mutaatiot'],
                'lisayspvm' => $params['lisayspvm']
                ));
        $sairaus-> save();
       //Ei oikeasti palaa minnekään kun ei mene minnekään
    }
  

}
