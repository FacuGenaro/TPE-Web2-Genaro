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
  let id_usuario = document.querySelector("#id_usuarioForm").value;
  let comentarios = {
    "comentario": comentario,
    "puntaje": puntaje,
    "id_noticia": id_noticia,
    "id_usuario": id_usuario,
  }
  let body = JSON.stringify(comentarios);
  console.log(body);

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

fetch(baseUrl + "/js/templates/comentariosUsuario.handlebars")
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
  })
}

function mostrarComentarios(jsonComentarios) {
  let context = {
    comentarios: jsonComentarios
  }
  let html = templateComentarios(context);

  document.querySelector("#comentarios-container").innerHTML = html;
}


// ----
