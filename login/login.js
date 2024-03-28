var telaregistro = document.querySelector("#login");
var telalogin = document.querySelector("#register");


var body = document.querySelector("body");


telaregistro.addEventListener("click", function(){
    body.className = "register-js";
});

telalogin.addEventListener("click", function(){
    body.className = "login-js";
});

