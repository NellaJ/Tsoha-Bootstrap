<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
  
  $routes->get('/esittely', function() {
    HelloWorldController::esittely();
  });
  
  $routes->get('/hakusivu', function() {
    HelloWorldController::hakusivu();
  });
  
  $routes->get('/geenitulossivu', function() {
    HelloWorldController::geenitulossivu();
  });
  
  $routes->get('/kirjautumissivu', function() {
    HelloWorldController::kirjautumissivu();
  });
  
  $routes->get('/muokkaussivu', function() {
    HelloWorldController::muokkaussivu();
  });
  
  $routes->get('/rekisteroitymissivu', function() {
    HelloWorldController::rekisteroitymissivu();
  });
  
  $routes->get('/sairaustulossivu', function() {
    HelloWorldController::sairaustulossivu();
  });

   $routes->get('/mutaatiotulossivu', function() {
    HelloWorldController::mutaatiotulossivu();
  });
    
  $routes->get('/geeni', function() {
    GeeniController::index();
  });
  
   $routes->post('/geeni', function(){
     GeeniController::store();   
   });
   
   $routes->get('/geeni/new', function() {
   GeeniController::create();
   });
   //Createsta valittaa Fatal erroria, ts. EI TOIMI!
   //Seuraavakaan ei siis tee mitään
   $routes->get('/geeni/:id', function($id){
   GeeniController::show($id);
   });