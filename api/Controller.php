<?php

declare(strict_types=1);

class Controller
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

  // public function list(): array
  // {
  //   $sql = 'select * from nobreaks_estabilizadores';

  //   $itens = [];

  //   foreach ($this->conexao->query($sql) as $key => $value) {
  //     array_push($itens, $value);
  //   }

  //   return $itens;
  // }

  // public function editNobreak(int $id): array
  // {
  //   $sql = 'select * from nobreaks_estabilizadores where id = '. $id;
  //   $result = $this->conexao->query($sql);
  //   $item = $result->fetch();

  //   return $item;
  // }

  // public function insert(string $descricao): int
  // {
  //   // $sql = 'insert into nobreaks_estabilizadores(descricao) values(?)';
  //   // $prepare = $this->conexao->prepare($sql);
  //   // $prepare->bindParam(1, $descricao);
  //   // $prepare->execute();
  //   // return $prepare->rowCount();
  // }

  // public function update(string $descricao, int $id): int
  // {
  //   $sql = 'update produtos set descricao = ? where id = ?';
  //   $prepare = $this->conexao->prepare($sql);
  //   $prepare->bindParam(1, $descricao);
  //   $prepare->bindParam(2, $id);
  //   $prepare->execute();
  //   return $prepare->rowCount();
  // }

  // public function delete(int $id): int
  // {
  //   $sql = 'delete from produtos where id = ?';
  //   $prepare = $this->conexao->prepare($sql);
  //   $prepare->bindParam(1, $id);
  //   $prepare->execute();
  //   return $prepare->rowCount();
  // }
}