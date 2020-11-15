<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=healthone", "root", "root");
    $query = $db->prepare("INSERT INTO gebruikers(username, password) VALUES('ik', '" .sha1('geheim') . "')");
    if ($query->execute()){
        echo "De nieuwe gegevens zijn toegevoegd";
    } else {
        echo "Er is een fout opgetreden!";
    }
} catch (PDOException $e){
    die("ERROR!: " . $e->getMessage());
}