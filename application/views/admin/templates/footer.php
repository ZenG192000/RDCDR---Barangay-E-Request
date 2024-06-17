<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>






<script>
    $(document).ready(function() {
        $('#updatePass').submit(function(e) {
            e.preventDefault();

            // Client-side input validation
            var userID = $('#UserIDko').val();
            var currentPassword = $('#currentpassword1').val();
            var newPassword = $('#newpassword1').val();
            var confirmNewPassword = $('#cnewpassword1').val();

            if (userID === '' || currentPassword === '' || newPassword === '' || confirmNewPassword === '') {
                Swal.fire('Error', 'All input fields must be filled.', 'error');
                return;
            }

            // Check if the password meets the requirements
            if (!isPasswordValid(newPassword)) {
                Swal.fire('Error', 'Password does not meet the requirements.', 'error');
                return;
            }

            // Create FormData object
            var formData = new FormData();
            formData.append('UserID', userID);
            formData.append('currentpassword1', currentPassword);
            formData.append('newpassword1', newPassword);
            formData.append('cnewpassword1', confirmNewPassword);

            $.ajax({
                type: 'POST',
                url: '<?= site_url("users/update_password") ?>',
                data: formData,
                processData: false, // Important: prevent jQuery from processing the data
                contentType: false, // Important: ensure that the request is sent as FormData
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire('Success', response.message, 'success').then(function() {
                            location.reload(); // Reload the page on success
                        });
                    } else {
                        Swal.fire('Error', response.message, 'error');
                    }
                }
            });
        });

        // Password validation function
        function isPasswordValid(password) {
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            return passwordRegex.test(password);
        }
    });

    function confirmSignOut() {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will be logged out!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745', // Green color for the confirm button
            cancelButtonColor: '#dc3545', // Gray color for the cancel button
            confirmButtonText: 'Yes, sign me out!',
        }).then((result) => {
            if (result.isConfirmed) {
                // Handle sign-out logic here
                window.location.href = "<?php echo site_url('login/signout') ?>";
                // Add custom class to the result message box immediately after showing it
                const resultPopup = Swal.getPopup();
                resultPopup.classList.add('custom-result-popup-class');


            }
        });
    }

    function changeImage() {
        var input = document.getElementById('inputGroupFile01');
        var label = document.querySelector('.custom-file-label');
        var image = document.getElementById('profile-image');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                image.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);

            label.textContent = input.files[0].name;
        } else {
            label.textContent = 'Change image?';
        }
    }




    $(document).ready(function() {
        console.log('Document is ready.'); // Add this line
        $('#dateOfBirth').datepicker({
            format: 'mm/dd/yyyy',
            autoclose: true
        });

        $('#calendar-icon').click(function() {
            $('#dateOfBirth').datepicker('show');
        });

    });

    function calculateAge() {
        // Get the entered date of birth
        var dob = document.getElementById('dateOfBirth').value;

        // Calculate the age
        var today = new Date();
        var birthDate = new Date(dob);
        var age = today.getFullYear() - birthDate.getFullYear();
        var monthDiff = today.getMonth() - birthDate.getMonth();

        // Adjust age based on month difference
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        // Update the Age input field
        document.getElementById('Age').value = age;
    }


    $(document).ready(function() {
        function activateProfileButton() {
            // Set all input types to read-only
            $('.profile-info input, .profile-info textarea').attr('readonly', true);
            // Disable the file input
            $('#dateOfBirth, input[name="gender"]').prop('disabled', true);
            $('#inputGroupFile01').prop('disabled', true);
            // Hide the save button
            $('#sttg-sv').hide();

            $('#CPas-sv').hide();


            // Add 'active' class to profile button's parent li
            $('#profile-btn').closest('li').addClass('active');
            // Remove 'active' class from edit-profile button's parent li
            $('#edit-profile-btn').closest('li').removeClass('active');
        }

        $('#profile-btn').on('click', function() {
            activateProfileButton();
        });

        $('#edit-profile-btn').on('click', function() {
            // Remove read-only attribute for input types
            $('.profile-info input, .profile-info textarea').attr('readonly', true);
            // Enable the file input

            $('#age').attr('readonly', false);

            $('#dateOfBirth, input[name="gender"]').prop('disabled', false);

            $('input[name="gender"]').prop('disabled', true);

            $('#inputGroupFile01').prop('disabled', false);
            // Show the save button
            $('#sttg-sv').show();
            $('#CPas-sv').hide();

            // Remove 'active' class from profile button's parent li
            $('#profile-btn').closest('li').removeClass('active');
        });

        // Trigger profile button click when settings button is clicked
        $('#brgy-sttg-btn').on('click', function() {
            // Activate the profile button
            activateProfileButton();
            // Open the settings modal
            $('#staticBackdrop').modal('show');
        });

        // Initialize date picker
        $('#dateOfBirth').datepicker({
            format: 'mm/dd/yyyy',
            autoclose: true
        });

        $('#calendar-icon').click(function() {
            $('#dateOfBirth').datepicker('show');
        });
    });

    $(document).ready(function() {
        // Function to hide mdl-bdy-one
        function hideMdlBdyOne() {
            $('.mdl-bdy-one').hide();
            $('.mdl-bdy-two').hide(); // Hide mdl-bdy-two
        }

        // Function to show mdl-bdy-one
        function showMdlBdyOne() {
            $('.mdl-bdy-one').show();
            $('.mdl-bdy-two').hide(); // Hide mdl-bdy-two
        }

        // Function to show mdl-bdy-two
        function showMdlBdyTwo() {
            $('.mdl-bdy-two').show();
        }

        // Initial state: show mdl-bdy-one and hide mdl-bdy-two
        showMdlBdyOne();

        // Click event for "Change Password" button
        $('#chnge-passw-btn').on('click', function() {
            // Hide mdl-bdy-one and show mdl-bdy-two when the button is clicked
            hideMdlBdyOne();
            showMdlBdyTwo();
            $('#sttg-sv').hide();
            $('#CPas-sv').show();

            $('#currentpassword1, #newpassword1, #cnewpassword1').attr('readonly', false);

        });

        // Click event for other buttons (Profile, Edit Profile)
        $('#profile-btn, #edit-profile-btn').on('click', function() {
            // Show mdl-bdy-one and hide mdl-bdy-two when other buttons are clicked
            showMdlBdyOne();

            $('.mdl-bdy-two').hide();

        });
    });





    $("#updatePForm").submit(function(event) {
        event.preventDefault();

        const dateOfBirth = $('#dateOfBirth').val();
        const Age = $('#Age').val();
        const fileInput = $("#inputGroupFile01")[0].files[0];
        const formData = new FormData(this);

        formData.append('Age', Age);
        formData.append('dateOfBirth', dateOfBirth);
        formData.append('profileImage', fileInput);

        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to save the changes!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, save it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: false,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                        url: "<?php echo site_url('users/Updateprofile'); ?>",
                        data: formData,
                        type: "post",
                        processData: false,
                        contentType: false,
                        dataType: 'json'
                    })
                    .done(function(response) {
                        if (response.status == 1) {
                            Swal.fire('Success', response.message, 'success').then(function() {
                                window.location.href = "<?php echo site_url('login/signout') ?>";
                            });
                        } else {
                            Swal.fire('Error', response.message, 'error');
                        }
                    })
                    .fail(function() {
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while saving your changes or having a dev error. Please contact the administrator!',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    });
            }
        });
    });


    function showContent() {
        var select = document.getElementById("selectOption");
        var clearanceContent = document.getElementById("clearanceContent");
        var certificationContent = document.getElementById("certificationContent");

        var selectedOption = select.value;

        if (selectedOption === "clearance") {
            clearanceContent.classList.add("visible");
            certificationContent.classList.remove("visible");
            selectcontent.classList.remove("visible");
        } else if (selectedOption === "select") {
            clearanceContent.classList.remove("visible");
            certificationContent.classList.remove("visible");
            selectcontent.classList.add("visible");
        } else if (selectedOption === "certification") {
            clearanceContent.classList.remove("visible");
            certificationContent.classList.add("visible");
            selectcontent.classList.remove("visible");
        }
    }


    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open');
        document.querySelector('.content').classList.toggle('shift');
    }


    $(document).ready(function() {
        $('#brgy-tbl').DataTable({
            "ajax": "<?php echo site_url('Admin/fetchDatafromDatabaseUsers'); ?>",
            "order": [],
            "language": {
                "search": "_INPUT_", // Customize the search input field
                "searchPlaceholder": "Search...",
            },
            "order": [], // Disable initial sorting

            // ------- Para sa color lang to ng td ------- //
            "columnDefs": [{
                "targets": [0, 1, 2, 3, 4, 5, 6, 7], // Replace '2' with the index of your column (0-based index)
                "createdCell": function(td) {
                    $(td).css('background-color', '#353535da'); // Change the background color
                }
            }]
        });
    });
    // --------------------------- OVERLAY --------------------------------
    $(document).ready(function() {
        var trigger = $('.toggle-btn'),
            overlay = $('.overlay'),
            actionbtns = $('.action-list'),
            uncovered = false;

        trigger.click(function() {
            overlayout();
        });

        function overlayout() {
            const actionbtnsArray = Array.from(actionbtns); // Convert the NodeList to an array

            if (uncovered == true) {
                overlay.hide();
                uncovered = false;

                // Enable all action buttons
                actionbtnsArray.forEach(function(btn) {
                    btn.disabled = false;
                });
            } else {
                overlay.show();
                uncovered = true;

                // Disable all action buttons
                actionbtnsArray.forEach(function(btn) {
                    btn.disabled = true;
                });

                // Set a higher z-index for the overlay
                // overlay.css('z-index', '2');
            }
        }

        $('[data-toggle="offcanvas"]').click(function() {
            $('#wrapper').toggleClass('toggled');
        });
    });

    function confirmDeact(userID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Deact the user",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Deact it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                deleteU(userID);
            }

        })
    }

    function deleteU(userID) {
        $.ajax({
            url: '<?php echo site_url('Admin/Deact'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                UserID: userID
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                    Swal.fire('Success', response.message, 'success').then(function() {
                        location.reload();
                    });
                } else {
                    Swal.fire('Error', response.message, 'error');
                }
            }
        });
    }

    function confirmReact(userID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Reactivate the user",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Reactivate it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                confirmReacts(userID);
            }

        })
    }

    function confirmReacts(userID) {
        $.ajax({
            url: '<?php echo site_url('Admin/reactivate'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                UserID: userID
            },
            dataType: 'json',
            success: function(response) {
                if (response.status == 1) {
                    Swal.fire('Success', response.message, 'success').then(function() {
                        location.reload();
                    });
                } else {
                    Swal.fire('Error', response.message, 'error');
                }
            }
        });
    }

    // ---------------------- Customization for Datatables ----------------------------
    $(document).ready(function() {
        $('#brgy-tbl1').DataTable({
            "language": {
                "search": "_INPUT_", // Customize the search input field
                "searchPlaceholder": "Search...",
            },
            "order": [], // Disable initial sorting
        });
    });
    $(document).ready(function() {
        $('#brgy-tbl2').DataTable({
            "language": {
                "search": "_INPUT_", // Customize the search input field
                "searchPlaceholder": "Search...",
            },
            "order": [], // Disable initial sorting
        });
    });
</script>

</body>

</html>