</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
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


    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open');
        document.querySelector('.content').classList.toggle('shift');
    }

    function displaySelectedValue() {
        var radioButtons = document.getElementsByName('purpose');
        var otherReason = document.getElementById('otherReason');

        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked && radioButtons[i].value !== 'Others') {
                otherReason.value = radioButtons[i].value;
                break;
            }
        }
    }

    $(document).ready(function() {
        // Initial state
        toggleImageInput();

        // Toggle image input on radio button change
        $('input[name="paymentMethod"]').change(function() {
            toggleImageInput();
        });

        // Handle file input change
        $('#fileInput').change(function() {
            updateImagePreview(this);
        });

        function toggleImageInput() {
            if ($('#gcash').is(':checked')) {
                $('#hid').show();
                $('#hid2').show();
            } else {
                $('#hid').hide();
                $('#hid2').hide();
                resetImagePreview();
            }
        }

        function updateImagePreview(input) {
            resetImagePreview();
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-plc-prev').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function resetImagePreview() {
            $('#image-plc-prev').attr('src', '').hide();
        }
    });

    // Function to generate an 11-digit number with the first 8 digits based on the current time with seconds
    function generateRandomNumber() {
        var currentDate = new Date();
        var hours = currentDate.getHours();
        var minutes = currentDate.getMinutes();
        var seconds = currentDate.getSeconds();

        // Combine hours, minutes, seconds, and a random number
        var timePart = hours.toString() + minutes.toString() + seconds.toString();

        // Generate a random 6-digit number between 100000 and 999999
        var randomPart = Math.floor(100000 + Math.random() * 900000);

        // Combine time and random parts to form an 11-digit transaction number
        var transactionNumber = timePart + randomPart.toString();

        // Set the generated number to the input field
        document.getElementById('TransactionNo').value = transactionNumber;
    }
    //for barangay clearance
    $(document).ready(function() {
        $('#resbutton1').click(function(e) {
            e.preventDefault();

            const TypeofDocument = $('#TypeofDocument1').val();
            const Fullname = $('#Fullname1').val();
            const Address = $('#Address1').val();

            if (!TypeofDocument || !Fullname || !Address) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            generateRandomNumber();
            // Show confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to proceed with the request?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, submit it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes", show modal form
                    showFormModal(TypeofDocument, Fullname, Address);
                    Swal.close();
                }
            });
        });

        function showFormModal(TypeofDocument, Fullname, Address) {
            // Set the values of the input fields in the modal form
            $('#email').val(Fullname);
            $('#types-doc').val(TypeofDocument);


            // Show Bootstrap modal
            $('#Pay-N-Modal').modal('show');

            // Assuming you have a function to submit the modal form
            $('#PayN-Conf').click(function(e) {
                e.preventDefault();
                // Gather values from modal form
                const PaymentMethod = $('input[name="paymentMethod"]:checked').val();

                if (PaymentMethod === 'Cash') {
                    // Validate cash-related fields
                    const Amount = $('#amount').val();

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for cash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Cash
                        submitForm(TypeofDocument, Fullname, Address, PaymentMethod, Amount, null);
                    }
                } else if (PaymentMethod === 'GCash') {
                    // Validate Gcash-related fields
                    const Amount = $('#amount').val();
                    const PaymentReceipt = $('#fileInput')[0].files[0];

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    if (!PaymentReceipt) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please upload the payment receipt for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        console.log('Clicked!');
                        console.log(TransactionNo);
                        // Call the submitForm function with modal form values for Gcash
                        submitForm(TypeofDocument, Fullname, Address, PaymentMethod, Amount, PaymentReceipt);
                    }
                }
            });
        }


        function submitForm(TypeofDocument, Fullname, Address, PaymentMethod, Amount, PaymentReceipt) {
            // Create FormData to handle file upload
            const TransactionNo = $('#TransactionNo').val();
            const formData = new FormData();

            formData.append('TypeofDocument', TypeofDocument);
            formData.append('Fullname', Fullname);
            formData.append('Address', Address);
            formData.append('PaymentMethod', PaymentMethod);
            formData.append('Amount', Amount);
            formData.append('PaymentReceipt', PaymentReceipt);
            formData.append('TransactionNo', TransactionNo);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('resident/addrequestdocs'); ?>',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                          html: `Requested done! Transaction No: <strong>${TransactionNo}</strong><br>Wait for 3 days processing. You can track your requested document in Tracking and screenshot your receipt!`,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while saving your data or contact the developer',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        }
    });



    $(document).ready(function() {
        $('#resbutton2').click(function(e) {
            e.preventDefault();

            const TypeofDocument = $('#TypeofDocument2').val();
            const Fullname = $('#Fullname2').val();

            if (!TypeofDocument || !Fullname) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            generateRandomNumber();
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to proceed with the request?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, proceed!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes", show modal form
                    showFormModal(TypeofDocument, Fullname);
                }
            });
        });

        function showFormModal(TypeofDocument, Fullname) {
            // Set the values of the input fields in the modal form
            $('#email').val(Fullname);
            $('#types-doc').val(TypeofDocument);

            // Show Bootstrap modal
            $('#Pay-N-Modal').modal('show');

            // Assuming you have a function to submit the modal form
            $('#PayN-Conf').click(function(e) {
                e.preventDefault();
                // Gather values from modal form
                const PaymentMethod = $('input[name="paymentMethod"]:checked').val();

                if (PaymentMethod === 'Cash') {
                    // Validate cash-related fields
                    const Amount = $('#amount').val();

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for cash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Cash
                        submitForm(TypeofDocument, Fullname, PaymentMethod, Amount, null);
                    }
                } else if (PaymentMethod === 'GCash') {
                    // Validate Gcash-related fields
                    const Amount = $('#amount').val();
                    const PaymentReceipt = $('#fileInput')[0].files[0];

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    if (!PaymentReceipt) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please upload the payment receipt for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Gcash
                        submitForm(TypeofDocument, Fullname, PaymentMethod, Amount, PaymentReceipt);
                    }
                }
            });
        }
        // Add this script to handle the click event
        $(document).on('click', '.view-receipt-btn', function() {
            // Get the current date
            var documentId = $(this).data('id');
            var transactionNo = $(this).data('transaction-no');
            var documentType = $(this).data('document-type');
            var fullname = $(this).data('fullname');
            var dateClaimed = $(this).data('date-claimed');


            const currentDate = new Date();
            const formattedDate = currentDate.toLocaleDateString();
            // Generate a random four-digit number as RID
            // Use SweetAlert to display the receipt or perform any other action
            Swal.fire({
                title: 'Reciept to Claim',
                html: `
            <h1>${transactionNo}</h1>
            <h4>${fullname}</h4>
            <hp>Document to Claim: ${documentType}</p>
            <p>Screenshot this reciept message. Thank you.</p>
            <p>Date Requested: ${dateClaimed}</p>
       
        `,
                confirmButtonText: 'OK',
                showCloseButton: true,
            });
        });

        function submitForm(TypeofDocument, Fullname, PaymentMethod, Amount, PaymentReceipt) {
            // Create FormData to handle file upload
            const TransactionNo = $('#TransactionNo').val();

            const formData = new FormData();
            formData.append('TypeofDocument', TypeofDocument);
            formData.append('Fullname', Fullname);
            formData.append('PaymentMethod', PaymentMethod);
            formData.append('Amount', Amount);
            formData.append('PaymentReceipt', PaymentReceipt);
            formData.append('TransactionNo', TransactionNo);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('resident/addrequestdocs'); ?>',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                         html: `Requested done! Transaction No: <strong>${TransactionNo}</strong><br>Wait for 3 days processing. You can track your requested document in Tracking and screenshot your receipt!`,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while saving your data or contact the developer',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        }
    });


    //for barangay indigency
    $(document).ready(function() {
        $('#resbutton3').click(function(e) {
            e.preventDefault();

            const TypeofDocument = $('#TypeofDocument3').val();
            const Fullname = $('#Fullname3').val();
            const Age = $('#Age3').val();
            const IssueFor = $('#otherReason').val();

            if (!TypeofDocument || !Fullname || !Age || !IssueFor) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            generateRandomNumber();
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to proceed with the request?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, proceed!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes", show modal form
                    showFormModal(TypeofDocument, Fullname, Age, IssueFor);
                }
            });
        });

        function showFormModal(TypeofDocument, Fullname, Age, IssueFor) {
            // Set the values of the input fields in the modal form
            $('#email').val(Fullname);
            $('#types-doc').val(TypeofDocument);

            // Show Bootstrap modal
            $('#Pay-N-Modal').modal('show');

            // Assuming you have a function to submit the modal form
            $('#PayN-Conf').click(function(e) {
                e.preventDefault();
                // Gather values from modal form
                const PaymentMethod = $('input[name="paymentMethod"]:checked').val();

                if (PaymentMethod === 'Cash') {
                    // Validate cash-related fields
                    const Amount = $('#amount').val();

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for cash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Cash
                        submitForm(TypeofDocument, Fullname, Age, IssueFor, PaymentMethod, Amount, null);
                    }
                } else if (PaymentMethod === 'GCash') {
                    // Validate Gcash-related fields
                    const Amount = $('#amount').val();
                    const PaymentReceipt = $('#fileInput')[0].files[0];

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    if (!PaymentReceipt) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please upload the payment receipt for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Gcash
                        submitForm(TypeofDocument, Fullname, Age, IssueFor, PaymentMethod, Amount, PaymentReceipt);
                    }
                }
            });
        }

        function submitForm(TypeofDocument, Fullname, Age, IssueFor, PaymentMethod, Amount, PaymentReceipt) {
            // Create FormData to handle file upload
            const TransactionNo = $('#TransactionNo').val();

            const formData = new FormData();
            formData.append('TypeofDocument', TypeofDocument);
            formData.append('Fullname', Fullname);
            formData.append('Age', Age);
            formData.append('IssueFor', IssueFor);
            formData.append('PaymentMethod', PaymentMethod);
            formData.append('Amount', Amount);
            formData.append('PaymentReceipt', PaymentReceipt);
            formData.append('TransactionNo', TransactionNo);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('resident/addrequestdocs'); ?>',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                        html: `Requested done! Transaction No: <strong>${TransactionNo}</strong><br>Wait for 3 days processing. You can track your requested document in Tracking and screenshot your receipt!`,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while saving your data or contact the developer',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        }
    });



    $(document).ready(function() {
        $('#resbutton4').click(function(e) {
            e.preventDefault();

            const TypeofDocument = $('#TypeofDocument4').val();
            const Fullname = $('#Fullname4').val();

            if (!TypeofDocument || !Fullname) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            generateRandomNumber();
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to proceed with the request?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, proceed!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes", show modal form
                    showFormModal(TypeofDocument, Fullname);
                }
            });
        });

        function showFormModal(TypeofDocument, Fullname) {
            // Set the values of the input fields in the modal form
            $('#email').val(Fullname);
            $('#types-doc').val(TypeofDocument);

            // Show Bootstrap modal
            $('#Pay-N-Modal').modal('show');

            // Assuming you have a function to submit the modal form
            $('#PayN-Conf').click(function(e) {
                e.preventDefault();
                // Gather values from modal form
                const PaymentMethod = $('input[name="paymentMethod"]:checked').val();

                if (PaymentMethod === 'Cash') {
                    // Validate cash-related fields
                    const Amount = $('#amount').val();

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for cash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Cash
                        submitForm(TypeofDocument, Fullname, PaymentMethod, Amount, null);
                    }
                } else if (PaymentMethod === 'GCash') {
                    // Validate Gcash-related fields
                    const Amount = $('#amount').val();
                    const PaymentReceipt = $('#fileInput')[0].files[0];

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    if (!PaymentReceipt) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please upload the payment receipt for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Gcash
                        submitForm(TypeofDocument, Fullname, PaymentMethod, Amount, PaymentReceipt);
                    }
                }
            });
        }

        function submitForm(TypeofDocument, Fullname, PaymentMethod, Amount, PaymentReceipt) {
            // Create FormData to handle file upload
            const TransactionNo = $('#TransactionNo').val();

            const formData = new FormData();
            formData.append('TypeofDocument', TypeofDocument);
            formData.append('Fullname', Fullname);
            formData.append('PaymentMethod', PaymentMethod);
            formData.append('Amount', Amount);
            formData.append('PaymentReceipt', PaymentReceipt);
            formData.append('TransactionNo', TransactionNo);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('resident/addrequestdocs'); ?>',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                         html: `Requested done! Transaction No: <strong>${TransactionNo}</strong><br>Wait for 3 days processing. You can track your requested document in Tracking and screenshot your receipt!`,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while saving your data or contact the developer',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        }
    });


    $(document).ready(function() {
        $('#resbutton5').click(function(e) {
            e.preventDefault();

            const TypeofDocument = $('#TypeofDocument5').val();
            const Fullname = $('#Fullname5').val();
            const Address = $('#Address').val();
            const DateOfBirth = $('#DateOfBirth5').val();
            const PlaceOfBirth = $('#PlaceOfBirth5').val();
            const YearOfResident = $('#YearOfResident5').val();

            if (!TypeofDocument || !Fullname || !Address || !DateOfBirth || !PlaceOfBirth || !YearOfResident) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            generateRandomNumber();
            Swal.fire({
                title: 'Are you sure?',
                text: 'Do you want to proceed with the request?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, proceed!',
                cancelButtonText: 'No, cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // User clicked "Yes", show modal form
                    showFormModal(TypeofDocument, Fullname, Address, DateOfBirth, PlaceOfBirth, YearOfResident);
                }
            });
        });

        function showFormModal(TypeofDocument, Fullname, Address, DateOfBirth, PlaceOfBirth, YearOfResident) {
            // Set the values of the input fields in the modal form
            $('#email').val(Fullname);
            $('#types-doc').val(TypeofDocument);

            // Show Bootstrap modal
            $('#Pay-N-Modal').modal('show');

            // Assuming you have a function to submit the modal form
            $('#PayN-Conf').click(function(e) {
                e.preventDefault();
                // Gather values from modal form
                const PaymentMethod = $('input[name="paymentMethod"]:checked').val();

                if (PaymentMethod === 'Cash') {
                    // Validate cash-related fields
                    const Amount = $('#amount').val();

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for cash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Cash
                        submitForm(TypeofDocument, Fullname, Address, DateOfBirth, PlaceOfBirth, YearOfResident, PaymentMethod, Amount, null);
                    }
                } else if (PaymentMethod === 'GCash') {
                    // Validate Gcash-related fields
                    const Amount = $('#amount').val();
                    const PaymentReceipt = $('#fileInput')[0].files[0];

                    if (!Amount) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please enter the amount for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    }

                    if (!PaymentReceipt) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Please upload the payment receipt for Gcash payment.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return;
                    } else {
                        // Call the submitForm function with modal form values for Gcash
                        submitForm(TypeofDocument, Fullname, Address, DateOfBirth, PlaceOfBirth, YearOfResident, PaymentMethod, Amount, PaymentReceipt);
                    }
                }
            });
        }

        function submitForm(TypeofDocument, Fullname, Address, DateOfBirth, PlaceOfBirth, YearOfResident, PaymentMethod, Amount, PaymentReceipt) {
            // Create FormData to handle file upload
            const TransactionNo = $('#TransactionNo').val();

            const formData = new FormData();
            formData.append('TypeofDocument', TypeofDocument);
            formData.append('Fullname', Fullname);
            formData.append('Address', Address);
            formData.append('DateOfBirth', DateOfBirth);
            formData.append('PlaceOfBirth', PlaceOfBirth);
            formData.append('YearOfResident', YearOfResident);
            formData.append('PaymentMethod', PaymentMethod);
            formData.append('Amount', Amount);
            formData.append('PaymentReceipt', PaymentReceipt);
            formData.append('TransactionNo', TransactionNo);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('resident/addrequestdocs'); ?>',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                         html: `Requested done! Transaction No: <strong>${TransactionNo}</strong><br>Wait for 3 days processing. You can track your requested document in Tracking and screenshot your receipt!`,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred while saving your data or contact the developer',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        }
    });


    // // --------------------------- OVERLAY --------------------------------
    // $(document).ready(function () {
    //     var trigger = $('.toggle-btn'),
    //         overlay = $('.overlay'),
    //         actionbtns = $('.action-list'),
    //         uncovered = false;

    //     trigger.click(function () {
    //         overlayout();
    //     });

    //     function overlayout() {
    //         const actionbtnsArray = Array.from(actionbtns); // Convert the NodeList to an array

    //         if (uncovered == true) {
    //             overlay.hide();
    //             uncovered = false;

    //             // Enable all action buttons
    //             actionbtnsArray.forEach(function (btn) {
    //                 btn.disabled = false;
    //             });
    //         } else {
    //             overlay.show();
    //             uncovered = true;

    //             // Disable all action buttons
    //             actionbtnsArray.forEach(function (btn) {
    //                 btn.disabled = true;
    //             });

    //             // Set a higher z-index for the overlay
    //             // overlay.css('z-index', '2');
    //         }
    //     }

    //     $('[data-toggle="offcanvas"]').click(function () {
    //         $('#wrapper').toggleClass('toggled');
    //     });
    // });





    // ---------------------- Tracking Request Customization for Datatables ----------------------------

    $(document).ready(function() {
        $('#TR-brgy-tbl').DataTable({
            "ajax": {
                "url": "<?php echo site_url('Resident/fetchDatafromDatabaseTracking'); ?>",
                "type": "POST",
                "data": function(d) {
                    d.Fulls = $('#Fulls').val();
                    // Add any other parameters you need to pass to the server-side script
                }
            },
            "language": {
                "search": "_INPUT_", // Customize the search input field
                "searchPlaceholder": "Search...",
            },
            "order": [], // Disable initial sorting


            // ------- Para sa color lang to ng td ------- //
            "columnDefs": [{
                "targets": [0], // Replace '2' with the index of your column (0-based index)
                "createdCell": function(td) {
                    $(td).css('background-color', '#34a853'); // Change the background color
                }
            }]
            // ------- Para sa color lang to ng td end ------ //


        });
    });

    // ---------------------- Tracking Request Customization for Datatables End ----------------------------





    $(document).ready(function() {
        $('#TH-brgy-tbl').DataTable({
            "ajax": {
                "url": "<?php echo site_url('Resident/fetchDatafromDatabaseHistory'); ?>",
                "type": "POST",
                "data": function(d) {
                    d.Fulls = $('#Fulls').val();
                    // Add any other parameters you need to pass to the server-side script
                }
            },
            "language": {
                "search": "_INPUT_", // Customize the search input field
                "searchPlaceholder": "Search...",
            },
            "order": [], // Disable initial sorting

            // ------- Para sa color lang to ng td ------- //
            "columnDefs": [{
                "targets": [0], // Replace '2' with the index of your column (0-based index)
                "createdCell": function(td) {
                    $(td).css('background-color', '#34a853'); // Change the background color
                }
            }]
            // ------- Para sa color lang to ng td end ------ //
        });
    });

    //  ------------- OTHER BUTTON HIDE AND SHOW SPECIFY INPUT FIELD ---------------- //

    // Function to update the input field with the selected radio button value
    function updateInputField() {
        // Get all radio buttons with the name "purpose"
        var radioButtons = document.getElementsByName("purpose");

        // Iterate through the radio buttons to find the checked one
        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                // If a radio button is checked, update the input field with its value
                document.getElementById("otherReason").value = radioButtons[i].value;
                break; // Exit the loop once a checked radio button is found
            }
        }
    }

    // Function to show/hide the "Specify Other Reason" input field based on the "Others" radio button
    function toggleOtherReasonInput() {
        var otherReasonInput = document.getElementById("otherReasonInput");
        var othersRadio = document.getElementById("others-radio");

        // Display the input field if the "Others" radio button is checked, hide it otherwise
        otherReasonInput.style.display = othersRadio.checked ? "block" : "none";
    }

    //  ------------- OTHER BUTTON HIDE AND SHOW SPECIFY INPUT FIELD ---------------- //
    $(document).ready(function() {
        // Function to fetch and process data
        function fetchData() {
            var surname = $("#hiddenSurname").val();

            // Make an AJAX request to fetch data based on the Surname
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('resident/fetchadd'); ?>", // Update with your actual CodeIgniter controller and method
                data: {
                    surname: surname
                },
                success: function(data) {
                    // Process the Address data
                    var processedAddress = processAddress(data);
                    // Display the processed Address in the input
                    $("#Address").val(processedAddress);
                    $("#Address1").val(processedAddress);
                },
                error: function(error) {
                    console.log("Error fetching data: " + error);
                }
            });
        }

        // Function to process the Address data
        function processAddress(address) {
            // Split the address by commas
            var addressArray = address.split(',');

            // Check if there are at least two commas
            if (addressArray.length >= 3) {
                // Display only the first two elements joined by a comma
                return addressArray.slice(0, 2).join(',');
            } else {
                // Display the entire address if there are less than two commas
                return address;
            }
        }

        // Fetch data once when the page loads
        fetchData();
    });
    // --------------- Message box toggle function ------------------ // 

    document.getElementById('requestButton').addEventListener('click', function() {
        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`,
            customClass: {
                confirmButton: 'btn-save' // Add custom class to the "Save" button
            }
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire("Request has been sent! come back for while.", "", "success");
                // Add your logic for saving changes here
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
                // Add your logic for not saving changes here
            }
        });
    });

    // --------------- Message box toggle function End ------------------ // 





    // Function to toggle the visibility of forms based on a dropdown selection //

    function toggleForm() {
        var selectedValue = document.getElementById('dropdownSelect').value;

        // Hide all forms
        var forms = document.querySelectorAll('form');
        forms.forEach(function(form) {
            form.classList.add('d-none');
        });

        // Show the form based on the selected option
        if (selectedValue !== 'default') {
            var selectedForm = document.getElementById(selectedValue);
            selectedForm.classList.remove('d-none');
        }

        // Hide all resbuttons
        var resbuttons = document.querySelectorAll('[id^="resbutton"]');
        resbuttons.forEach(function(resbutton) {
            resbutton.classList.add('d-none');
        });

        // Show the corresponding resbutton based on the selected option
        if (selectedValue !== 'default') {
            var selectedResbutton = document.getElementById("resbutton" + selectedValue.charAt(selectedValue.length - 1));
            if (selectedResbutton) {
                selectedResbutton.classList.remove('d-none');
            }
        }
    }

    // Function to toggle the visibility of forms based on a dropdown selection End //
</script>
</body>

</html>