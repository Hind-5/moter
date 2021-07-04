<?php
  $db_port = 3306;
  $connection = mysqli_connect('localhost', 'root', '', 'hind_moter');

  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  
$moter1 = $_POST['moter1'];
$moter2 = $_POST['moter2'];
$moter3 = $_POST['moter3'];
$moter4 = $_POST['moter4'];
$moter5 = $_POST['moter5'];
$moter6 = $_POST['moter6'];


if(isset($_POST['save'])){

    $my_query = "INSERT INTO table1(moter1, moter2, moter3, moter4, moter5, moter6) VALUES ('$moter1','$moter2','$moter3','$moter4','$moter5','$moter6')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past 1<br>";
    }
}else if(isset($_POST['on'])) {
    $my_query = "Update state set state= 1";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past 2<br>";
    }
}else if(isset($_POST['off'])) {
    $my_query = "Update state set state= 0";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past 3<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hind Motors WEBSITE!</title>
    
   <link rel="stylesheet" href="style.css">   

</head>

<body>
    <div class = "slideContainer">
    <h1>Hind Motors</h1>
        <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
        <form id="myForm" action="" method = "POST">
         <!--Motor1-->
        <h3>Motor1</h3>
        <div class = "motor1">
        <input type="range" min = "0" max = "180" value="0" id = "myRange1" class = "slider" name = "moter1">
        <p>Value: <span id = "value1"></span></p>
        </div>
        <br>
        <!--Motor2-->
        <h3>Motor2</h3>
        <div class = "motor2">
        <input type="range" min = "0" max = "180" value="0" id = "myRange2" class = "slider" name = "moter2">
        <p>Value: <span id = "value2"></span></p>
</div>
        <br>
        <!--Motor3-->
        <h3>Motor3</h3>
        <div class = "motor3">
        <input type="range" min = "0" max = "180" value="0" id = "myRange3" class = "slider" name = "moter3">
        <p>Value: <span id = "value3"></span></p>
        </div>
        <br>
        <!--Motor4-->
        <h3>Motor4</h3>
        <div class = "motor4">
        <input type="range" min = "0" max = "180" value="0" id = "myRange4" class = "slider" name = "moter4">
        <p>Value: <span id = "value4"></span></p>
        </div>
        <br>
        <!--Motor5-->
        <h3>Motor5</h3>
        <div class = "motor5">
        <input type="range" min = "0" max = "180" value="0" id = "myRange5" class = "slider" name = "moter5">
        <p>Value: <span id = "value5"></span></p>
        </div>
        <br>
        <!--Motor6-->
        <h3>Motor6</h3>
        <div class = "motor6">
        <input type="range" min = "0" max = "180" value="0" id = "myRange6" class = "slider" name = "moter6">
        <p>Value: <span id = "value6"></span></p>
        </div>
        <input type="submit" value = "Save" name = save  style="font-size: 20px; background: pink; border-radius: 60px;" > 
        <input type="submit" value = "ON" name = on  style="font-size: 20px; background: pink; border-radius: 50px;" >
        <input type="submit" value = "OFF" name = off  style="font-size: 20px; background: pink; border-radius: 50px;" >
        </form>
    </div>
</body>
<script src="main.js"></script>
</html>