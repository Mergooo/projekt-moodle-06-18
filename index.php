<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
  <title>Mathespiel</title>



</head>
<body>



<?php



if(isset($_Post['level'])){
 
    $level = $_Post['level'];

}

if(empty($level)){
    $level = 1;
    $points = 0;
    
}
include "mathGame.php";

?>

  <h1>Mathespiel</h1>
  
  <p><?php echo "$number1". "+"."$number2";  ?> </p>
  <form action="index.php" method="POST">
    <input type="text" name="inputField" id="inputField" />
    <button name="submit" id="submit" type="submit" onclick="">Submit</button>
    <input type="hidden" id="result" name="result" value="<?php echo $result ?>">
    <input type="hidden" id="points" name="points" value="<?php echo $points ?>">
    <input type="hidden" id="level" name="level" value="<?php echo $level ?>">
  </form>
  
  <p name="output" id="output"></p>
</body>
</html>