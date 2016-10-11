<?php

function check_logged_in(){
    BaseController::check_logged_in();
}

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

$routes->get('/geeni/:id/edit', 'check_logged_in',function($id) {
    GeeniController::edit($id);
});
$routes->post('/geeni/:id/edit', 'check_logged_in',function($id) {
    GeeniController::update($id);
});

$routes->get('/geeni/new', 'check_logged_in',function() {
    GeeniController::create();
});
$routes->get('/geeni/:id', function($id) {
    GeeniController::show($id);
});

$routes->post('/geeni', function() {
    GeeniController::store();
});

$routes->post('/geeni/:id/destroy', 'check_logged_in',function($id) {
    GeeniController::destroy($id);
});

$routes->get('/sairaus', function() {
    SairausController::index();
});

$routes->get('/sairaus/new', 'check_logged_in',function() {
    SairausController::create();
});

$routes->get('/sairaus/:id', 'check_logged_in',function($id) {
    SairausController::show($id);
});

$routes->post('/sairaus', function() {
    SairausController::store();
});

$routes->get('/sairaus/:id/edit', 'check_logged_in',function($id) {
    SairausController::edit($id);
});

$routes->post('/sairaus/:id/edit', 'check_logged_in',function($id) {
    SairausController::update($id);
});

$routes->post('/sairaus/:id/destroy', 'check_logged_in',function($id) {
    SairausController::destroy($id);
});

$routes->get('/login', function() {
    UserController::login();
});
$routes->post('/login', function() {
    UserController::handle_login();
});

$routes->post('/logout', function(){
    UserController::logout();
});

$routes->get('/mutaatio', function() {
    MutaatioController::index();
});
$routes->get('/mutaatio/new', 'check_logged_in',function() {
    MutaatioController::create();
});
$routes->get('/mutaatio/:id', 'check_logged_in',function($id) {
    MutaatioController::show($id);
});
$routes->post('/mutaatio', function() {
    MutaatioController::store();
});
$routes->get('/mutaatio/:id/edit', 'check_logged_in',function($id) {
    MutaatioController::edit($id);
});
$routes->post('/mutaatio/:id/edit', 'check_logged_in',function($id) {
    MutaatioController::update($id);
});

$routes->post('/mutaatio/:id/destroy', 'check_logged_in',function($id) {
    MutaatioController::destroy($id);
});