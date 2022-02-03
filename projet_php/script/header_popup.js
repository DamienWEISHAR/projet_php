
const app = document.getElementById('bg_modal');
const txt = document.getElementById('message_accueil');
const bout = document.getElementById('connection');
const ferm = document.getElementById('closed');


// Pour faire apparaître le popup au clic:

bout.addEventListener('click', function popupAparaitre(){
   app.style.display="block";
   
 });

//Pour fermer le popup en cliquant sur l'icône:

ferm.addEventListener('click', function popupFermer(){
    app.style.display="none";   
});

