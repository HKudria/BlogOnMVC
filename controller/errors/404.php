<?php
header( "$_SERVER[SERVER_PROTOCOL] 404 Not Found");
$content = template('errors/_404');
