<?php

use App\Controller\studentController;
use App\Model\studentModel;
$loader = require __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$controller= new studentController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=list-student">Danh Sach</a>
<a href="index.php?page=add-student">Add</a>
<?php
switch ($page)
{
    case 'list-student':
        $controller->view();
        break;
    case 'add-student':
        $controller->add();
        break;
}

?>
</body>
</html>
