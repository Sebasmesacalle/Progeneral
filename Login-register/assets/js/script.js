document.getElementById("btn__iniciar-seccion").addEventListener("click", iniciarSeccion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

//variables uasdas:
//contenedor
var contenedor_login_register =document.querySelector(".contenedor__login-register");
//forms
var formulario_login=document.querySelector(".formulario__login");
var formulario_register=document.querySelector(".formulario__register");
//cajas
var caja__fondo_login=document.querySelector(".caja__fondo-login");
var caja__fondo_register=document.querySelector(".caja__fondo-register");


function anchoPagina(){
    if(window.innerWidth >850){
        caja__fondo_login.style.display= "block";
        caja__fondo_register.style.display ="block";
    }else{
        caja__fondo_register.style.display="block";
        caja__fondo_register.style.opacity="1";
        caja__fondo_login.style.display="none";
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

anchoPagina();


function iniciarSeccion(){
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left= "10px";
        formulario_login.style.display= "block";
        caja__fondo_register.style.opacity = "1";
        caja__fondo_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left= "0px";
        formulario_login.style.display= "block";
        caja__fondo_register.style.display = "block";
        caja__fondo_login.style.display = "none";
    }

}



function register(){
    if(window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left= "410px";
        formulario_login.style.display= "none";
        caja__fondo_register.style.opacity = "0";
        caja__fondo_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left= "0px";
        formulario_login.style.display= "none";
        caja__fondo_register.style.display = "none";
        caja__fondo_login.style.display = "block";
        caja__fondo_login.style.opacity = "1";
    }

}