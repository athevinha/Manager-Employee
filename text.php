<header class="Title">
        <div class="ground">
               <ul>
                   <li id="Difer"><img src="images/logo.png" alt="" srcset=""></li>
                <li onclick='location.href="Home.html"'><a href="Home.php">HOME</a></li>
                   <li onclick='location.href="SignIn.php"'><a href="SignIn.php">SIGN IN</a></li>
                   <li onclick='location.href="Manager.php"'><a href="Manager.php">MANAGER EMPLOYEE</a></li>
                   <li onclick='location.href="Registration.php"'><a href="Registration.php">REGISTRATION</a></li>
               </ul>
        </div>
    </header>
    <style>
    header{
        
    }
    
ul{
    list-style: none;
    padding: 0px;
    margin: 0px;
    width: 100%;
    height: 100%;
  
}

ul li{
    float: left;
    padding: 0px 0%;
    position: relative;
    left: 10%;
    top: 5%;
    height: 70%;
    background: rgb(46, 43, 43);
    text-align: center;
    border: 5px solid rgb(46, 43, 43);
    transition: 0.4s;
    cursor: pointer;
}
a:hover{
    color: white;
}
li:hover{
    padding: 20px 0 0 0 ;
    background:rgb(46, 45, 100);
}
#Difer{
    background:rgb(46, 43, 43);
    left: 5% !important;
    width: 15%;
    text-align: center;
    height: 70%;
    animation: fucking;
    animation-iteration-count: infinite;
}
a{
    color: rgb(255, 255, 255);
    font-family: Arial, Helvetica, sans-serif;
    font-size:15px;     
    padding: 0 30px;
}
header{
    background: rgb(46, 43, 43);
    width: 100%;
    height: 100px;
    position:fixed;
    z-index:9;
    top:0px;
}
.ground{
    width: 100%;
    height: 100%;
}
    </style>