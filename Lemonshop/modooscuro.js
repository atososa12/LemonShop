const toggle = document.getElementById('toggle-dark');

toggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');

  // Cambiar icono entre luna y sol
  const icon = toggle.querySelector('i');
  if (document.body.classList.contains('dark-mode')) {
    icon.classList.remove('bi-moon');
    icon.classList.add('bi-sun');
  } else {
    icon.classList.remove('bi-sun');
    icon.classList.add('bi-moon');
  }
});