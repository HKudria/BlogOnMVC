<?php

function userOne(string $login) : ?array{
    $sql = "SELECT * FROM users WHERE login=:login ";
    $query = dbQuery($sql, ['login' => $login]);
    $user = $query->fetch();
    return $user === false ? null : $user;
}