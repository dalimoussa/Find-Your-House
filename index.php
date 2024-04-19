<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIND YOUR HOUSE</title>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/rent.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        /* Your existing CSS styles */
        /* Header */
        .masthead {
            background-color: #343a40;
            color: white;
            padding-top: 100px;
            padding-bottom: 100px;
            text-align: center;
        }
        /* Post Rental */
        #postRental {
            background-color: #f8f9fa;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        /* Search */
        #search {
            background-color: #f8f9fa;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        /* Posts Section */
        #posts {
            background-color: #f8f9fa;
            padding-top: 50px;
            padding-bottom: 50px;
        }
        /* Footer */
        footer {
            background-color: #343a40;
            color: white;
            padding-top: 25px;
            padding-bottom: 25px;
            text-align: center;
        }
        .social-buttons .fa {
            color: white;
            font-size: 20px;
            margin: 0 10px;
        }
        .social-buttons .fa:hover {
            color: #007bff;
        }
        /* Form styling */
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 0;
        }
        /* Button styling */
        .btn {
            border-radius: 0;
        }
        /* Card styling */
        .card {
            border: none;
            border-radius: 0;
        }
        .card-img-top {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }
    </style>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">FIND YOUR HOUSE</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#search">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#postRental">Post Rental</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./auth/login.php">SignIn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./auth/login.php">SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To FIND YOUR HOUSE</div>
                <div class="intro-heading text-uppercase">Find Home Together!</div>
            </div>
        </div>
    </header>
    <section id="postRental">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Post Your Rental</h2>
                    <h3 class="section-subheading text-muted">Share your rental property with others!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST" class="center" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="propertyName" name="propertyName" type="text" placeholder="Property Name" required data-validation-required-message="Please enter property name">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="rentPrice" name="rentPrice" type="text" placeholder="Rent Price" required data-validation-required-message="Please enter rent price">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="phoneNumber" name="phoneNumber" type="tel" placeholder="Phone Number" required data-validation-required-message="Please enter phone number">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="propertyDescription" name="propertyDescription" placeholder="Property Description" required data-validation-required-message="Please enter property description"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="propertyImage" name="propertyImage">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="location" type="text" name="location" placeholder="Location (e.g., Tunis)" required data-validation-required-message="Please enter location.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button id="postBtn" class="btn btn-success btn-md text-uppercase" name="post" value="post" type="submit">Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Search</h2>
                    <h3 class="section-subheading text-muted">Make a quick search at our number of services!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST" class="center" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="keywords" name="keywords" type="text" placeholder="Keywords (Ex: 1 BHK, Rent Amount, Landmark)" required data-validation-required-message="Please enter keywords">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class="form-control" id="searchLocation" type="text" name="location" placeholder="Location (e.g., Tunis)" required data-validation-required-message="Please enter location.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <button id="searchBtn" class="btn btn-success btn-md text-uppercase" name="search" value="search" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="searchResults"></div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
    </section>
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Discover Offers for Rental</h2>
                    <h3 class="section-subheading text-muted">Scroll through posts about rental houses</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <img class="card-img-top" src="https://tn.sptechs.com/emarket/thumbs/e600/item311009.jpg" alt="Property Image">
                        <div class="card-body">
                            <h4 class="card-title">Ali Hamed</h4>
                            <p class="card-text">Price: 400DT</p>
                            <p class="card-text">Location: Sousse, Hammem Sousse</p>
                            <p class="card-text">Phone: 96885942</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer style="background-color: #ccc;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">&copy; Find Your House - <?php echo date("Y"); ?></span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/rent.js"></script>
    <!-- Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script>
        // Initialize Google Map
        function initMap() {
            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 },
                zoom: 8
            });
        }

        // Your existing JavaScript code for handling search and post rental functionality
        document.querySelector('#searchBtn').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent form submission
            var keywords = document.getElementById('keywords').value;
            var location = document.getElementById('searchLocation').value;
            // Perform search here (you can use AJAX to fetch data from server)
            // For demonstration, I'm just displaying a message
            var searchResultsDiv = document.getElementById('searchResults');
            searchResultsDiv.innerHTML = '<p>Searching for ' + keywords + ' in ' + location + '</p>';
        });

        document.querySelector('#postBtn').addEventListener('click', function (e) {
            e.preventDefault(); // Prevent form submission
            var propertyName = document.getElementById('propertyName').value;
            var rentPrice = document.getElementById('rentPrice').value;
            var propertyDescription = document.getElementById('propertyDescription').value;
            // You can handle image upload here
            // For demonstration, I'm just displaying a message
            alert('Posting: ' + propertyName + ', Rent Price: ' + rentPrice + ', Description: ' + propertyDescription);
        });
    </script>
</body>
</html>
