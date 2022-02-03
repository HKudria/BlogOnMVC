<h1>Create new message</h1>
<div class="form-group">
	<form method="post">
		Category:
        <select class="form-select" name="id_cat">
		<?php foreach($cats as $cat): ?>
			<option value="<?php echo $cat['id']?>"
					  <?php echo ($cat['id'] == $fields['id_cat'] ? 'selected' : '')?>
			>
				<?php echo $cat['category']?>
			</option>
		<?php endforeach; ?>
		</select><br>
		Name:<br>
		<input type="text" name="name" class="form-control" value="<?php echo $fields['name']?>"><br>
		Text:<br>
		<textarea class="form-control" name="text"><?php echo $fields['text']?></textarea><br>
        <button class="btn btn-success">Send</button>
		<p>
            <?php
            if(!empty($err)):
                foreach ($err as $error):
                    echo $error . '<br>';
                endforeach;
            endif;?>
        </p>
	</form>
    <a href="./">Go to main page</a>
</div>