'use strict';

const form = document.querySelector("#form");
const container= document.querySelector("#container");

form.addEventListener("submit", (e)=> {
    event.preventDefault();
    const data = new FormData (form)

    fetch ("login.php",{
        method: "POST",
        body: data
    })
    .then(res => res.text())
    .then(txt => container.innerHTML = txt) 
        
    })