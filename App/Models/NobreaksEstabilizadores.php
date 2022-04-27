<?php

require "../Conection.php";

class NobreaksEstabilizadores {

  private static $table = "nobreaks_estabilizadores";

  public static function get(int $id) {
    $PDO = new Conection();
    $conexao = $PDO->getConexao();
    $sql = 'SELECT * FROM ' . self::$table . 'WHERE id = :id';
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
