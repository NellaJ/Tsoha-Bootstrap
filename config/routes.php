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
  
  $routes->get('/hakutulossivu', function() {
    HelloWorldController::hakutulossivu();
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
