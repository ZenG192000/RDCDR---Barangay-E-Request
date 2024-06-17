<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">


    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css
" rel="stylesheet">



    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <!-- Add Font Awesome 6 CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" />
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">

    <style>
        /* @import url("https://fonts.googleapis.com/css?family=Raleway:400"); */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');



        body {
            font-family: 'Poppins', sans-serif;

        }


        .overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(81, 77, 74, 0.8);
            z-index: 2;
        }

        /* Content Area Styles */
        .content {
            /* margin-left: 0; */
            /* Adjusted to 0 when sidebar is open */
            transition: 0.3s;
            padding: 20px 10px;
            /* Added padding */
            z-index: 0;
            /* Adjust z-index */
        }

        /* Toggle Button Styles */
        .toggle-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            cursor: pointer;
            z-index: 3;
        }



        /* --------------------- NAV BAR HORIZONTAL -------------------- */

        #BRGY-admn-txt {
            position: relative;
            font-size: 19px;
            font-weight: bold;
            color: #000000;
            /* margin-top: -20px; */
            /* display: block; */
            /* justify-content: center; */
            /* align-items: center; */
        }

        .nav-link:hover,
        .active {
            border-bottom: 2px solid #fff;
        }


        .navbar {
            /* padding-left: 16px;
            padding-right: 16px; */

            border-radius: 0;
            background-color: #34a853;

        }

        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px;
            float: left;
            margin-right: 10px;
        }

        /* .navbar .form-inline {
            display: inline-block;
        } */



        .navbar a {
            font-size: 25px;
            /* text-transform: uppercase; */
            font-weight: bolder;
        }

        /* Smooth slide animation for navigation links */
        .navbar-nav a {
            transition: transform 0.3s ease-in-out;
            color: transparent;
            border-bottom: 2px solid transparent;

        }


        .navbar-nav a:hover,
        .navbar-nav a:focus,
        .navbar-nav a:active {
            border-bottom: 2px solid #fff;
            /* Add the bottom border for the active item */

            transform: translateY(-10px);
            justify-content: center;
            text-align: center;
            font-size: 15px;

        }


        .navbar-nav a:hover:before,
        .navbar-nav a:focus:before,
        .navbar-nav a.active:before {
            content: attr(data-text);
            color: #000;
            background-color: none;
            border-radius: 5px;
            transform: translateY(-10px);
            border-bottom: #c3c908;
            /* Remove the border on hover, focus, or active */
            display: flex;
        }

        .navbar a,
        .navbar a:active {
            /* color: #05d413; */
            padding: 8px 20px;
            /* background: transparent; */
            line-height: normal;

        }


        .line {
            position: relative;
            width: 3px;
            margin-left: 30px;
            height: 7.3rem;
            background-color: rgba(188, 188, 188, 0.539);
            /* z-index: 1; */
        }






        /* --------------------- NAV BAR HORIZONTAL END -------------------- */


        @media (max-width: 920px) {




            .navbar-nav a:hover,
            .navbar-nav a:focus,
            .navbar-nav a:active {
                position: relative;

                border-bottom: 2px solid #fff;
                transform: translateY(-10px);
                display: block;
                justify-content: center;
                text-align: center;
                font-size: 15px;

            }





            ::-webkit-scrollbar {
                width: 1px;

            }

            ::-webkit-scrollbar-thumb {
                background: #000000;
                border-radius: 5px;
                display: none;
            }





        }


        @media (max-height: 767px) {

            /* --------------------- NAV BAR HORIZONTAL -------------------- */

            .navbar .dropdown-menu.action-form {
                width: 100%;
                padding: 10px 15px;
                background: transparent;
                border: none;
            }

            /* .navbar .form-inline {
                display: block;
            } */

            .navbar .input-group {
                width: 100%;
            }

            /* --------------------- NAV BAR HORIZONTAL -------------------- */

        }






























































        #anotherIcon {
            position: relative;
            max-height: 200px;
            max-width: 200px;
            border-radius: 30px;
            top: 17px;
        }

        #admn-btn {
            position: relative;
            font-size: 20px;
            color: #000000;
            border-color: #d4d2d2;
            border-width: 1px;
            border-radius: 8px;
            /* padding: 15px 10px 15px 10px; */
            transition: background-color 0.5s;

        }


        /* --- Admin Button modified active style with hover animation --- */
        #admn-btn:active {
            box-shadow: 0 3px #666;
            transform: translateY(4px);
        }

        #brgy-frm-btn .dropdown-menu a {
            font-size: 14px;
        }

        #brgy-frm-btn .dropdown-menu a:hover {
            color: #000000;

            background-color: #34A853;
        }

        #brgy-frm-btn .dropdown-toggle::after {
            display: none;
        }

        #admin-row .dropdown a {
            font-size: 16px;
        }

        /* ---- Responsiveness for navigation bar ---- */
        @media (max-width: 767px) {

            #admin-row {
                flex-direction: row-reverse;
            }

            .navbar-toggler {
                position: absolute;
                top: 15px;
                right: 15px;
                cursor: pointer;
                z-index: 3;
            }

            .line {
                display: none;
            }

            .logo-ttl {
                position: relative;
                top: 0px;
            }

        }

        /* ---- Responsiveness for navigation bar End ---- */


        @media (max-width: 380px) {

            form {
                font-size: 10px;
            }

        }








        #DR-btn div,
        #PM-btn div,
        #ARCH-btn div {
            color: #000000;
        }



        /* .sidebar span {
            color: #000000;
            margin-left: 15px;
        } */

        .dropdown-menu a:hover {
            color: #000000;
            background-color: #34A853;
        }

        .dropdown-toggle::after {
            display: none;
        }



        /* #side-drp-dwn.dropdown-menu {
            background-color: #025719;
        }

        #side-drp-dwn .dropdown-toggle::after {
            display: none;
        } */



        /* 
        .admn-cards .card .card-body {
            padding: 50px;
            margin-bottom: 25px;
        } */





        #Anon-bx .card .card-body {
            border: 2px solid #34A853;
            background-color: #34A853;


        }






        /* ------------------------------ BARANGAY  TRACKING REQUEST DATA TABLES ------------------------------ */

        /* Customize the header background color */
        #TR-brgy-tbl th {
            background-color: #34a853;
            color: rgb(0, 0, 0);
            border: 1px solid #ffffff32;
            text-align: center;
        }

        #TR-brgy-tbl td {
            color: #000000;
        }

        /* Customize the search input */
        #TR-brgy-tbl_filter input[type="search"] {
            position: relative;
            right: 10px;
            max-width: 230px;
            padding: 5px 10px 5px 20px;
            border: 1px solid #000000;
            border-radius: 20px;
            color: rgb(252, 252, 252);
            background-color: #000000;

            transition: background-color 0.5s ease;

        }

        #TR-brgy-tbl_filter input[type="search"]:hover {
            background-color: #0000007c;
            color: rgb(255, 255, 255);
        }


        #tbl-card {
            background-color: #c3c908;
            border: 10px;
        }



        /* Change the color of the "Show" text */
        .dataTables_length label {
            color: rgb(0, 0, 0);
            margin-left: 10px;
        }

        /* Change the color of the "Entries" text */
        .dataTables_length select {
            color: rgb(255, 255, 255);
            /* background-color: #6f1b1b !important;
            border-color: #8d0b0b !important; */

        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.previous,
        .dataTables_wrapper .dataTables_paginate .paginate_button,
        .dataTables_wrapper .dataTables_paginate .paginate_button.next {
            background-color: #000000;
            border: 1px solid #000000;
            border-radius: 10px;
            padding: 5px 13px;
            color: rgb(255, 255, 255) !important;
            text-decoration: none;
            margin-right: 5px;
            transition: all 0.3s ease 0s;
            margin: 5px;
        }


        #numbering {
            width: 10px;
            /* Adjust the width as needed to match the checkbox cell */
            text-align: center;
        }

        /* ------------------------------ BARANGAY TRACKING REQUEST DATA TABLES END ------------------------------ */



        /* ------------------------------ BARANGAY  TRANSACTION HISTORY DATA TABLES ------------------------------ */

        /* Customize the header background color */
        #TH-brgy-tbl th {
            background-color: #34a853;
            color: rgb(0, 0, 0);
            border: 1px solid #ffffff32;
            text-align: center;
        }

        #TH-brgy-tbl td {
            color: #000000;
        }

        /* Customize the search input */
        #TH-brgy-tbl_filter input[type="search"] {
            position: relative;
            right: 10px;
            max-width: 230px;
            padding: 5px 10px 5px 20px;
            border: 1px solid #000000;
            border-radius: 20px;
            color: white;
            background-color: #000000;

            transition: background-color 0.5s ease;

        }

        #TH-brgy-tbl_filter input[type="search"]:hover {
            background-color: #0000007c;
            color: rgb(255, 255, 255);
        }


        #tbl-card {
            background-color: #c3c908;
            border: 10px;
        }



        /* Change the color of the "Show" text */
        .dataTables_length label {
            color: rgb(0, 0, 0);
            margin-left: 10px;
        }

        /* Change the color of the "Entries" text */
        .dataTables_length select {
            color: rgb(255, 255, 255);
            background-color: #000000 !important;
            border-color: #000000 !important;

        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.previous,
        .dataTables_wrapper .dataTables_paginate .paginate_button,
        .dataTables_wrapper .dataTables_paginate .paginate_button.next {
            background-color: #000000;
            border: 1px solid #000000;
            border-radius: 10px;
            padding: 5px 13px;
            color: rgb(255, 255, 255) !important;
            text-decoration: none;
            margin-right: 5px;
            transition: all 0.3s ease 0s;
            margin: 5px;
        }


        #numbering {
            width: 10px;
            /* Adjust the width as needed to match the checkbox cell */
            text-align: center;
        }

        /* ------------------------------ BARANGAY TRANSACTION HISTORY DATA TABLES ------------------------------ */
        #brgy-clrc input {
            border-top: none;
            border-left: none;
            border-right: none;

        }

        /* Change the border-bottom color for the input element */
        input[type="text"] {
            border: none;
            /* Remove the default border */
            border-bottom: 1.5px solid #000000;
            /* Set the border-bottom color */
        }



        hr.custom-hr {
            border-top: 1.5px solid #000000;
        }

        h1 {
            color: orange;
            text-decoration: 3px underline;
        }

        #PB {
            color: orange;
        }


        /* Change the default color for the radio button element */
        input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 15px;
            height: 15px;
            border: 1px;
            border-radius: 100%;
            outline: auto;
            margin-top: 5px;
        }


        input[type="radio"]:checked {
            background-color: #34a853;
        }

        /* Change the default color for the radio button element End */


        #fttr-text {
            position: relative;
            bottom: -103px;
            font-weight: bold;
            z-index: 1;
        }

        #scrl-pic {
            position: relative;
            bottom: -65px;
        }


        /* Define a style for the Swal.fire "Save" button */
        .swal2-confirm.btn-save {
            background-color: #34a853;
            /* Your desired color for the "Save" button (yellow in this case) */
            color: #ffffff;
            /* Text color for the "Save" button */
        }

        .swal2-confirm.btn-save:focus {
            box-shadow: 0 0 0 3px #34a8539f;
            /* Specify the desired border color when the button is active */
        }


        /* Customizing the select dropdown */
        #Frm-drp-dwn .custom-select {
            color: #ffffff;
            background-color: #34a853;
            border: 2px solid #000000;
            transition: background-color 0.3s ease;
        }

        #Frm-drp-dwn .custom-select option {
            color: #000000;
        }


        /* Hover effect for the select dropdown */
        #Frm-drp-dwn .custom-select:hover {
            background-color: rgb(255, 255, 255);
            color: #34a853;
        }


        /* Format size when printing a certificate */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .container {
                width: 100%;
                margin: 0;
                padding: 0;
            }

            .col-12 {
                padding: 20px;
            }
        }

        #PayN-mdl h5 {
            color: #34a853;
            font-weight: bold;
        }

        #PayN-mdl {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(128deg, #ffffff 65%, #34a853 40%);
        }

        #Payn-btn {
            font-weight: bold;
            border-style: none;
            color: #34a853;
            background-color: #000000;
            padding: 5px;
            width: 100px;
            margin-left: 5px;
            transition: color 0.3s linear;
            border-radius: 5px;
        }

        #Payn-btn:hover {
            color: #000000;
            background-color: #34a853;
        }


        .PayT label {
            font-weight: bold;
        }

        #PayN-Conf {
            color: #34a853;
            background-color: #000000;
            border: none;
            font-weight: bold;
            transition: color 0.3s linear;
            border-radius: 5px;
        }

        /* ------ Changing text color and background color ------- */
        #PayN-Conf:hover {
            color: #34a853;
            background-color: #ffffff;
        }



        /*       <!-- ------- GENDER RADIO BUTTON DESIGNED ------- -->       */


        #PayN-mdl .custom-radio-group {
            display: flex;
            flex-direction: row;
        }

        #PayN-mdl .custom-radio {
            display: flex;
            align-items: center;
            margin: 5px 10px;

        }

        #PayN-mdl .custom-radio input[type="radio"] {
            display: none;

        }

        #PayN-mdl .custom-radio label {
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            font-weight: bold;
        }

        #PayN-mdl .custom-radio label::before {
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

        #PayN-mdl .custom-radio input[type="radio"]:checked+label::before {
            background-color: #34a853;
        }

        /* Simple fade-in animation */
        #PayN-mdl .custom-radio label::before {
            opacity: 1;
            transition: opacity 0.3s;
        }

        #PayN-mdl .custom-radio input[type="radio"]:checked+label::before {
            opacity: 1;
        }


        /* <!-- ------- GENDER RADIO BUTTON DESIGNED END ------- --> */




        #PayN-mdl label {
            color: #34a853;
        }




        #image-plc-d {
            background-color: #34a85369 !important;
            width: 215px;
            height: 282px;
            /* padding: 30px; */
            border-radius: 20px;

        }

        #gcsh-logo {
            position: relative;
            width: 60px;
            border-radius: 60px;
            display: flex;
            justify-content: center;
            align-items: center;

            display: none;

        }

        #fileInput {
            /* width: 100%; */
            background-color: #34a85362;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }



        @media (max-width: 460px) {
            #PayN-mdl {

                background-image: linear-gradient(98deg, #ffffff 65%, #34a853 40%);
            }


            #Amnt {
                position: relative;
                padding-top: 0px;
            }


            #fileInput {
                width: 100%;
                /* Add other styles as needed */
            }

        }



        @media (min-width: 461px) and (max-width: 991px) {
            #Amnt {
                position: relative;
                padding-top: 0px;
            }



            #fileInput {
                width: 280px;
                /* Add other styles as needed */
            }


            #PayN-mdl {
                /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
                background-image: linear-gradient(118deg, #ffffff 65%, #34a853 40%);
            }


        }

        /* -------------------------------------------------------- PARA SA ANNOUCEMENTS DESIGN ----------------------------------------------------- */


        #frst-anon-pnl {
            background-color: #000000;
            height: 500px;
            width: 100%;
            position: relative;
            overflow: hidden;

            border-radius: 40px;
            border: 7px solid #ffffff12;
        }

        #frst-anon-pnl .area {
            width: 100%;
            height: 100%;
            position: relative;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            object-fit: cover;
            opacity: 0.9;

            display: flex;
            justify-self: center;
            align-self: center;

        }

        #frst-anon-pnl .area::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            animation: BG-flash 5s infinite linear;
            /* animation: flashingImages 4s infinite cubic-bezier(0.4, 0, 0.2, 1); */
        }

        @keyframes BG-flash {

            0%,
            50% {
                background-image: url('<?php echo base_url("/img/res_img/Flash card2.jpg"); ?>');
                opacity: 1;
            }

            55%,
            100% {
                background-image: url('<?php echo base_url("/img/res_img/Flash card3.jpg"); ?>');
                opacity: 1;
            }
        }



        #frst-anon-pnl .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #frst-anon-pnl .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(250, 250, 250, 0.524);
            animation: animated-BG 25s linear infinite;
            bottom: 0px;
        }


        #frst-anon-pnl .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;

            background-color: #34a853a1;

        }


        #frst-anon-pnl .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            /* animation-delay: 2s; */
            animation-delay: 0s;
            animation-duration: 12s;


        }

        #frst-anon-pnl .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            /* animation-delay: 4s; */
            animation-delay: 0s;

        }

        #frst-anon-pnl .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;

            background-color: #34a853a1;

        }

        #frst-anon-pnl .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;

            background-color: #34a853a1;

        }

        #frst-anon-pnl .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            /* animation-delay: 3s; */
            animation-delay: 0s;
        }

        #frst-anon-pnl .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            /* animation-delay: 7s; */
            animation-delay: 0s;



        }

        #frst-anon-pnl .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            /* animation-delay: 15s; */
            animation-delay: 0s;
            animation-duration: 45s;
        }

        #frst-anon-pnl .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            /* animation-delay: 2s; */
            animation-delay: 0s;
            animation-duration: 15s;



        }

        #frst-anon-pnl .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;

            background-color: #34a853a1;

        }

        @keyframes animated-BG {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(calc(-100% - 150px)) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }


        .box10:after,
        .box10:before {
            content: "";
        }


        .box10 .title {
            letter-spacing: 1px;
        }

        .box10 .title {
            text-transform: uppercase;
        }

        .box10 {
            box-shadow: 0 0 3px rgba(0, 0, 0, .3)
        }

        .box10 .icon li a {
            text-align: center;
        }


        .box10 .icon li a {
            line-height: 35px;
            border-radius: 50%;
        }

        .box10 {
            background: #000000b9;
            overflow: hidden;
            position: relative;
            border-radius: 40px;


        }

        .box10:after,
        .box10:before {
            border-width: 0 180px 140px;
            border-style: solid;
            /* border-color: transparent transparent #0d5f45; */
            border-color: transparent transparent #000000b9;
            position: absolute;
            bottom: 0;
            left: 50%;
            z-index: 1;
            transform: translateY(-55%, 100%);


            transition: all .5s 0s cubic-bezier(.6, -.28, .735, .045);
        }

        .box10:after {
            border-width: 150px 250px;
            border-color: transparent #18ab69 #18ab69 #008148;
            top: 25%;
            transform: translate(-60%, 100%);

            border-top-right-radius: 440px;



        }

        .box10:hover:before {
            transition: all .4s 0s cubic-bezier(.175, .885, .32, 1.275);
            transform: translate(-55%, 0);
            transition-delay: .2s;
        }

        .box10:hover:after {
            transition: all .4s 0s cubic-bezier(.175, .885, .32, 1.275);
            transform: translate(-60%, 0);
            transition-delay: 0s;
        }

        .box10 img {
            width: 100%;
            /* height: auto; */
            height: 50vh;

            object-fit: cover;
            /* or 'contain' depending on your preference */

            opacity: 1;
            transform: scale(1.1) translateY(3%);
            transition: all .5s ease 0s;


            border: 40px solid #ffffff;
            /* Set the border style, width, and color */
            border-radius: 120px;
            /* Optional: Add border-radius for rounded corners */



        }

        .box10:hover img {
            transform: scale(1.1) translateY(-3%);
            opacity: .4
        }

        .box10 .box-content {
            padding: 20px 0 0 20px;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            z-index: 2;
            transform: translateY(20%);
            transition: all .5s ease 0s
        }

        .box10:hover .box-content {
            opacity: 1;
            transform: translate(0);
            transition-delay: .1s
        }

        .box10 .title {
            font-size: 23px;
            font-weight: 800;
            color: #fff;
            text-shadow: 2px 2px 14px #000000;
        }

        .box10 .icon {
            padding: 0;
            margin: 0;
            list-style: none
        }

        .box10 .icon li {
            display: inline-block
        }

        .box10 .icon li a {
            display: block;
            width: 35px;
            height: 35px;
            background: #18ab69;
            font-size: 18px;
            color: #fff;
            margin-right: 10px;
            transition: all .3s ease 0s
        }


        .box10 .icon li a:hover {
            transform: rotate(360deg)
        }


        /* Existing CSS ... */

        .box10 .overlay1-text {
            position: relative;
            color: #ffffff;
            font-size: 26px;
            text-shadow: 2px 2px 4px #34a853;
            display: flex;
            justify-content: flex-end;
            /* Adjusted to flex-end for right alignment */
            align-items: center;

            bottom: 20px;
            right: 10px;
            z-index: 1;
            transform: translateX(0%);
            /* Initial position outside the box */
            transition: transform 0.5s;
            /* Added transition for smooth effect */
        }

        .box10:hover .overlay1-text {
            transform: translateX(-50%);
            transition: transform 0.5s;
            /* Move the text to its original position on hover */
        }

        /* Existing CSS ... */


        .box10 .overlay2-text {
            position: relative;

            /* left: 150px; */
            bottom: 50px;

            display: flex;
            justify-content: center;
            align-items: flex-start;

            transform: translateY(100%, 50%);
            color: #ffffff;
            /* Adjust the text color */
            font-size: 16px;
            /* Adjust the font size */
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.3s;
            width: 100%;
            height: 100%;

            z-index: 2;

        }

        .box10:hover .overlay2-text {
            opacity: 1;
        }


        @media only screen and (max-width:990px) {
            .box10 {
                margin-bottom: 20px
            }
        }

        @media only screen and (max-width:767px) and (min-width:600px) {
            .box10:before {
                border-width: 0 250px 240px
            }

            .box10:after {
                border-width: 260px 460px
            }
        }


        @media only screen and (max-width:599px) and (min-width:430px) {
            .box:before {
                border-width: 0 220px 120px
            }

            .box10:after {
                border-width: 260px 460px
            }
        }

        /* ------------------------------------------------------------- PARA SA ANNOUCEMENTS DESIGN END ---------------------------------- */

        ::placeholder {
            color: #34a853 !important;
        }

        #sttg-hdr {
            color: #34a853;
            font-weight: bold;
            font-size: 30px;

        }


        .profile-nav,
        .profile-info {
            margin-top: 30px;
        }

        .profile-nav .user-heading {
            background: #34a853;
            color: #fff;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;

            padding: 30px;

            text-align: center;


        }

        .profile-nav .user-heading.round a {
            border-radius: 50%;
            -webkit-border-radius: 50%;
            border: 10px solid rgba(255, 255, 255, 0.3);
            display: inline-block;
        }

        .profile-nav .user-heading a img {
            width: 112px;
            height: 112px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
        }

        .profile-nav .user-heading h1 {
            font-size: 22px;
            font-weight: 300;
            margin-bottom: 5px;
        }

        .profile-nav .user-heading p {
            font-size: 12px;
        }

        .profile-nav ul {
            margin-top: 1px;
        }

        .profile-nav ul>li {
            border-bottom: 1px solid #ebeae6;
            margin-top: 0;
            line-height: 30px;
        }

        .profile-nav ul>li:last-child {
            border-bottom: none;
        }

        .profile-nav ul>li>a {
            border-radius: 10px;
            -webkit-border-radius: 10px;
            color: #34a853;
            border-left: 5px solid #000000;
            padding: 20px;
        }

        .profile-nav ul>li>a:hover,
        .profile-nav ul>li>a:focus,
        .profile-nav ul li.active button {
            background: #dbdbdb !important;
            border-left: 5px solid #34a853;
            color: #000000 !important;
            text-decoration: none;
        }

        /* ----- for the last border style ------  */
        /* .profile-nav ul>li:last-child>a:last-child {
            border-radius: 0 0 4px 4px;
            -webkit-border-radius: 0 0 4px 4px;
        } */

        .profile-nav ul>li>button>i {
            font-size: 16px;
            color: #000000;
            background-color: #34a853;
            padding: 20px;
            /* margin-top: 1px; */
            border-radius: 20px;
        }




        .r-activity {
            line-height: 7px;
            padding: 5px;
            border-radius: 10px;
            background-color: #34a853;
            font-size: 12px;
            color: #000000;
            margin-top: 15px;
        }


        .p-text-area,
        .p-text-area:focus {
            border: none;
            font-weight: 300;
            box-shadow: none;
            color: #c3c3c3;
            font-size: 16px;
        }

        .profile-info .panel-footer {
            background-color: #f8f7f5;
            border-top: 1px solid #e7ebee;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .profile-info .panel-footer ul li a {
            color: #7a7a7a;
            margin: 20px;

        }

        .profile-info textarea {
            color: #000000 !important;
        }

        .bio-graph-heading {
            background: #151515;
            color: #fff;
            text-align: center;
            font-style: italic;
            padding: 20px 110px;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
            font-size: 16px;
            font-weight: 300;
        }

        .bio-graph-info {
            color: #34a853;
        }

        .bio-graph-info h1 {
            font-size: 22px;
            font-weight: 300;
            margin: 0 0 20px;
        }

        .bio-row {
            width: 50%;
            float: left;
            margin-bottom: 10px;
            padding: 0 15px;
        }

        .bio-row p span {
            width: 100px;
            display: inline-block;
        }

        .bio-chart,
        .bio-desk {
            float: left;
        }

        .bio-chart {
            width: 40%;
        }

        .bio-desk {
            width: 60%;
        }

        .bio-desk h4 {
            font-size: 15px;
            font-weight: 400;
        }

        .bio-desk h4.terques {
            color: #4CC5CD;
        }

        .bio-desk h4.red {
            color: #e26b7f;
        }

        .bio-desk h4.green {
            color: #97be4b;
        }

        .bio-desk h4.purple {
            color: #caa3da;
        }

        .file-pos {
            margin: 6px 0 10px 0;
        }

        .profile-activity h5 {
            font-weight: 300;
            margin-top: 0;
            color: #c3c3c3;
        }

        .summary-head {
            background: #ee7272;
            color: #fff;
            text-align: center;
            border-bottom: 1px solid #ee7272;
        }

        .summary-head h4 {
            font-weight: 300;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .summary-head p {
            color: rgba(255, 255, 255, 0.6);
        }

        ul.summary-list {
            display: inline-block;
            padding-left: 0;
            width: 100%;
            margin-bottom: 0;
        }

        ul.summary-list>li {
            display: inline-block;
            width: 19.5%;
            text-align: center;
        }

        ul.summary-list>li>button>i {
            display: block;
            font-size: 18px;
            padding-bottom: 5px;
        }

        ul.summary-list>li>button {
            padding: 10px 0;
            display: inline-block;
            color: #818181;
        }

        ul.summary-list>li {
            border-right: 1px solid #eaeaea;
        }

        ul.summary-list>li:last-child {
            border-right: none;
        }

        .activity {
            width: 100%;
            float: left;
            margin-bottom: 10px;
        }

        .activity.alt {
            width: 100%;
            float: right;
            margin-bottom: 10px;
        }

        .activity span {
            float: left;
        }

        .activity.alt span {
            float: right;
        }

        .activity span,
        .activity.alt span {
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            background: #eee;
            text-align: center;
            color: #fff;
            font-size: 16px;
        }

        .activity.terques span {
            background: #8dd7d6;
        }

        .activity.terques h4 {
            color: #8dd7d6;
        }

        .activity.purple span {
            background: #b984dc;
        }

        .activity.purple h4 {
            color: #b984dc;
        }

        .activity.blue span {
            background: #90b4e6;
        }

        .activity.blue h4 {
            color: #90b4e6;
        }

        .activity.green span {
            background: #aec785;
        }

        .activity.green h4 {
            color: #aec785;
        }

        .activity h4 {
            margin-top: 0;
            font-size: 16px;
        }

        .activity p {
            margin-bottom: 0;
            font-size: 13px;
        }

        .activity .activity-desk i,
        .activity.alt .activity-desk i {
            float: left;
            font-size: 18px;
            margin-right: 10px;
            color: #bebebe;
        }

        .activity .activity-desk {
            margin-left: 70px;
            position: relative;
        }

        .activity.alt .activity-desk {
            margin-right: 70px;
            position: relative;
        }

        .activity.alt .activity-desk .panel {
            float: right;
            position: relative;
        }

        .activity-desk .panel {
            background: #F4F4F4;
            display: inline-block;
        }


        .activity .activity-desk .arrow {
            border-right: 8px solid #F4F4F4 !important;
        }

        .activity .activity-desk .arrow {
            border-bottom: 8px solid transparent;
            border-top: 8px solid transparent;
            display: block;
            height: 0;
            left: -7px;
            position: absolute;
            top: 13px;
            width: 0;
        }

        .activity-desk .arrow-alt {
            border-left: 8px solid #F4F4F4 !important;
        }

        .activity-desk .arrow-alt {
            border-bottom: 8px solid transparent;
            border-top: 8px solid transparent;
            display: block;
            height: 0;
            right: -7px;
            position: absolute;
            top: 13px;
            width: 0;
        }

        .activity-desk .album {
            display: inline-block;
            margin-top: 10px;
        }

        .activity-desk .album a {
            margin-right: 10px;
        }

        .activity-desk .album a:last-child {
            margin-right: 0px;
        }



        #brgy-sttg-btn {
            color: #000000;
            background-color: #34a853;
            border-color: transparent;
            font-size: 16px;
            font-weight: bold;
        }

        #brgy-sttg-btn:hover {

            background-color: #000000;
            color: #34a853;
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



        #sttg-sv {
            color: #34a853;
            background-color: #000000;
            font-weight: bold;
            border-color: #000000;
        }

        #sttg-sv:hover {
            background-color: #34a853;
            color: #000000;
        }
    </style>
