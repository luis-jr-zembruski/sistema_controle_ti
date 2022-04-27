<?php

require "../Controller.php";

class NobreaksEstabilizadores {

  private static $table = "nobreaks_estabilizadores";

  public static function get(int $id) {
    $PDO = new Controller();
    $conexao = $PDO->getConexao();
    $sql = 'SELECT * FROM ' . self::$table . 'WHERE id = :id';
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}









$itens = [];

foreach ($conexao->query($sql) as $key => $value) {
  array_push($itens, $value);
}