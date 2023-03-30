<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Name=$_POST['Name'];
    $PhoneNo=$_POST['PhoneNo'];
    $Email=$_POST['Email'];

    $servername="localhost";
    $username="root";
    $password="";
    $database="agrawal";

    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("sorry we failed to connect!");
    }
    else{
        $sql="INSERT INTO `Signup` (`Name`, `PhoneNo`, `Email`) VALUES ('$Name ', '$PhoneNo', '$Email');";
        $result=mysqli_query($conn,$sql);

        
    }

    

}
?>
   
    <div class="box">
    <form action="/TUNNELFURY/front.html" method="post">
        <div class="form">
            <h2> Sign Up</h2>
            <div class="inputBox">
                <input type="text" name="Name" required="required">
                <span>Name</span>
                <i></i>
            </div>
           
            <div class="inputBox">
                <input type="text" name="PhoneNo" required="required">
                <span>PhoneNo</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="text"  name="Email" required="required">
                <span>Email</span>
                <i></i>
            </div>
            <input type="submit" value="Register"> 
           
        </div>
        
        </form>
    </div>

</body>
</html>
