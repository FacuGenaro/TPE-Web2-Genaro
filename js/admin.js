'use strict'
let templateComentarios;
let id_noticia = document.querySelector("#id_noticiaForm").value;
let getUrl = window.location;
let baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

// Subir comentarios
let button = document.getElementById('form');
button.addEventListener('submit', send);

function send(e){
  e.preventDefault()
  let id_noticia = document.querySelector("#id_noticiaForm").value;
  let comentario = document.querySelector("#comentario").value;
  let puntaje = document.querySelector("#puntaje").value;
  let usuario = document.querySelector("#usuarioForm").value;
  let comentarios = {
    "comentario": comentario,
    "puntaje": puntaje,
    "id_noticia": id_noticia,
    "usuario": usuario
  }
  let body = JSON.stringify(comentarios);
  
  fetch(baseUrl + "/api/comentario/", {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: body
  })
  .then(response => {
    getComentarios(id_noticia);
  });
}


// Mostrar comentarios

fetch(baseUrl + "/js/templates/comentariosAdmin.handlebars")
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

// Borrar comentarios

function deleteComment(id_comentario){
  fetch(baseUrl + "/api/comentario/" + id_comentario, {
      method: 'DELETE',
      headers: {
     'Content-Type':'application/json'
   }
  }).then(response =>
      getComentarios(id_noticia)
  );
}
