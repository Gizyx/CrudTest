<?php
    //Initializing
    require_once "php/dbrepo.php";

    
?>
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
        $sql = "SELECT * FROM crud";
        $resultat = $link->query($sql);
        
        echo '<div>';
        while($rad = $resultat->fetch_assoc()) {
            $id = $rad["id"]
            $navn = $rad["navn"];
            $data = $rad["data"]:

            echo '<tr>';
            echo '<tr>';
            echo '<td>'.$id.'</td>';
            echo '<td>'.$navn.'</td>';
                 
            echo '<td>'. $data .'</td>';
            echo "<tr>";
        }
        echo '<div>;'
    ?>
</body>

</html>