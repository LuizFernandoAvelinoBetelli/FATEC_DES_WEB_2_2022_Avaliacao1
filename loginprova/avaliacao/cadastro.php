<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:index.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $filme_1=$_POST['filme_1'];
    $filme_2=$_POST['filme_2'];
    $filme_3=$_POST['filme_3'];

    $handle = fopen("filmes_cadastrados.txt","a");
    fwrite($handle, $filme_1."\n");
    fwrite($handle, $filme_2."\n");
    fwrite($handle, $filme_3. "\n");
    fclose($handle);
}
?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 20px sans-serif; background-color:#00d4ff;}
        .wrapper{ width: 350px; padding: 20px;}
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Informe nos campos abaixo, os 3 melhores filmes que voce já viu.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Filme 1º</label>
                <input type="text" name="filme_1" class="" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Filme 2º</label>
                <input type="text" name="filme_2" class="" value="" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Filme 3º</label>
                <input type="text" name="filme_3" class="" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Enviar">
            </div>
            
        </form>
    </div>    
</body>
</html>