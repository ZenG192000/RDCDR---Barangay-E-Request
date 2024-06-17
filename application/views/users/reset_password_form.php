<!-- change-old-password-modal-page.html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Old Password</title>
    <!-- Include necessary stylesheets or scripts here -->



    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">




    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }


        .chng-p-lgo img {
            width: 100px;
        }


        #COP-mdl {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(128deg, #ffffff 65%, #34a853 40%);

            border-radius: 20px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.413);
            /* Adjust the values as needed */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #COP-mdl-D {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #COP-mdl-D label {
            font-weight: 500;
        }

        /* Change the color of all placeholder texts */
        ::placeholder {
            color: #34a853 !important;
            /* Change the color to your preferred color */
        }




        #COPLabel {
            color: #34a853;
        }

        #COP-conf {
            position: relative;
            color: #34a853;
            border-color: #000000;
            background-color: #000000;
            font-weight: 500;
        }

        #COP-conf:hover {
            color: #000000;
            background-color: #34a853;
        }

        #cps-mdl {
            /* background: linear-gradient(65deg, #194A84, #194A8478 75%, #9eb2d0 85%, #194A84); */
            background-image: linear-gradient(-128deg, #ffffff 65%, #34a853 40%);

            border-radius: 15px;
        }






        /* body {
            margin: 0;
            height: 100vh; */
        /* display: flex;
            align-items: center;
            justify-content: center; */
        /* overflow: hidden;
            animation: flashing 15s  alternate;

            object-fit: contain;



            background-size: cover;
            background-position: center;

        } */


        body {
            margin: 0;
            height: 100vh;
            overflow: hidden;
            animation: flashing 15s infinite alternate;

            background-image: url('image1.jpg');
            /* Set your default background image here */
            background-size: cover;
            background-position: center;
        }




        @keyframes flashing {

            /* 0%,
            100% {
                background-image: url('BRGY\ MISSION.jpg');
            }

            50% {
                background-image: url('BRGY\ VISION.jpg');
            } */




            0%,
            100% {
                background-image: url('<?php echo base_url("/img/systemimg/BRGY_VISION.jpg"); ?>');
            }

            33.3% {
                background-image: url('<?php echo base_url("/img/systemimg/BRGY_MISSION.jpg"); ?>');
            }

            66.6% {
                background-image: url('<?php echo base_url("/img/systemimg/BRGY_BRIEF_HISTORY.JPG"); ?>');
                /* Add a third image URL here */
            }


        }






        /* Set background styles */
        body {
            /* background-size: cover;
            background-position: center; */
        }
    </style>


</head>

<body>





    <!-- Copy the content of your "Change Old Password" modal here -->


    <!-------------------------------------------------------------- Change Old Password Modal ------------------------------------------------------------->

    <!-- <div class="modal fade" id="SignUpModal" tabindex="-1" role="dialog" aria-labelledby="SULabel" aria-hidden="true"> -->
    <!-- </div> -->

    <div id="COP-mdl-D" class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable" role="document">
        <div id="COP-mdl" class="modal-content">
            <!-- <div class="container"> -->

            <div class="chng-p-lgo">
                <img src="logo.png" alt="">
            </div>

            <div class="modal-header">

                <h5 class="modal-title" id="COPLabel">CHANGE YOUR PASSWORD</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>


            <div class="container">

                <form id="resetPasswordForm">

                    <div class="p-4">

                        <div class="form-group">
                            <label for="password">Enter New Password</label>
                            <input type="password" class="form-control col-md-12" id="NewPassword" placeholder="New Password" />
                        </div>
                        <div class="form-group">
                            <label for="Confirm New Password">Confirm Password</label>
                            <input type="password" class="form-control col" id="ConfirmPassword" placeholder="Confirm New Password" />
                        </div>

                        <input type="text" class="form-control" id="token" value="<?= $token ?>" hidden>
                        <div class="text-center">
                            <button type="submit" id="COP-conf" class="btn btn-primary col-md-6">
                                Confirm
                            </button>
                        </div>

                    </div>

                </form>

            </div>


            <!-- </div> -->
        </div>
    </div>



    <!-- --------------------------------- Toast Message "Changing Pass Succesfully" ------------------------------ -->
    <div class="modal fade" id="CPS-Modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="cps-mdl" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #ffffff;">Completed</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row justify-content-center">
                    <h3 style="text-shadow: 2px 2px 4px #34a853;">Changed Password Succesfully!</h3>
                </div>
                <!-- <div class="container py-4 row justify-content-center">
                    <button id="changePasswordNowBtn" type="button" class="btn btn-primary">Change Password now</button>
                </div> -->
            </div>
        </div>
    </div>




    <!-- </div> -->

    <!-------------------------------------------------------------- Change Old Password Modal End ------------------------------------------------------------->







    <!-- Link to Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>




    <!-- Include necessary scripts here (e.g., Bootstrap and jQuery) -->




    <script>
        $("#resetPasswordForm").on('submit', function(e) {
            e.preventDefault();

            // Validate password requirements
            var newPassword = $("#NewPassword").val();
            var confirmPassword = $("#ConfirmPassword").val();
            var token = $("#token").val();

            if (!newPassword || !confirmPassword) {
                toastr.error("Password fields cannot be empty");
                return;
            }

            if (!isValidPassword(newPassword)) {
                toastr.error("Password must meet the requirements: 8 characters, 1 symbol, 1 uppercase letter, 1 lowercase letter, and 1 numeric digit");
                return;
            }

            // Create FormData object and append form data
            var formData = new FormData(this);
            formData.append("NewPassword", newPassword);
            formData.append("ConfirmPassword", confirmPassword);
            formData.append("token", token);

            // Perform AJAX request to reset password
            $.ajax({
                url: '<?php echo site_url('users/process_reset_password'); ?>',
                type: 'POST',
                dataType: 'json',
                data: formData,
                processData: false, // Don't process the data
                contentType: false, // Don't set content type
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        setTimeout(function() {
                            window.location.href = '<?php echo site_url('login/index'); ?>'; // Replace 'your_site_url' with the actual URL you want to redirect to
                        }, 3000); // 3000 milliseconds = 3 seconds
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
        });


        function isValidPassword(password) {
            // Password must meet the requirements: 8 characters, 1 symbol, 1 uppercase letter, 1 lowercase letter, and 1 numeric digit
            var passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return passwordRegex.test(password);
        }

        // Additional code to trigger password validation on input change
        $("#NewPassword, #ConfirmPassword").on("input", function() {
            var newPassword = $("#NewPassword").val();
            var confirmPassword = $("#ConfirmPassword").val();

            if (isValidPassword(newPassword) && newPassword === confirmPassword) {
                toastr.clear(); // Clear any existing error messages
            }
        });
    </script>








</body>

</html>