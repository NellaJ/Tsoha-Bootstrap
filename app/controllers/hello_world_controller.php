<?php

  class HelloWorldController extends BaseController{

    public static function index(){
      // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
   	  echo 'Tämä on etusivu!';
    }

    public static function sandbox(){
      // Testaa koodiasi täällä
     // echo 'Hello World!';
     // echo ' I made this!';
        View::make('helloworld.html');
    }
    
    public static function Esittely(){
        View::make('suunnitelmat/Esittely.html');
    }
    
    public static function Hakusivu() {
        View::make('suunnitelmat/Hakusivu.html');
    }
    
    public static function Hakutulossivu() {
        View::make('suunnitelmat/Hakutulossivu.html');
    }
    
    public static function Kirjautumissivu() {
        View::make('suunnitelmat/Kirjautumissivu.html');
    }
    
    public static function Muokkaussivu() {
        View::make('suunnitelmat/Muokkaussivu.html');
    }
    
    public static function Rekisteroitymissivu() {
        View::make('suunnitelmat/Rekisteroitymissivu.html');
    }
  }
  
