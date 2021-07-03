window.onload = () => {
    let btn = document.querySelector('#Enviar')
    let nombre = document.querySelector('#Nombre')
    let apellido = document.querySelector('#Apellido')
    let direccion = document.querySelector('#Direccion')
    btn.addEventListener('click', (e) => {
 
        e.preventDefault()
        let parametros = {
            nombre: nombre.value,
            apellido: apellido.value,
            direccion: direccion.value
        }

        LlamarServidor(parametros)



    })

    function LlamarServidor(params) {
      
        let myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

        let urlencoded = new URLSearchParams();
        urlencoded.append("nombre", params.nombre);
        urlencoded.append("apellido", params.apellido);
        urlencoded.append("direccion", params.direccion);

        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: urlencoded,
            redirect: 'follow'
        };

        fetch("http://localhost:80/controller/llenadocontroller.php", requestOptions)
            .then(response => response.json())
            .then(result => console.log('resultado=',result))
            .catch(error => console.log('error', error));
    }

}