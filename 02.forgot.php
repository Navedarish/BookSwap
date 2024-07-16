<?php 
   require("dbconnect.php");
   require("forgot.php");

   if(isset($_POST['send-reset-link']))
   {
    $query="SELECT * FROM `registration` WHERE `email` = '$_POST[email]'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
    
        if(mysqli_num_rows($result)==1)
        {
            /**email found */
            $reset_token=bin2hex(random_bytes(16));
            date_default_timezone_set('Asia/Kolkata');
            $date=date("Y-m-d");
            $query= "UPDATE `registration` SET `resettoken`='$reset_token',`resettokenexpired`='$date' WHERE `email` = '$_POST[email]'";
            if(mysqli_query($conn,$query))
            {
                echo "
                <script>
                 alert('invalid email');
                window.location.href='login.php';
                </script>";


            }
            else
            {

            }

        }
        else
        {
            echo "<script>
            alert('invalid email');
            window.location.href='login.php';
           </script>";
        }

    }
    else
    {
        echo "<script>
               alert('cannot run query');
               window.location.href='login.php';
              </script>";

    }
    
   }
?>