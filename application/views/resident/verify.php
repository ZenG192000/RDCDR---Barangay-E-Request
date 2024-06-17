<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRGY Resident Verification</title>

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <!-- Add Font Awesome 6 CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" />



    <!-- Include Bootstrap-datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');



        body {
            font-family: 'Poppins', sans-serif;
            /* background-color: #4342427a; */
            /* height: 100vh; */
        }

        html {
            font-size: 16px;
            /* Base font size */
            height: 100vh;
        }






        /* --------------------- NAV BAR HORIZONTAL -------------------- */

        #RIF-txt {
            position: relative;
            font-size: 2rem;
            font-weight: bold;
            color: #ffffff;
        }

        #RIF-frm ::placeholder {
            position: relative;
            color: #34a853;
            padding-left: 10px;
        }

        #RIF-frm label {
            font-weight: 600;
        }



        #hdr-navr {
            /* padding-left: 16px;
            padding-right: 16px; */
            padding: 0px 0px;
            /* border-bottom: 1px solid #dfe3e8; */
            border-radius: 0;
            background-color: #34a853;
        }



        .imge-cntr {
            position: relative;
            background-color: #34a853;
            border: black;
            padding: 10px;

        }

        .image-section {
            position: absolute;
            top: -54px;
            /* right: 0; */
            cursor: pointer;
        }



        /* ---------- DATE PICKER CSS ----------- */


        /* Change the text color of the input field */
        #dateOfBirth {
            background-color: #ffffff;
            color: #34a853;
            text-align: center;
            font-weight: bold;

            /* Change to your preferred text color */
        }

        /* Change the background color of the date picker calendar */
        .datepicker {

            background-color: rgb(40, 40, 40);
            padding: 15px;

            /* Change to your preferred background color */
        }

        /* Change the text color of the date picker calendar */
        .datepicker table td,
        .datepicker table th {
            color: #34a853;
            font-weight: 600;
            /* Change to your preferred text color */
        }

        /* Change the background color of the date picker dropdown */
        .datepicker table tr td.active,
        .datepicker table tr td.active:hover,
        .datepicker table tr td.active.disabled,
        .datepicker table tr td.active.disabled:hover {
            background-color: #34a853;
            /* Change to your preferred background color for selected dates */
        }

        /* Change the text color of the date picker dropdown */
        .datepicker table tr td.active,
        .datepicker table tr td.active:hover,
        .datepicker table tr td.active.disabled,
        .datepicker table tr td.active.disabled:hover {
            color: #ffffff;
            /* Change to your preferred text color for selected dates */
        }


        /* ---------- DATE PICKER CSS END ----------- */






        /* ------------- CIVIL STATUS DROPDOWN CSS -------------- */


        #cvl-stts #dropdownMenuButton {
            color: #34a853;
            background-color: rgb(255, 255, 255);
            border-color: rgb(209, 208, 208);
            /* width: 100%;
            display: inline-block; */
            justify-content: center;
            /* white-space: nowrap; */
            font-weight: bold;
        }

        #cvl-stts #dropdownMenuButton:hover,
        .gradient-hover-effect:focus {
            background-color: #34a853;
            color: #ffff;
        }

        #cvl-stts #dropdownMenuButton:active {
            box-shadow: 0 3px #666;
        }

        #cvl-stts .dropdown {
            /* position: absolute; */
            /* top: 0; */
            margin: 0;
            padding: 0;
            list-style: none;


        }

        #cvl-stts .custom-dropdown-toggle {
            background-image: none;
            /* Remove the default arrow */
            position: relative;
            /* Create a relative positioning context */
            padding-right: 30px;
            /* Add some right padding for the custom icon */
            width: 100%;
        }

        #cvl-stts .custom-dropdown-toggle::after {
            content: "\f0dd";
            /* Add your custom icon here (e.g., Font Awesome) */
            font-family: FontAwesome;
            /* Specify the font family for the custom icon */
            position: absolute;
            top: 35%;
            right: 10px;
            font-size: 30px;
            /* Adjust the right position as needed */
            transform: translateY(-50%);
        }

        #cvl-stts .dropdown li {
            position: relative;
            line-height: 10px;
            /* display: inline-block; */

        }

        #cvl-stts .dropdown li:before {
            content: '';
            position: absolute;
            /* top: 0; */
            /* left: 0; */
            z-index: -1;
            height: 100%;
            width: 3px;
            /* background-color: #aa0a0a; */
            -webkit-transition: width .2s ease-in;
            -moz-transition: width .2s ease-in;
            -ms-transition: width .2s ease-in;
            transition: width .2s ease-in;

        }

        #cvl-stts .dropdown li:nth-child(2n+1):before {
            background-color: #34a853;
        }

        #cvl-stts .dropdown li:nth-child(2n+2):before {
            background-color: #34a853;
        }

        #cvl-stts .dropdown li:nth-child(2n+3):before {
            background-color: #34a853;
        }

        #cvl-stts .dropdown li:nth-child(2n+4):before {
            background-color: #34a853;
        }

        #cvl-stts .dropdown li:hover:before,
        #cvl-stts .dropdown li.open:hover:before {
            width: 100%;
            -webkit-transition: width .2s ease-in;
            -moz-transition: width .2s ease-in;
            -ms-transition: width .2s ease-in;
            transition: width .2s ease-in;

        }

        #cvl-stts .dropdown li a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px 10px 30px;
            text-align: center;
            width: 100%;
            margin-bottom: 5px;
        }

        #cvl-stts .dropdown li a:hover,
        #cvl-stts .dropdown li a:active,
        #cvl-stts .dropdown li a:focus,
        #cvl-stts .dropdown li.open a:hover,
        #cvl-stts .dropdown li.open a:active,
        #cvl-stts .dropdown li.open a:focus {
            color: #ffffff;
            text-decoration: none;
            /* background-color: transparent; */
        }

        #cvl-stts .dropdown-menu {
            position: relative;

            padding: 0;
            margin: 0;
            border-radius: 0;
            border: none;
            background-color: #434343;
            box-shadow: none;
            width: 100%;
        }


        #cvl-stts .fadeInDown {
            animation: fadeInDown 0.5s ease-in-out;
            animation-fill-mode: both;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                margin-top: 5px;
                transform: translateY(20);
            }
        }

        /*Fontawesome icons*/
        #cvl-stts .dropdown li a::before {
            position: relative;
            font-family: fontawesome;

            vertical-align: baseline;
            display: inline-block;
            padding-right: 5px;

            /* display: block;
            text-align: center;
            justify-content: center; */

            width: 100%;
        }

        /* ------------- CIVIL STATUS DROPDOWN CSS END -------------- */







        /* ------------- LIST OF GOVERNMENT IDS DROPDOWN CSS -------------- */

        #LOG-ids #dropdownMenuButton2 {
            color: #34a853;
            background-color: rgb(255, 255, 255);
            border-color: rgb(209, 208, 208);
            /* width: 100%;
            display: inline-block; */
            justify-content: center;
            /* white-space: nowrap; */
            font-weight: bold;
        }

        #LOG-ids #dropdownMenuButton2:hover,
        .gradient-hover-effect:focus {
            background-color: #34a853;
            color: #ffff;
        }

        #LOG-ids #dropdownMenuButton2:active {
            box-shadow: 0 3px #666;
        }

        #LOG-ids .dropdown {
            /* position: absolute; */
            /* top: 0; */
            margin: 0;
            padding: 0;
            list-style: none;


        }

        #LOG-ids .custom-dropdown-toggle {
            background-image: none;
            /* Remove the default arrow */
            position: relative;
            /* Create a relative positioning context */
            padding-right: 30px;
            /* Add some right padding for the custom icon */
            width: 100%;
        }

        #LOG-ids .custom-dropdown-toggle::after {
            content: "\f0dd";
            /* Add your custom icon here (e.g., Font Awesome) */
            font-family: FontAwesome;
            /* Specify the font family for the custom icon */
            position: absolute;
            top: 35%;
            right: 10px;
            font-size: 30px;
            /* Adjust the right position as needed */
            transform: translateY(-50%);
        }

        #LOG-ids .dropdown li {
            position: relative;
            line-height: 10px;
            /* display: inline-block; */

        }

        #LOG-ids .dropdown li:before {
            content: '';
            position: absolute;
            /* top: 0; */
            /* left: 0; */
            z-index: -1;
            height: 100%;
            width: 3px;
            /* background-color: #aa0a0a; */
            -webkit-transition: width .2s ease-in;
            -moz-transition: width .2s ease-in;
            -ms-transition: width .2s ease-in;
            transition: width .2s ease-in;

        }

        #LOG-ids .dropdown li:nth-child(2n+1):before {
            background-color: #34a853;
        }

        #LOG-ids .dropdown li:nth-child(2n+2):before {
            background-color: #34a853;
        }

        #LOG-ids .dropdown li:nth-child(2n+3):before {
            background-color: #34a853;
        }

        #LOG-ids .dropdown li:nth-child(2n+4):before {
            background-color: #34a853;
        }



        #LOG-ids .dropdown li:hover:before,
        #LOG-ids .dropdown li.open:hover:before {
            width: 100%;
            -webkit-transition: width .2s ease-in;
            -moz-transition: width .2s ease-in;
            -ms-transition: width .2s ease-in;
            transition: width .2s ease-in;

        }

        #LOG-ids .dropdown li a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 15px 10px 30px;
            text-align: center;
            width: 100%;
            margin-bottom: 5px;
        }

        #LOG-ids .dropdown li a:hover,
        #LOG-ids .dropdown li a:active,
        #LOG-ids .dropdown li a:focus,
        #LOG-ids .dropdown li.open a:hover,
        #LOG-ids .dropdown li.open a:active,
        #LOG-ids .dropdown li.open a:focus {
            color: #ffffff;
            text-decoration: none;
            /* background-color: transparent; */
        }

        #LOG-ids .dropdown-menu {
            position: relative;

            padding: 0;
            margin: 0;
            border-radius: 0;
            border: none;
            background-color: #434343;
            box-shadow: none;
            width: 100%;
        }


        #LOG-ids .fadeInDown {
            animation: fadeInDown 0.5s ease-in-out;
            animation-fill-mode: both;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }

            100% {
                opacity: 1;
                margin-top: 5px;
                transform: translateY(20);
            }
        }

        /*Fontawesome icons*/
        #LOG-ids .dropdown li a::before {
            position: relative;
            font-family: fontawesome;

            vertical-align: baseline;
            display: inline-block;
            padding-right: 5px;

            /* display: block;
            text-align: center;
            justify-content: center; */

            width: 100%;
        }



        /* ------------- LIST OF GOVERNMENT IDS DROPDOWN CSS END -------------- */







        /*       <!-- ------- GENDER RADIO BUTTON DESIGNED ------- -->       */


        .custom-radio-group {
            display: flex;
            flex-direction: row;
        }

        .custom-radio {
            display: flex;
            align-items: center;
            margin: 5px 10px;

        }

        .custom-radio input[type="radio"] {
            display: none;

        }

        .custom-radio label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            font-weight: bold;
        }

        .custom-radio label::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 1px solid #000000;
            border-radius: 50%;
            background-color: transparent;
        }

        .custom-radio input[type="radio"]:checked+label::before {
            background-color: #34a853;
        }

        /* Simple fade-in animation */
        .custom-radio label::before {
            opacity: 1;
            transition: opacity 0.3s;
        }

        .custom-radio input[type="radio"]:checked+label::before {
            opacity: 1;
        }





        /* <!-- ------- GENDER RADIO BUTTON DESIGNED END ------- --> */




        /* Style for the main footer container */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        /* Style for the content within the footer */
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-logo {
            /* Style for your logo or text */
            font-size: 24px;
            font-weight: bold;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            display: inline;
            margin: 0 20px;
        }

        .footer-links a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        .footer-social ul {
            list-style: none;
            padding: 0;
        }

        .footer-social li {
            display: inline;
            margin: 0 10px;
        }

        .footer-social a {
            text-decoration: none;
            color: #fff;
            font-size: 24px;
        }









        /* ------------------------------ FOOTER CHECKBOX ------------------------- */

        .checkbox {
            position: relative;
            top: -8px;
            /* border-bottom: 1px dashed rgba(255, 255, 255, 0.5); */
            padding: 5px 0px;
            /* margin: 0 0 10px; */
            display: flex;

        }

        .checkbox input[type=checkbox] {
            margin: 0;
            visibility: hidden;
            /* left: 1px; */
            /* top: 1px; */
        }

        .checkbox label {
            font-size: 20px;
            line-height: 26px;
            padding-left: 35px;
            margin: 0;
            display: flex;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease 0s;
        }

        .checkbox label:before,
        .checkbox label:after {
            content: "";
            width: 20px;
            height: 20px;
            border: 3px solid #34a853;
            border-radius: 4px;
            position: absolute;
            top: 3px;
            left: 3px;
            transition: all 0.25s;
        }

        .checkbox label:after {
            height: 10px;
            width: 16px;
            border-radius: 0 0 0 4px;
            border: 5px solid #34a853;
            border-top: none;
            border-right: none;
            opacity: 0;
            transform: rotate(-45deg);
            top: 15px;
            left: 6px;
        }

        .checkbox input[type=checkbox]:checked+label {
            font-weight: 600;
        }

        .checkbox input[type=checkbox]:checked+label:before {
            opacity: 0;
            top: -10px;
        }

        .checkbox input[type=checkbox]:checked+label:after {
            opacity: 1;
            top: 6px;
        }

        .ftr-lnks li {
            list-style: none;
            margin: 0px 5px;
        }

        .ftr-lnks a {
            color: #34a853;
        }

        /* ------------------------------ FOOTER CHECKBOX END ------------------------- */





        @media (min-height:1000px) {

            footer {
                position: absolute;
                bottom: 0;
                width: 100vw;
                /* margin-top: 100px; */
            }

        }

        @media (max-width:767px) {
            .image-section {
                position: relative;
                top: 0px;
            }

            .checkbox {
                margin: 0 0 20px;
            }
        }
    </style>

