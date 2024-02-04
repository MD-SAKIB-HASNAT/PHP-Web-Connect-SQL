<?php
include("connection.php");
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->
      <link rel="stylesheet" href="style.css">
     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
    </head>
   <body>
        <div class="content">
            <div class="text">
                Create Account
            </div>
            <form action="#" method="POST">
                <div class="field">
                <input type="text" required name="eml">
                <span class="fas fa-user"></span>
                <label>Email or Phone</label>
                </div>
                <div class="field">
                <input type="text" required name="pass">
                <span class="fas fa-lock"></span>
                <label>Password</label>
                </div>
               <input type="submit"  value="Create" class="button" name="btn">

            </form>
            <form action="sec.php" method="POST">
                 <input type="submit" value=" Know Your Password by your Email " name="np">
            </form>
           
        </div>
   </body>
</html>

<?php
    
    if( $_POST['btn']){
        $Email= $_POST['eml'];
        $Pass= $_POST['pass'];
        $query = "INSERT INTO login Values('$Email','$Pass')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "New record created successfully<br><br>";
        }
        else {
            echo "New record created Failed :( <br> ";
        }
    }

   

?>