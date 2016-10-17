<?php

class SairausController extends BaseController {

    public static function index() {
        $sairaudet = Sairaus::all();
        View::make('sairaus/index.html', array('sairaudet' => $sairaudet));
    }

    public static function create() {
        View::make('sairaus/new.html');
    }

    public static function store() {
        $params = $_POST;

        $attributes = array(
            'nimi' => $params['nimi'],
            'lyhenne' => $params['lyhenne'],
            'geenit' => $params['geenit'],
            'kuvaus' => $params['kuvaus'],
            'lisayspvm' => $params['lisayspvm']
        );

        $sairaus = new Sairaus($attributes);
        $errors = $sairaus->errors();

        if (count($errors) == 0) {
            $sairaus->save();

            Redirect::to('/sairaus/' . $sairaus->id, array('message' => "Uusi sairaus lisätty!"));
        }else{
            View::make('sairaus/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }
    
    public static function show($id) {
        $sairaus = Sairaus::find($id);
        View::make('sairaus/sairaus_show.html', array('sairaus' => $sairaus));    
    }

   public static function edit($id) {
        $sairaus = Sairaus::find($id);
        View::make('sairaus/sairaus_edit.html', array('attributes' => $sairaus));    
    }
    
    public static function update($id) {
        $params = $_POST;
        
        $attributes = array(
            'nimi' => $params['nimi'],
            'lyhenne' => $params['lyhenne'],
            'geenit' => $params['geenit'],
            'kuvaus' => $params['kuvaus'],
            'lisayspvm' => $params['lisayspvm']
        );

        $sairaus = new Sairaus($attributes);
        $errors = $sairaus->errors();

        if (count($errors)>0) {
            View::make('sairaus/sairaus_edit.html', array('errors'=>$errors, 'attributes'=>$attributes, 'sairaus'=>$sairaus));
            }else{ 
             $sairaus->update($id);
             Redirect::to('/sairaus/' . $sairaus->id, array('message'=>'Muokkaus onnistui!'));
                }
    }
    
    public static function destroy($id) {
        $sairaus = new Sairaus(array('id'=>$id));
        $sairaus->destroy($id);
        
        Redirect::to('/sairaus', array('message' => 'Poistettu!'));    
    }
    
}
