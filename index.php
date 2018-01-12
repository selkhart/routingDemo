<?php

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();



//define a default route
$f3->route('GET /',function() {
    echo '<h1>Routing Demo</h1>';
}
);

//run fat free
$f3->run();
?>