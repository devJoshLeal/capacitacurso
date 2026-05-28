<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos de POO</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <div id="container">
        <header>
            <h1><?php echo($name) ?></h1>
        </header>
        <div class="description">
            <p id="course_description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        <div class="clearfix"></div>
        <div class="flex-container">
            <section id="content">
                <article class="article">
                    <h2 id="article_titulo">Titulo de prueba</h2>
                    <p id="article_contenido"></p>
                    <video controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                    <pre id="article_pre"></pre>
                </article>
            </section>
            <aside>
                <h2>Nivel 1</h2>
                <ul>
                    <li>Tema 1</li>
                    <li>Tema 2</li>
                    <li>Tema 3</li>
                </ul>
            </aside>
        </div>
        <div class="clearfix"></div>
        <footer>
            Joshua Leal Diaz
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
<script>
    
</script>
</html>