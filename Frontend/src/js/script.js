// http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/1

const url = 'http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/'

let data = null

function getNobreaks() {
  axios
    .get(url)
    .then(response => {
      data = response.data.data

      makeInterface(data)
    })
    .catch(error => {
      console.log(error)
    })
}

getNobreaks()

function makeInterface(data) {
  const table = document.getElementById('nobreaks')

  data.map(data => {
    table.innerHTML += `
      <tr class='table-dark'>
        <td>${data.id}</td>
        <td>${data.patrimonio ? data.patrimonio : ''}</td>
        <td>${data.marca}</td>
        <td>${data.modelo}</td>
        <td>${data.local_atual}</td>
        <td>${data.responsavel}</td>
        <td>
          <button onClick={editItem(${
            data.id
          })} type="button" class="btn btn-secondary btn-sm">Editar</button>
          <button onClick={deleteItem(${
            data.id
          })} type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
        </td>
      </tr>
    `
  })
}

function editItem(id) {
  console.log('Clicado em Editar como id: ' + id)
}

function deleteItem(id) {
  console.log('Clicado em Deletar como id: ' + id)
}

function createItem() {
  console.log('Clicado em Criar')
}
