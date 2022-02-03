<?php

function categoryAll() : array{
    $sql = "SELECT * FROM categoryes";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function categoryOne(int $id){
    $sql = "SELECT  messages.id_message, messages.name, messages.text, messages.dt_add, messages.id_cat, categoryes.category as cat  FROM messages INNER JOIN categoryes ON messages.id_cat = categoryes.id WHERE id_cat=:id ";
    $query = dbQuery($sql, ['id' => $id]);
    return $query->fetchAll();
}