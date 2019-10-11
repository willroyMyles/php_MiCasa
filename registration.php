<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Case</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include("partials/navbar.php");

$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
if(strpos($url, '?') !== false){
    if(strcmp($_GET["reg"],"empty")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> You should check in on some of those fields below. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["reg"],"email")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Email in the incorrect format. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["reg"],"phone")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Phone number is in an incorrect format. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["reg"],"mismatch")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Password mismatch. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["reg"],"success")==0){
        echo "<div class='container'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Finally!</strong> Good to go!. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["reg"],"failed")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> You should check in on some of those fields below. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    exit();
    }
}
    ?>

<br>
    <div class="container">


        <div class="row justify-content-center">
            <img src="image/logo.png" alt="logo">
        </div><br>
        <div class="row justify-content-center text-muted">
            <h2><i class="fa fa-user-plus" aria-hidden="true"></i> Sign up with MiCasa</h2>
        </div>
        
    </div>
    <div class="container my-3 ">
            <div class="row">
                <div class="col-md-6 offset-3 justify-content-center login-cont">
                    <form name="form" method="post" action="validation/regisvalidate.php">
                        <div class="form-group">
                        <div class="row my-2">
                                
                        <div class="col-sm-6 p-0 pr-1">
                                <label for="username" class="my-1 mx-1 text-muted">name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                                </div>
                                
                                <div class="col-sm-6 p-0 pl-1">
                                <label for="username" class="my-1 mx-1 text-muted">Username</label>
                                <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>

                            <div class="row my-2">
                                <label for="username" class="my-1 mx-1 text-muted">Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>

                            <div class="row my-2">
                                <label for="username" class="my-1 mx-1 text-muted">Phone Number</label>
                                <input type="phone" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-text text-muted"></small>
                            </div>
                          

                         

                            <div class="row my-2">
                                <label for="password" class="my-1 mx-1 text-muted">Password</label>
                                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="row my-2">
                                <label for="password" class="my-1 mx-1 text-muted">Confirm Password</label>
                                <input type="password" class="form-control" name="password2" id="password2" aria-describedby="helpId" placeholder="">
                            </div>

                            <br>
                            <div class="row justify-content-center center">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
    </div>
    <?php include("partials/footer.php");
    ?>
</body>
</html>