<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRADOS</title>
    <h2>FILMES CADASTRADOS</h2>
    <style type="text/css">
        body{ font: 20px sans-serif; text-align: center; background-color:#00d4ff; }
    </style>
</head>
<body>
<?php


$handle = fopen("filmes_cadastrados.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);


?>
</body>
</html>