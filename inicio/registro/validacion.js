let btn=document.getElementById("btnEliminar")

btn.addEventListener('click', ()=>{
    let contra = prompt('Pon "confirmar"')
    if (contra=="confirmar")
    {
        alert('Contraseña correcta, acepta para ver la entrada')
        window.location.replace("borrar.php");

    }else if(contra!=null && contra!="confirmar"){
        alert('Contraseña incorrecta')
        window.location.replace("../inicio.php");
    }
})


