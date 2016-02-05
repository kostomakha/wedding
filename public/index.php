<?php
/**
 * Created by PhpStorm.
 * User: phpstudent
 * Date: 2/4/16
 * Time: 5:33 PM
 */
ini_set('display_errors', 1);
//header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';
//require 'settings.php';
use SmartRouting\Route;
use SmartRouting\Router;
use HttpExchange\Request\Request;
use HttpExchange\Common\Stream;
use HttpExchange\Request\Uri;
use Psr\Http\Message\UriInterface;

$stream = new Stream('php://input');
$uri = new Uri();
$request = new Request($stream, $uri);

$route = new Route();
$route->add('registration', '/secure/signin', 'auth:register', 'POST');
$route->add('registration2', '/secure/signin', 'auth2:register2');
$route->add('course', '/courses/(category)/(course)', 'course:getcourse');
$route->add('user', '/user/(id)', 'user:user');
//$route->add('something', '/(string)/(string)/(num)', 'somestuff:someaction');
$router = new Router($request);
$router->getRoute($route);
echo "<pre>";
$route->printRoutes();
var_dump($router->getController());
var_dump($router->getAction());
var_dump($router->getParams());
echo "</pre>";