<?php

function sessionsAdd(int $idUser, string $token) : bool{
    $fields = ['uid'=>$idUser,'token'=>$token];
    $sql = "INSERT INTO sessions (id_user, token) VALUES (:uid, :token)";
    $query = dbQuery($sql, $fields);
    return true;
}

function sessionsOne(string $token) :?array{
    $sql = "SELECT * FROM sessions WHERE token=:token";
    $query = dbQuery($sql, ['token' => $token]);
    $session = $query->fetch();
    return $session === false ? null : $session;
}
