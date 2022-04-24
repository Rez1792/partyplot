<?php

    if(!isset($_COOKIE["email"])) {
        header("location:login.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <link href="css/book.css" rel="stylesheet">

</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li> -->
            </ul>
            
            <div class="btn-group">
                <button type="button" style="background-color: white; color: black;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php print $_COOKIE["username"] ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">My Profile</button>
                <!-- <button class="dropdown-item" type="button">Another action</button> -->
                <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
            </div>
        </nav>



        <!-- ................................form starts from here..................................... -->


        <div class="form-con">
        
            <form action="dateinquiry.php" novalidate>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="phone">Phone No.</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone No.">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="addr">Address</label>
                    <input type="text" class="form-control" id="addr" placeholder="1234 Main St">
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="guest">Number of Guest</label>
                    <input type="number" class="form-control" id="guest" name="guest" placeholder="Guest">
                    </div>
                </div>


                <div class="form-group">
                    <label for="services">Services you want to add</label>

                    <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="" id="deco">
                                <label class="form-check-label" for="deco">
                                    Decoration (Theme)
                                </label>
                            </div>

                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="" id="food">
                                <label class="form-check-label" for="food">
                                    Food Catering
                                </label>
                            </div>


                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="" id="wed" checked>
                                <label class="form-check-label" for="wed">
                                    Wedding Planner
                                </label>
                            </div>


                    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <select id="city" name="city" class="form-control">
                        <option>--select--</option>
                        <option value="ahm">Ahmedabad</option>
                        <option value="meh">Mehsana</option>
                        <option value="vad">Vadodara</option>
                        <option value="sur">Surat</option>
                    </select>
                    </div>
                    
                </div>
                <!-- <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        
                    </label>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary">Check me out</button>
                </form>

            </div>

    </body>
</html>