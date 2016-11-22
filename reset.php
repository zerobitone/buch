<?php

require_once 'inc/datenbank.inc.php';

$db->query('DROP DATABASE IF EXISTS buechersammlung');
$db->query('CREATE DATABASE buechersammlung');
$db->query('USE buechersammlung');

$db->query('CREATE TABLE buecher (
               id INT PRIMARY KEY AUTO_INCREMENT,
               titel VARCHAR(255),
               preis DECIMAL(7,2)
               );
          ');

$db->query('INSERT INTO buecher (titel, preis)
            VALUES
            ("Der Graf von Monte Christo", 9.95),
            ("Per Anhalter durch die Galaxis", 7.95)
          ');

// Zum Testen:
$stmt = $db->query('SELECT * FROM buecher');
var_dump($stmt->fetchAll());


