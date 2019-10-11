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
    if(strcmp($_GET["loc"],"empty")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> You should check in on some of those fields below. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["loc"],"address")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Need a valid address mate. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["loc"],"cityparish")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Incorrect city or parish format. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
    if(strcmp($_GET["loc"],"failed")==0){
        echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> illegal activity detected. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    exit();
    }
    if(strcmp($_GET["loc"],"success")==0){
        echo "<div class='container'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Posting was successful. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
    }
}
    ?>


<br>
    <div class="container">
        <div class="row justify-content-center">
            <img src="image/logo.png" class="img-fluid" alt="logo">
        </div><br>
        <div class="row justify-content-center text-muted">
            <h2> <i class="fa fa-map-marker" aria-hidden="true"></i> Add Location with MiCasa</h2>
        </div>
    </div>
    <div class="container my-4 ">
            <div class="row">
                <div class="col-md-6 offset-3 justify-content-center login-cont">
                    <form method="post" action="validation/locavalidate.php">
                        <div class="form-group">
                        <div class="row my-2">
                                <label for="username" class="my-1 mx-1 text-muted">Street address 1</label>
                                <input type="text" class="form-control" name="sa1" id="sa1" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="row my-2">
                                <label for="username" class="my-1 mx-1 text-muted">Street address 2</label>
                                <input type="text" class="form-control" name="sa2" id="sa2" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="row my-2">
                                <label for="username" class="my-1 mx-1 text-muted">City</label>
                                <input type="text" class="form-control" name="city" id="city" aria-describedby="helpId" placeholder="">
                            </div>

                            <div class="row my-2">
                                <label for="username" class="my-1 mx-1 text-muted">Parish</label>
                                <input type="text" class="form-control" name="parish" id="parish" aria-describedby="helpId" placeholder="">
                            </div>


                            <br>
                            <div class="row justify-content-center center">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>

                        </div>
                                
                       
                        
                        </div>
                    </form>
                </div>
            </div>
    </div>

    <?php include("partials/footer.php");
    ?>
</body>
</html>