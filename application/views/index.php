<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDCDR | BARANGAY ONLINE SYSTEM</title>

    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- for ABOUT US SECTION -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Custom CSS for styling -->
    <style>
        /* FontAwesome for working BootSnippet :> */
        @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

        body {
            background-color: #f0f0f0;
            overflow: hidden;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        .scroll-link {
            transition: all 0.3s ease-in-out;
        }

        .scroll-link:hover {
            color: #34a853;
        }

        /* h1,
        p {
            position: relative;
            top: 30px;
        } */

        /* Style the navbar */
        .navbar {
            background-color: #34a853;
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
        /* .section {
            height: 100vh;

        } */

        /* .section1 {
            background-color: #34a853;
            color: white;
            height: 100vh;
        } */

        /* ------------------------- SECTION 2 -------------------- */

        .section2 {
            background-color: #34a853;
            color: #ffffff;
            /* margin-top: 10px; */
            height: 100%;
        }

        .section2 h1 a {
            position: relative;
            text-align: center;
            color: #ffffff;
            margin-bottom: 40px;
            background-color: #00000089;
            text-shadow: 4px 4px 40px rgb(0, 0, 0);
            padding: 20px;
            /* text-transform: uppercase; */
            transition: color 0.3s linear;
        }

        .section2 h1 a:hover {
            color: white;
        }

        /* .section2 #frst-anon-pnl {
            background-color: #000000;
            height: 300px;
        } */



        #W-Left {
            background-color: rgb(255, 255, 255);
            height: 300px;
        }

        #B-mid {
            background-color: #000000;
            height: 300px;
        }

        #W-Right {
            background-color: rgb(255, 255, 255);
        }

        /* --------------------------- SECTION 2 End ---------------------- */




        /* --------------------------- SECTION 3 ---------------------- */

        .section3 {
            background-color: #ffffff;
            color: #34a853;
            margin-top: 10px;
            height: 100%;
        }

        .section3 h1 {
            text-align: center;
        }

        .section3 h1 a {
            position: relative;
            text-align: center;
            color: #34a853;
            margin-bottom: 40px;
            background-color: #00000089;
            text-shadow: 4px 4px 40px rgb(0, 0, 0);
            padding: 20px;
            /* text-transform: uppercase; */
            transition: color 0.3s linear;
        }

        .section3 h1 a:hover {
            color: white;
        }


        /* --------------------------- SECTION 3 END ---------------------- */

        /* --------------------------- SECTION 4 ---------------------- */

        .section4 {
            background-color: #ffffff;
            /* color: #34A853; */
            margin-top: 10px;
            height: 100%;
            /* padding-bottom: 50px; */
        }

        .section4 img {
            position: relative;
            height: 40%;
            width: 40%;
            left: 30%;
        }

        .section4 h1 a {
            position: relative;
            text-align: center;
            color: #34a853;
            margin-bottom: 40px;
            background-color: #00000089;
            text-shadow: 4px 4px 40px rgb(0, 0, 0);
            padding: 20px;
            /* text-transform: uppercase; */
            transition: color 0.3s linear;
        }

        .section4 h1 a:hover {
            color: white;
        }

        .section4 h4,
        h5 {
            position: relative;
            text-align: center;
        }

        /* .brgy-ofc :where(#BRGY1, #BRGY2, #BRGY3, #BRGY4, #BRGY5) {
            position: relative;
            height: 100%;
        } */

        /* --------------------------- SECTION 4 END ---------------------- */

        .section5 {
            background-color: #2ecc71;
            color: white;
            margin-top: 10px;
            height: 100vh;
        }

        .section6 {
            background-color: #2ecc71;
            color: white;
            margin-top: 10px;
            height: 100vh;
        }


        /* -------------------------------------- SIGN-IN & SIGN-UP ------------------------------ */

        /* -------- SIGN-IN & SIGN-UP CLOSE BUTTON ------- */

        #SignUpModal .close,
        #SignInModal .close {
            position: relative;
            top: -40px;
        }

        #sgn-mdl {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(128deg, #ffffff 65%, #34a853 40%);
        }

        #SU-btn {
            font-weight: 500;
            border-style: none;
            color: #34a853;
            background-color: #ffffff;
            padding: 5px;
            width: 100px;
            margin-left: 5px;
        }

        #SI-btn {
            font-weight: 500;
            border-style: none;
            color: #34a853;
            background-color: #000000;
            padding: 5px;
            width: 100px;
            margin-left: 5px;
        }

        #SULabel {
            color: #34a853;
        }

        #SILabel {
            color: #34a853;
        }

        #crt-acc {
            position: relative;
            color: #34a853;
            background-color: #000000;
            font-weight: 500;
        }

        #SI-lgn {
            color: #34a853;
            background-color: #000000;
            font-weight: 500;
        }

        #crt-new-acc {
            position: relative;
            color: #000000;
            background-color: #34a853;
            font-weight: 500;
        }

        #frgt-pass {
            position: relative;
            color: #34a853;
            /* top: -40px; */
            /* left: 20px; */
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
            overflow-y: scroll;
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
            margin: -8px;
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
            transform: translateY(-10px);
            font-weight: 500;
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
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
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

            color: #666;
            padding: 0 8px;
            width: 30px;
            height: 30px;
            font-size: 13px;
            text-align: center;
            line-height: 26px;
            background: #34a853;
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

        .modal-body::placeholder {
            color: #34a853;
        }

        /* Change the color of all placeholder texts */

        /* Change the color of placeholder text */
        ::placeholder {
            color: #34a853 !important;
            /* Change the color to your preferred color */
        }

        /* ------------------------------------------------------------------ ABOUT US SECTION -------------------------------------------------------------- */



        .panel-heading:hover {
            cursor: pointer;
        }

        .panel-heading {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .side-tab:hover {
            cursor: pointer;
        }

        .panel.panel-default {
            border: none;
            box-shadow: none !important;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        .panel-heading {
            border: none;
            background-color: #34a853;
            color: #000000;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px 0px 5px;
            margin-bottom: 5px;
        }

        .panel-body {
            background-color: #000000;
            color: #ffffff;
            padding: 5px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 30px;

            max-height: 300px;
            /* Set your desired maximum height */
            overflow-y: auto;
            /* Add a vertical scrollbar when content exceeds the maximum height */
        }

        /* .panel-group {
            position: relative;
  
            margin-top: 100px;
            left: 70px;
        } */

        .panel-title {
            text-align: center;
        }

        .md-macbook-pro {
            display: block;
            width: 55.3125em;
            height: 31.875em;
            font-size: 13px;
            margin: 0 auto;
            /* margin-top: 90px; */
        }

        /* ---- YUNG FONT-SIZE DITO SIYA YUNG TRIGGER NG RESPONSIVENESS NUNG DESKTOP 
                Kase yung em nag multiply siya sa fontsize ----- */
        @media (max-width: 1199px) {
            .md-macbook-pro {
                font-size: 11px;
            }
        }

        @media (max-width: 1024px) {
            .md-macbook-pro {
                font-size: 10px;
            }

            /* .panel-group {
                position: relative;
                margin-right: 30px;
                left: 20px;
            } */
        }

        @media (min-width: 767px) and (max-width: 890px) {
            .md-macbook-pro {
                font-size: 8px;
            }

            /* .panel-group {
                position: relative;
                margin-right: 120px;
            } */

            /* .panel-title {
            text-align: center;
        } */
        }

        @media (max-width: 630px) {
            .md-macbook-pro {
                font-size: 7px;
            }

            /* .panel-group {
                position: relative;
                margin-right: 90px;
            } */
        }

        @media (max-width: 460px) {
            .md-macbook-pro {
                font-size: 4px;
            }
        }

        /* ---- YUNG FONT-SIZE DITO SIYA YUNG TRIGGER NG RESPONSIVENESS NUNG DESKTOP ----- */

        .md-macbook-pro .md-lid {
            width: 100%;
            /* max-width: 55em; */
            height: 40.625em;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            border-radius: 1.875em;
            border: solid 0.1875em #cdced1;
            background: #131313;


        }

        .md-macbook-pro .md-camera {
            width: 1.375em;
            height: 1.375em;
            margin: 0 auto;
            position: relative;
            top: 1.0625em;
            background: #000;
            border-radius: 100%;
            box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.25);
        }

        .md-macbook-pro .md-camera:after {
            content: "";
            display: block;
            width: 1.125em;
            height: 1.125em;
            position: absolute;
            left: 0.125em;
            top: 0.0625em;
            background: #353542;
            border-radius: 100%;
        }

        .md-macbook-pro .md-screen {
            width: 98%;
            /* width: 52.25em; */
            height: 33.375em;
            margin: 0 auto;
            position: relative;
            top: 2.0625em;
            background: #1d1d1d;
            background: #fff;
            overflow: hidden;
        }

        .md-macbook-pro .md-screen img {
            width: 100%;
        }

        .md-macbook-pro .md-base {
            width: 100%;
            height: 0.9375em;
            position: relative;
            top: -0.75em;
            background: #c6c7ca;
        }

        .md-macbook-pro .md-base:after {
            content: "";
            display: block;
            width: 100%;
            height: 0.5em;
            margin: 0 auto;
            position: relative;
            bottom: -0.1875em;
            background: #b9babe;
            border-radius: 0 0 1.25em 1.25em;


        }

        .md-macbook-pro .md-base:before {
            content: "";
            display: block;
            width: 30%;
            /* width: 7.6875em; */
            height: 0.625em;
            margin: 0 auto;
            position: relative;
            background: #a6a8ad;
            border-radius: 0 0 0.625em 0.625em;
        }

        .md-macbook-pro.md-glare .md-lid:after {
            content: "";
            display: block;
            width: 100%;
            /* height: 100%; */
            /* position: absolute; */
            position: relative;
            top: 0;
            right: 0;
            border-radius: 0 1.25em 0 0;

            /* ---------------- Coded laptop Frame Design ----------------- */
            background: -webkit-linear-gradient(37deg,
                    rgba(255, 255, 255, 0) 50%,
                    rgba(247, 248, 240, 0.025) 50%,
                    rgba(250, 245, 252, 0.08));
            background: -moz-linear-gradient(37deg,
                    rgba(255, 255, 255, 0) 50%,
                    rgba(247, 248, 240, 0.025) 50%,
                    rgba(250, 245, 252, 0.08));
            background: -o-linear-gradient(37deg,
                    rgba(255, 255, 255, 0) 50%,
                    rgba(247, 248, 240, 0.025) 50%,
                    rgba(250, 245, 252, 0.08));
            background: linear-gradient(53deg,
                    rgba(255, 255, 255, 0) 50%,
                    rgba(247, 248, 240, 0.025) 50%,
                    rgba(250, 245, 252, 0.08));
        }

        #Lap-top {
            margin-bottom: 220px;
        }


        /* ---------------- Coded laptop Frame Design End ----------------- */

        .slider-container {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .slider {
            display: flex;
            transition: transform 0.5s;
        }

        .slide {
            flex: 0 0 100%;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        /* .slidy-btn {
            position: absolute;
            right: 20px;
            z-index: 1;
        } */

        .prev-button {
            font-weight: 500;
            border-style: none;
            color: #34a853;
            background-color: #000000;
            padding: 5px;
            width: 100px;
            /* margin-left: 5px; */
        }

        .next-button {
            font-weight: 500;
            border-style: none;
            color: #ffffff;
            background-color: #34a853;
            padding: 5px;
            width: 100px;
            /* margin-left: 5px; */
        }


        .swiper-button-prev::after,
        .swiper-button-next::after {
            display: none;
        }

        /* 
        .tab-container img {
            height: 700px;
        } */

        /* ------------------------------------------------------------------ ABOUT US SECTION END -------------------------------------------------------------- */








        /* -------------------------------------------------------------------- BARANGAY OFFICIALS SECTION -------------------------------------------------------------- */

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #8d4410;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007b5e;
            border-color: #007b5e;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: 0.25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 320px;
            min-width: 219px;
            background-color: #ffffffde;
        }

        .backside h4 {
            top: 100px;
            /* font-size: 18px; */
            /* color: #007b5e !important; */
        }

        .frontside .card .card-title,
        .backside .card .card-title {
            color: #007b5e !important;
        }

        .frontside .card .card-body img {
            /* width: 520px;
            height: 120px; */
            border-radius: 50px;
        }

        /* -------------------------------------------------------------------- BARANGAY OFFICIALS SECTION END -------------------------------------------------------------- */

        @media (min-width: 993px) and (max-width: 1300px) {
            .form-inline .input-group {
                width: 300px;
                /* margin-left: 30px; */
            }

            .frontside .card,
            .backside .card {
                min-height: 310px;
                min-width: 140px;
                background-color: #ffffffde;
            }

            .brgy-ofc {
                position: relative;
                right: 35px;
            }
        }

        @media (min-width: 900px) and (max-width: 992px) {

            .frontside .card,
            .backside .card {
                min-height: 225px;
                min-width: 100px;
                background-color: #ffffffde;
            }

            #BRGY5,
            #BRGY10 {
                position: relative;
                right: 5px;
            }

            .section4 h4 {
                font-size: 14px;
            }

            .brgy-ofc {
                position: relative;
                right: 35px;
            }
        }

        @media (min-width: 768px) and (max-width: 899px) {

            .frontside .card,
            .backside .card {
                min-height: 225px;
                min-width: 100px;
                background-color: #ffffffde;
            }

            #BRGY5,
            #BRGY10 {
                left: 48px;
            }

            .section4 h4 {
                font-size: 14px;
            }
        }

        @media (max-width: 767px) {
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
                color: #34a853;
                /* top: -40px; */

            }
        }









        /* ----- Footer modified text using pseudo ----- */
        .bg-grey {
            background: #292929;
        }

        footer h5 {
            /* font-family: 'Playfair Display', serif; */
            margin-bottom: 40px;
            position: relative;
        }

        footer h5:after {
            position: absolute;
            content: "";
            background: grey;
            width: 70%;
            height: 1px;
            left: 0;
            bottom: -20px;
        }


        footer .social .fa {
            color: #34a853;
            background-color: #000000;
            /* color: rgb(195, 195, 195); */
            font-size: 22px;
            padding: 15px;
            /* background: #3c3c3c; */
            border-radius: 50px;
            transition: color 0.5s linear;
        }

        footer .social .fa:hover {
            color: #000000;
            background-color: #34a853;
        }


        footer {
            color: rgb(195, 195, 195);
        }

        footer ul li {
            /* list-style: none; */
            display: block;
        }

        footer ul {
            padding-left: 0;
        }

        footer a {
            /* text-decoration: none; */
            color: rgb(195, 195, 195);
        }

        footer a:hover {
            text-decoration: none;
            color: #34a853 !important;
        }

        .logo-part {
            border-left: 1px solid grey;
            height: 100%;
        }

        #W-foot a {
            color: #000000;
        }

        /* ----- Footer modified text using pseudo End ----- */
















        /* * {
            margin: 0;
            padding: 0;
            background-color: #2f2f2f;
        } */

        /* .mainlarge {
            height: 100%;
            width: 100%;
            position: relative;
        }

        .d1 {
            position: absolute;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;

            height: 30%;
            width: 15vw;

            background-position: 0 50%;

            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.8);
            top: 50%;
            transform: translateY(-50%);
            z-index: 4;
            animation: dd1 10s 1, dd12 10s 1;
            animation-delay: 4s, 14s;
        }

        .d2 {
            position: absolute;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;

            height: 50%;
            width: 25vw;

            background-position: -10vw 50%;
            left: 10vw;

            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            animation: dd2 10s 2;
            animation-delay: 4s;
        }

        .d3 {
            position: absolute;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;
            overflow: hidden;

            height: 100%;
            width: 40vw;
            left: 25vw;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.8);
            background-position: -35vw 50%;

            top: 50%;
            transform: translateY(-50%);
            z-index: 3;
            animation: dd3 10s 2;
            animation-delay: 4s;
        }

        .d4 {
            position: absolute;
            overflow: hidden;
            background-image: url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);
            background-size: 2700px 1500px;

            height: 80%;
            width: 25vw;
            left: 60vw;
            background-position: -70vw 50%;

            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            animation: dd4 10s 2;
            animation-delay: 4s;
        }

        @keyframes dd1 {

            0%,
            100% {
                width: 15vw;
            }

            50% {
                width: 100%;
            }
        }



        @keyframes dd12 {
            0% {}

            50% {
                background-position: Calc(0vw - 40px) 50%;
            }
        }

        @keyframes dd2 {
            0% {}

            50% {
                background-position: Calc(-10vw - 40px) 50%;
            }
        }

        @keyframes dd3 {
            0% {}

            50% {
                background-position: Calc(-35vw - 40px) 50%;
            }
        }

        @keyframes dd4 {
            0% {}

            50% {
                background-position: Calc(-70vw - 40px) 50%;
            }
        } */











        /* .area {
            background: #4e54c8;
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
            width: 100%;
            height: 100%;

            overflow: hidden;

        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animated-BG 25s linear infinite;
            bottom: 0px;

        } */





















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
            animation: BG-flash 7s infinite linear;
            /* animation: flashingImages 4s infinite cubic-bezier(0.4, 0, 0.2, 1); */
        }

        @keyframes BG-flash {

            0%,
            100% {
                background-image: url('<?php echo base_url("/img/res_img/Flash card1.jpg"); ?>');
                opacity: 1;
            }

            40% {
                background-image: url('<?php echo base_url("/img/res_img/Flash card2.jpg"); ?>');
                opacity: 1;
            }

            60% {
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











        #BO-img {
            height: 100px;
            width: 80px;
            border: 2px solid #00000068;
            border-radius: 20px;
        }


        /* ----------------------------------- FORGOT PASSWORD CSS -------------------------------------- */

        #frgt-p-mdl {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(128deg, #ffffff 65%, #34a853 40%);
        }

        #eml-snt {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(128deg, #ffffff 65%, #34a853 40%);
        }

        #Frgt-P-Label {
            color: #34a853;
        }

        #sty-eml {
            position: relative;
            color: #000000;
            background-color: #34a853;
            font-weight: 500;
        }

        #changePasswordNowBtn {
            color: #34a853;
            background-color: #000000;
            font-weight: 500;
        }

        #frgt-pass {
            position: relative;
            color: #000000;
        }

        .line {
            position: relative;
            height: 1px;
            background-color: #b6b6b6;
        }


        #sty-eml:hover {
            color: #34a853;
            background-color: #000000;
        }

        #changePasswordNowBtn:hover {
            color: #000000;
            background-color: #34a853;
        }

        #password-container {
            position: relative;
        }

        #show-password-icon,
        #hide-password-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #hide-password-icon {
            display: none;
        }

        .input-group {
            width: 100%;
        }

        .input-group-text {
            background: transparent;
            border: none;
            color: red;
        }

        /* ------------------------------------ FORGOT PASSWORD CSS END ----------------------------------------- */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#" class="navbar-brand">
            <img id="section-logo" src="<?= base_url('img/systemimg/logo.png') ?>" width="100px" alt="" />
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <!-- <a href="#section1" class="nav-item nav-link active">HOME</a> -->
                <a href="#section2" class="nav-item nav-link active">ANNOUNCEMENTS</a>
                <a href="#section3" class="nav-item nav-link">ABOUT US</a>
                <a href="#section4" class="nav-item nav-link">BARANGAY OFFICIALS</a>
                <!-- <a href="#section5" class="nav-item nav-link">e-SERVICES</a> -->
                <!-- <a href="#section6" class="nav-item nav-link">CONTACTS</a> -->
            </div>

            <div class="navbar-nav ml-auto action-buttons">
                <button type="button" id="SU-btn" data-toggle="modal" data-target="#SignUpModal">
                    Sign Up
                </button>
                <button type="button" id="SI-btn" data-toggle="modal" data-target="#SignInModal">
                    Sign In
                </button>
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
                                <label for="fullname">Full Name</label> <span style="color: red;"> *</span>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname (Suffix)">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="fullname"></label>
                                <input type="text" class="form-control mt-2" id="firstname" name="firstname" placeholder="First Name">
                            </div>


                            <div class="form-group col-md-3">
                                <label for="fullname"></label>
                                <input type="text" class="form-control mt-2" id="middlename" name="middlename" placeholder="Middle Name (Optional)">
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="email">Email</label><span style="color: red;"> *</span>
                            <input type="email" class="form-control col-8" id="email" name="email" placeholder="Email Address">

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label> <span style="color: red;"> *</span>
                            <input type="password" class="form-control col-8" id="password" name="password" placeholder="Create Password">

                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label><span style="color: red;"> *</span>
                            <input type="password" class="form-control col-8" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">

                        </div>


                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="month">Date of Birth</label><span style="color: red;"> *</span>
                                <input type="date" class="form-control" id="birthday" name="birthday" onchange="calculateAge();">
                            </div>
                        </div>






                        <div class="form-row">
                            <div class="form-group col-2">
                                <label for="age">Age</label><span style="color: red;"> *</span>
                                <input type="text" class="form-control" id="age" name="age" placeholder="Age" readonly>
                            </div>



                            <div class="form-group">

                                <div class="form-group col">
                                    <label>Gender</label><span style="color: red;"> *</span>

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


    <!-- -----------------------------------------------------------------  Forgot Password  ----------------------------------------------------------- -->

    <div class="modal fade" id="Frgt-P-Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="Frgt-P-Modal" aria-hidden="true">


        <div class="modal-dialog modal-md" role="document">
            <div id="frgt-p-mdl" class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="Frgt-P-Label">Forgot your password?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="FormReset">
                        <div class="form-group">
                            <label for="email">Enter your email</label>
                            <input type="email" class="form-control col-7" id="REmail" placeholder="Your email address here" required />
                        </div>

                        <div class="line mb-3"></div>

                        <div class="form-group">
                            <div class="text-start">

                                <button type="submit" id="sty-eml" data-toggle="modal" class="btn btn-primary col-5">
                                    Send to your email
                                </button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>


    <!---------------------------- Toast message " Success! Email sent!" ---------------------------->
    <div class="modal fade" id="eml-snt-Modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="eml-snt" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #34a853;">Successfully!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row justify-content-center">
                    <h3>Email has been sent!</h3>
                </div>
                <div class="container py-4 row justify-content-center">
                    <button id="changePasswordNowBtn" type="button" class="btn btn-primary">Change Password now</button>
                </div>
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
                    <form id="loginForm">

                        <div class="form-group">
                            <label for="email">Email or Mobile Number</label>
                            <input type="text" class="form-control col-7" id="Lemail" name="Lemail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div id="password-container">
                                <input type="password" class="form-control col-7" id="Lpassword" name="Lpassword" placeholder="Password">
                                <span id="show-password-icon" style="margin-right: 30px;" class="fas fa-eye col-5"></span>
                                <span id="hide-password-icon" style="margin-right: 30px;" class="fas fa-eye-slash col-5"></span>
                            </div>
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
                                <a id="frgt-pass" href="#" data-toggle="modal" data-dismiss="modal" data-target="#Frgt-P-Modal">
                                    Forgot Password?
                                </a>
                            </p>
                            <!-- </div> -->
                        </div>

                        <div class="form-group">
                            <div class="line"></div>
                        </div>
                    </form>
                    <div class="form-group">
                        <div class="text-start">
                            <a id="crt-new-acc" data-toggle="modal" data-dismiss="modal" data-target="#SignUpModal" class="btn btn-primary col-5">Create New Account</a>
                        </div>
                    </div>


                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>





    <!-- Sign In -->




    <!-- <div class="container-fluid"> -->
    <!-- Sections -->
    <section id="section2" class="section section2">

        <h1>
            <a href="#section-logo" class="nav-item nav-link">ANNOUNCEMENTS</a>
        </h1>

        <div class="container-fluid">
            <div class="text-primary">
                <?php if ($this->session->flashdata('msgSuccess')) : ?>
                    <p><?php echo $this->session->flashdata('msgSuccess'); ?></p>
                <?php endif; ?>
                <?php if ($this->session->flashdata('msgError')) : ?>
                    <p><?php echo $this->session->flashdata('msgError'); ?></p>
                <?php endif; ?>
            </div>
            <div id="frst-anon-pnl" class="">
                <ul class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </ul>
            </div>

            <div class="col-md-12 pb-4">

                <!------------------ THREE small Hover Effect Style --------------->
                <div class=" mt-4">
                    <!-- <h3 class="text-center">HAPPENINGS!</h3> -->

                    <div class="row mt-30">
                        <?php for ($slotNumber = 1; $slotNumber <= 3; $slotNumber++) : ?>
                            <?php foreach ($announcements as $announcement) : ?>
                                <?php if ($announcement['slot_number'] == $slotNumber) : ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="box10">
                                            <img class="pic-1" src="<?= base_url('img/res_img/' . $announcement['Picture']); ?>">
                                            <span class="overlay1-text" style="position: relative; top: 0px;"><?= $announcement['NameOfAnnouncement']; ?></span>
                                            <div class="box-content">
                                                <h3 class="title"><?= $announcement['NameOfAnnouncement']; ?></h3>
                                                <ul class="icon">
                                                    <li><a href="#" class="fa fa-search"></a></li>
                                                    <li><a href="#" class="fa fa-link"></a></li>
                                                </ul>
                                            </div>
                                            <span class="overlay2-text"><?= $announcement['Description']; ?></span>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endfor; ?>
                    </div>

                </div>


            </div>


        </div>
    </section>

    <!------------------------------------------------------------- ABOUT US SECTION 3 ------------------------------------------------->

    <section id="section3" class="section section3">

        <h1>
            <a href="#section-logo" class="nav-item nav-link">ABOUT US</a>
        </h1>

        <div class="container-fluid">
            <!-- <p>This is the third section of your responsive page.</p> -->
            <div class="row">

                <div class="slidy-btn col-md-12 row justify-content-end">
                    <div class=" col-md-auto">
                        <button class="prev-button ">Previous</button>
                    </div>
                    <div class=" col-md-auto">
                        <button class="next-button ">Next</button>
                    </div>
                </div>

            </div>



            <div class="container-fluid mt-4">

                <div class="row col-md-12">

                    <!-- begin panel group -->
                    <div class="panel-group col-md-4" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="slider-container">
                            <div class="slider">
                                <!-- panel 1 -->
                                <div class="slide panel panel-default">
                                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                                        <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="panel-title">VISION:</h4>
                                        </div>
                                    </span>

                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <!-- Tab content goes here -->
                                            REAL DE CACARONG A PROGRESSIVE, DEVELOPED AND A
                                            PEACEFUL BARANGAY IN PANDI.
                                            <p></p>
                                            TO HAVE A MEANS OF LIVELIHOOD THAT WILL UPLIFT THE
                                            LIVES OF SOCIETY TOWARD TO A BETTERMENT OF LIVE AS A
                                            BARANGAY.
                                        </div>
                                    </div>
                                </div>
                                <!-- / panel 1 -->

                                <!-- panel 2 -->
                                <div class="slide panel panel-default">
                                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title collapsed">MISSION:</h4>
                                        </div>
                                    </span>

                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <!-- Tab content goes here -->
                                            TO SERVE THE PEOPLE, GOD FEARING, WHOLE HEARTEDLY,
                                            FAST AND SYSTEMATIC, TEND TO ALL THE NEEDS OF THE
                                            PEOPLE IN EVERY ASPECT PROTECT THEM FROM ALL THE BAD
                                            SITUATION THAT MAY ARISES.
                                            <p></p>
                                            AS WELL AS TO GIVE KNOWLEDGE ON PROTECTING AND
                                            CONSERVING THE NATURE.
                                            <p></p>
                                            BETTER PEOPLE FOR A BETTER BARANGAY
                                        </div>
                                    </div>
                                </div>
                                <!-- / panel 2 -->

                                <!--  panel 3 -->
                                <div class="slide panel panel-default">
                                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                                        <div class="panel-heading" role="tab" id="headingThree" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">BRIEF HISTORY</h4>
                                        </div>
                                    </span>

                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <!-- tab content goes here -->
                                            Pandi was originally part of the Hacienda of
                                            Dominicans named Hacienda which belongs to the Town
                                            Santa Maria de Pandi (now Santa Maria, Bulacan). <p></p> In
                                            1874 it was turn over to the town of Bigaa as one of
                                            its Barrio and the religious activity belongs to
                                            Convento de Bigaa under the auspices of Augustinian
                                            order established a chapel under the advocacy of
                                            Immaculate Concepcion.
                                            <p></p>
                                            During the Philippine
                                            Revolution, Pandi played a vital and historical role
                                            in the fight of Philippine independence, Pandi is
                                            historically known for the Real de Kakarong de Sili
                                            Shrine - Inang Filipina Shrine, the site where the
                                            bloodiest revolution in Bulacan took place, where more
                                            than 3,000 Katipuneros died.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8">

                        <!-- begin macbook pro mockup -->
                        <div id="Lap-top" class="md-macbook-pro md-glare ">
                            <div class="md-lid">
                                <div class="md-camera"></div>
                                <div class="md-screen">
                                    <!-- content goes here -->
                                    <!-- <div class="tab-container"> -->

                                    <!-- Swiper slider container -->
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="<?= base_url('img/systemimg/BRGY_VISION.jpg') ?>" alt="BRGY Event" class="img img-responsive" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= base_url('img/systemimg/BRGY_MISSION.jpg') ?>" alt="BRGY Wall sculpture" class="img img-responsive" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="<?= base_url('img/systemimg/BRGY_BRIEF_HISTORY.JPG') ?>" alt="Brgy Plaza" class="img img-responsive" />
                                            </div>
                                        </div>

                                        <!-- Swiper navigation buttons (optional) -->
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>

                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="md-base"></div>
                        </div>
                        <!-- end macbook pro mockup -->

                    </div>
                </div>


            </div>
            <!-- end sidetab container -->

            <!-- </div> -->

        </div>
    </section>

    <!------------------------------------------------------------- ABOUT US SECTION 3 END ------------------------------------------------->

    <!------------------------------------------------------------- BARANGAY OFFICIALS SECTION 4 ------------------------------------------------->
    <section style="
        background-image: url(<?= base_url('img/systemimg/bg-pic new.jpg') ?>);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
      " id="section4" class="section section4">
        <h1>
            <a href="#section-logo" class="nav-item nav-link">BARANGAY OFFICIALS</a>
        </h1>
        <!-- <div class="container-fluid"> -->

        <div class="ml-5">
            <!-- <div class="container-fluid"> -->
            <div class="row-fluid brgy-ofc">
                <!-- <h5 class="section-title"></h5> -->

                <!-- <div class="row mt-5"> -->
                <div class="row">
                    <!-- Team member -->
                    <?php for ($slotNumber1 = 1; $slotNumber1 <= 10; $slotNumber1++) : ?>
                        <?php foreach ($officials as $offcial) : ?>
                            <?php if ($offcial['slot_number'] == $slotNumber1) : ?>
                                <div id="BRGY1" class="col-sm-2 ml-5 mr-4">
                                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                        <div class="mainflip">
                                            <div class="frontside">
                                                <div class="card">
                                                    <div class="">
                                                        <p>
                                                            <img id="BO-img" class="img-fluid mt-4 mb-3" src="<?= base_url('img/res_img/' . $offcial['Photo']); ?>" alt="Official image" />
                                                        </p>
                                                        <h5 class="card-title"><?= $offcial['Nickname']; ?></h5>
                                                        <h4 class="card-title">
                                                            Punong Barangay <br />
                                                            <?= $offcial['Position']; ?>
                                                        </h4>

                                                        <p class="card-text"></p>
                                                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="backside">
                                                <div class="card">
                                                    <div class="mt-4">
                                                        <h4 class="card-title"><?= $offcial['Firstname'] . ' ' . $offcial['Middlename'] . ' ' . $offcial['Surname']; ?></h4>
                                                        <p class="card-text"><br /><br /></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                    <!-- ./Team member -->


                    <!-- card row end -->
                </div>
            </div>
            <!-- </section> -->
            <!-- Team -->
        </div>
        <!-- </div> -->
    </section>


    <!-- </div> -->
    <footer class="container-fluid bg-grey py-5">


        <div class="col-md-12">

            <div class="row">

                <!-- Responsiveness for this four footer links -->
                <div class="col-sm-6 col-md-4 col-lg-2">

                    <div class="container">
                        <!-- When clicked it will go back to the first view page -->
                        <a href="#section2" class="foot-link">ANNOUNCEMENTS</a><br><br>
                        <a href="#section3" class="foot-link">ABOUT US</a><br><br>
                        <a href="#section4" class="foot-link">BARANGAY OFFICIALS</a><br><br>
                        <!-- <a href="#section5" class="foot-link">e-SERVICES</a><br><br> -->
                        <!-- <a href="#section6" class="nav-item nav-link">CONTACTS</a> -->
                    </div>
                </div>


                <div class="col-md-4 col-lg-2">
                    <h5 class="">Social Media</h5>
                    <div class="social">
                        <a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa fa-brands fa-square-facebook"></i></a>
                    </div>
                    <!-- <form class="form-footer my-3">
                <input type="text" placeholder="search here...." name="search">
                <input type="button" value="Go">
            </form> -->
                    <br>
                    <p>Stay connected with us on social media for the latest updates, news, and events.</p>
                </div>


                <div class="col-md-4 col-lg-2">
                    <h5> Location</h5>
                    <span>VXW9+827, Pandi Bustos Rd, Pandi, 3014 Bulacan</span>
                </div>


                <div class="col-md-5">

                    <div class="logo-part">
                        <div class="container">
                            <h3>SITE MAP</h3>

                            <!-- Paste the copied HTML code here -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9518.306421691648!2d120.97286288451923!3d14.90828904601992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397abac226225fb%3A0xed8431456708e006!2sCacarong%20Matanda%20Barangay%20Hall!5e1!3m2!1sen!2sph!4v1702741559021!5m2!1sen!2sph" width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </iframe>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </footer>

    <div id="W-foot" class="container-fluid p-3 font-weight-bold">

        <div class="row col-md-12">
            <div class="col-md-8">
                <span>@2023 Barangay e-Request. All rights reserved.</span>
            </div>

            <div class="col-md-2">
                <a href="#" class="row justify-content-end" data-toggle="modal" data-target="#privacyModal">Privacy &
                    Policy</a>
            </div>

            <div class="col-md-2">
                <a href="#" class="row justify-content-end" data-toggle="modal" data-target="#TermsModal">Terms &
                    Condition</a>
            </div>

        </div>

    </div>

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



    <script src="https://kit.fontawesome.com/84149baf4b.js" crossorigin="anonymous"></script>

    <!-- Link to Bootstrap JS and jQuery -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Swiper JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const passwordInput = document.getElementById('Lpassword');
        const showPasswordIcon = document.getElementById('show-password-icon');
        const hidePasswordIcon = document.getElementById('hide-password-icon');

        function togglePasswordVisibility() {
            const isPasswordEmpty = passwordInput.value === '';

            if (isPasswordEmpty) {
                showPasswordIcon.style.display = 'none';
                hidePasswordIcon.style.display = 'none';
            } else if (passwordInput.type === 'password') {
                showPasswordIcon.style.display = 'inline-block';
                hidePasswordIcon.style.display = 'none';
            } else {
                showPasswordIcon.style.display = 'none';
                hidePasswordIcon.style.display = 'inline-block';
            }
        }

        passwordInput.addEventListener('input', togglePasswordVisibility);

        showPasswordIcon.addEventListener('click', () => {
            passwordInput.type = 'text';
            togglePasswordVisibility();
        });

        hidePasswordIcon.addEventListener('click', () => {
            passwordInput.type = 'password';
            togglePasswordVisibility();
        });

        // Initial setup
        togglePasswordVisibility();
        $(document).ready(function() {
            $("#signupForm").submit(function(event) {
                event.preventDefault();

                // Basic form validation
                var isValid = true;

                // Check if any of the required fields are empty
               $("#signupForm input").each(function() {
    // Check if the current input is the middle name field
    if ($(this).attr("id") === 'middlename') {
        // If it's the middle name field, don't require it to be filled
        return;
    }

    if ($(this).val() === '') {
        isValid = false;
        toastr.error("Please fill in all fields.");
        return false; // Exit loop early
    }
});

                if (!isValid) {
                    return; // Don't proceed with the AJAX request if validation failed
                }

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
        $(document).ready(function() {
            $('#loginForm').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: '<?php echo site_url('login/index'); ?>',
                    type: 'post',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);
                            setTimeout(function() {
                                window.location.href = response.redirect;
                            }, 3000);
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            $('#FormReset').on('submit', function(event) {
                event.preventDefault();

                // Get the value of the REmail input field
                var REmail = $('#REmail').val();

                // Make AJAX request
                $.ajax({
                    url: '<?php echo site_url('users/send_reset_link'); ?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        REmail: REmail
                    },
                    success: function(response) {
                        if (response.success) {
                            toastr.success(response.message);

                            // Close the modal (assuming you are using Bootstrap)
                            $('#Frgt-P-Modal').modal('hide');
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });


        function calculateAge() {
      // Get the selected date of birth from the date picker
      var dobInput = document.getElementById('birthday');
      var dob = new Date(dobInput.value);

      // Calculate the age
      var today = new Date();
      var age = today.getFullYear() - dob.getFullYear();

      // Adjust age based on the current date and the birthdate
      if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today.getDate() < dob.getDate())) {
        age--;
      }

      // Display the age in the 'age' input field
      var ageInput = document.getElementById('age');
      ageInput.value = age;
    }
        document.addEventListener("DOMContentLoaded", function() {
            const swiper = new Swiper(".swiper-container", {
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                loop: true,
            });

            // Get references to the slider container, individual slides, and initialize currentIndex
            const slider = document.querySelector(".slider");
            const slides = document.querySelectorAll(".slide");
            let currentIndex = 0;

            // Function to update the slider's position based on the currentIndex
            function updateSlider() {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlider();
                swiper.slideNext(); // Trigger Swiper slider to go to the next slide
            }

            function previousSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateSlider();
                swiper.slidePrev(); // Trigger Swiper slider to go to the previous slide
            }

            // Attach event listeners to the next and previous buttons
            document
                .querySelector(".next-button")
                .addEventListener("click", nextSlide);
            document
                .querySelector(".prev-button")
                .addEventListener("click", previousSlide);
        });




        $(document).ready(function() {
            // Trigger the collapse of the element with ID "collapseOne"
            $("#collapseOne").collapse("show");

            // Trigger the collapse of the element with ID "collapseTwo"
            $("#collapseTwo").collapse("show");

            // Trigger the collapse of the element with ID "collapseThree"
            $("#collapseThree").collapse("show");
        });
    </script>


</body>

</html>