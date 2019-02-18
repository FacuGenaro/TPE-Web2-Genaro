'use strict'
let templateNoticias;
fetch("js/templates/noticias.handlebars")
.then(response => response.text())
.then(templateNoticias => { handlebars.compile(template);
  getNoticias();
});



  function getNoticias(){
    fetch("api/noticias")
    .then(response=>response.json())
    .then(jsonNoticias=>{
      mostrarNoticias(jsonNoticias);
    })

  }

  function mostrarNoticias(jsonNoticias){
    let context = {
      noticias: jsonNoticias;
    }
    let html = templateNoticias(context);
    document.querySelector("#noticias-container").innerHTML = html;
  }
