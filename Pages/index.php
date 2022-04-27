<?php

if($_GET['url']) {
  $url = explode("/", $_GET['url']);

  var_dump($url);
}