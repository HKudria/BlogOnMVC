<?php

    $title = 'Contact page';
    $left = template('contact/_left');

    $innerContent = template('contact/_index');

    $content = template('base/_main2col',[
        'left'=>$left,
        'content'=>$innerContent,
    ]);


?>

