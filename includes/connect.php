
<?php
    mysqli_connect("localhost", "root", "", "mystore");
 
    if(mysqli_connect_error())
        echo "Connection Error.";
   
?>