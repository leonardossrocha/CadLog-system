<?php
require 'controllers/AuthController.php';
require 'controllers/UserController.php';
require 'controllers/DashboardController.php';

$authController = new AuthController();
$userController = new UserController();
$dashboardController = new DashboardController();

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        $authController->login();
        break;
    case 'logout':
        $authController->logout();
        break;
    case 'register':
        $userController->register();
        break;
    case 'dashboard':
        $dashboardController->index();
        break;
    case 'list':
        $userController->list();
        break;
    case 'edit':
        $id = $_GET['id'];
        $userController->edit($id);
        break;
    case 'delete':
        $id = $_GET['id'];
        $userController->delete($id);
        break;
    default:
        $authController->login();
        break;
}
?>
