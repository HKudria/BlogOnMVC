<h1>Blog</h1>
<hr>
<a href="<?php echo BASE_URL ?>table">View as table</a>
<hr>
<div>
    <?php foreach($messages as $message): ?>
        <div>
            <strong><?php echo $message['name']?></strong><br>
            <strong><?=$message['category']?></strong>
            <em><?=$message['dt_add']?></em>
            <div>
                <?=$message['text']?>
            </div>
            <a href="<?php echo BASE_URL ?>message/<?=$message['id_message']?>">Read more</a>
            <hr>
        </div>
    <?php endforeach; ?>
</div>
