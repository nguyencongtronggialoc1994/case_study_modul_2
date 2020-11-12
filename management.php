<?php
session_start();
if (!isset($_SESSION['user'])){
  header('location:login.php');
}
?>

<?php

use App\controller\MovieController;

require __DIR__ . "/vendor/autoload.php";
$movieController = new MovieController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
switch ($page) {
    case 'add':
        $movieController->addMovie();
        break;
    case 'edit':
        $movieController->editMovie();
        break;
    case 'delete':
        $movieController->deleteMovie();
        break;
    default:
        $movieController->showMovie();
        break;
}
