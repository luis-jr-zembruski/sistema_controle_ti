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
        </div>
      </div>
    </nav>
    <div class="container">
      <h3 class="text-white mt-5">Nobreaks/Estabilizadores</h3>
      <?php

        require 'ControllerNobreaks.php';

        $itens = new ControllerNobreaks();

        echo " <table class='table table-hover'>
                  <thead>
                    <tr>
                      <th scope='col'>ID</th>
                      <th scope='col'>Patrimônio</th>
                      <th scope='col'>Marca</th>
                      <th scope='col'>Modelo</th>
                      <th scope='col'>Potência</th>
                      <th scope='col'>Descrição</th>
                      <th scope='col'>Responsável</th>
                    </tr>
                  </thead>
                  <tbody>";

          foreach($itens->list() as $value) {
            echo "<tr class='table-dark'>
                    <td>{$value['id']}</td>
                    <td>{$value['patrimonio']}</td>
                    <td>{$value['marca']}</td>
                    <td>{$value['modelo']}</td>
                    <td>{$value['potencia']}</td>
                    <td>{$value['descricao']}</td>
                    <td>{$value['responsavel']}</td>
                  </tr>
                  </tbody>
                </table>";
          }
      ?>
    </div>
  </body>
</html>
