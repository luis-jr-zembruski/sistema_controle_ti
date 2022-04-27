<?php

namespace App\Models;

class Nobreak {

  private static $table = "nobreaks_estabilizadores";

  public static function select(int $id) {
    $PDO = new \PDO(DBDRIVE.':host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
    $sql = 'SELECT * FROM ' .self::$table. ' WHERE id = :id';
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
      return $stmt->fetch(\PDO::FETCH_ASSOC);
    } else {
      throw new \Exception("Nenhum usuário encontrado!");
    }
  }

  public static function get() {
    $PDO = new \PDO(DBDRIVE.':host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
    $sql = 'SELECT * FROM ' .self::$table;
    $stmt = $PDO->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } else {
      throw new \Exception("Nenhum usuário encontrado!");
    }
  }
}