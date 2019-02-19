'use strict'
// let templateNoticiaUser;

// fetch('js/templates/noticiaUsuario.handlebars')
//   .then(response => response.text())
//   .then(template => {
//     templateNoticiaUser = Handlebars.compile(template); // compila y prepara el template
//     let idBanda = document.querySelector("#id_bandaForm").value;
//     getComentarios(idBanda);
//   });



// function getComentarios(id_noticia) {
//   fetch("api/comentarios/"+ id_noticia)
//     .then(response => response.json())
//     .then(jsonComentarios => {
//       mostrarComentarios(jsonComentarios);
//     })
// }

// function mostrarComentarios(jsonComentarios) {
//   let context = {
//     comentarios: jsonComentarios
//     //otra: "hola
//   }
//   let html = templateNoticiaUser(context);
//   document.querySelector("#comentarios-container").innerHTML = html;
// }

let evento = document.getElementById("#enviarComentario");
evento.addEventListener("click", function(){
    event.preventDefault();
    console.log("boton uwu");
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

    fetch("api/comentarios/", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(comentarios)
     }) //.then(response =>
    //   getComentarios(idBanda)
    //   .catch(error => console.log("error"));
    // );
  });
// ----
