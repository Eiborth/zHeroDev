function typewrite(element,text,delay) {

  /*
  
  Simula el tipeo de teclas
  
  element:  elemento donde insertar el texto.
  text:   texto a tipear.
  delay:    tiempo entre teclas (en milisegundos).

  */

  // Insertar la siguiente letra
  aux = document.getElementById(element).innerHTML;
  aux = aux.concat(text.charAt(0));
  document.getElementById(element).innerHTML = aux;

  // Esperar "delay" milisegundos para la próxima tecla
  if (text.length > 1) {
    // Eliminar la tecla actual
    text = text.substr(1);
    setTimeout(typewrite,delay,element,text,delay);
  }
}

t="Bienvenidos a zHeroDev | Desarrollador Android y Web.";
typewrite("texto",t,95);

