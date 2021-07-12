
<html lang="en" dir="ltr">
   <head>
   <meta charset="utf-8">
   <title>base for robot</title>
   <link rel="stylesheet" href="style2.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <?php
    include ('connect.php');
    
    
    if(isset($_POST["stop"])){
   
        // $query1 ="delete from robot";
         
             $query ="update robot set  stop='s'";
             mysqli_query($conn , $query);
             echo"Post Published SuccessFully";
             
        
         
         }
    if(isset($_POST["back"])){
   
        // $query1 ="delete from robot";
         
             $query ="update robot set  back='b'";
             mysqli_query($conn , $query);
             echo"Post Published SuccessFully";
             
         $query = 'SELECT * FROM motors';
         $result = mysqli_query($conn , $query);
         $row = mysqli_fetch_assoc($result);
         
         }
    if(isset($_POST["left"])){
   
   // $query1 ="delete from robot";
    
        $query ="update robot set  leftv='L'";
        mysqli_query($conn , $query);
        echo"Post Published SuccessFully";
        
    $query = 'SELECT * FROM motors';
    $result = mysqli_query($conn , $query);
    $row = mysqli_fetch_assoc($result);
    
    }
    if(isset($_POST["right"])){
   
        // $query1 ="delete from robot";
         
             $query ="update robot set  rightr='R'";
             mysqli_query($conn , $query);
             echo"Post Published SuccessFully";
             
         $query = 'SELECT * FROM motors';
         $result = mysqli_query($conn , $query);
         $row = mysqli_fetch_assoc($result);
         
         }
         if(isset($_POST["forward"])){
   
            // $query1 ="delete from robot";
             
                 $query ="update robot set  forward='F'";
                 mysqli_query($conn , $query);
                 echo"Post Published SuccessFully";
                 
             $query = 'SELECT * FROM motors';
             $result = mysqli_query($conn , $query);
             $row = mysqli_fetch_assoc($result);
             
             }
    ?>

   <body>
   <div class="center">
    <div class="outercircle">
    <form action="#" method="POST">

      <div class="item item-1">
      <input type="submit" name="left" class="my-button" value="Left"> 
      </div>

      <div class="item item-2">   
              <input type="submit" name="right" class="my-button" value=" Right">
            </div>

      <div class="item item-3">
            <input type="submit" name="forward" class="my-button" value="Forward">
        </div>

  
      <div class="item item-4">
      <input type="submit" name="back" class="my-button" value="back">
         </div>

        <div class="item item-5">
            <input type="submit" name="stop" class="my-button" value="Stop">
        </div>
    
    </form>
    </div>
    </div>

    
    
   </body>
</html>