function muestra_oculta(id){
    if (document.getElementById){
    var contenido = document.getElementById(id);
    contenido.style.display = (contenido.style.display == 'none') ? 'block' : 'none';
    }
}
window.onload = function () {
    muestra_oculta('contenido');
    muestra_oculta('contenido1');
}