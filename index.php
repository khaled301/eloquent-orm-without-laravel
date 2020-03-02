<?php

require 'start.php';


use Controllers\Users;

// Import user controller
$user = Users::create_user("Khaled", "khaled@example.com","password");

?>