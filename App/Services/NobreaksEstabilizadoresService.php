<?php

require "../Models/NobreaksEstabilizadores.php";

class NobreaksEstabilizadoresService {

  public function get($id = null){
    if($id !== null){
      return NobreaksEstabilizadores::select($id);
    } else {
      return NobreaksEstabilizadores::get();
    }
  }

  public function post(){}

  public function put(){}

  public function delete(){}
}