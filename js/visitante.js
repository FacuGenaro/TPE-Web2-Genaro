'use strict'
let templateComentarios;
let id_noticia = document.querySelector("#id_noticiaForm").value;
let getUrl = window.location;
let baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

// Mostrar comentarios

fetch(baseUrl + "/js/templates/comentariosVisitante.handlebars")
.then(response => {
  return response.text()
})
.then(template => {
  templateComentarios = Handlebars.compile(template);
  getComentarios(id_noticia);
});

function getComentarios(id_noticia){
  fetch(baseUrl + "/api/comentario/" + id_noticia)
  .then(response => {
    return response.json();
  })
  .then(jsonComentarios=>{
    mostrarComentarios(jsonComentarios);
    let botonDelete = document.querySelectorAll("#borrarComentario");
    botonDelete.forEach(e=> e.addEventListener("click", function(){
      deleteComment(e.getAttribute("value"))
    }));
  })
}

function mostrarComentarios(jsonComentarios) {
  let context = {
    comentarios: jsonComentarios
  }
  let html = templateComentarios(context);
  document.querySelector("#comentarios-container").innerHTML = html;
  }
