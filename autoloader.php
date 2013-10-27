<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php
/*set_include_path(
        get_include_path()
        .PATH_SEPARATOR."./libs/"
        .PATH_SEPARATOR."./libs2/"
);*/

function __autoload($class_name) {

        require_once $class_name . '.class.php';
	
}
?>


</body>
</html>
