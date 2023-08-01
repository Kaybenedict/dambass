<?php 
// Use session_start() function start a session in order to help the browser work propertly
// Use include() function to import the db module
// Get the values of username and password inputted 
session_start();
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];
 //prepairing an sql query that will  get record from the db if the username entered is correct
//use mysqli_query() function to send our query into the db
//we need the result to proceed 
$sql="select * from `admin` where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $data=mysqli_fetch_array($result);
    $username = $data['username'];
    $name = $data['name'];
    // We need to fetch data from the database
    // Use password_verify () function to authenticate the the password inputted and 
    // the one on the database
    // use $_SESSION to select the id and the category of the use from the db
    
    //if(password_verify($password, $data['password'])){
    $_SESSION['id'] = $data['id'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['username'] = $data['username'];
    echo '<script>
        window.location="sidebar.php";
    </script>';
    }

    
   
else{
    echo '<script>
        alert("Invalid Credentials");
        window.location="index.php";
    </script>';
}


?>