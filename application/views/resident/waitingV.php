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
        #footer {
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

            #footer {
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

        #sakop {
            height: 100vh;
        }
    </style>

</head>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>

<body>



    <div id="sakop">

        <div id="toast-container" class="toast-top-right"></div>

        <!-- <div class="container-fluid"> -->

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

            <div class="container">
                <h1>Your Data is under checking proccess!</h1>
                <h4>Wait for 24hours to get verified your account.</h4>
                <br>
                <a href="<?= site_url('login/signout'); ?>" class="btn btn-outline-danger"> Signout</a>
            </div>
          
           

        </div>
    </div>

    <div id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="checkbox ml-3 mt-2">
                        <input type="checkbox" id="checkbox1" name="checkbox1" checked disabled>
                        <label for="checkbox1"></label>
                    </div>
                    <div class="ftr-lnks mt-2">
                        <span class="ml-2">I have read and agree to</span>
                        <a href="privacy-policy.html" class="ml-1">Privacy Policy</a>
                        <span class="ml-1">and</span>
                        <a href="terms-and-conditions.html" class="ml-1">Terms and Conditions.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-------------------------------------------------------------- Sign - Up / Registration Modal End ------------------------------------------------------------->








    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>