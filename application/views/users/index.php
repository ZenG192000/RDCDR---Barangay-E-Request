<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDCDR | Home</title>

    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <!-- Custom CSS for styling -->
    <style>
        body {
            background-color: #f0f0f0;
        }

        html {
            scroll-behavior: smooth;
        }

        .scroll-link {
            transition: all 0.3s ease-in-out;

        }

        .scroll-link:hover {
            color: #34A853;
        }


        h2,
        p {
            position: relative;
            top: 30px;
        }

        /* Style the navbar */
        .navbar {
            background-color: #34A853;
            color: #ffffff;
            /* border-bottom: 1px #000000 solid; */

        }

        /* .nav-menu ul li .link {
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            padding-bottom: 15px;
            margin: 0 25px;
        } */

        .nav-link:hover,
        .active {
            border-bottom: 2px solid #fff;
        }



        .navbar-dark .navbar-nav .nav-link {
            color: white;
        }

        /* Style the sections */
        .section {
            height: 100vh;

        }

        .section1 {
            background-color: #34A853;
            color: white;
        }

        .section2 {
            background-color: #ffffff;
            color: #34A853;
            margin-top: 10px;

        }

        .section3 {
            background-color: #2ecc71;
            color: white;
            margin-top: 10px;
        }

        .section4 {
            background-color: #2ecc71;
            color: white;
            margin-top: 10px;
        }

        .section5 {
            background-color: #2ecc71;
            color: white;
            margin-top: 10px;
        }

        .section6 {
            background-color: #2ecc71;
            color: white;
            margin-top: 10px;
        }


        .close {
            position: relative;
            top: -40px;
        }

        #sgn-mdl {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(128deg, #ffffff 65%, #34A853 40%);
        }

        #SU-btn {
            font-weight: 500;
            border-style: none;
            color: #34A853;
            background-color: #ffffff;
            padding: 5px;
            width: 100px;
            margin-left: 5px;
        }

        #SI-btn {
            font-weight: 500;
            border-style: none;
            color: #34A853;
            background-color: #000000;
            padding: 5px;
            width: 100px;
            margin-left: 5px;
        }

        #SULabel {
            color: #34A853;
        }

        #SILabel {
            color: #34A853;
        }

        #crt-acc {
            position: relative;
            color: #34A853;
            background-color: #000000;
            font-weight: 500;

        }

        #SI-lgn {
            color: #34A853;
            background-color: #000000;
            font-weight: 500;
        }

        #crt-new-acc {
            position: relative;
            color: #000000;
            background-color: #34A853;
            font-weight: 500;

        }

        #frgt-pass {
            position: relative;
            color: #34A853;
            top: -40px;
            left: 20px;
        }

        .line {
            position: relative;
            top: -10px;
            left: 3px;
            width: 40%;
            height: 1px;


            background-color: #666;

        }



        /* ----------------------------------------------- Styles for tablets (768px to 1024px wide) ----------------------------------------------- */

        /* @media (min-width: 768px) and (max-width: 1024px) {
            #SU-btn {
                font-weight: 500;
                border-style: none;
                color: #34A853;
                padding: 8px;
            }
        } */




        .form-control {
            box-shadow: none;
            font-weight: normal;
            font-size: 13px;
        }

        .navbar {
            padding-left: 16px;
            padding-right: 16px;
            /* border-bottom: 1px solid #dfe3e8; */
            border-radius: 0;
        }

        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }





        .navbar .form-inline {
            display: inline-block;
        }

        .navbar a {
            color: #888;
            font-size: 15px;
            /* text-transform: uppercase; */
            font-weight: 500;
        }






        /* Smooth slide animation for navigation links */
        .navbar-nav a {
            transition: transform 0.3s ease-in-out;
        }

        .navbar-nav a:hover {
            transform: translateY(-5px);
        }

        ::placeholder {
            color: #34A853 !important;
            /* Change the color to your preferred color */
        }

        .navbar .sign-up-btn {
            min-width: 110px;
            max-height: 36px;
        }

        .navbar .dropdown-menu {
            color: #999;
            font-weight: normal;
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar a,
        .navbar a:active {
            color: #888;
            padding: 8px 20px;
            background: transparent;
            line-height: normal;
        }

        .navbar .navbar-form {
            border: none;
        }

        .navbar .action-form {
            width: 280px;
            padding: 20px;
            left: auto;
            right: 0;
            font-size: 14px;
        }

        .navbar .action-form a {
            color: #33cabb;
            padding: 0 !important;
            font-size: 14px;
        }

        .navbar .action-form .hint-text {
            text-align: center;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .navbar .btn-primary,
        .navbar .btn-primary:active {
            color: #fff;
            background: #33cabb !important;
            border: none;
        }

        .navbar .btn-primary:hover,
        .navbar .btn-primary:focus {
            color: #fff;
            background: #31bfb1 !important;
        }

        .navbar .social-btn .btn,
        .navbar .social-btn .btn:hover {
            color: #fff;
            margin: 0;
            padding: 0 !important;
            font-size: 13px;
            border: none;
            transition: all 0.4s;
            text-align: center;
            line-height: 34px;
            width: 47%;
            text-decoration: none;
        }

        .navbar .social-btn .facebook-btn {
            background: #507cc0;
        }

        .navbar .social-btn .facebook-btn:hover {
            background: #4676bd;
        }

        .navbar .social-btn .twitter-btn {
            background: #64ccf1;
        }

        .navbar .social-btn .twitter-btn:hover {
            background: #4ec7ef;
        }

        .navbar .social-btn .btn i {
            margin-right: 5px;
            font-size: 16px;
            position: relative;
            top: 2px;
        }

        .or-seperator {
            margin-top: 32px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }

        .or-seperator b {
            color: #666;
            padding: 0 8px;
            width: 30px;
            height: 30px;
            font-size: 13px;
            text-align: center;
            line-height: 26px;
            background: #34A853;
            display: inline-block;
            border: 1px solid;
            border-radius: 50%;
            position: relative;
            top: -15px;
            z-index: 1;
        }

        .navbar .action-buttons .dropdown-toggle::after {
            display: none;
        }

        .form-check-label input {
            position: relative;
            top: 1px;
        }

        .modal-body label {
            font-weight: 500;
        }





        @media (min-width: 1200px) {
            .form-inline .input-group {
                width: 300px;
                margin-left: 30px;
            }
        }

        @media (max-width: 768px) {
            .navbar .dropdown-menu.action-form {
                width: 100%;
                padding: 10px 15px;
                background: transparent;
                border: none;
            }

            .navbar .form-inline {
                display: block;
            }

            .navbar .input-group {
                width: 100%;
            }

            #sgn-mdl {
                /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
                /* background-image: linear-gradient(128deg, #ffffff 65%, #34A853 40%); */
                background-image: none;
            }

            #frgt-pass {
                position: relative;
                color: #34A853;
                top: -40px;
                left: 8px;
            }


        }
    </style>
