<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css/SignIn.css">

    <title>Document</title>
</head>
<body>
    <?php include "text.php" ?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="text-align: center;">
     <div class="test" style="position:relative;top:100px;">
     Accounts :  <input type="text" placeholder="Email" name="Accounts" style="text-align: center;"></input>
                <br>
                PassWord:  <input type"password" placeholder="Password" name="PassWords" style="text-align: center;" ></input>
                <br>
        Re_PassWord:<input type"password" placeholder="Re_Password" name="RePassWords" style="text-align: center;"></input>
                <br>
                <input type="submit" class="btn btn-primary"></input>
     </div>
      
    </form>
    <?php
    $last_id="";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $mydb="myas";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$mydb);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    //=============================
    if($_SERVER["REQUEST_METHOD"] == "POST")    
    {
        $Name = $_POST['Accounts']; 
        $Password= $_POST['PassWords'];
        $RePassword=$_POST['RePassWords'];
    if (empty($Name)) {
        echo "<h4>Name or Password is empty<h4>";
    } else {
        if($Password==$RePassword){
            $str="INSERT INTO account(Accounts,PassWords)
                  VALUES('$Name','$Password')";
            if($conn->query($str)===true){
                echo "Successfully!!!";
                $last_id = $conn->insert_id;
            }
            else {
                echo "Error: " . $str . "<br>" . $conn->error;
            }
        }
    }
    }
   
    ?>
</body>
</html>