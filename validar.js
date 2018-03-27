function validar(){
  var comprobar=true;
  var vacio= "";

  var texto= document.getElementById("input").value;
  if (texto=vacio) {
    comprobar=false;
  }
  alert('Todos los campos deben estar rellenados');
}
