document.addEventListener('DOMContentLoaded', function () {
    const iconoMenu = document.querySelector('#icono-menu');
    const menu = document.querySelector('#menu');
    const cerrarMenuBtn = document.querySelector('#cerrar');

    function toggleMenu() {
        // Alternamos estilo para menu y body
        menu.classList.toggle('active');
        document.body.classList.toggle('opacity');

        // Alternamos la clase 'hidden' para el icono del menú
        iconoMenu.classList.toggle('hidden');
    }

    iconoMenu.addEventListener('click', toggleMenu);
    cerrarMenuBtn.addEventListener('click', toggleMenu);
});
