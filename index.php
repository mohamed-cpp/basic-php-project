<?php

// Include router class
include('Route.php');


Route::add('/',[
    "path" => "Controls/HomePageControl.php",
    "class" => "HomePageControl",
    "fun" => "index",
]);

//// Simple test route that simulates static html file
//Route::add('/test',function(){
//    echo 'Hello from test.html';
//});

Route::add('/names',[
    "path" => "Controls/NamesControl.php",
    "class" => "NamesControl",
    "fun" => "index",
],'post');

Route::add('/names/create',[
    "path" => "Controls/NamesControl.php",
    "class" => "NamesControl",
    "fun" => "create",
],'post');

Route::add('/names/delete/{id}',[
    "path" => "Controls/NamesControl.php",
    "class" => "NamesControl",
    "fun" => "delete",
],'delete');

//// Post route example
//Route::add('/contact-form',function(){
//    echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
//},'get');
//
//// Post route example
//Route::add('/contact-form',function(){
//    echo 'Hey! The form has been sent:<br/>';
//    print_r($_POST);
//},'post');
//
//// Accept only numbers as parameter. Other characters will result in a 404 error
//Route::add('/foo/([0-9]*)/bar',function($var1){
//    echo $var1.' is a great number!';
//});

Route::run('/');
