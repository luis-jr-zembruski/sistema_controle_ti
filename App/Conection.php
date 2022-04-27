<?php

declare(strict_types=1);

class Conection
{
  private PDO $conexao;

  public function __construct()
  {
    try {
      $this->conexao = new PDO('mysql:host=localhost;dbname=controle_ativos', 'ativos_de_ti', 'pmibira.w0c35r6ukd');
    } catch (Exception $e) {
      echo "Error: " . $e->getMessage();
      die();
    }
  }

  public function getConexao(): PDO {
    return $this->conexao;
  }
}