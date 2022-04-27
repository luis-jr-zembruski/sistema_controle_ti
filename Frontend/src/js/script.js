// http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/1

const url = 'http://localhost/sistema_controle_ti/Backend/Pages/api/Nobreak/'

function getNobreaks() {
  axios
    .get(url)
    .then(response => {
      console.log(response)
    })
    .catch(error => {
      console.log(error)
    })
}

getNobreaks()
