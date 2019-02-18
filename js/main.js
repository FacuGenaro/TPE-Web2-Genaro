  'use strict'

  let templateNoticias;

  fetch("js/templates/noticiasVisitante.handlebars")
  .then(response => response.text())
  .then(template => {
    templateNoticias = Handlebars.compile(template);
    getNoticias();
  });

  function getNoticias(){
    fetch("api/noticia")
    .then(response=>response.json())
    .then(jsonNoticias=>{
      mostrarNoticias(jsonNoticias);
    })

  }

  function mostrarNoticias(jsonNoticias){
    let context = {
      noticia: jsonNoticias
    }
    let html = templateNoticias(context);
    document.querySelector("#noticias-container").innerHTML = html;
  }
