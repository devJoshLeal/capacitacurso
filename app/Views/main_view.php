<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($name) ?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css'); ?>">
</head>
<body>
    <div id="container">
        <header>
            <h1><?php echo($name) ?></h1>
        </header>
        <nav>
            <?php foreach($levels as $level): ?>
            <a onclick='getContentLevel("<?php echo($level["order"]) ?>")'>Nivel <?php echo($level['order']) ?></a>
            <?php endforeach; ?>
        </nav>
        <div class="clearfix"></div>
        <div class="flex-container">
            <section id="content">
                <article id="resourcecontent" class="article">
                    <h2 id="article_titulo"></h2>
                    
                    <div id="article_contenido">
                        <?php echo($description) ?>
                    </div>
                    <img id="article_image" src="<?php echo($imageUrl) ?>">
                    <video controls>
                    <source src="<?php echo($video["urlVideo540p"]) ?>" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                    <pre id="article_pre"></pre>
                </article>
            </section>
            <aside id="levelcontent">
                <p>Selecciona un nivel para comenzar</p>
            </aside>
        </div>
        <div class="clearfix"></div>
        <footer>
            Joshua Leal Diaz
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
<script src="<?= base_url('js/scripts.js'); ?>"></script>
</html>