<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>LeadMark Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<?php
        session_start();
        $servername = 'localhost';
        $user = 'root';
        $pass = '';
        $link = mysqli_connect($servername, $user, $pass, 'aihack');
       
        if (isset($_SESSION['submited']))
        {if ($_SESSION['submited']=='yes')
            {
            echo '<script type ="text/JavaScript">;';  
        echo 'alert("The best country to start your company is South Africa");';  
        echo '</script>';
        $_SESSION['submited'] = "";
        }
    }
       
        
       
        if (isset($_SESSION['login'])) {
            if ($_SESSION['login'] == 'true') {
           
               
            }     
            
        } else {
            header("Location: login.php");
        }

        ?>
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="imgs/logo.svg" alt="">
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                
                    <li class="nav-item">
                        <a href="#contact" class="ml-4 nav-link btn btn-primary btn-sm rounded">Predict</a>
                    </li>
                    <?php  
                           echo '<li class="nav-item"><a href="logout.php" class="ml-4 nav-link btn btn-primary btn-sm rounded">Logout</a></li>';
                ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay">
            <h1 class="subtitle">For Better Future</h1>
            <h1 class="title">The New Mena </h1>  
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Fill the Survey</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Fill the survey below to predict which country is the best to open your company IN IT.</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> Company <h5>
                            <p class="mb-0">Name of your Company.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Budget<h5>
                            <p class="mb-0">Your Budget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Field<h5>
                            <p class="mb-0">Field of your Company (health,).</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->


    <!-- Contact Section -->
    <section id="contact" class="section has-img-bg pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 my-3">
                   
                </div>
                <div class="col-md-7">
                    <form action="indexp.php" method="POST">
                        <h4 class="mb-4">Fill The Survey</h4>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="companyname" placeholder="Company Name">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="field" placeholder="Field">
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="text" class="form-control text-white rounded-0 bg-transparent" name="budget" placeholder="Budget">
                            </div>
                            <div class="form-group col-12 mb-0">
                                <button type="submit" name="submit" class="btn btn-primary rounded w-md mt-3">Send</button>
                            </div>                          
                        </div>                          
                    </form>
                </div>
            </div>
            <!-- Page Footer -->
            <footer class="mt-5 py-4 border-top border-secondary">
                
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="vendors/jquery/jquery-3.4.1.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="js/leadmark.js"></script>

</body>
</html>
