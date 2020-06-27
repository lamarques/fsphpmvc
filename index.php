<?php
ob_start();
require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */
use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$router = new Router(url(), "@");

/*
 * WEB ROUTES
 */
$router->namespace("Source\App");
$router->get("/", "Web@home");
$router->get("/sobre", "Web@about");

/*
 * ERROR ROUTES
 */
$router->namespace("Source\App")->group("ops");
$router->get("/{errcode}", "Web@error");

/*
 *ROUTE
 */
$router->dispatch();

/*
 * ERROR REDIRECT
 */
if($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}

ob_end_flush();
