<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "../server/BDconection.php";
    $set = conection();

    $sql = "select * from produto";
    $result = $set->query($sql);

    while($line = $result->fetch(PDO::FETCH_ASSOC)){
        echo $line['prod_nm'];
    }
    
    ?>
</body>
</html>