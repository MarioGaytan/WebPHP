<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elements</title>
    <!-- Enlace al archivo CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">GamerZone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="computadoras.php">Computadoras Gamer</a></li>
            <li class="nav-item"><a class="nav-link" href="elements.php">Elemetnos</a></li>
        </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center neon-text">Bienvenido los elementos exclusivos</h1>
        <p class="lead text-center neon-subtext">Aqui podras ver elementos exclusivos</p>

        <!-- Sección de Videos -->
         <section>
            <div class="video-gallery text-center mt-5">
                <h2 class="neon-subtitle">Videos Destacados</h2>
                <div class="video-container">
                    <!-- Video local -->
                    <video class="gamer-video" controls>
                        <source src="vid/video1.mp4" type="video/mp4">
                    </video>
                    <video class="gamer-video" controls>
                        <source src="vid/video2.mp4" type="video/mp4">
                    </video>
                    <video class="gamer-video" controls>
                        <source src="vid/video3.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

    <!-- Sección de GIFs -->
    <section class="gif-gallery">
        <h2 class="neon-subtitle">GIFs Destacados</h2>
        <img src="gift/gift1.gif" class="gamer-gif mt-4">
        <img src="gift/gift2.gif" class="gamer-gif mt-4">
        <img src="gift/gift3.gif" class="gamer-gif mt-4">
        <img src="gift/gift4.gif" class="gamer-gif mt-4">
        <img src="gift/gift5.gif" class="gamer-gif mt-4">
    </section>

    <!-- Scripts de Bootstrap (Opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
