<?php

error_reporting(E_ALL);
set("display_errors", 1);

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//set debug (error reporting) level
$f3->set('DEBUG',3);



//define a default route (home page)
$f3->route('GET /',function() {
    echo '<h1>Routing Demo</h1>';
}
);

//ADDITIONAL ROUTES
//define a page 1 route
$f3->route('GET /page1', function(){
    echo '<h1>This is page 1</h1>';
});

//define a page 1 subpage a route
$f3->route('GET /page1/subpage-a', function(){
    echo '<h1>This is page 1\'s sub-page \'a\'. </h1>';
});

//define a page 2 route
$f3->route('GET /page2', function(){
    echo '<h1>This is page 2</h1>';
});

////define a route for toe-rings in jewelry/rings subfolders
//$f3->route('GET /jewelry/rings/toe-rings', function(){
//    echo '<h1>Toe Rings</h1>';
//});

//instantiate a template to integrate data into page easier
$template = new Template();
echo $template->remder('views/toe-rings.html');

//run fat free
$f3->run();
?>