<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <!-- Contenedor para logo y botón de menú -->
        <div class="d-flex justify-content-between align-items-center w-100">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand" href=".">
                <img src="images/logo.png" alt="Logo">
            </a>

            <!-- Botón para el menú en móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Teléfonos - visible en todos los dispositivos -->
        <div class="navbar-phone d-flex align-items-center justify-content-center w-100 flex-wrap">
            <i class="fab fa-whatsapp"></i>
            <span class="phone-number"><a href="tel:+15512860248">(551) 286-0248</a></span>
            <span class="mx-2">|</span>
            <i class="fab fa-whatsapp"></i>
            <span class="phone-number"><a href="tel:+13322508552">(332) 250-8552</a></span>
        </div>

        <!-- Enlaces del menú -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>"
                       href="index.php" id="homeLink">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>"
                       href="services.php" id="servicesLink">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'aboutus.php') ? 'active' : ''; ?>"
                       href="aboutus.php" id="aboutLink">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contactus.php') ? 'active' : ''; ?>"
                       href="contactus.php" id="contactLink">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/banner1.jpg" class="d-block w-100" alt="banner1">
            <img src="images/4.png" class="overlay-left" alt="First Image">
            <img src="images/logo_final.png" class="center-top-image" alt="Center Top Image">
        </div>
        <div class="carousel-item">
            <img src="images/banner2.jpg" class="d-block w-100" alt="banner2">
            <img src="images/texto_tres.png" class="overlay-left-1" alt="Second Image">
            <img src="images/texto_dos.png" class="overlay-bottom-center" alt="Bottom Center Image">
            <img src="images/11.png" class="overlay-bottom-center-1" alt="Third Image">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>