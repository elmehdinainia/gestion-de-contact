var invi = document.querySelector(".invisible");
var boton=document.querySelector(".botox");
var supp=document.querySelector(".hayed");


boton.addEventListener('click', function(){
    invi.classList.remove("invisible");
})
supp.addEventListener('click', function(){
    invi.classList.add('invisible');
})