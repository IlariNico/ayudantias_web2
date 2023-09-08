document.addEventListener('DOMContentLoaded',function(){
    const botonera=document.querySelector("#botonera");
})

botonera.addEventListener('click',function(e){
    const valor=e.target.getAttribute('value');
   

    fetch(`mostrarLista.php?cant=${valor}`,{
        method: 'GET',
        
    })

    .then(response => response.text())

    .then(html => {
        document.querySelector('#container').innerHTML=html;
    })

    .catch(error=>console.log(error));
});