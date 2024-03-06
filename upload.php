<?php
$file = $_FILES["pdf"];
if ($file["type"] === "application/pdf") {
    //Sanificazione del filename (giusto per sicureza)
    $sanified = basename($file["name"]);
    move_uploaded_file($file["tmp_name"], "./uploadedFiles/".$sanified);
}
header("Location: index.php");