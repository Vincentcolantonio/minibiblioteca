<?php
$file = $_FILES["pdf"];
if ($file["type"] === "application/pdf") {
    //Sanificazione del filename (giusto per sicureza)
    $sanified = basename($file["name"]);
    $directory = opendir("./uploadedFiles");
    $file = readdir($directory);
    $conta = 0;
    while ($file) {
        if ($sanified === $file) {
            $sanified = $sanified."(".++$conta.")";
        }
        $file = readdir($directory);
    }
    move_uploaded_file($file["tmp_name"], "./uploadedFiles/".$sanified);
}
header("Location: index.php");