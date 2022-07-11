// VALIDACIONES DE CARGARLIBRO

function validar(){
    var nombre, autor, editorial, precio, paginas, idioma, publicacion, isbn, sinopsis, portada;

    nombre = document.getElementById("libro").value;
    categoria = document.getElementById("categoria").value;
    agregarCategoria = document.getElementById("agregarCategoria");
    autor = document.getElementById("autor").value;
    editorial = document.getElementById("editorial").value;
    agregarEditorial = document.getElementById("agregarEditorial").value;
    precio = document.getElementById("precio").value;
    paginas = document.getElementById("paginas").value;
    idioma = document.getElementById("idioma").value;
    agregarIdioma = document.getElementById("agregarIdioma").value;
    publicacion = document.getElementById("fecha").value;
    isbn = document.getElementById("isbn").value;
    sinopsis = document.getElementById("sinopsis").value;
    portada = document.getElementById("portada").value;

    var LetrasyEspacios = /[A-Za-z ñ]+/;
    var LetrasNumerosyEspacios = /^[0-9a-zA-Z]+$/;
    var Numero = /^([0-9])*$/;


    if(!LetrasyEspacios.test(nombre)){
        alert("El valor " + nombre + " no es valido para el nombre del libro");
        return false;
    }

    else if(!LetrasyEspacios.test(autor)){
        alert("El valor " + autor + " no es valido para el nombre del autor");
        return false;
    }

    else if(!Numero.test(categoria)){
        alert("El valor " + categoria + " no es valido para el nombre de la editorial");
        return false;
    }

    else if(!Numero.test(editorial)){
        alert("El valor " + editorial + " no es valido para el nombre de la editorial");
        return false;
    }

    else if(!Numero.test(precio)){
        alert("El precio ingresado no es un número");
        return false;
    }

    else if(precio<0){
        alert("El precio ingresado no es valido");
        return false;
    }

    else if(!Numero.test(paginas)){
        alert("El numero de paginas ingresado no es un número");
        return false;
    }

    else if(paginas<0){
        alert("El numero de paginas ingresado no es valido");
        return false;
    }

    else if(!Numero.test(isbn)){
        alert("El I.S.B.N ingresado no es un número");
        return false;
    }

    // else if(isbn.length != 10 || isbn.length != 13){
    //     alert("El I.S.B.N debe ser de 10 o 13 dígitos");
    //     return false;
    // } //NO FUNCIONA!!!

    else if(!LetrasyEspacios.test(idioma)){
        alert("El valor " + idioma + " no es valido para el idioma");
        return false;
    }

    else if(!LetrasNumerosyEspacios.test(sinopsis)){
        alert("El valor " + sinopsis + " no es valido para la sinopsis");
        return false;
    }

    else if(nombre === "" || autor === "" || (categoria === "" && agregarCategoria === "") || (editorial === "" && agregarEditorial === "") || precio === "" || paginas === "" 
    || (idioma === "" && agregarIdioma === "") || publicacion === "" || isbn === "" || sinopsis === "" || portada === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
}

function MostrarCategoria() {
    var agregarCategoria = document.getElementById("agregarCategoria");
    var check =  document.getElementById("agregarCategoriaCheckbox"); 
    var categoria = document.getElementById("categoria");
    var tituloCategoria = document.getElementById("titulo-categoria")

    if (check.checked) {
        agregarCategoria.style.display = "inline-block";
        categoria.style.display = "none";
        tituloCategoria.style.display = "none";
    }
    else{
        agregarCategoria.style.display = "none";
        categoria.style.display = "inline-block";
        tituloCategoria.style.display = "block";

    }
}
