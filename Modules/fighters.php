<?php


function getFighters(): array
{
    global $pdo;
    $fighters = $pdo->query('SELECT * FROM fighters')->fetchAll(PDO::FETCH_CLASS, 'Fighter');
    return $fighters;
}
?>