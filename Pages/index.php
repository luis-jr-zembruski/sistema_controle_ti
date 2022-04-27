<?php

require "../App/Services/NobreaksEstabilizadoresService.php";

// api/nobreaks_estabilizadores/1

if($_GET['url']) {
  $url = explode("/", $_GET['url']);

  if($url[0] === 'api') {
    $service = $url[1]."Service";

    $method = strtolower($_SERVER['REQUEST_METHOD']);

    try {
      call_user_func_array(array(new $service, $method), $url);
    } catch (\Exception $e) {
      //throw $e;
    }
  }

}