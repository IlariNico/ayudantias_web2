

document.querySelector('#formu').addEventListener('submit', function(e) {
    e.preventDefault();

    const datos = new URLSearchParams(new FormData(this));
    
    
    fetch('mostrarDatos.php', {
        method: this.method,
        body: datos,
    })

    .then(response => response.text())
    
    .then(html => {
        document.querySelector('#container').innerHTML = html;
        
    })
    .catch(error => console.log(error));
    
});