</head>

<body>

    <?php

    if ($this->session->userdata('user_info')) {
        $user_info = $this->session->userdata('user_info');
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#" class="navbar-brand">
            <img src="<?= base_url('img/systemimg/logo.png')?>" width="100px" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="#section1" class="nav-item nav-link active">HOME</a>
                <a href="#section2" class="nav-item nav-link">ANNOUNCEMENTS</a>
                <a href="#section3" class="nav-item nav-link">ABOUT US</a>
                <a href="#section4" class="nav-item nav-link">OFFICIALS</a>
                <a href="#section5" class="nav-item nav-link">SERVICES</a>
                <a href="#section6" class="nav-item nav-link">FAQ'S</a>
            </div>

            <div class="navbar-nav ml-auto action-buttons">
                <h6 style="margin-right: 10px; color:#000000; margin-top: 10px;"><?= $user_info->Surname . ', ' . $user_info->Firstname ?></h6>
                <a href="<?= site_url('login/signout'); ?>" class="btn btn-danger">
                    Sign Out
                </a>
            </div>
        </div>
    </nav>





















    <!-- <div class="modal fade" id="SignUpModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="SULabel" aria-hidden="true"> -->




    <!-- Registration Modal -->
    <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="SULabel" aria-hidden="true">
        <!-- </div> -->

        <div class="modal-dialog modal-lg" role="document">
            <div id="sgn-mdl" class="modal-content">
                <!-- <div class="container"> -->
                <div class="container mt-4 mb-3">
                    <h5 class="modal-title" id="SULabel">Sign Up Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="signupForm">


                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="fullname"></label>
                                <input type="text" class="form-control mt-2" id="firstname" name="firstname" placeholder="Firstn Name">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="fullname"></label>
                                <input type="text" class="form-control mt-2" id="middlename" name="middlename" placeholder="Middle Name">
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control col-8" id="email" name="email" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control col-8" id="password" name="password" placeholder="Create Password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" class="form-control col-8" id="confirmPassword" placeholder="Confirm Password">
                        </div>


                        <div class="form-row">
                            <div class="form-group col-2">
                                <label for="month">Date of Birth</label>
                                <select id="dobMonth" name="dobMonth" class="form-control">
                                    <!-- Add options for month here -->
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label for="day"></label>
                                <select id="dobDay" name="dobDay" class="form-control mt-2">
                                    <!-- Add options for day here -->
                                </select>
                            </div>
                            <div class="form-group col-2">
                                <label for="year"></label>
                                <select id="dobYear" name="dobYear" class="form-control mt-2">
                                    <!-- Add options for years here -->
                                </select>
                            </div>
                        </div>






                        <div class="form-row">
                            <div class="form-group col-2">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                            </div>



                            <div class="form-group">

                                <div class="form-group col">
                                    <label>Gender</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                </div>

                                <div class="form-group col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="text-start">
                            <button type="submit" id="crt-acc" class="btn btn-primary col-5">Create Account</button>
                        </div>
                    </form>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>







    <!-- -----------------------  Sign in ---------------------------------- -->



    <div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-labelledby="SULabel" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div id="sgn-mdl" class="modal-content">
                <!-- <div class="container"> -->
                <div class="container mt-4 mb-3">
                    <h5 class="modal-title" id="SILabel">Sign In Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>





                        <div class="form-group">
                            <label for="email">Email or Mobile Number</label>
                            <input type="text" class="form-control col-7" id="Lemail" placeholder="Email or Mobile Number">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control col-7" id="Lpassword" placeholder="Create Password">
                        </div>



                        <div class="form-group">
                            <div class="text-start">
                                <button type="submit" id="SI-lgn" class="btn btn-primary col-5">Login</button>
                            </div>
                        </div>


                        <!-- "Forgot Password?" link -->
                        <div class="form-group">
                            <!-- <div class="text-start"> -->
                            <p class="text-start mt-4">
                                <a id="frgt-pass" href="#" data-toggle="modal" data-dismiss="modal" data-target="#ForgotPasswordModal">
                                    Forgot Password?
                                </a>
                            </p>
                            <!-- </div> -->
                        </div>

                        <div class="form-group">
                            <div class="line"></div>
                        </div>

                        <div class="form-group">
                            <div class="text-start">
                                <button type="submit" id="crt-new-acc" data-toggle="modal" data-dismiss="modal" data-target="#SignUpModal" class="btn btn-primary col-5">Create New Account</button>
                            </div>
                        </div>


                    </form>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>





    <!-- Sign In -->




    <!-- <div class="container-fluid"> -->
    <div id="toast-container" class="toast-top-right"></div>
    <!-- Sections -->
    <section id="section1" class="section section1">
        <div class="container">
            <!-- <h2></h2> -->
            <div class="text-primary">
                <?php if ($this->session->flashdata('msgSuccess')) : ?>
                    <p><?php echo $this->session->flashdata('msgSuccess'); ?></p>
                <?php endif; ?>
                <?php if ($this->session->flashdata('msgError')) : ?>
                    <p><?php echo $this->session->flashdata('msgError'); ?></p>
                <?php endif; ?>
            </div>
            <p>This is the first section of your responsive page.</p>
        </div>
    </section>

    <section id="section2" class="section section2">
        <div class="container">
            <h2>ANNOUNCEMENTS</h2>
            <p>This is the second section of your responsive page.</p>
        </div>
    </section>

    <section id="section3" class="section section3">
        <div class="container">
            <h2>ABOUT US</h2>
            <p>This is the third section of your responsive page.</p>
        </div>
    </section>

    <section id="section4" class="section section4">
        <div class="container">
            <h2>BARANGAY OFFICIALS</h2>
            <p>This is the first section of your responsive page.</p>
        </div>
    </section>

    <section id="section5" class="section section5">
        <div class="container">
            <h2>SERVICES</h2>
            <p>This is the first section of your responsive page.</p>
        </div>
    </section>

    <section id="section6" class="section section6">
        <div class="container">
            <h2>FAQ'S</h2>
            <p>This is the first section of your responsive page.</p>
        </div>
    </section>

    <!-- </div> -->


    <!-- Link to Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#signupForm").submit(function(event) {
                event.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('users/signup'); ?>",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            $('#SignUpModal').modal('hide');
                            toastr.success(response.message);
                        } else {
                            toastr.error("Error: " + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error("Error: " + error);
                    }

                });
            });
        });
    </script>


</body>

</html>