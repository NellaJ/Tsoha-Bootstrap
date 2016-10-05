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

        $attributes = array(
            'nimi' => $params['nimi'],
            'mutaatiot' => $params['mutaatiot'],
            'sairaudet' => $params['sairaudet'],
            'lisayspvm' => $params['lisayspvm']
        );
        
        $geeni = new Geeni($attributes);
        $errors = $geeni->errors();
        
        if(count($errors)==0){
        $geeni->save();

        Redirect::to('/geeni/'. $geeni->id, array('message' => "Lisätty on"));
    
        }else{
            View::make('geeni/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
        }

    public static function show($id) {
        $geeni = Geeni::find($id);
        View::make('geeni/geeni_show.html', array('geeni' => $geeni));
    }
    
    public static function edit($id){
        $geeni = Geeni::find($id);
        View::make('geeni/geeni_edit.html', array('attributes'=> $geeni));
    }
    public static function update($id){
        $params = $POST_;
        
        $attributes = array(
            'id' => $id,
            'nimi' => $params['nimi'],
            'mutaatiot'=>$params['mutaatiot'],
            'sairaudet'=>$params['sairaudet'],
            'lisayspvm'=>$params['lisayspvm']
        );
        $geeni = new Geeni($attributes);
        $errors = $geeni->errors();
        
        if(count($errors)>0){
            View::make('geeni/geeni_edit.html', array('errors'=>$errors, 'attributes'=>$attributes, 'geeni' =>$geeni));
        }else{
            $geeni->update();
            Redirect::to('/geeni/' . $geeni->id, array('message'=>'Muokkaus onnistui'));
        }   
        //Viesti ei näy!
    }
    public static function destroy($id){
        $geeni = new Geeni(array('id'=>$id));
        $geeni->destroy($id);
        
        Redirect::to('/geeni/index.html', array('message'=>'Poistettu!'));
    }
}
