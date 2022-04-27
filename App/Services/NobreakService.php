<?php

namespace App\Services;

use App\Models\Nobreak;

class NobreakService {

  public function get($id = null){
    if($id){
      return Nobreak::select($id);
    } else {
      return Nobreak::get();
    }
  }

  public function post(){}

  public function put(){}

  public function delete(){}
}