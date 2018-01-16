<?php

//error_reporting(E_ALL);
//set("display_errors", 1);

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

//define a route for toe-rings in jewelry/rings subfolders
$f3->route('GET /jewelry/rings/toe-rings', function(){

    //instantiate a template to integrate data into page easier
    $template = new Template();
    echo $template->render('views/toe-rings.html');
//    echo '<h1>Toe Rings</h1>';
});

//define a route using parameters
$f3->route('GET /hello/@name',
    function($f3, $params){

//    $name = $params['name'];
//    echo"<h1>Hello, $name</h1>";

        //the set function saves information into the 'hive' in fat free
$f3->set('name',$params['name']);
$template = new Template();
echo $template->render('views/hello.html');
    });

//define a route using parameters
$f3->route('GET /hi/@first/@last',
    function($f3, $params){

        //the set function saves information into the 'hive' in fat free
        $f3->set('first',$params['first']);
        $f3->set('last',$params['last']);
        $f3->set('message', 'Hola');

        $template = new Template();
        echo $template->render('views/hi.html');
    });


//run fat free
$f3->run();
?>