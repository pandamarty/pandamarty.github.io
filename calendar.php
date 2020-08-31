<?php
try {
    $db = new mysqli('localhost', 'root', '', 'tattooshop');
} catch (Exception $e) {
    echo $e->getTraceAsString();
}

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $is_inserted = $db->query("INSERT INTO `clients`(`name`, `email`) VALUES ('$name', '$email')");

    if ($is_inserted) {
        $msg = "Thanks for contacting us!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <img src="img/logo-wh.png" class="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tattooers.php">Tattooers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendar.php">Book <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <iframe class="calendar" src="https://calendar.google.com/calendar/embed?height=425&amp;wkst=2&amp;bgcolor=%23616161&amp;ctz=Europe%2FRome&amp;src=YnZxYmwwN2FyaHVoNGU1cnZsZDhhcGdhcWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%233F51B5&amp;showPrint=0&amp;showTitle=0" style="border:solid 1px #777" width="750" height="425" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="row">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Request an appointment</h2>
                <p class="text-center w-responsive mx-auto mb-5">Please do not hesitate to contact us to request an appointment. Our team will come back to you within
                    a matter of hours to help you.</p>

                <div class="row">
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Your name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Your email</label>
                                        <input type="text" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-dark" value="Send">
                        </form>
                        <br>
                    </div>
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>Bolzano, BZ 39100</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 39 339 340 667</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>book@blackmamba.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2020- Black Mamba Tattoo Studio</p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>