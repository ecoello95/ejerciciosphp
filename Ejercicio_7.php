<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 7</h2>
    <p>Programa que evalua si un numero ingresado es un numero primo.</p>
    <form action="ejercicio7.php" method="post">
        Ingrese un numero: <input type="number" name="txt1">
        <br><br>
        <input type="submit" name="primo">
    </form>
</body>
</html>

<?php

    if(isset($_POST["primo"])){
        $n=$_POST["txt1"];
        for($i=2;$i<=$n/2;$i++){
            if($n % $i ==0)
            {
                $f=1;
                break;
            }

        }
        if($f==0)
        {
            echo "$n Es un primo";
        }
        else
        {
            echo "$n No es un numero primo";
        }


    }
?>

<form>
Digite un numero:
<input name ="numero" type= "text" placeholder = "Ingrese un numero">

<input type="submit" value ="Insertar">
</form>

</body>
</html>
