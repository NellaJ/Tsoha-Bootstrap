<?php

class UserController extends BaseController {

    public static function login() {
        View::make('/login.html');
    }

    public static function handle_login() {
        $params = $_POST;
        $kayttaja = Kayttaja::authenticate($params['nimi'], $params['salasana']);
        if (!$kayttaja) {
            View::make('/login.html', array('error' => 'Väärä käyttäjätunnus tai salasana!', 'nimi' => $params['nimi']));
        }else{
            $_SESSION['kayttaja'] = $kayttaja->id;
            
            Redirect::to('/', array('message'=> 'Tervetuloa ' . $kayttaja->nimi . '!'));
        }
    }
    
    public static function logout() {
        $_SESSION['kayttaja'] = null;
        Redirect::to('/login', array('message' => 'Olet kirjautunut ulos!'));
    }
    public static function rekisteroitymissivu() {
        View::make('suunnitelmat/rekisteroitymissivu.html');
    }
    
    public static function store() {
        $params = $_POST;
        
        $attributes = array(
            'nimi' => $params['nimi'],
            'salasana' => $params['salasana'],
            'email' => $params['email']
        );
        
        $kayttaja=new Kayttaja($attributes);
        $errors = $kayttaja->errors();
        
        if(count($errors)==0) {
            $kayttaja->save();
            
            Redirect::to('/login', array('message' => 'Käyttäjätunnus luotu, kirjaudu sisään!'));
            
        }else{
            View::make('suunnitelmat/rekisteroitymissivu.html', array('errors'=> $errors, 'attributes'=> $attributes));
        }
    }
}
