<?php

class GeeniController extends BaseController{
    public static function index() {
        //Hakee kaikki geenit tietokannasta
        $geenit = Geeni::all();
        View::make('geeni/index.html', array('geenit' => $geenit));
    }
    
    public static function store(){
        $params = $_POST;
        
        $geeni = new Geeni(array(
                'nimi' => $params['nimi'],
                'mutaatiot' => $params['mutaatiot'],
                'sairaudet' => $params['sairaudet'],
                'lisayspvm' => $params['lisayspvm']
                ));
        $geeni-> save();
       //Ei oikeasti palaa minnekään kun ei mene minnekään
        Redirect::to('/geeni/'.$geeni->id, array('message'=> "Lisätty on"));
    }
    //Tämä on turha tai ei toimi tai jotain?
    public static function create() {
        View::make('geeni/new.html');
    }

}
