<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
    <title>Ergebnis</title>
</head>
<body>
<?php
$points = $_POST['points'];
?>
<p><?php echo "Du hast " . $points. " Punkte erreicht." ?>;</p>

<?php 


if(!isset($_POST['name'])){

    ?>
    <form action="result.php" method="POST">
    <input type="text" name="name" id="name" />
    <button name="submit" id="submit" type="submit" onclick="">Submit</button> 
    <input type="hidden" id="result" name="result" value="<?php echo $result ?>">
    <input type="hidden" id="points" name="points" value="<?php echo $points ?>">
    <input type="hidden" id="level" name="level" value="<?php echo $level ?>">
    </form>

    
    
    
<?php
}
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $pointsresult = $_POST['points'];

    include "connection.php";


   

        $sql = "INSERT INTO highscore (names, punkte)
        VALUES('$name','$pointsresult')";

        $stmt = $pdo->query($sql);
        
        $sql = "SELECT * From highscore 
                ORDER BY punkte DESC";

        $stmt = $pdo->query($sql);


    $bestenliste = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
    
    
    
    
    
    
    
    
    ?>

<table>
    <tr>
        <th>Name</th>
        <th>Punkte</th>
        <th>Zeitstempel</th>
     
           
    </tr>
    <?php

foreach ($bestenliste as $beste) {
    ?>
            <tr>
                <td><?php echo $beste['names']; ?></td>
                <td><?php echo $beste['punkte']; ?></td>
                <td><?php echo $beste['datum']; ?></td>
                
            </tr>
            <?php } ?>
        
        </table>
        
    </body>
    </html>
  
    

 <a href="index.php">Zurück zum Start</a>
    <?php
}





die();
?>
