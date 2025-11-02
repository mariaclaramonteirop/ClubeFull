<?php require"../app/functions/pages.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js">
</head>
<body>
    <div class="container">

        <?php
        try{
            require load();
        }catch(Exception $e){
            echo $e->getMessage();
        }

        ?>

    </div>

</body>
</html>