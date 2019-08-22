<?php


function Addition()
{
    $nb1 = $_POST['chiffre1'];
    $nb2 = $_POST['chiffre2'];
    echo $nb1 + $nb2;
}
function Soustraction()
{
    $nb1 = $_POST['chiffre1'];
    $nb2 = $_POST['chiffre2'];
    echo $nb1 - $nb2;
}
function Multiplication()
{
    $nb1 = $_POST['chiffre1'];
    $nb2 = $_POST['chiffre2'];
    echo $nb1 * $nb2;
}
function Division()
{
    $nb1 = $_POST['chiffre1'];
    $nb2 = $_POST['chiffre2'];
    echo $nb1 / $nb2;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Calculatrice</title>
  </head>
  <body class="bg-dark text-light">
    <h1 class="text-center p-3">Une calculatrice en PHP</h1>
    <form action="index.php" method="post">
        <div class="container col-md-4 d-flex flex-column p-3">
            <div class="d-flex justify-content-around">
                <input type="text" name="chiffre1" value="<?= $_POST['chiffre1']?>"/>
                <input type="text" name="chiffre2" value="<?= $_POST['chiffre2']?>"/>
            </div>
            <div class="d-flex justify-content-between m-4">
                <input class="btn btn-lg btn-outline-info" type="submit" name="addition" value="+"/>
                <input class="btn btn-lg btn-outline-info" type="submit" name="soustraction" value="-"/>
                <input class="btn btn-lg btn-outline-info" type="submit" name="multiplication" value="*"/>
                <input class="btn btn-lg btn-outline-info" type="submit" name="division" value="/"/>
            </div>
                <input class="align-self-center btn btn-outline-warning" type="submit" name="zero" value="Reset"/>
        </div>
    </form>
    
    <p class="text-center p-5 h2">Résultat : 
        <span class="text-success h5">
        <?php 
        if(isset($_POST['addition']))
        {
            Addition();
        }
        elseif(isset($_POST['soustraction']))
        {
            Soustraction();
        }
        elseif(isset($_POST['multiplication']))
        {
           Multiplication();
        }
        elseif(isset($_POST['division']))
        {
            Division();
        }
        elseif(isset($_POST['zero']))
        {
            /* echo ""; */
            header('Location: index.php?');
        }
        else
        {
            echo "Saisissez deux nombres afin d'effectuer une opération";
        }
        ?>
        </span>
    </p>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>