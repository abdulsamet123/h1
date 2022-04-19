<?php
function getContact():array
{
    global $pdo;

    $sth = $pdo->prepare('SELECT * FROM openings_tijden');
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_CLASS, 'Contact');
}


