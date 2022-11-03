let contn = document.getElementById("cntn-editar");
let bton_cerrar_editar = document.getElementById("cerrar-form-editar")

bton_cerrar_editar.addEventListener('click',()=>{
    contn.style.visibility="hidden";
    window.location='inicio.php';
})

// cerrar seccion y abrir

let abrir_user = document.getElementById("abrir-user");
let cnt_user = document.getElementById("cntn-cerrarseccion");

abrir_user.addEventListener('click',cerrarmod());

function cerrarmod(){
    cnt_user.style.visibility="visible";
}
function cerrarform_añadir(){
    let cntenido = document.getElementById("contenedor-form");
    let cerrarform = document.getElementById("xlose-formañadir");

    cntenido.style.visibility="hidden";
}


function abrirform(){
    let cntenido = document.getElementById("contenedor-form");
    let cerrarform = document.getElementById("xlose-formañadir");

    cntenido.style.visibility="visible";
}

function abrirnav(){
    let abrirnav = document.getElementById("abrir-nav-ul")
let cntn_nav = document.getElementById("contenendor_nav")
let btnprimari = document.getElementById("abirmodnav")
let btnsecundari = document.getElementById("btnsecundari");
cntn_nav.style.display="block"
btnprimari.style.display="none";
btnsecundari.style.display="block";

}
function cerrarnav(){
    let abrirnav = document.getElementById("abrir-nav-ul")
    let cntn_nav = document.getElementById("contenendor_nav")
    let btnprimari = document.getElementById("abirmodnav")
    let btnsecundari = document.getElementById("btnsecundari");
    cntn_nav.style.display="none"
    btnprimari.style.display="block";
btnsecundari.style.display="none";


}
