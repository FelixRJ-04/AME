// Mostrar/ocultar el menú al hacer clic en el botón de menú
document.getElementById('btnMenu').addEventListener('click', function () {
    var menu = document.getElementById('menu');
    menu.classList.toggle('mostrar');
  });
  
  // Cerrar el menú al hacer clic fuera de él
  document.addEventListener('click', function (event) {
    var menu = document.getElementById('menu');
    var btnMenu = document.getElementById('btnMenu');
  
    // Si el clic no fue en el botón de menú ni en el menú, ocultar el menú
    if (!btnMenu.contains(event.target) && !menu.contains(event.target)) {
      menu.classList.remove('mostrar');
    }
  });