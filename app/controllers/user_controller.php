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
        
            //Viesti ei näy!
        }
    }

}
