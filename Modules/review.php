<?php
function getReviews():array
{
    global $pdo;
    $reviews = $pdo->query('SELECT * FROM reviews')->fetchAll(PDO::FETCH_CLASS, 'Review');
    return $reviews;
}
?>