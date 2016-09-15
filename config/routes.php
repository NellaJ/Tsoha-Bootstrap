<?php

  $routes->get('/', function() {
    HelloWorldController::index();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
  
  $routes->get('/Esittely', function() {
    HelloWorldController::Esittely();
  });
  
  $routes->get('/Hakusivu', function() {
    HelloWorldController::Hakusivu();
  });
  
  $routes->get('/Hakutulossivu', function() {
    HelloWorldController::Hakutulossivu();
  });
  
  $routes->get('/Kirjautumissivu', function() {
    HelloWorldController::Kirjautumissivu();
  });
  
  $routes->get('/Muokkaussivu', function() {
    HelloWorldController::Muokkaussivu();
  });
  
  $routes->get('/Rekisteroitymissivu', function() {
    HelloWorldController::Rekisteroitymissivu();
  });
