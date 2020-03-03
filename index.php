<?php

require 'start.php';


use Controllers\Users;
use Controllers\Questions;

/*
// Import user controller
$user = Users::create_user("Khaled", "khaled@example.com","password");
*/

//Import question controller
$question = Questions::create_question("Is this your first time doing Eloquent ORM?", 1);


?>