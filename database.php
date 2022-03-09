<?php
    $dsn = 'mysql:host=localhost;dbname=D00237812';
    $username = 'D00237812';
    $password = 'qJie0sSH';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>