<?php

function getReview(int $id):array
{
    GLOBAL $pdo;

    $sth=$pdo->prepare('SELECT * FROM review where product_id=? order by date DESC');
    $sth->bindParam(1,$id);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Review');
}

function saveReview(string $description, string $stars,$product_id):void
{
    GLOBAL $pdo;

    $sth = $pdo->prepare('INSERT INTO review ( description, stars,product_id,user_id) VALUES (:d,:s,:p,1)');
    $sth->bindParam("d", $description);
    $sth->bindParam("s", $stars);
    $sth->bindParam("p", $product_id);
    $sth->execute();
}