<?php

//require_once 'datenbank.inc.php';
//require_once '../src/Entities/Buch.php';
//var_dump(holeBuecher($db));

function holeBuecher($db) {

    $stmt = $db->query('SELECT * FROM buechersammlung.buecher');

    $buecherArr = $stmt->fetchAll();

    $buecherObj = [];
    foreach($buecherArr as $b) {
        $buecherObj[] = new Buch($b);
    }
    return $buecherObj; // Array mit Buch-Objekten
}

function holeBuch($db, $id) {

    $stmt = $db->query('SELECT * FROM buechersammlung.buecher WHERE id=' . $id);

    $buchArr = $stmt->fetch();

    if($buchArr === false) {
        return null;
    }

    return new Buch($buchArr);

    //var_dump($buchObj);
}

//var_dump(holeBuch($db, 3));