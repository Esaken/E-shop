
<?php
   $mysqli = new mysqli("localhost", "root", "", "mystore");
   $con = mysqli_connect('localhost', 'root', '', 'mystore');
 
if($con == True){
    echo "Connection Successful";
}else{
    die(mysqli_error($con));
}

if(isset($_POST['signin'])){

    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO user_data(username,email,password) VALUES('$username','$email','$password')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());


        if($run){
            echo "form submitted successfully";
        }else{
            echo "form not submitted";
        }
    

}else{
    echo "all fields required";
}

}


?> 