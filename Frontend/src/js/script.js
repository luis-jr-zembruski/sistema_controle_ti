// http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/1

const url = 'http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/'

let data = null

let nobreak = {
  id: '',
  patrimonio: '',
  marca: '',
  serial_number: '',
  modelo: '',
  potencia: '',
  qtd_tomadas: '',
  descricao: '',
  data_aquisicao: '',
  local_atual: '',
  responsavel: '',
  modificado: ''
}

axios
  .get(url)
  .then(response => {
    nobreak = response.data.data

    makeInterface()
  })
  .catch(error => {
    console.log(error)
  })

function makeInterface() {
  const table = document.getElementById('nobreaks')

  nobreak.map(data => {
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
  const url = `../../../Frontend/editarnobreaks.html?id=${id}`
  window.location.href = url
}

function deleteItem(id) {
  console.log('Clicado em Deletar como id: ' + id)
}

function createItem() {
  console.log('Clicado em Criar')
}
