<?php

namespace App\Router;

use App\Router\Interfaces\RequestInterface;

class Router {
  private $request;
  private $supportedHttpMethods = array(
    "GET",
    "POST"
  );

  function __construct(RequestInterface $request) {
   $this->request = $request;
  }
  
  function __call($name, $args) {
    list($route, $method) = $args;
    if(! in_array(strtoupper($name), $this->supportedHttpMethods)) 
      $this->invalidMethodHandler();

    $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
  }
  
  private function formatRoute($route) {
    $result = rtrim($route, '/');
    if ($result === '') {
      return '/';
    }

    return $result;
  }

  private function invalidMethodHandler() {
    header("{$this->request->serverProtocol} 405 Method Not Allowed");
  }

  private function defaultRequestHandler() {
    header("Location: /404");
  }
  
  function resolve() {
    $methodDictionary = $this->{strtolower($this->request->requestMethod)};
    $formatedRoute = $this->formatRoute($this->request->requestUri);
    $formatedRoute = preg_split("/\?/", $formatedRoute);
    $formatedRoute = $formatedRoute[0];

    if(! array_key_exists($formatedRoute, $methodDictionary)) {
      $this->defaultRequestHandler();
      return;
    }

    $method    = $methodDictionary[$formatedRoute];
    $method    = preg_split("/\@/", $method);
    $method[0] = "\App\Controllers\\". $method[0];

    call_user_func_array($method, array($this->request));
  }

  function __destruct() {
    $this->resolve();
  }
}