const abrir = document.getElementById('abrir-nav');
const cajanav = document.getElementById('cont-nav');
const cerrar =document.getElementById('cerrar')
abrir.addEventListener("click",function(){
    abrir.style.display="none"
    cajanav.style.right=0
})
cerrar.addEventListener('click',function(){
    abrir.style.display= "block"
    cajanav.style.right="-100%"
})

//scroll header
let nav = document.getElementById('nav-content');
window.addEventListener("scroll", function () {
    nav.classList.toggle("header-sticky", window.scrollY >-1)
})