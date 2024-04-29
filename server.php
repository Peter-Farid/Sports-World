<?php
if(!isset($_SESSION)){
    session_start();} 
$error=array();
//connect to database
$db=mysqli_connect('localhost','root','','iaproject5');
//if user clicked the button
if(isset($_POST['signUp'])){
$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$pass=mysqli_real_escape_string($db,$_POST['pass']);
$confirmPass=mysqli_real_escape_string($db,$_POST['confirmPass']);
if(empty($username)){
    array_push($error,"Username is required");
}
if(empty($email)){
    array_push($error,"Email is required");
}
if(empty($phone)){
    array_push($error,"Phone Number is required");
}
if(empty($pass)){
    array_push($error,"Password is required");
}
if(empty($confirmPass)){
    array_push($error,"Confirm password is required");
}
if($pass!=$confirmPass){
    array_push($error,"Passwords do not match");
}
if(count($error)==0){
//insert into database
$sql="INSERT INTO users(username,email,phone,password) Values('$username','$email','$phone','$pass')";
mysqli_query($db,$sql);
$_SESSION['username']=$username;
$_SESSION['success']=" Welcome you are logged in";
//redirect user to homepage
header('location:index.php');
}
}
//login
if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $pass=mysqli_real_escape_string($db,$_POST['pass']);
    if(empty($username)){
        array_push($error,"Username is required");
    }
    if(empty($pass)){
        array_push($error,"Password is required");
    }
    if(count($error)==0){
    $query="SELECT * FROM users WHERE username='$username' AND password='$pass'";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username']=$username;
        $_SESSION['success']=" Welcome you are logged in";
        //redirect user to homepage
        header('location:index.php');}
    }
}
//logout
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}
//Delete Product
