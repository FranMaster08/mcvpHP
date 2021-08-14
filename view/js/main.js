let formulario = null
const registrar =(e)=>{
    e.preventDefault()
    let cabeceras = new Headers();
    cabeceras.append("Content-Type", "application/x-www-form-urlencoded");
    let urlencoded = new URLSearchParams();
    urlencoded.append("Nombre", obtenerValores(e).nombre);
    urlencoded.append("Apellido", obtenerValores(e).apellido);
    urlencoded.append("Direccion", obtenerValores(e).direccion);
    let requestOptions = {
            method: 'POST',
            headers: cabeceras,
            body: urlencoded,
    }; 
    fetch("./php/registro.php", requestOptions)
      .then(respuesta=> respuesta.json())
      .then(resultado=>renderRepuesta(resultado))
      .catch(err=>console.error(err))
       
}

const obtenerValores=(e)=>{
    return {
        nombre:e.target.children[0].children[1].value,
        apellido:e.target.children[1].children[1].value,
        direccion:e.target.children[2].children[1].value,
    }
}
const renderRepuesta = (resultados)=>{
    resultados.map(item=>
    
        document.querySelector('#resultados').innerHTML += `<p>${item.nombre}</p>`
    
    )
}

window.onload=()=>{
    formulario= document.querySelector('#formulario-principal article form')
    formulario.addEventListener('submit',registrar)
}






