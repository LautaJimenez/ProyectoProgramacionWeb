
// Codigo para el carrusel.

var slideIndex = 1;
showSlides(slideIndex);

// Siguiente y retroceder: 

function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

var span= document.getElementsByTagName('span');
var span= document.getElementsByClassName('slider');
var l=0;
span[1].onclick =()=>{
    l++;
    for( var i of 'slider'){
        if(l==0){i.style.left = "0px";}
        if(l==1){i.style.left = "-740px";}
        if(l==2){i.style.left = "-1480px";}
        if(l==3){i.style.left = "-2220px";}
        if(l==4){i.style.left = "-2960px";}
        if(l>4){l=4;}
    }
}

function convertCurrency(Numero){ // Te convierte el precio con comas y puntos (en libro.php).
    return (new Intl.NumberFormat('es-AR',{style:'currency',currency:'ARS'}).format(Numero));
}

function MultiplicarPrecios(PrecioLibros){ // Te multiplica el precio segun la cantidad de libros que selecciones (en libro.php).

  CantidadDeLibros = parseInt(document.getElementById("CantidadDeLibros").value); // La cantidad de los libros debe ser enteros.
  Multiplicacion = CantidadDeLibros*PrecioLibros;
  
  Respuesta = convertCurrency(Multiplicacion);
  
  document.getElementById("ResultadoPrecio").innerHTML = "AR" + Respuesta;
}



