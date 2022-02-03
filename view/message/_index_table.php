<h1>Blog</h1>
<hr>
<a href="./">Standard view</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Add</th>
            <th scope="col">Text</th>
            <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($messages as $message): ?>
        <tr>
            <td><?php echo $message['name']?></td>
            <td><?=$message['category']?></td>
            <td><?=$message['dt_add']?></td>
            <td> <?=$message['text']?></td>
            <th scope="row"> <a href="?c=message&id=<?=$message['id_message']?>">Read more</a></th>
        </tr>
        <?php endforeach; ?>
    </table>