</head>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>

<body>





    <div id="toast-container" class="toast-top-right"></div>

    <!-- <div class="container-fluid"> -->
    <input type="text" id="user" name="user" value="<?= $user_info->Firstname . " " . $user_info->Middlename . " " . $user_info->Surname ?>" hidden>
    <nav id="hdr-navr" class="navbar navbar-light">

        <div class="container justify-content-center">
            <a href="#" class="navbar-brand">
                <img id="section-logo" src="<?= base_url('img/systemimg/logo.png') ?>" width="100px" alt="">
            </a>

            <span id="RIF-txt">RESIDENT INFORMATION FORM</span>
        </div>
        <!-- <div class="line"></div> -->

    </nav>


    <!-------------------------------------------------------------- Sign - Up / Registration Modal ------------------------------------------------------------->


    <div class="container-fluid">
        <br><br>
        <br>

        <form id="RIF-frm" class="m-4">



            <div class="row">

                <div class="col-md-auto">
                    <label for="email">Resident No.</label>
                </div>

                <div class=" col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="resid" name="resid" placeholder="RDC_RES_202301" readonly />
                    </div>
                </div>


                <div class="col-md-8">
                    <label for="fullname">Full Name</label>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" value="<?= $user_info->Surname ?>" oninput="capitalizeFirstLetter(this)" readonly />
                        </div>

                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?= $user_info->Firstname ?>" oninput="capitalizeFirstLetter(this)" readonly />
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name (optional)" value="<?= $user_info->Middlename ?>" oninput="capitalizeFirstLetter(this)" readonly />
                        </div>
                    </div>
                </div>


                <div class="col-md-4 row justify-content-center">
                    <div class="image-section" style="text-align: Center;">


                        <!-- Upload Image Box (fixed position) -->
                        <!-- <div id="imageUploadBox" class="fixed-image-box"> -->
                        <input type="file" class="custom-file-input" id="imageID" name="imageID" style="display: none;" />
                        
                        <!-- Image as a trigger for file upload -->
                        <img id="imageTrigger" class="img-fluid" src="https://via.placeholder.com/200x200" alt="Uploaded Image" style="max-width: 200px; max-height: 200px; cursor: pointer;" />
                        <p>    Upload 2x2 Photo</p>
                        <!-- </div> -->
                        <!-- Placeholder for the uploaded image -->
                        <div id="imageDisplay" class="image-display">
                            <img id="imagePreview" src="#" alt="Uploaded Image" style="max-width: 200px; max-height: 200px; display: none;" />
                        </div>


                    </div>
                </div>

                <div class="col-md-8">
                    <!-- <label for="fullname">Full Name</label> -->
                    <div class="form-row">

                        <!-- <div class="form-group col-md-3">
                            <label for="dateOfBirth">Date of Birth:</label>
                            <input type="text" id="dateOfBirth" class="form-control">
                        </div> -->

                        <div class="form-group col-md-3">
                            <label for="dateOfBirth">Date of Birth:</label>
                            <div class="input-group">
                                <input type="text" id="DateofBirth" name="DateofBirth" value="<?= $user_info->Birthday ?>" class="form-control" readonly>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="calendar-icon">
                                        <!-- <i class="fas fa-calendar"></i> -->
                                        <i class="fa-duotone fa-calendars fa-lg"></i>
                                    </span>
                                </div>
                            </div>
                        </div>






                        <div class="form-group col-md-2">
                            <label for="age">Age</label>
                            <input type="text" class="form-control" id="Agew" name="Agew" value="<?= $user_info->Age ?>" readonly />
                        </div>



                        <div id="cvl-stts" class="form-group col-md-3">
                            <label>Civil Status</label>
                            <div class="dropdown">

                                <button class="btn btn-primary custom-dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Options:
                                </button>
                                <ul id="dropc" class="dropdown-menu animated fadeInDown" aria-labelledby="dropdownMenuButton">
                                    <li><a href="#single" data-value="Single">Single</a></li>
                                    <li><a href="#married" data-value="Married">Married</a></li>
                                    <li><a href="#divorced" data-value="Divorced">Divorced</a></li>
                                    <li><a href="#widowed" data-value="Widowed">Widowed</a></li>
                                </ul>
                                <input type="hidden" name="CivilStatus" id="CivilStatus" value="" required>
                            </div>
                        </div>





                        <div class="form-group col-md-4">
                            <label class="col-md-auto">Gender:</label>

                            <div id="cstm-rad-btn" class="custom-radio-group">

                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" name="genderr" id="male" value="male" <?php echo ($user_info->Gender == 'Male') ? 'checked' : ''; ?> />
                                    <label class="form-check-label" for="male">Male</label>
                                </div>

                                <div class="custom-radio">
                                    <input class="form-check-input" type="radio" name="genderr" id="female" value="female" <?php echo ($user_info->Gender == 'Female') ? 'checked' : ''; ?> />
                                    <label class="form-check-label" for="female">Female</label>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>



            </div>





            <div class="row">

                <div class="col-md-10">
                    <label for="email">Full Address:</label>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="phase-block-lot" placeholder="Phase / Block / Lot" required />
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="street-sudbv" placeholder="Street / Subdivision" required />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="brgy" value="Real De Cacarong" placeholder="Barangay" required readonly/>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="municip" value="Pandi" placeholder="Municipality" required readonly/>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" id="provnc" value="Bulacan" placeholder="Province" required readonly/>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" class="form-control" id="zp-cd" placeholder="Zip Code" value="3014" required readonly/>
                        </div>
                        <input type="hidden" class="form-control" name="full-address" id="full-address" placeholder="Full Address" />

                    </div>
                </div>

            </div>





            <div class="row">


                <div class="col-md-6">
                    <label for="fullname">List of Government ID's</label>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <!-- <input type="text" class="form-control" id="fullname" placeholder="Surname" /> -->

                            <div id="LOG-ids" class="form-group">
                                <!-- <label>Civil Status</label> -->
                                <div class="dropdown">

                                    <button class="btn btn-primary custom-dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options:
                                    </button>
                                    <ul id="dropl" class="dropdown-menu animated fadeInDown" aria-labelledby="dropdownMenuButton2">
                                        <li><a href="#Philsys ID" data-value="Philsys ID">Philsys ID</a></li>
                                        <li><a href="#Driver's License" data-value="Driver's License">Driver's
                                                License</a></li>
                                        <li><a href="#ePhilID (Paper)" data-value="ePhilID (Paper)">ePhilID (Paper)</a>
                                        </li>
                                        <li><a href="#UMID" data-value="UMID">UMID</a></li>
                                        <li><a href="#Passport" data-value="Passport">Passport</a></li>
                                        <li><a href="#PRC ID" data-value="PRC ID">PRC ID</a></li>
                                        <li><a href="#Postal ID" data-value="Postal ID">Postal ID</a></li>
                                        <li><a href="#SSS ID" data-value="SSS ID">SSS ID</a></li>
                                        <li><a href="#HDMF (Pag-Ibig) ID" data-value="HDMF (Pag-Ibig) ID">HDMF
                                                (Pag-Ibig) ID</a></li>
                                    </ul>
                                    <input type="hidden" name="selected_option" id="selected_option" value="" required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <label for="fullname">Picture of ID with signature</label>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="updateFileName(this)" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>

                        </div>
                    </div>
                </div>



                <div class="form-row col-md-6">
                    <!-- <label for="fullname">Recaptcha</label> -->
                    <div class="form-group col-md-10">
                        <div class="g-recaptcha" data-sitekey="6Le3BhQpAAAAAEq4C9RFTq4E2bR9tzfvkxsMN9_D"></div>
                    </div>
                </div>
        </form>
        <!-- Privacy & Policy Form Modal -->
        <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="privacyModalLabel" style="color: #34a853;">Barangay E-Document Request
                            Privacy & Policy</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add your privacy policy content or form here -->
                        <p>Introduction:
                            <br><br>
                            Welcome to Barangay Real De Cacarong Online Request Documents. This Privacy Policy outlines how
                            we collect, use, disclose, and protect your personal information when you use our services or
                            visit our website.
                            <br><br>
                            Information We Collect:
                            <br><br>
                            Personal Information:
                            We may collect personal information such as your name, email address, phone number, and address
                            when you use our services or interact with our website.
                            <br><br>
                            Usage Data:
                            We may collect information on how you interact with our website, including IP addresses, browser
                            type, pages viewed, and the date and time of your visit.
                            <br><br>
                            How We Use Your Information:
                            <br><br>
                            We use the collected information for purposes such as:
                            <br><br>
                            Providing and improving our services.
                            <br>
                            Communicating with you, including responding to inquiries and providing updates.
                            <br>
                            Analyzing and enhancing user experience.
                            <br>
                            Complying with legal obligations.
                            <br><br>

                            Data Security:

                            We employ industry-standard security measures to protect your personal information from
                            unauthorized access, disclosure, alteration, and destruction. However, no method of transmission
                            over the internet or electronic storage is completely secure.
                            <br><br>
                            Disclosure to Third Parties:

                            We do not sell, trade, or otherwise transfer your personal information to third parties without
                            your consent, except as described in this Privacy Policy or when required by law.
                            <br><br>
                            Cookies and Tracking Technologies:

                            We may use cookies and similar technologies to enhance your experience on our website. You can
                            control the use of cookies through your browser settings.
                            <br><br>
                            Your Rights:

                            You have the right to access, correct, or delete your personal information. You can also opt-out
                            of marketing communications. If you have any concerns or requests, please contact us at [your
                            contact email].
                            <br><br>
                            Changes to Privacy Policy:

                            We reserve the right to update this Privacy Policy at any time. We will notify you of any
                            changes by posting the updated policy on our website.
                            <br><br>
                            Contact Information:

                            If you have any questions or concerns regarding this Privacy Policy, please contact us at
                            Barangayreal@gmail.com.

                            This Privacy Policy was last updated on Dec. 01 2023.
                            <br><br>
                            Barangay Real De Cacarong
                        </p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Terms and Condition Form Modal -->
        <div class="modal fade" id="TermsModal" tabindex="-1" role="dialog" aria-labelledby="TermsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TermsModalLabel" style="color: #34a853;">Barangay E-Document Request
                            Terms and Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add your privacy policy content or form here -->
                        <p>1. Acceptance of Terms:
                            By using the Barangay E-Document Request service provided by Barangay Real De Cacarong, you
                            agree to comply with and be bound by these Terms and Conditions.
                            <br><br>
                            2. E-Document Request Process:
                            You understand and acknowledge that the Barangay E-Document Request service allows you to
                            request specific documents electronically. The processing time, requirements, and fees
                            associated with each document will be outlined in the respective request form.
                            <br><br>
                            3. Accuracy of Information:
                            You are responsible for providing accurate and complete information when submitting an
                            e-document request. Any inaccuracies may result in delays or rejection of the request.
                            <br><br>
                            4. Confidentiality:
                            We prioritize the confidentiality of your personal information. All data submitted for
                            e-document requests will be handled in accordance with our Privacy Policy.
                            <br><br>
                            5. Fees and Payments:
                            Certain e-document requests may incur fees. You agree to pay the specified fees associated with
                            your document request. Payments will be processed securely through [payment method].
                            <br><br>
                            6. Processing Time:
                            While we strive to process e-document requests promptly, processing times may vary depending on
                            the document type and current workload. We will make reasonable efforts to keep you informed of
                            the status of your request.
                            <br><br>
                            7. Modification or Termination of Service:
                            We reserve the right to modify, suspend, or terminate the Barangay E-Document Request service at
                            our discretion. In such cases, reasonable efforts will be made to notify users in advance.
                            <br><br>
                            8. User Conduct:
                            You agree to use the service for lawful purposes and in compliance with all applicable laws and
                            regulations. Any misuse or unauthorized access may result in the termination of your access to
                            the service.
                            <br><br>
                            9. Limitation of Liability:
                            We are not liable for any direct, indirect, incidental, consequential, or punitive damages
                            arising out of your use of the Barangay E-Document Request service. Your use of the service is
                            at your own risk.
                            <br><br>
                            10. Governing Law:
                            These Terms and Conditions are governed by and construed in accordance with the laws of our
                            e-Barangay Request.
                            <br><br>
                            11. Contact Information:
                            If you have any questions or concerns regarding these Terms and Conditions or the Barangay
                            E-Document Request service, please contact us at Barangayreal@gmail.com.
                            <br><br>
                            These Terms and Conditions were last updated on [December 7, 2023].
                            <br><br>
                            Barangay Real De Cacarong
                        </p>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    </div>
                </div>
            </div>
        </div>



    </div>



    <br>
    <br>
    <br>
    </div>

    <footer>
        <div class="footer-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="checkbox ml-3 mt-2">
                        <input type="checkbox" id="checkbox1" name="checkbox1" oninput="updateButtonState();">
                        <label for="checkbox1"></label>
                    </div>
                    <div class="ftr-lnks mt-2">
                        <span class="ml-2">I have read and agree to</span>
                        <a href="#" data-toggle="modal" data-target="#privacyModal" class="ml-1">Privacy Policy</a>
                        <span class="ml-1">and</span>
                        <a href="#" data-toggle="modal" data-target="#TermsModal" class="ml-1">Terms and Conditions.</a>
                    </div>
                    <div class="text-center ml-4">
                        <button type="submit" id="addresident" class="btn btn-success font-weight-bold px-5" disabled>VERIFY</button>
                    </div>
                </div>
            </div>
        </div>

    </footer>





    <!-------------------------------------------------------------- Sign - Up / Registration Modal End ------------------------------------------------------------->








    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




    <script>
        function checkDataAndRedirect() {
            // Assuming you have form fields with IDs: firstname, middlename, lastname
            var firstname = $('#firstname').val();
            var middlename = $('#middlename').val();
            var surname = $('#surname').val();
            var StepVerifyNo = 1;

            // Perform AJAX request to the server
            $.ajax({
                url: "<?php echo site_url('resident/wait'); ?>", // Replace with the actual server endpoint
                method: 'POST',
                data: {
                    firstname: firstname,
                    middlename: middlename,
                    surname: surname,
                    StepVerifyNo: StepVerifyNo
                },
                success: function(response) {
                    if (response.exists) {
                        // Data exists, show toastr notification and redirect
                        toastr.success('Data exists! Redirecting...');
                        setTimeout(function() {
                            window.location.href = '<?php echo site_url('Resident/waiting'); ?>';
                        }, 1000); // Redirect after 1 second
                    } else {
                        // Data does not exist, continue filling up the form
                        // You can add your form processing logic here
                    }
                },
                error: function() {
                    toastr.error('An error occurred.');
                }
            });
        }

        // Execute the function once
        checkDataAndRedirect();

        // Set up a one-time execution with setInterval
        var intervalId = setInterval(checkDataAndRedirect, 1000);
        setTimeout(function() {
            clearInterval(intervalId);
        }, 1000); // Stop setInterval after 1 second


        function checkDataAndRedirect1() {
            // Assuming you have form fields with IDs: firstname, middlename, lastname
            var firstname = $('#firstname').val();
            var middlename = $('#middlename').val();
            var surname = $('#surname').val();
            var StepVerifyNo = 0;

            // Perform AJAX request to the server
            $.ajax({
                url: "<?php echo site_url('resident/wait'); ?>", // Replace with the actual server endpoint
                method: 'POST',
                data: {
                    firstname: firstname,
                    middlename: middlename,
                    surname: surname,
                    StepVerifyNo: StepVerifyNo
                },
                success: function(response) {
                    if (response.exists) {
                        // Data exists, show toastr notification and redirect
                        toastr.success('Verified! Redirecting...');
                        setTimeout(function() {
                            window.location.href = '<?php echo site_url('Resident/index'); ?>';
                        }, 1000); // Redirect after 1 second
                    } else {
                        // Data does not exist, continue filling up the form
                        // You can add your form processing logic here
                    }
                },
                error: function() {
                    toastr.error('An error occurred.');
                }
            });
        }

        // Execute the function once
        checkDataAndRedirect1();

        // Set up a one-time execution with setInterval
        var intervalId1 = setInterval(checkDataAndRedirect1, 1000);
        setTimeout(function() {
            clearInterval(intervalId1);
        }, 1000); // Stop setInterval after 1 second



        function updateButtonState() {
            var checkbox = document.getElementById('checkbox1');
            var button = document.getElementById('addresident');

            // If checkbox is checked, enable the button; otherwise, disable it
            if (checkbox.checked) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        }
        $(document).ready(function() {
            // Function to fetch and update Resident ID
            function updateResidentId() {
                $.ajax({
                    url: "<?php echo site_url('Resident/generate_resident_id'); ?>",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // Update the input field with the generated Resident ID
                        $('#resid').val(data.resident_id);
                    }
                });
            }

            // Call the function once after 1 second
            setTimeout(updateResidentId, 1000);
        });
        $(document).ready(function() {
            $('#addresident').on('click', function(e) {
                e.preventDefault();

                // Add validation logic here
                if (!validateForm()) {
                    toastr.error("Please fill in all required fields.");
                    return;
                }

                var formData = new FormData($('#RIF-frm')[0]);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('resident/dataverify'); ?>",
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            setTimeout(function() {
                                window.location.href = '<?php echo site_url('Resident/waiting'); ?>';
                            }, 1000);
                        } else {
                            toastr.error("Error: " + response.message + " " + response.upload_errors);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error("Error: " + error);
                    }
                });
            });

            // Function to validate the form
            function validateForm() {
                // Add validation for each required field
                var requiredFields = ["resid", "surname", "firstname", "CivilStatus", "phase-block-lot", "street-sudbv", "brgy", "municip", "provnc", "zp-cd"];

                for (var i = 0; i < requiredFields.length; i++) {
                    var field = $("#" + requiredFields[i]);
                    if (field.val() === "") {
                        return false;
                    }
                }

                // Add additional validation if needed

                return true;
            }
        });

        function capitalizeFirstLetter(input) {
            var words = input.value.toLowerCase().split(' ');
            for (var i = 0; i < words.length; i++) {
                words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
            }
            input.value = words.join(' ');
        }
        setInterval(function() {
            var phaseBlockLot = document.getElementById("phase-block-lot").value;
            var streetSubdivision = document.getElementById("street-sudbv").value;
            var barangay = document.getElementById("brgy").value;
            var municipality = document.getElementById("municip").value;
            var province = document.getElementById("provnc").value;
            var zipCode = document.getElementById("zp-cd").value;

            var fullAddress = phaseBlockLot + ", " + streetSubdivision + ", " + barangay + ", " + municipality + ", " + province + ", " + zipCode;

            fullAddress = fullAddress.toLowerCase().replace(/\b\w/g, function(l) {
                return l.toUpperCase()
            });

            document.getElementById("full-address").value = fullAddress;
        }, 1000); // Update every 1000 milliseconds (1 second)
        $(document).ready(function() {
            console.log('Document is ready.'); // Add this line
            $('#DateofBirth').datepicker({
                format: 'mm/dd/yyyy',
                autoclose: true
            });

            $('#calendar-icon').click(function() {
                $('#DateofBirth').datepicker('show');
            });

        });

        $(document).ready(function() {
            $('#dropl a').click(function() {
                $('#selected_option').val($(this).data('value'));
            });
        });

        $(document).ready(function() {
            $('#dropc a').click(function() {
                $('#CivilStatus').val($(this).data('value'));
            });
        });



        // --------------------- PARA SA UPLOADED IMAGE NA NAGING TRIGGER SA PAG UPLOAD NEW PHOTO ------------------------------ //

        const fileInput = document.getElementById("imageID");
        const imageTrigger = document.getElementById("imageTrigger");
        const imagePreview = document.getElementById("imagePreview");
        const imageDisplay = document.getElementById("imageDisplay");

        imageTrigger.addEventListener("click", function() {
            fileInput.click();
        });

        imagePreview.addEventListener("click", function() {
            fileInput.click();
        });

        fileInput.addEventListener("change", function() {
            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = "block";
                    imageDisplay.style.display = "block"; // Show the uploaded image
                    imageTrigger.style.display = "none";
                };
                reader.readAsDataURL(file);
            }
        });

        // Function to allow re-uploading by showing the trigger image again
        function resetUpload() {
            imagePreview.style.display = "none";
            imageDisplay.style.display = "none";
            imageTrigger.style.display = "block";
            fileInput.value = "";
        }

        // --------------------- PARA SA UPLOADED IMAGE NA NAGING TRIGGER SA PAG UPLOAD NEW PHOTO END ------------------------------ //








        // ---------------------- DROPDOWN OPTION SA CIVIL STATUS ---------------------- //

        $(document).ready(function() {
            $("#cvl-stts .dropdown-menu a").click(function() {
                var selectedOption = $(this).data('value');
                $("#cvl-stts #dropdownMenuButton").text(selectedOption);

                // Remove the fadeInLeft class from all list items
                $("#cvl-stts .dropdown-menu li").removeClass("fadeInDown");

                // Add the fadeInLeft class to the selected list item
                $(this).parent().addClass("fadeInDown");
            });
        });

        // ---------------------- DROPDOWN OPTION SA CIVIL STATUS END ---------------------- //






        // ---------------------- DROPDOWN OPTION SA LIST OF GOVERNMENT IDS ---------------------- //

        $(document).ready(function() {
            $("#LOG-ids .dropdown-menu a").click(function() {
                var selectedOption = $(this).data('value');
                $("#LOG-ids #dropdownMenuButton2").text(selectedOption);

                // Remove the fadeInLeft class from all list items
                $("#LOG-ids .dropdown-menu li").removeClass("fadeInDown");

                // Add the fadeInLeft class to the selected list item
                $(this).parent().addClass("fadeInDown");
            });
        });

        // ---------------------- DROPDOWN OPTION SA LIST OF GOVERNMENT IDS END ---------------------- //

        function updateFileName(input) {
            const fileName = input.files[0].name;
            const label = input.nextElementSibling;
            label.innerHTML = fileName;
        }
    </script>
</body>

</html>