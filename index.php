<?php
require 'db.php';
require 'controllers/TaskController.php';

$controller=new TaskController($db);

$action=isset($_GET['action']) ? $_GET['action'] : 'index';


/*take reference 🥲*/
switch ($action) {
    case 'add':
        $controller->add();
        break;
    case 'complete':
        $controller->complete();
        break;
    case 'delete':
        $controller->delete();
        break;
    default:
        $controller->index();
        break;
}
?>
