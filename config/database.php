<?php    
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=karting_db;charset=utf8mb4", "root", "");
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
        // echo "connexion reussi";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
?>