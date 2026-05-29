<h2 id="article_titulo"><?php echo($name) ?></h2>

<div id="article_contenido">
    <?php echo ($description) ?>
</div>
<?php if(isset($imageUrl)): ?>
<img id="article_image" src="<?php echo ($imageUrl) ?>">
<?php endif; ?>
<?php if(isset($video)): ?>
<video controls>
    <source src="<?php echo($video["urlVideo"]) ?>">
</video>
<?php endif ?>
<?php if(isset($storage)||isset($storageJobAid)): ?>
<a href="<?php echo(isset($storage) ? $storage["urlFile"]:$storageJobAid["urlFile"]) ?>" target="_blank">Mira este documento</a>
<?php endif ?>