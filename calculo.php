<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form action="">
        <label>imc</label>
        <input type="text" name="peso">
        <label>Valor 2</label>
        <input type="text" name="altura">
        <input type="submit" value="Calcular">
    </form>

    <?php

        if (isset($_GET["peso"]) && isset($_GET["altura"]))
        {
            //capturei o valor do input e armazenei na variável
            $v1 = $_GET["peso"];
            $v2 = $_GET["altura"];

            echo $p + $a;
        }
   

    ?>

 

 

 

</body>

</html>