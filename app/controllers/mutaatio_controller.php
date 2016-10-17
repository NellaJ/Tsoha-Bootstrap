<?php

class MutaatioController extends BaseController {

    public static function index() {
        $mutaatiot = Mutaatio::all();
        View::make('mutaatio/index.html', array('mutaatiot' => $mutaatiot));
    }

    public static function create() {
        View::make('mutaatio/new.html');
    }

    public static function store() {
        $params = $_POST;

        $attributes = array(
            'sijainti' => $params['sijainti'],
            'tyyppi' => $params['tyyppi'],
            'lisayspvm' => $params['lisayspvm'],
            'geeni' => $params['geeni'],
            'sairaus' => $params['sairaus']
        );

        $mutaatio = new Mutaatio($attributes);
        $errors = $mutaatio->errors();

        if (count($errors) == 0) {
            $mutaatio->save();

            Redirect::to('/mutaatio/' . $mutaatio->id, array('message' => 'Mutaatio on lisätty'));
        } else {
            View::make('geeni/new.html', array('errors' => $errors, 'attributes' => $attributes));
        }
    }

    public static function show($id) {
        $mutaatio = Mutaatio::find($id);
        View::make('mutaatio/show.html', array('mutaatio' => $mutaatio));
    }

    public static function edit($id) {
        $mutaatio = Mutaatio::find($id);
        View::make('mutaatio/edit.html', array('attributes' => $mutaatio));
    }

    public static function update($id) {
        $params = $_POST;

        $attributes = array(
            'sijainti' => $params['sijainti'],
            'tyyppi' => $params['tyyppi'],
            'lisayspvm' => $params['lisayspvm'],
            'geeni' => $params['geeni'],
            'sairaus' => $params['sairaus']
        );

        $mutaatio = new Mutaatio($attributes);
        $errors = $mutaatio->errors();

        if (count($errors) == 0) {
            $mutaatio->update($id);

            Redirect::to('/mutaatio/' . $mutaatio->id, array('message' => "Muokkaus onnistui!"));
        } else {
            View::make('geeni/edit.html', array('errors' => $errors, 'attributes' => $attributes, 'mutaatio' => $mutaatio));
        }
    }

    public static function destroy($id) {
        $mutaatio = new Mutaatio(array('id' => $id));
        $mutaatio->destroy($id);

        Redirect::to('/mutaatio', array('message' => "Mutaatio on poistettu!"));
    }

}
