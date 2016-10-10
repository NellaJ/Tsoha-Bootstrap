<?php

$routes->get('/', function() {
    HelloWorldController::esittely();
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

$routes->get('/geeni/:id/edit', function($id) {
    GeeniController::edit($id);
});
$routes->post('/geeni/:id/edit', function($id) {
    GeeniController::update($id);
});

$routes->get('/geeni/new', function() {
    GeeniController::create();
});
$routes->get('/geeni/:id', function($id) {
    GeeniController::show($id);
});

$routes->post('/geeni', function() {
    GeeniController::store();
});

$routes->post('/geeni/:id/destroy', function($id) {
    GeeniController::destroy($id);
});

$routes->get('/sairaus', function() {
    SairausController::index();
});

$routes->get('/sairaus/new', function() {
    SairausController::create();
});

$routes->get('/sairaus/:id', function($id) {
    SairausController::show($id);
});

$routes->post('/sairaus', function() {
    SairausController::store();
});

$routes->get('/sairaus/:id/edit', function($id) {
    SairausController::edit($id);
});

$routes->post('/sairaus/:id/edit', function($id) {
    SairausController::update($id);
});

$routes->post('/sairaus/:id/destroy', function($id) {
    SairausController::destroy($id);
});

$routes->get('/login', function() {
    UserController::login();
});
$routes->post('/login', function() {
    UserController::handle_login();
});

$routes->get('/mutaatio', function() {
    MutaatioController::index();
});
$routes->get('/mutaatio/new', function() {
    MutaatioController::create();
});
$routes->get('/mutaatio/:id', function($id) {
    MutaatioController::show($id);
});
$routes->post('/mutaatio', function() {
    MutaatioController::store();
});
$routes->get('/mutaatio/:id/edit', function($id) {
    MutaatioController::edit($id);
});
$routes->post('/mutaatio/:id/edit', function($id) {
    MutaatioController::update($id);
});

$routes->post('/mutaatio/:id/destroy', function($id) {
    MutaatioController::destroy($id);
});