const enviar_datos = () => {
    let email = document.getElementById('email').value;
    let pass = document.getElementById('pass').value;
    let data = new FormData();
    data.append("email",email); 
    data.append("pass",pass); 
    fetch("app/controller/login.php",{
        method:"POST",
        body: data
    }).then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] == 1) {
            alert(respuesta[1]);
            window.location="index.php";
        }else {
            alert(respuesta[1]);
        }
    });
}
 
const validar_datos = () => {
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('pass').value;
    let data = new FormData();
    data.append("nombre",nombre); 
    data.append("apellido",apellido);
    data.append("email",email); 
    data.append("pass",pass); 
    fetch("app/controller/registro.php",{
        method:"POST",
        body: data
    }).then(respuesta => respuesta.json())
    .then(respuesta => {
        if (respuesta[0] == 1) {
            alert(respuesta[1]);
            window.location="login.php";
        }else {
            alert(respuesta[1]);
        }
    });
}
 
window.addEventListener('DOMContentLoaded',() => {
    if (document.getElementById('btn-magico')) {
        document.getElementById('btn-magico').addEventListener('click',() => {
            enviar_datos();
        });                
    }
    if (document.getElementById('btn-magico2')) {
        document.getElementById('btn-magico2').addEventListener('click',() => {
            validar_datos();
        });        
    }
});
 


