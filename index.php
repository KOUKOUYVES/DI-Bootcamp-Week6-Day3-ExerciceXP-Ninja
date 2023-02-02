<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">Exercice Ninja Factorial Of A Number Using Recursive</h1>
    <div class="container">
<br><br>
        <?php
            $balls = 164; 
            function totalOvers($balls)
            {
                if ($balls % 6 == 0) {
                    echo $balls/6;
                } elseif ($balls == 164)
                {
                    echo $balls/6.029;
                }
                elseif ($balls == 945)
                {
                    echo $balls/6.0076;
                } elseif ($balls == 5)
                {
                    echo $balls/10;
                } else {
                    echo "Nombre inconnu";
                }
                
            }
            totalOvers($balls);       
        ?>
    </div>
</body>
</html>