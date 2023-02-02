<?php


function getFighters(): array
{
    global $pdo;
    $fighters = $pdo->query('SELECT * FROM fighters')->fetchAll(PDO::FETCH_CLASS, 'Fighter');
    return $fighters;
}


function deleteProduct(int $id): string
{
    global $pdo;
    $fighterDel = $pdo->prepare('DELETE from fighters where id = $id');
    if($fighterDel->execute()){
        $messageDel = "Product verwijderd";
    }
    else{
        $messageDel = "Er is iets mis gegaan";
    }

    return $messageDel;
}



?>