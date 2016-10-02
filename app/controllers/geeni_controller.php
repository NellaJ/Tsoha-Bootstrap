<?php

class GeeniController extends BaseController {

    public static function index() {
        //Hakee kaikki geenit tietokannasta
        $geenit = Geeni::all();
        View::make('geeni/index.html', array('geenit' => $geenit));
    }

    public static function create() {
        View::make('geeni/new.html');
    }

    public static function store() {
        $params = $_POST;

        $geeni = new Geeni(array(
            'nimi' => $params['nimi'],
            'mutaatiot' => $params['mutaatiot'],
            'sairaudet' => $params['sairaudet'],
            'lisayspvm' => $params['lisayspvm']
        ));
        $geeni->save();

        Redirect::to('/geeni/' . $geeni->id, array('message' => "Lisätty on"));
    }

    public static function show($id) {
        $geeni = Geeni::find($id);
        View::make('geeni/:id', array('geeni' => Geeni::find($id)));
    }

}
