function validaCampos(e){
    
    var id = document.getElementById("id").value;
    var cantidad = document.getElementById("cantidad").value;
    var precio = document.getElementById("precio").value;
    
    if(id.length == 0 | /\s/.test(id) | isNaN(id) | id<0){
        alert("Debe ingresar un número valido para ID");
        document.getElementById("id").focus;
        e.preventDefault();
        return false;
    }

    if(cantidad.length == 0 | /\s/.test(cantidad) | isNaN(cantidad) | cantidad<0){
        alert("Debe ingresar un número valido para Cantidad");
        document.getElementById("cantidad").focus;
        e.preventDefault();
        return false;
    }

    if(precio.length == 0 | /\s/.test(precio) | isNaN(precio) | precio<0){
        alert("Debe ingresar un número valido para Precio");
        document.getElementById("precio").focus;
        e.preventDefault();
        return false;
    }

}
