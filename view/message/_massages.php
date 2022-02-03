<h1><?php echo $message['name']?></h1>

    <div>
        <a href="<?php echo BASE_URL ?>?c=category&id=<?php echo $message['id_cat']?>"><?=$message['cat']?></a>
        <em><?php echo $message['dt_add']?></em>
        <hr>

        <div>
            <?php echo $message['text']?>
        </div>
    </div>
