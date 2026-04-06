const toggle = document.getElementById('toggle-dark');

document.addEventListener('DOMContentLoaded', () => {
  const modo = localStorage.getItem('modoOscuro');

  if (modo === 'activo') {
    document.body.classList.add('dark-mode');

    const icon = toggle.querySelector('i');
    icon.classList.remove('bi-moon');
    icon.classList.add('bi-sun');
  }
});

if (toggle) {
  toggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    const icon = toggle.querySelector('i');

    if (document.body.classList.contains('dark-mode')) {
      icon.classList.remove('bi-moon');
      icon.classList.add('bi-sun');

      localStorage.setItem('modoOscuro', 'activo');
    } else {
      icon.classList.remove('bi-sun');
      icon.classList.add('bi-moon');

      localStorage.setItem('modoOscuro', 'inactivo');
    }
  });
}