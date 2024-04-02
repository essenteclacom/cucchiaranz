document.addEventListener('DOMContentLoaded', function () {
    const animacionesltr = document.querySelectorAll('.animacionltr');
    const animacionesrtl = document.querySelectorAll('.animacionrtl');
    const animacionesfade = document.querySelectorAll('.animacionfade');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.intersectionRatio > 0) {
                // Ocultar todos los elementos con la clase "animacion"
                //animaciones.forEach(animacion => animacion.classList.remove('visible'));
                // Mostrar el elemento que está en la vista del usuario
                entry.target.classList.add('visible');
            }
        });
    });
    
    animacionesltr.forEach(animacionltr => observer.observe(animacionltr));
    animacionesrtl.forEach(animacionrtl => observer.observe(animacionrtl));
    animacionesfade.forEach(animacionfade => observer.observe(animacionfade));
})