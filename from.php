<?php
include_once('./backEND/backEND/connect.php');
$conn = new DB_con();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css" media="screen">
</head>
<body>
    <div class = container> 
    <?php
            $sql = $conn->fetchdata();
            while ($row = mysqli_fetch_array($sql)) {

            ?>

    <figure>
        <h1><?php echo $row['newsName1']; ?></h1>
        <h1><?php echo $row['NewsMsg1']; ?></h1>
    </figure>
    
    <?php } ?>
    </div>


</body>
</html>