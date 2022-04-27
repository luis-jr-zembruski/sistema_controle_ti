<?php

require "../DB/Conection.php";

class NobreaksEstabilizadores {

  private static $table = "nobreaks_estabilizadores";

  public static function select(int $id) {
    $PDO = new Conection();
    $conexao = $PDO->getConexao();
    $sql = 'SELECT * FROM ' .self::$table. ' WHERE id = :id';
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function get() {
    $PDO = new Conection();
    $conexao = $PDO->getConexao();
    $sql = 'SELECT * FROM ' .self::$table;
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}