<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product WHERE category_id=?');
    $sth->bindParam(1,$categoryId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'Product');



}

function getProduct(int $productId)
{
    global $pdo;
    $sth = $pdo->prepare('SELECT * FROM product WHERE id=?');
    $sth->bindParam(1,$productId);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'product')[0];
}
function getAllProducts():array{
    global $pdo;
    $sth=$pdo->prepare('SELECT p.id as id, p.picture as picture, p.description as description, p.name as name, p.category_id as category_id, c.name as category
     FROM product p join categories c
     on (p.category_id= c.id)');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS,'product');
}
function deleteProduct(int $productID)
{
    global $pdo;
    $id = filter_var($productID, FILTER_VALIDATE_INT);
    if ($id !== false) {
        $sth = $pdo->prepare('DELETE FROM product WHERE id=:id');
        $sth->bindParam(':id', $id);
        $sth->execute();
    }
}