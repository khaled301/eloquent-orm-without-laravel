# CREDIT

[Lynda Chiwetelu](https://tutsplus.com/authors/lynda-chiwetelu?_ga=2.256152137.337100669.1583063432-985607758.1583063432)

## IMPORTANT

This is an exercise project.

In the main project directory, we have to create a file named config.php and define DB details
in the Config.php file. Note that the values should be replaced with your own connection details.

```
<?php
 
defined(“DBDRIVER”)or define(‘DBDRIVER’,’mysql’);
defined(“DBHOST”)or define(‘DBHOST’,’localhost’);
defined(“DBNAME”)or define(‘DBNAME’,’eloquent-app’);
defined(“DBUSER”)or define(‘DBUSER’,’root’);
defined(“DBPASS”)or define(‘DBPASS’,’pass’);

?>

```
