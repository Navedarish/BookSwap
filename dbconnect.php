<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "iem project";

$conn = mysqli_connect($server , $user , $password , $db);
if(!$conn)
{
    ?>
    
      <script>
      alert("Your Connection is not successful");
      </script>
<?php
}


?>