</head>

<body>
    <?php

    if ($this->session->userdata('user_info')) {
        $user_info = $this->session->userdata('user_info');
    }
    ?>





    <!-- <div class="container-fluid"> -->

    <nav class="navbar navbar-expand-lg navbar-light">

        <a href="#" class="navbar-brand">
            <img id="section-logo" src="<?= base_url('img/systemimg/logo.png') ?>" width="100px" alt="">
            <!-- <span id="BRGY-admn-txt">Barangay e-Request</span> -->
        </a>
        <span id="BRGY-admn-txt">Barangay e-Request</span>



        <div class="line"></div>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">

            <div class="navbar-nav col-md-10 justify-content-center">
                <!-- <a href="#section1" class="nav-item nav-link active"><i class="fas fa-home"></i> HOME</a> -->

                <div class="col-md-2">
                    <a href="<?= site_url('resident/index'); ?>" class="nav-item nav-link" data-text="Dashboard"> <i class="fa-regular fa-chart-line"></i></a>
                </div>

                <div class="col-md-2">
                    <a href="<?= site_url('resident/BDocs'); ?>" class="nav-item nav-link" data-text="Barangay Documents">
                        <i class="fa-duotone fa-file-lines"></i></a>
                </div>

                <div class="col-md-2">
                    <a href="<?= site_url('resident/ManageTrack'); ?>" class="nav-item nav-link" data-text="Tracking Request"><i class="fa-sharp fa-solid fa-clipboard-list-check"></i></a>
                </div>

                <div class="col-md-2">
                    <a href="<?= site_url('resident/ManageTrans'); ?>" class="nav-item nav-link" data-text="Transaction History"><i class="fas fa-history"></i></a>
                </div>

                <!-- <a href="#section6" class="nav-item nav-link"><i class="fas fa-address-book"></i> CONTACTS</a> -->
            </div>





            <div class="row" id="admin-row">
                <div class="dropdown">
                    <button type="button" id="admn-btn" class="btn dropdown-toggle text-right text-md-left" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= base_url('img/userimg/' . $user_info->Pimage) ?>" alt="User" class="img-fluid" style="max-width: 50px; max-height: 50px; border-radius: 50%;"><?= $user_info->Firstname . ' ' . $user_info->Surname ?>
                    </button>

                    <div class="mr-0">
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" id="brgy-sttg-btn" data-toggle="modal" data-target="#staticBackdrop" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" onclick="confirmSignOut();" href="#">Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="sttg-hdr" aria-hidden="true">


                <!-- </div> -->


                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="modal-title" id="sttg-hdr">SETTINGS</div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="updatePForm">
                            <div class="modal-body mdl-bdy-one">


                                <div class="container bootstrap snippets bootdey">
                                    <div class="row">


                                        <div class="profile-nav col-lg-4">

                                            <div class="panel">



                                                <div class="user-heading round">

                                                    <a href="#">
                                                        <img id="profile-image" name="profile-image" src="<?= base_url('img/userimg/' . $user_info->Pimage) ?>" alt="">
                                                    </a>
                                                    <h1 class="mt-4"><?= $user_info->Firstname . ' ' . $user_info->Surname ?></h1>
                                                    <p><?= $user_info->Email ?></p>

                                                    <div class="input-group">
                                                        <!-- <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div> -->
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="changeImage()">
                                                            <label class="custom-file-label row ml-1" for="inputGroupFile01">
                                                                Choose file
                                                                <!-- <span class="row ml-1">Change image?</span> -->
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="">
                                                        <!-- <a href="#"> <i class="fa fa-user"></i> Profile</a> -->
                                                        <a id="profile-btn" class="btn btn-link"> <i class="fa fa-user"></i>
                                                            Profile</a>
                                                    </li>

                                                    <li>
                                                        <!-- <a href="#"> <i class="fa fa-edit"></i> Edit profile</a> -->
                                                        <a id="edit-profile-btn" class="btn btn-link"> <i class="fa fa-edit"></i>
                                                            Edit profile</a>
                                                    </li>

                                                    <li>
                                                        <!-- <a href="#"> <i class="fa fa-edit"></i> Edit profile</a> -->
                                                        <a id="chnge-passw-btn" class="btn btn-link"> <i class="fa fa-edit"></i>
                                                            Change <br> <span style="left: 35px; position: relative;">Password</span>
                                                        </a>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>


                                        <div class="profile-info col-lg-8">
                                            <!-- <div class="panel">
                                    <form>
                                        <button id="sttg-pst" class="btn btn-success pull-right">Post</button>
                                        <textarea placeholder="Whats in your mind today?" rows="2"
                                            class="form-control input-lg p-text-area mb-3"></textarea>
                                    </form>

                                    <footer class="panel-footer">                     
                                        <ul class="nav nav-pills">
                                            <li>
                                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-camera"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class=" fa fa-film"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-microphone"></i></a>
                                            </li>
                                        </ul>
                                    </footer>

                                </div> -->
                                            <div class="panel">
                                                <!-- <div class="bio-graph-heading">
                                        TO HAVE A MEANS OF LIVELIHOOD THAT WILL UPLIFT THE
                                        LIVES OF SOCIETY TOWARD TO A BETTERMENT OF LIVE AS A
                                        BARANGAY.
                                    </div> -->

                                                <div class="panel-body bio-graph-info">
                                                    <h1 class=" font font-weight-bold">Bio Graph</h1>


                                                    <div class="form-row mb-3">
                                                        <div class=" col-md-3 font-weight-bold">
                                                            <label for="fullname">Full Name</label>
                                                            <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Surname" value="<?= $user_info->Surname ?>" />
                                                        </div>

                                                        <div class=" col-md-5">
                                                            <label for="fullname"></label>
                                                            <input type="text" class="form-control mt-2" id="Firstname" name="Firstname" placeholder="First Name" value="<?= $user_info->Firstname ?>" />
                                                        </div>

                                                        <div class=" col-md-4">
                                                            <label for="fullname"></label>
                                                            <input type="text" class="form-control mt-2" id="Middlename" name="Middlename" placeholder="Middle Name" value="<?= $user_info->Middlename ?>" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group font-weight-bold">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control col-8" id="Email" name="Email" placeholder="Enter Email" value="<?= $user_info->Email ?>" />

                                                    </div>



                                                    <div class="form-row">

                                                        <div class="form-group col-md-5 font-weight-bold">
                                                            <label for="dateOfBirth">Date of Birth:</label>
                                                            <div class="input-group">
                                                                <input type="text" id="dateOfBirth" name="dateOfBirth" class="form-control" value="<?= $user_info->Birthday ?>" onchange="calculateAge()">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="calendar-icon">
                                                                        <!-- <i class="fas fa-calendar"></i> -->
                                                                        <i id="calendar-icon" class="fa-duotone fa-calendars fa-lg"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <!-- <div class="form-row"> -->
                                                        <div class="form-group col-2 font-weight-bold">
                                                            <label for="age">Age</label>
                                                            <input type="text" class="form-control" id="Age" name="Age" placeholder="Age" value="<?= $user_info->Age ?>" readonly />
                                                        </div>




                                                        <div class="form-group col-md-5 ">
                                                            <label class="font-weight-bold">Gender</label>

                                                            <div class="row">

                                                                <div class="form-group col-5">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" <?= ($user_info->Gender == 'Male') ? 'checked' : '' ?> />
                                                                        <label class="form-check-label ml-2" for="male">Male</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-4">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" <?= ($user_info->Gender == 'Female') ? 'checked' : '' ?> />
                                                                        <label class="form-check-label ml-2" for="female">Female</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- </div> -->



                                                    </div>


                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>


                            </div>





                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                                <button id="sttg-sv" type="submit" class="btn btn-success">SAVE</button>
                            </div>
                        </form>


                        <form id="updatePass">
                            <div class="modal-body mdl-bdy-two" style="padding-top: 0%;">


                                <div class="container bootstrap snippets bootdey">
                                    <div class="row">


                                        <div class="profile-nav col-lg-4">
                                            <div class="panel">



                                                <div class="user-heading round">

                                                    <a href="#">
                                                        <img id="profile-image-two" src="<?= base_url('img/userimg/' . $user_info->Pimage) ?>" alt="">
                                                    </a>
                                                    <h1 class="mt-4"><?= $user_info->Firstname . ' ' . $user_info->Surname ?></h1>
                                                    <p><?= $user_info->Email ?></p>
                                                    <input type="text" name="UserID" id="UserIDko" value="<?= $user_info->UserID ?>" hidden>
                                                    <div class="input-group">
                                                        <!-- <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div> -->

                                                    </div>

                                                </div>

                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="">
                                                        <!-- <a href="#"> <i class="fa fa-user"></i> Profile</a> -->
                                                        <a id="profile-btn" class="btn btn-link"> <i class="fa fa-user"></i>
                                                            Profile</a>
                                                    </li>

                                                    <li>
                                                        <!-- <a href="#"> <i class="fa fa-edit"></i> Edit profile</a> -->
                                                        <a id="edit-profile-btn" class="btn btn-link"> <i class="fa fa-edit"></i>
                                                            Edit profile</a>
                                                    </li>

                                                    <li>
                                                        <!-- <a href="#"> <i class="fa fa-edit"></i> Edit profile</a> -->
                                                        <a id="chnge-passw-btn" class="btn btn-link"> <i class="fa fa-edit"></i>
                                                            Change <br> <span style="left: 35px; position: relative;">Password</span></a>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>


                                        <div class="profile-info col-lg-8">
                                            <!-- <div class="panel">
                                    <form>
                                        <button id="sttg-pst" class="btn btn-success pull-right">Post</button>
                                        <textarea placeholder="Whats in your mind today?" rows="2"
                                            class="form-control input-lg p-text-area mb-3"></textarea>
                                    </form>

                                    <footer class="panel-footer">                     
                                        <ul class="nav nav-pills">
                                            <li>
                                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-camera"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class=" fa fa-film"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-microphone"></i></a>
                                            </li>
                                        </ul>
                                    </footer>

                                </div> -->
                                            <div class="panel">
                                                <!-- <div class="bio-graph-heading">
                                        TO HAVE A MEANS OF LIVELIHOOD THAT WILL UPLIFT THE
                                        LIVES OF SOCIETY TOWARD TO A BETTERMENT OF LIVE AS A
                                        BARANGAY.
                                    </div> -->

                                                <div class="panel-body bio-graph-info">
                                                    <h1 class=" font font-weight-bold">Change your Password</h1>




                                                    <!-- <div class="form-group font-weight-bold">
                                        <label for="email">Email or Mobile Number</label>
                                        <input type="text" class="form-control col-8" id="email"
                                            placeholder="Enter Email or Mobile Number" />

                                    </div> -->


                                                    <div class="form-group font-weight-bold">
                                                        <label for="password">Current Password</label>
                                                        <input type="password" class="form-control col-8" id="currentpassword1" name="Password1" placeholder="Current Password" />
                                                    </div>


                                                    <div class="form-group font-weight-bold">
                                                        <label for="password">New Password</label>
                                                        <input type="password" class="form-control col-8" id="newpassword1" name="newPassword1" placeholder="New Password" />
                                                    </div>

                                                    <div class="form-group font-weight-bold">
                                                        <label for="confirmPassword">Confirm New Password</label>
                                                        <input type="password" class="form-control col-8" id="cnewpassword1" placeholder="Confirm New Password" />
                                                    </div>






                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="modal-footer" style="border: none;">

                                <button id="CPas-sv" type="submit" class="btn btn-success" style=" color: #34a853;
                background-color: #000000;
                font-weight: bold;
                border-color: #000000;">SAVE
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </nav>