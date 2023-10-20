<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Animated background -->
    <div id="bg">
        <div class="stars"></div>
        <div class="twinkling"></div>
        <div class="clouds"></div>
    </div>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">About Us</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="linktree.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Introduction -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h1>About Us</h1>
                <hr>
                <p class="lead">We are a company that provides innovative solutions for businesses. Founded in 2023, our mission is to help companies succeed in the digital age. We believe that by leveraging the latest technologies and trends, businesses can thrive and stay competitive in today's market.</p>
            </div>
        </div>
    </div>

    <!-- Animated objects -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="object">
                    <img src="https://via.placeholder.com/150x150" class="img-fluid">
                    <h3>Mission</h3>
                    <p>Our mission is to help businesses succeed in the digital age.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="object">
                    <img src="https://via.placeholder.com/150x150" class="img-fluid">
                    <h3>Vision</h3>
                    <p>Our vision is to be the leading provider of innovative solutions for businesses.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="object">
                    <img src="https://via.placeholder.com/200x200" alt="object" class="img-fluid">
</div>
<h4>Our Vision</h4>
<p>We strive to provide the best web solutions and POS systems to restaurants worldwide, while always staying ahead of the latest technology trends.</p>
</div>
<div class="col-md-4">
<div class="object">
<img src="https://via.placeholder.com/200x200" alt="object" class="img-fluid">
</div>
<h4>Our Team</h4>
<p>Our team is made up of highly skilled and passionate individuals who are dedicated to providing top-notch services to our clients.</p>
</div>
<div class="col-md-4">
<div class="object">
<img src="https://via.placeholder.com/200x200" alt="object" class="img-fluid">
</div>
<h4>Our Mission</h4>
<p>Our mission is to help restaurant owners run their businesses more efficiently and effectively through the use of innovative technology solutions.</p>

</div>
</div>
<div class="container-fluid bg-dark">
<div class="container text-center">
<p class="text-muted">© 2023 Restaurant Tech Solutions. All Rights Reserved.</p>
</div>
</div>

</body>
</html>
<!-- End of Code -->
<!-- Start of Javascript -->
<script>
    $(document).ready(function() {
        // Move the objects on scroll
        $(window).scroll(function() {
            $('.object').each(function() {
                var objPos = $(this).offset().top;
                var winHeight = $(window).height();
                var scrollTop = $(window).scrollTop();
                if (objPos < scrollTop + winHeight) {
                    $(this).addClass('animate');
                }
            });
        });
    });
</script>
<!-- End of Javascript -->
