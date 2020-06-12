<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controller\GroupController;
use App\Controller\SubjectController;
use App\Controller\StudentsController;

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$groupController = new GroupController();
$subjectController = new SubjectController();
$studentController = new StudentsController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 980px">
    <?php
    include 'src/View/core/menu.php';
    switch ($page) {
        case 'list-student':
            $studentController->index();
            break;
        case 'add-student':
            $studentController->add();
            break;
        case 'detail-student':
            $id = $_REQUEST['id'];
            $studentController->show($id);
            break;
        case 'edit-student':
            $studentController->edit();
            break;
        case 'list-group':
            $groupController->index();
            break;
        case 'add-group':
            $groupController->add();
            break;
        case 'edit-group':
            $groupController->edit();
            break;
        case 'delete-group':
            $id = $_REQUEST['id'];
            $groupController->delete($id);
            break;
        case 'search-group':
            $groupController->search();
            break;
        case 'list-subject':
            $subjectController->index();
            break;
        case 'add-subject':
            $subjectController->add();
            break;
        case 'edit-subject':
            $subjectController->edit();
            break;
        case 'search-subject':
            $subjectController->search();
            break;
        case 'delete-subject':
            $id = $_REQUEST['id'];
            $subjectController->delete($id);
            break;

    }
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
