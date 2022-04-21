<?php
    session_start();
    if(!isset($_SESSION['success'])){

        header('location: index.php');
        
    }
    // echo "This is admin page";
   
    if(isset($_POST['logout'])){
        header('location: index.php');
        
    }


?>  


<html>
    <head>
        <title>Log out form </title>
    </head>
    <body>
        <form method="POST">
            
             <input type="submit" value="Log out" name="logout">
        </form>
    </body>

</html>