<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css/Manager.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="post">
 <br>
 <h1>Creat class</h1>
    <input type="Name" value="" name="NameClass" placeholder="Name">
    <br>
    <input type="ClassNumber" value="" name="NumberClass" placeholder="NumberClass">
    <br>
    <input type="submit" value="Submit" name="submit" >



    <br>
    <br>
    <h1>Creat Employee</h1>
    <input type="NameE" value="" name="NameE" placeholder="Name">
    <br>
    <input type="Age" value="" name="AgeE"  placeholder="Age">
    <br>
    <input type="ClassE" value="" name="NumberE" placeholder="Class">
    <br>
    <input type="submit" value="Submit" name="submitE">
<br>

<h1>Seach Employee</h1>
<input type="text" value="" name="SearchInput">
     </form> 





<?php include "text.php";?> 
<?php



    $servername = "localhost";
    $username = "root";
    $password = "";
    $data="myas";
    // Create connection
   $conn = mysqli_connect($servername, $username, $password,$data);
 
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $Creat="CREATE TABLE SuperClass(
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       Names VARCHAR(100),
       ClassNumber VARCHAR(60)
    )";
    $CreatS="CREATE TABLE employee(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Names VARCHAR(100),
        Age VARCHAR(60),
        Email VARCHAR(50)
     )";

    if($conn->query($Creat)==true)
{    
    
}
if($conn->query($CreatS)==true)
{    
    
}



class SuperClass{
     protected $arrayIE = array();  
     protected $arrayE = array();
     protected $id="";
     protected $Name="";
     protected $ClassNumber="";

      public function ShowClass()
     {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $data="myas";
        // Create connection
       $conn = mysqli_connect($servername, $username, $password,$data);
         $select="SELECT * FROM superclass";
         $result=$conn->query($select);
         if($result->num_rows > 0 ){
              echo "<table>
             <tr>
             <th>id</th>
             <th>Sucject</th>
             <th>ClassNumber</th>
             </tr>";
             while($row=$result->fetch_assoc()){
                 echo "
                 <tr>
                 <td>".$row["id"]."</td>
                 <td>".$row["Subjects"]."</td>
                 <td>".$row["ClassNumber"]."</td>
                 </tr>
                 ";
             }
             echo "</table>";
         }
         # code...

     }


     public function ShowEm()
     {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $data="myas";
        // Create connection
       $conn = mysqli_connect($servername, $username, $password,$data);
       $data=$_POST["SearchInput"];
   
   if(empty($data)){
    $select="SELECT * FROM employee ";
   }
   else{
    $select="SELECT * FROM employee WHERE Names='$data'";
   }
         $result=$conn->query($select);
         if($result->num_rows > 0 ){
                echo"<br><br>";
            echo "<table>
            <tr>
            <th>id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Class</th>
            </tr>";
            while($row=$result->fetch_assoc()){
                echo "
                <tr>
                <td>".$row["id"]."</td>
                <td>".$row["Names"]."</td>
                <td>".$row["Age"]."</td>
                <td>".$row["Class"]."</td>
                </tr>
                ";
            }
            echo "</table>";
         # code...

     }
    }
     //=================================================================================================
     public function Creatclass(){
     
     
        
        $new= new SuperClass();
        $ids="";
        $Names="";
        $ClassNumbers="";
        if(empty($_POST["NameClass"])){
          echo "input is empyty";
        }
        else{
          if(empty($_POST["NumberClass"])){
               
          }
          else{
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $Names =$_POST["NameClass"];
                $ClassNumbers=$_POST["NumberClass"];
            }
            $insert="INSERT INTO superclass (Subjects,ClassNumber) VALUE ('$Names','$ClassNumbers');";
            $servername = "localhost";
       $username = "root";
       $password = "";
       $data="myas";
       // Create connection
      $conn = mysqli_connect($servername, $username, $password,$data); 
    
          if($conn->query($insert)===true){
              echo "Add Successful";
          }
          else{
              echo "nguasd";
          }
            
          }
        }

      
     }
//creat class
     //manager
     public function classs($ids,$Names,$ClassNumbers){
        $id=$ids;
        $Name=$Names;
        $ClassNumber=$ClassNumbers;

        
     }
     public function getId(){
         return $id;
     }
     public function getName(){
        return $Name;
    }
    public function getNumber(){
        return $ClassNumber;
    }
    //==============================================================================================
    public function addE(){
        $_POST["submitE"]=null; 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $data="myas";
        // Create connection
       $conn = mysqli_connect($servername, $username, $password,$data);
       if(!$conn){
           echo "nguss";
       }
     if(empty($_POST["NameE"])){
         echo "ngusd";
     }
     else{
        if($_SERVER["REQUEST_METHOD"]=="POST"){
           $Names=$_POST["NumberE"];
           }
        $check=null;
               $select="SELECT * FROM superclass";
               $result=$conn->query($select);
               if($result->num_rows > 0 ){
                   while($row=$result->fetch_assoc()){
                 
                       if($Names==$row["Subjects"]){
                      $check="1";
                       }
                    
                   }
                  
                   
               }
        
              if($check=="1"){
               if($_SERVER["REQUEST_METHOD"]=="POST"){
                $Ages=$_POST["AgeE"];
                $class=$_POST["NameE"];
               }
                $insert="INSERT INTO employee (Names,Age,Class) VALUE ('$Names','$Ages','$class');";
                if($conn->query($insert)===true){
                    echo "Add Successful";
                }
                else{
                    echo "ngu";
                }
              }
              else{
                  echo "not have class in this Schooll";    
              }
     }
    }
    public function setId($ids){
        $id=$ids;
    }
    public function setName($Names){
       $Name=$Names;
   }
   public function setNumber($Number){
     $ClassNumber=$Number;
   }

 }    

 class Employee extends SuperClass{
 
   private $idE;
   private $NameE;
   private $AgesE;
   private $EmailsE;
     
        public function getIdE(){
            return $idE;
        }
        public function getNameE(){
           return $NameE;
       }
       public function getAgeE(){
           return $ClassNumberE;
       }
   
       public function setIdE($ids){
           $idE=$ids;
       }
       public function setNameE($Names){
          $NameE=$Names;
      }
      public function setAgeE($Number){
        $AgeE=$Number;
      }

 }
  $new = new SuperClass();
if(isset($_POST["submit"])){
    $new->Creatclass();
}
$new->ShowClass();
$new->ShowEm();
$_POST["submit"]=null; 

if(isset($_POST["submitE"])){
    $new->addE();
}
?>
<Script src="Jquery/Manager.js">

</Script>
<style>
   table{
       width: 500px;
      }
   table,th,tr,td{
       transition: 0.4s;
       border: 2px solid white;
   }
 form{
     position:relative;
     top:100px;

 }
</style>
</body>
</html>