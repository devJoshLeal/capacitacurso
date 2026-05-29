<h2>Nivel <?php echo($order) ?></h2>
                <?php foreach($lections as $lection): ?>
                <p>Leccion <?php echo($lection["order"]) ?></p>
                <ul>
                    <?php foreach($lection["resources"] as $resource): ?>
                    <li>
                        <a onclick='loadResource(<?php echo($resource["id"].",".$order.",".$lection["order"]) ?>)'>
                        <?php echo($resource["name"]) ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endforeach; ?>