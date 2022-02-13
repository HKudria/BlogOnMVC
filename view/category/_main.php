<h1>All messages from category <?=$messages['0']['cat']?></h1>

<div>
    <?php foreach($messages as $message): ?>
        <div>
            <strong><?php echo $message['name']?></strong><br>
            <em><?=$message['dt_add']?></em>
            <div>
                <?=$message['text']?>
            </div>
            <a href="<?php echo BASE_URL ?>message/<?=$message['id_message']?>">Read more</a>
            <hr>
        </div>
    <?php endforeach; ?>
</div>
