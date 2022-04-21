<?php
 session_start();
// echo $_SESSION['name']="diu";

if(isset($_POST['log'])){
$name= $_POST['f_name'];
$pass= $_POST['f_pass'];

define('nam','diu');
define('pas','123');

if($name==nam && $pass==pas){
   $_SESSION['success']='';
   
    header('location: admin.php');
    
}

else{
    header('location: index.php');
}
}


?>

<html>
    <head>
        <title>LOG IN FORM </title>
</head>
<body>

<form method="POST">
    <input type="text" name="f_name"  placeholder="Enter your name"><br><br>
    <input type="password" name="f_pass"  placeholder="Enter your password"><br><br>
    <input type="submit" name="log" value="log in">
</form>


</body>

</html>