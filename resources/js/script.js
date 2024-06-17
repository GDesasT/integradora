document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Elimina la clase 'active' de todos los enlaces
            navLinks.forEach(nav => nav.classList.remove('active'));
            // Añade la clase 'active' al enlace clickeado
            this.classList.add('active');
        });
    });
});