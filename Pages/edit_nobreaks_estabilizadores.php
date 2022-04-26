<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/bootstrap.min.css" />
    <title>Controle de ativos de TI</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Controle de Ativos de TI</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarColor02"
          aria-controls="navbarColor02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Nobreaks/Estabilizadores</a>
            </li>
          </ul>
          
          <ul class="navbar-nav d-flex">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">+ Adicionar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <h3 class="text-white mt-5">Edição</h3>
      <table class='table table-hover'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Patrimônio</th>
            <th scope='col'>Marca</th>
            <th scope='col'>Modelo</th>
            <th scope='col'>Potência</th>
            <th scope='col'>Descrição</th>
            <th scope='col'>Responsável</th>
            <th scope='col'></th>
          </tr>
        </thead>
        <tbody>
      <?php

      require 'ControllerNobreaks.php';

      $id = $_POST['id'];

      $itens = new ControllerNobreaks();

      $itenForEditation = $itens->editNobreak($id);

      echo "<form action='./manager.php' method='post'>
              <tr class='table-dark'>
                <td>{$itenForEditation['id']}</td>
                <td>{$itenForEditation['patrimonio']}</td>
                <td>{$itenForEditation['marca']}</td>
                <td>{$itenForEditation['modelo']}</td>
                <td>{$itenForEditation['potencia']}</td>
                <td>{$itenForEditation['descricao']}</td>
                <td>{$itenForEditation['responsavel']}</td>
                <td>
                  <button type='submit' name='id' value={$itenForEditation['id']} class='btn btn-primary btn-sm'>Salvar</button>
                </td>
              </tr>
            </form>
          </tbody>
        </table>";
      ?>
    </div>
  </body>
</html>


