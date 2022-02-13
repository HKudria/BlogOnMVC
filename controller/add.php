<?php

$cats = categoryAll();
$err = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$fields = extractField($_POST,['name','text','id_cat']);
	$err = validateFields($fields);
	//var_dump($fields);
	if(empty($err)){
		messagesAdd($fields);
		$id = dbLastId();
		header("Location: message/$id");
		exit();
	}

} else {
	$fields = ['name' => '', 'text' => '', 'id_cat' => 0];
}

$title = 'Add article';
$content = template('message/_formMassages',[
	'cats' => $cats,
	'fields'=>$fields,
	'err' => $err,
]);

?>
