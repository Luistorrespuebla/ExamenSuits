const enviar_datos = () => {
    let nombreP = document.getElementById('nombreP').value;
    let precio = document.getElementById('precio').value;

    if (isNaN(precio) || precio.trim() === "") {
        alert("Por favor, ingrese un valor numérico válido para el precio.");
        return; 
    }

    let data = new FormData();
    data.append("nombreP", nombreP);
    data.append("precio", precio);

    fetch("app/controller/inicio.php", {
        method: "POST",
        body: data
    })
    .then(response => response.json())
    .then(response => {
        if (response[0] == 1) {
            alert(response[1]);
            window.location.reload(); 
        } else {
            alert(response[1]);
        }
    });
}


const eliminar_datos = () => {
    let idProducto = prompt("Ingrese el ID del producto a eliminar:");
    if (idProducto) {
        let data = new FormData();
        data.append("id", idProducto);
        data.append("eliminar", true); 

        fetch("app/controller/inicio.php", {
            method: "POST",
            body: data
        })
        .then(response => response.json())
        .then(response => {
            if (response[0] == 1) {
                alert(response[1]);
                window.location.reload(); 
            } else {
                alert(response[1]);
            }
        });
    }
}

const actualizar_datos = () => {
    let idProducto = prompt("Ingrese el ID del producto a actualizar:");
    if (idProducto) {
        let nombreP = document.getElementById('nombreP').value;
        let precio = document.getElementById('precio').value;

        let data = new FormData();
        data.append("id", idProducto);
        data.append("nombreP", nombreP);
        data.append("precio", precio);
        data.append("actualizar", true); 

        fetch("app/controller/inicio.php", {
            method: "POST",
            body: data
        })
        .then(response => response.json())
        .then(response => {
            if (response[0] == 1) {
                alert(response[1]);
                window.location.reload(); 
            } else {
                alert(response[1]);
            }
        });
    }
}

window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('btn-magico3').addEventListener('click', enviar_datos);
    document.getElementById('btn-magico4').addEventListener('click', eliminar_datos);
    document.getElementById('btn-magico5').addEventListener('click', actualizar_datos);
});
