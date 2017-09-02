<?php
require 'flight/Flight.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/ruta', function(){
    echo 'soy una ruta!';
});

Flight::start();
?>

