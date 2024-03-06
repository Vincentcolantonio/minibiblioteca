<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-50">
        <div class="row">
            <div class="col gy-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Scarica</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                            $directory = opendir("./uploadedFiles");
                            $file = readdir($directory);
                            while ($file) {
                                if ($file != "." && $file != "..") { 
                                    echo "<tr>\n<td>\n";
                                    echo htmlspecialchars($file);
                                    echo "</td>\n<td>";
                                    echo "<a download href=\"./uploadedFiles/".$file."\"><button class=\"btn btn-primary\">Scarica</button></a>";
                                    echo "</td>\n</tr>";
                                }
                                $file = readdir($directory);
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>