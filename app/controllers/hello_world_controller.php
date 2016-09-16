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
    
    public static function esittely(){
        View::make('suunnitelmat/esittely.html');
    }
    
    public static function hakusivu() {
        View::make('suunnitelmat/hakusivu.html');
    }
    
    public static function geenitulossivu() {
        View::make('suunnitelmat/geenitulossivu.html');
    }
    
    public static function kirjautumissivu() {
        View::make('suunnitelmat/kirjautumissivu.html');
    }
    
    public static function muokkaussivu() {
        View::make('suunnitelmat/muokkaussivu.html');
    }
    
    public static function rekisteroitymissivu() {
        View::make('suunnitelmat/rekisteroitymissivu.html');
    }
    public static function sairaustulossivu() {
        View::make('suunnitelmat/sairaustulossivu.html');
    }
    public static function mutaatiotulossivu() {
        View::make('suunnitelmat/mutaatiotulossivu.html');
    }
  }
  
