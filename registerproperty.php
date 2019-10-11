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
        if (isset($_GET["reg"])) {
            echo "<div class='container'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Wonderful!</strong> Registraion file initialized.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
        }
        if (isset($_GET["loc"])) {
            echo "<div class='container'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Great!</strong> Location file written.
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div></div>";
        }
        if (isset($_GET["desc"])) {
            echo "<div class='container'>
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
       <strong>Bien!</strong> Description file created.
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
            <h2> <i class="fa fa-file-alt"></i> Summary Page</h2>
        </div>
    </div>
<form action="generate/generate.php" method="post">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-muted">
                        Registration Information
                    </div>
                    <div class="card-body">
                        <div class="text-warning">
                            <?php

                            $gen = false;

                            if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
                                $user = $_SESSION["user"];
                                echo '<div class="row"> Name: ' . $user->name . '</div>';
                                echo '<div class="row">Username: ' . $user->username . '</div>';
                                echo '<div class="row">Email: ' . $user->email . '</div>';
                                echo '<div class="row">Phone: ' . $user->phone . '</div>';

                                $gen = true;
                            } else {
                                echo '<a href="registration.php">Registration Needed</a>';
                            }
                            ?>
                        </div>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <?php
                        if ($gen)
                            echo "<button name='regGen' class='btn btn-primary btn-block'> Generate File</button>";
                        ?>
                    </div>
                </div>
            </div>

            <!-- second box  location -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-muted">
                        Location Information
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?php

                            $gen = false;

                            if (isset($_SESSION["location"]) && !empty($_SESSION["location"])) {
                                $loc = $_SESSION["location"];
                                echo '<div class="row"> Address 1: ' . $loc->address1 . '</div>';
                                echo '<div class="row">Address 2: ' . $loc->address2 . '</div>';
                                echo '<div class="row">City: ' . $loc->city . '</div>';
                                echo '<div class="row">Parish: ' . $loc->parish . '</div>';

                                $gen = true;
                            } else {
                                echo '<a href="location.php">Location Needed</a>';
                            }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <?php
                        if ($gen) {
                            echo "<button name='locGen' class='btn btn-primary btn-block'>
                            Generate File
                           </button>";
                        }
                        ?>
                    </div>
                </div>
            </div>


            <!-- third box  description -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-muted">
                        Description Information
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?php

                            $gen = false;
                            if (isset($_SESSION["description"]) && !empty($_SESSION["description"])) {
                                $des = $_SESSION["description"];
                                echo '<div class="row">Proerty: ' . $des->prop . '</div>';
                                echo '<div class="row">Building: ' . $des->build . '</div>';
                                echo '<div class="row">Listing: ' . $des->list . '</div>';
                                echo '<div class="row"># of Beds: ' . $des->bed . '</div>';
                                echo '<div class="row"># of baths: ' . $des->bath . '</div>';
                                echo '<div class="row">Size: ' . $des->size . '</div>';
                                echo '<div class="row">Price: ' . $des->price . '</div>';

                                $gen = true;
                            } else {
                                echo '<a href="description.php">Description Needed</a>';
                            }
                            ?>
                        </p>
                    </div>
                    <div class="card-footer text-muted">
                        <?php
                        if ($gen) {
                            echo "<button name='descGen' class='btn btn-primary btn-block'>
                            Generate File
                           </button>";
                        }
                        ?>
                    </div>
                </div>



            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <button class="btn btn-secondary"> Clear Information</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <?php include("partials/footer.php");
    ?>
</body>

</html>
