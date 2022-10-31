<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-UP form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- Font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="../css/sign.css">



  </head>

  <body>
    
<style>

html,body {
  background-image: url("../images/night-sky.png");
  background-repeat: no-repeat;
  height: 100%;
}

.container{
    text-align: center;
                height: 200px;
                width : 400px;
                display: table-cell;
                vertical-align: middle;
                display: inline-block;
               
    
    
    
}
.card {
    width: 400px;
    height: 350px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
 }


</style>

<div class="container align-center">
    <div class="card">
        <!-- card header -->
        <div class="card-header d-flex align-items-center justify-content-center">
            <h3 class="text-center">Sign Up</h3>
        </div>
        <!-- CARD-BODY -->
        <div class="card-body">
            <form action="">
                <!-- field 1 -->
                <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter your Username" required autocomplete="off" name="username" >
                    <label for="floatingInputGroup1">Username</label>
                </div>
        </div>

                <!-- field 2 -->

                <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInput" placeholder="Enter your Password" required autocomplete="off" name="password" aria-label="password">
                    <label for="floatingInputGroup1">Password</label>
                </div>
        </div>

                <!-- field 3 -->
                
                <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingInput" placeholder="Confirm your Password" required autocomplete="off" name="confirm_password" aria-label="confirm_password">
                    <label for="floatingInputGroup1">Confirm Password</label>
                </div>
        </div>

                <!-- field 4 -->
                <div class="form-group">
                    <input class="w-100 btn btn-lg btn-primary" type="submit" name="register" value="Sign up">
                </div>

            </form>

        </div>


        <!-- card-footer -->
        <div class="card-footer text-center text-white-50">
        <p>Already have an account?<a href="./sign-in.php" class="">Sign in</a></p>
        
        </div>

        <p class="mt-5 mb-3 text-muted text-white">&copy; Esau-2022</p>


    </div>
</div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>