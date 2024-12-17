<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="About US - MyD Group LLC">
    <meta name="description" content="To fulfill the cleaning, sanitation, disinfection, and maintenance needs of our clients using eco-friendly products. We aim for service excellence">
    <meta name="keywords" content="Multiple Services, Services Clean, Deep Clean, NJ, Deep Clean New Jersey">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="5 days">
    <meta name="author" content="Kelly Torres">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Futura+MD:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link href="css/style.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">

    <style>
        /* Contenedor para los dos mapas */
        .map-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            width: 100%;
        }

        /* Estilos para los dos mapas */
        .map-wrapper {
            width: 49%;
            box-sizing: border-box; /* Asegura que el tamaño incluya padding y borde */
            flex: 1;
        }
        #map1, #map2 {
            height: 400px;
            width: 100%; /* Ambos mapas ocuparán la mitad del ancho de la pantalla */
            margin: 0 auto;
            border-radius: 6px;
        }
        /* Estilo para los títulos */
        h2 {
            margin: 0;   /* Quitar margen para evitar que afecte el tamaño del mapa */
            padding: 10px; /* Espaciado adicional para el título */
            background-color: white; /* Fondo blanco para el título */
            border: 1px solid #ccc; /* Opcional: borde para el título */
        }
        small {
            font-size: 0.7em;
        }

        /* Media query para dispositivos móviles */
        @media screen and (max-width: 768px) { /* Puedes ajustar este valor según tus necesidades */
            .map-container {
                flex-direction: column; /* Hace que los elementos se apilen verticalmente */
                padding: 0 15px; /* Agrega padding en los laterales */
            }

            .map-wrapper {
                width: 100%; /* Asegura que cada mapa ocupe todo el ancho disponible */
                margin-bottom: 20px; /* Espacio entre mapas cuando están apilados */
                border: 1px solid #ccc; /* Agrega borde */
                border-radius: 8px; /* Esquinas redondeadas */
                padding: 10px; /* Espacio interno */
            }
        }

        /* Para teléfonos muy pequeños */
        @media screen and (max-width: 375px) {
            .map-wrapper {
                padding: 8px;
            }

            #map1, #map2 {
                width: 90%; /* Ancho aún más reducido */
                height: 200px; /* Altura más pequeña */
            }

            /* Ajustar el texto para mejor legibilidad */
            .map-wrapper h2 {
                font-size: 1.2rem;
            }

            .map-wrapper small {
                font-size: 0.8rem;
                display: block;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<?php
include_once 'include/head.php';
?>

<div class="container mission-section">
    <h4 class="text-center section-title">ABOUT US</h4>
</div>

<!-- Contenedor para los dos mapas -->
<div class="map-container">
    <!-- Mapa de Nueva Jersey con título -->
    <div class="map-wrapper">
        <h2>New Jersey</h2>
        <small>Jersey City, Hoboken, Weehawken, Union City, West New York, Guttenberg, Woodcliff, North Bergen, Fairview, Cliffside Park</small>
        <div id="map1"></div>
    </div>

    <!-- Mapa de Nueva York con título -->
    <div class="map-wrapper">
        <h2>New York</h2>
        <small>Manhattan, Bronx, Queens, Brooklyn</small>
        <div id="map2"></div>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Función para agregar polígonos en el mapa a partir de un archivo GeoJSON
    function cargarGeoJSON(map, geojsonUrl) {
        fetch(geojsonUrl)
            .then(response => response.json())
            .then(data => {
                L.geoJSON(data, {
                    style: {
                        color: 'black',  // Color negro para las líneas de demarcación
                        weight: 3,       // Grosor de las líneas (3px)
                        opacity: 1,      // Opacidad total para que las líneas sean sólidas
                    }
                }).addTo(map);
            })
            .catch(err => console.error('Error cargando GeoJSON:', err));
    }

    // Mapa 1: Ciudades de Nueva Jersey
    var map1 = L.map('map1').setView([40.750610, -74.063906], 11);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map1);

    // Cargar las fronteras de las ciudades de Nueva Jersey (GeoJSON)
    cargarGeoJSON(map1, 'geojson/map1.json');

    // Mapa 2: Distritos de Nueva York
    var map2 = L.map('map2').setView([40.730610, -73.935242], 10);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map2);

    // Cargar las fronteras de los distritos de Nueva York (GeoJSON)
    cargarGeoJSON(map2, 'geojson/map2.json');
</script>

<?php
include_once 'include/footer.php';
?>
