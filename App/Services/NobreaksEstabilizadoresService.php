<?php

// require "../Models/NobreaksEstabilizadores.php";

class NobreaksEstabilizadoresService {

  public function get($id = null){
    if($id !== null){
      echo 'tchau';
      // return NobreaksEstabilizadores::get($id);
    } else {
      echo 'oi';
    }
  }

  public function post(){}

  public function put(){}

  public function delete(){}
}
