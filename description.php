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

    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (strpos($url, '?') !== false) {
        if (strcmp($_GET["desc"], "empty") == 0) {
            echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> You should check in on some of those fields below. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
        }
        if (strcmp($_GET["desc"], "price/parish") == 0) {
            echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> price or parish not in the correct format. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
        }

        if (strcmp($_GET["desc"], "failed") == 0) {
            echo "<div class='container'>
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
       <strong>Holy guacamole!</strong> Illegal activity. 
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
            exit();
        }
        if (strcmp($_GET["desc"], "success") == 0) {
            echo "<div class='container'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Yay!</strong> Successful. 
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
            <img src="image/logo.png" alt="logo">
        </div><br>
        <div class="row justify-content-center text-muted">
            <h2> <i class="fa fa-list-alt" aria-hidden="true"></i> Add Description with MiCasa</h2>
        </div>
    </div>
    <div class="container my-5 ">
        <div class="row">
            <div class="col-md-6 offset-3 justify-content-center login-cont">
                <form method="post" action="validation/descvalidate.php">
                    <div class="form-group">

                        <div class="row">
                            <div class="col-md-6 p-0 pr-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="my-addon"><i class="fas fa-home "></i></span>
                                    </div>
                                    <select name="prop" id="" class="from-control browser-default custom-select">
                                        <option value="" disabled selected>
                                            <p class="text-muted grey-text">Property Type</p>
                                        </option>
                                        <option value="Vacant Lot">Vacant Lot</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 p-0 pl-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="my-addon"><i class="fas fa-warehouse"></i></span>
                                    </div>
                                    <select name="build" id="" class="from-control browser-default custom-select">
                                        <option value="" disabled selected>
                                            <p class="text-muted grey-text">Building Type</p>
                                        </option>
                                        <option value="Housing">Housing</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Town House">Town House</option>
                                        <option value="Office Space">Office Space</option>
                                    </select>
                                </div>
                            </div>



                        </div>




                        <div class="row my-4">
                            <div class="col-md-6 p-0 pr-2">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text" id="my-addon"><i class="fas fa-bed    "></i></span>
                                   </div>
                                   <select name="bed" id="bed" class="from-control browser-default custom-select">
                                    <option value="" disabled selected>
                                        <p class="text-muted grey-text"># of bedrooms</p>
                                    </option>
                                    <?php
                                    for ($i = 0; $i < 100; $i++) echo '<option value="' . $i . '">' . $i . '</option>';
                                    ?>
                                </select>                               </div>
                            </div>
                            <div class="col-md-6 p-0 pl-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="my-addon"><i class="fas fa-bath    "></i></span>
                                    </div>
                                    <select name="bath" id="bath" class="from-control browser-default custom-select">
                                    <option value="" disabled selected>
                                        <p class="text-muted grey-text"># of bathrooms</p>
                                    </option>
                                    <?php
                                    for ($i = 0; $i < 100; $i++) echo '<option value="' . $i . '">' . $i . '</option>';
                                    ?>
                                </select>                                </div>
                            </div>
                        </div>




                        <div class="row my-2">
                       <div class="col-md-6 p-0 pr-2">
                       <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="my-addon"><i class="fas fa-comment-dollar    "></i></span>
                            </div>
                            <select name="list" id="" class="from-control browser-default custom-select">
                                <option value="" disabled selected>
                                    <p class="text-muted grey-text">Listing Type</p>
                                </option>
                                <option value="Rent">Rent</option>
                                <option value="Purchase">Purchase</option>
                                <option value="Lease">Lease</option>
                            </select>
                        </div>
                       </div>
                       <div class="col-md-6 p-0 pl-2">
                           <div class="input-group">
                               <div class="input-group-prepend">
                                   <span class="input-group-text" id="my-addon"><i class="fas fa-expand    "></i></span>
                               </div>
                               <input type="number" step="1" class="form-control" name="land" id="land" aria-describedby="helpId" placeholder="Size of land">
                           </div>
                       </div>
                        </div>

                       

                        <div class="row my-4">
                            <div class="col-md-6 p-0 pr-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="my-addon"><i class="fas fa-dollar-sign    "></i></span>
                                    </div>
                                    <input type="number" step="1" class="form-control" min="0" name="price" id="sa2" aria-describedby="helpId" placeholder="Price">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row p-0">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">SUBMIT</button>

                        </div>
                    </div>



            </div>
            </form>
        </div>
    </div>
    </div>

    <?php include("partials/footer.php");
    ?>

    <script>
        $(document).ready(function() {
            // $('.mdb-select').formSelect();    
        });
    </script>

</body>

</html>