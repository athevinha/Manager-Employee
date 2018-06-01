<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Registration.php">
    <link rel="stylesheet" href="Css/SignIn.css">
    <title>Document</title>
</head>
<body>
    <?php  include "text.php";?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="text-align: center;">
    <div class="test" style="position:relative;top:100px;">
    Accounts :  <input type="text" placeholder="Email" name="Account" style="text-align: center;"></input>
                <br>
                PassWord:  <input type"password" placeholder="Password" name="PassWord" style="text-align: center;" ></input>
                <br>
                <input type="submit" class="btn btn-primary"></input>
    </div>

    </form>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $data="myas";
    $last_id;
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$data);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")    
    {
        $name = $_POST['Account']; 
        $pass=$_POST['PassWord'];
    if (empty($name)) {
        echo "<h4>Name is empty<h4>";
    } else {
        $s="SELECT id FROM account";
        $result=$conn->query($s);
            while($row = $result->fetch_assoc()) {
               $test="SELECT Accounts,PassWords FROM account WHERE id=$row[id]";
               $results=$conn->query($test);
               while($rows = $results->fetch_assoc()){
                   if($name == $rows['Accounts']){
                       $name="";
                       if($pass==$rows['PassWords']){
                           $pass="";
                           $ga='location.href="Home.php"';
                           echo "<button onclick= $ga  class='btn btn-primary' style='position:relative;top:500px; text-align: center;'>John</button>";
                       }
                       
                   }
               }
            }
           
    }
    }
    ?>

</body>
</html>