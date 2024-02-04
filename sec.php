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
                Search Password
            </div>
            <form action="#" method="POST">
                <div class="field">
                <input type="text" required name="eml">
                <span class="fas fa-user"></span>
                <label>Email or Phone</label>
                </div>
               <input type="submit"  value="Search" class="button" name="btn">
            </form>
            <form action="sec.php" method="POST">
                 <input type="submit" value=" Back to Create Page " name="np">
            </form>
        </div>
   </body>
</html>

<?php
    
    if( $_POST['btn']){
        $Email= $_POST['eml'];
        
        $query = "SELECT * FROM `login`";
        $result= mysqli_query($conn, $query);
    
        
        while($row = mysqli_fetch_array($result)){
            $Demail=$row["email"];
            $Dpass=$row["pass"];
            if($Email==$Demail){
                echo "<br> Your Email is : ". $Demail."<br>";
                echo "<br> Your Password is : ". $Dpass."<br>";
                break;
            }
            
        }
    }

   

?>