// http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/1

const data = location.search.slice(1)
var [key, value] = data.split('=')

const url = `http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/${value}`

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
    console.log(nobreak)

    makeInterface()
  })
  .catch(error => {
    console.log(error)
  })

function makeInterface() {
  const table = document.getElementById('nobreaks')

  table.innerHTML += `
      <tr class='table-dark'>
        <td>${nobreak.id}</td>
        <td>${nobreak.patrimonio ? nobreak.patrimonio : ''}</td>
        <td>${nobreak.marca}</td>
        <td>${nobreak.modelo}</td>
        <td>${nobreak.local_atual}</td>
        <td>${nobreak.responsavel}</td>
        <td>
          <button onClick={saveData()} type="button" class="btn btn-secondary btn-sm">Salvar</button>
        </td>
      </tr>
    `
}

function saveData() {
  console.log(nobreak)
}
