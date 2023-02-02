<?php
require '../Modules/categories.php';
require '../Modules/login.php';
require '../Modules/logout.php';
require '../Modules/database.php';
require '../Modules/common.php';
require '../Modules/review.php';
require '../Modules/fighters.php';
session_start();
//var_dump($_SESSION);
//var_dump($_POST);
$message="";

$request = $_SERVER['REQUEST_URI'];

$params = explode("/", $request);
print_r($request);
$title = "HealthOne";
$titleSuffix = "";

//$params[1] is de action
//$params[2] is een extra getal die de action nodig heeft om zijn taak uit te voeren
switch ($params[1]) {

    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        //var_dump($categories);die;
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $fighters = getFighters();
        include_once "../Templates/category.php";

        break;

    case 'product':
        include_once "../Templates/fighter.php";
        break;

    case 'login':
        $titleSuffix = ' | Home';
        if(isset($_POST['login']))
            $result= checkLogin();
        switch ($result){
            case 'ADMIN':
                header("Location: /admin/home");
                break;
            case 'MEMBER':
                header("Location: /member/home");
                break;
            case 'FAILURE':
                $message = "Email and password do not match";
                include_once "../Templates/login.php";
                break;
            case 'INCOMPLETE':
                $message = "Please enter your email and password";
                include_once "../Templates/login.php";
                break;
        }

        include_once "../Templates/home.php";
        break;

    case 'logout':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'register':
        $titleSuffix = ' | Register';
        if(isset($_POST['register']))
        include_once "../Templates/home.php";
        break;

    case 'contact':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;

    case 'admin':
        include_once ('admin.php');
        break;

    case 'member':
        include_once ('member.php');
        break;

    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}







