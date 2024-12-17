document.addEventListener('DOMContentLoaded', function () {
    let path = window.location.pathname;
    let navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Elimina el último "/" al final de la ruta, si lo hay.
    if (path.endsWith('/')) {
        path = path.slice(0, -1);
    }
    if (path.startsWith('/')) {
        path = path.slice(1);
    }

    // Compara y activa el link correspondiente
    navLinks.forEach(function (link) {
        let linkPath = link.getAttribute('href');

        // Asegúrate de que la ruta del link no termine con "/"
        if (linkPath.endsWith('/')) {
            linkPath = linkPath.slice(0, -1);
        }

        // Compara la ruta y añade la clase 'active' si coinciden
        if (linkPath === path || (linkPath === '/' && path === '/index.php')) {
            link.classList.add('active');
        }
    });

    const serviceBoxes = document.querySelectorAll('.service-box');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // El 10% del elemento debe estar visible
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active'); // Activar la animación
            }
        });
    }, observerOptions);

    serviceBoxes.forEach(box => {
        observer.observe(box); // Observar cada caja
    });

    function isElementInViewport(el) {
        let rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function animateServicesOnScroll() {
        let sections = document.querySelectorAll('.mission-section, .services-section');

        sections.forEach(function(section) {
            let title = section.querySelector('.section-title');
            // let subtitle = section.querySelector('.section-subtitle');
            let images = section.querySelectorAll('.service-image');

            if (isElementInViewport(title) && !title.classList.contains('animate')) {
                title.classList.add('animate');
                // subtitle.classList.add('animate');
            }

            images.forEach(function(img) {
                if (isElementInViewport(img) && !img.classList.contains('animate')) {
                    img.classList.add('animate');
                }
            });
        });
    }

    // Llamar a la función una vez para verificar las imágenes visibles inicialmente
    animateServicesOnScroll();

    // Agregar el evento de scroll
    window.addEventListener('scroll', animateServicesOnScroll);

});