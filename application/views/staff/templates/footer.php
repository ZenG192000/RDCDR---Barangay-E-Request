<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
"></script>
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


    $(document).ready(function() {
        function activateProfileButton() {
            // Set all input types to read-only
            $('.profile-info input, .profile-info textarea').attr('readonly', true);
            // Disable the file input
            $('#dateOfBirth, input[name="gender"]').prop('disabled', true);
            $('#inputGroupFile01').prop('disabled', true);
            // Hide the save button
            $('#sttg-sv').hide();

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

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open');
        document.querySelector('.content').classList.toggle('shift');
    }




    $("#editForm").submit(function(event) {
        event.preventDefault();

        const editIssueDay = $.trim($("#editIssueDay").val());
        const editIssueMY = $.trim($("#editIssueMY").val());
        const editDOC = $.trim($("#editDOC").val());
        if (editIssueDay === "" || editIssueMY === "" || editDOC === "") {
            Swal.fire({
                title: 'Error!',
                text: 'Please fill out all field!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            return;
        }
        // Display SweetAlert confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: 'This approves the release of the document!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745', // Green color for the confirm button
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Approve it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: false,
        }).then((result) => {
            if (result.isConfirmed) {
                // User clicked "Yes, save it!"
                $.ajax({
                    url: "<?php echo site_url('staff/ApproveRel'); ?>",
                    data: {
                        editIssueDay: editIssueDay,
                        editIssueMY: editIssueMY,
                        editDOC: editDOC,
                        id: $("#id").val()
                    },
                    type: "post",
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 1) {
                            Swal.fire('Success', response.message, 'success').then(function() {
                                location.reload();
                            });
                        } else {
                            Swal.fire('Error', response.message, 'error');
                        }
                    },
                    error: function() {
                        // Display error SweetAlert
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while saving your changes please contact the administrator.',
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
    });



    // Displaying data on page end here
    function ApproveRel(DocumentID) {
        $.ajax({
            url: "<?php echo site_url('Staff/getEditData'); ?>",
            method: "post",
            data: {
                id: DocumentID
            },
            dataType: "json",
            success: function(response) {
                $('#id').val(response.DocumentID);
                $('#editTypeofD').val(response.TypeofDocument);
                $('#editName').val(response.Fullname);
                $('#editModal').modal({
                    backdrop: "static",
                    keyboard: false
                });
            }
        });
    }


    function confirmAccept(ResidentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Approve the Resident records!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Approve it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                ApproveRes(ResidentID);
            }
        })
    }

    function ApproveRes(ResidentID) {
        $.ajax({
            url: '<?php echo site_url('staff/ApproveRes'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                ResidentID: ResidentID
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

    function AcceptPayment(DocumentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Approve the Payment!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Approve it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                ApprovePay(DocumentID);
            }
        })
    }

    function ApprovePay(DocumentID) {
        $.ajax({
            url: '<?php echo site_url('staff/ApprovePaid'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                DocumentID: DocumentID
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

    function Claimed(DocumentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Claimed the Documents!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Claimed it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                Claimedd(DocumentID);
            }
        })
    }

    function Claimedd(DocumentID) {
        $.ajax({
            url: '<?php echo site_url('staff/ClaimedDocs'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                DocumentID: DocumentID
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

    function ClaimedandPay(DocumentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Claimed the Documents!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Claimed it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                ClaimedandPayed(DocumentID);
            }
        })
    }

    function ClaimedandPayed(DocumentID) {
        $.ajax({
            url: '<?php echo site_url('staff/ClaimedDocs'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                DocumentID: DocumentID
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

    function DeclinePayment(DocumentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Decline the Payment!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Decline it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                DeclinePay(DocumentID);
            }
        })
    }

    function DeclinePay(DocumentID) {
        $.ajax({
            url: '<?php echo site_url('staff/DeclinePaid'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                DocumentID: DocumentID
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

    function DeclineCash(DocumentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Decline the Documents record!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Decline it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                DeclineCashs(DocumentID);
            }
        })
    }

    function DeclineCashs(DocumentID) {
        $.ajax({
            url: '<?php echo site_url('staff/DeclinePaid'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                DocumentID: DocumentID
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

    function AnnDelete(AnnounceID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Delete the Announcement record!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                AnnDeletes(AnnounceID);
            }
        })
    }

    function AnnDeletes(AnnounceID) {
        $.ajax({
            url: '<?php echo site_url('staff/AnnounceDelete'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                AnnounceID: AnnounceID
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

    function confirmDecline(ResidentID) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will Delete the Resident record!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#28a745',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, Delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                DeclineRes(ResidentID);
            }
        })
    }

    function DeclineRes(ResidentID) {
        $.ajax({
            url: '<?php echo site_url('staff/DeleteRes'); ?>', // Replace with your reset URL
            type: 'POST',
            data: {
                ResidentID: ResidentID
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

    // ---------------------- BARANGAY ANNOUNCEMENTS Customization for Datatables ---------------------------- //

    $(document).ready(function() {
        $('#Stf-A-brgy-tbl').DataTable({
            "ajax": "<?php echo site_url('staff/fetchDatafromDatabaseAnnounce'); ?>",
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

    // ---------------------- BARANGAY ANNOUNCEMENTS Customization for Datatables End ---------------------------- //




    // ---------------------- BARANGAY OFFICIALS Customization for Datatables ---------------------------- //

    $(document).ready(function() {
        $('#Stf-O-brgy-tbl').DataTable({
            "ajax": "<?php echo site_url('staff/fetchDatafromDatabaseOffcials'); ?>",
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

    // ---------------------- BARANGAY OFFICIALS Customization for Datatables End ---------------------------- //



    // ---------------------- RESIDENT RECORDS Customization for Datatables ---------------------------- //

    $(document).ready(function() {
        $('#Stf-RR-brgy-tbl').DataTable({
            "ajax": "<?php echo site_url('staff/fetchDatafromDatabaseRes'); ?>",
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

    // ---------------------- RESIDENT RECORDS Customization for Datatables End ---------------------------- //






    // ---------------------- DOCUMENT RECORDS Customization for Datatables ---------------------------- //



    // ---------------------- DOCUMENT RECORDS Customization for Datatables End ---------------------------- //






    // ---------------------- PAYMENTS Customization for Datatables ---------------------------- //



    // ---------------------- PAYMENTS Customization for Datatables End ---------------------------- //







    // ---------------------- DOCUMENT ARCHIVES Customization for Datatables ---------------------------- //

    $(document).ready(function() {
        $('#Stf-DA-brgy-tbl').DataTable({
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

    // ---------------------- DOCUMENT ARCHIVES Customization for Datatables End ---------------------------- //

    $(document).ready(function() {
        $('#PayN-Conf').click(function(e) {
            e.preventDefault();

            const selected_slot = $('#selected_slot').val();
            const Name = $('#Name').val();
            const Desc = $('#Desc').val();
            const Image = $('#Imagee')[0].files[0]; // Get the file from the file input

            if (!Name || !Desc || !Image || !selected_slot) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return; // Stop the function execution
            }

            const formData = new FormData();
            formData.append('selected_slot', selected_slot);
            formData.append('Name', Name);
            formData.append('Desc', Desc);
            formData.append('Image', Image);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('staff/Announcements'); ?>',
                data: formData,
                processData: false, // Important: tell jQuery not to process the data
                contentType: false, // Important: tell jQuery not to set contentType
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'New announcement has been saved.',
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
                        text: 'An error occurred while saving your data or having a maximum announcement',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        $('#PayN-Conf1').click(function(e) {
            e.preventDefault();

            const selected_slot = $('#selected_slot1').val();
            const Nickname = $('#Nickname').val();
            const Surname = $('#Surname').val();
            const Firstname = $('#Firstname').val();
            const Middlename = $('#Middlename').val();
            const Position = $('#Position').val();
            const Image = $('#Imageee')[0].files[0]; // Get the file from the file input

            if (!Nickname || !Surname || !Image || !selected_slot || !Firstname || !Position) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill out all fields.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return; // Stop the function execution
            }

            const formData = new FormData();
            formData.append('selected_slot1', selected_slot);
            formData.append('Nickname', Nickname);
            formData.append('Surname', Surname);
            formData.append('Firstname', Firstname);
            formData.append('Middlename', Middlename);
            formData.append('Position', Position);
            formData.append('Image', Image);

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url('staff/Offciales'); ?>',
                data: formData,
                processData: false, // Important: tell jQuery not to process the data
                contentType: false, // Important: tell jQuery not to set contentType
                dataType: 'json',
                success: function(data) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'New Offcial has been saved.',
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
                        text: 'An error occurred while saving your data or having a maximum announcement',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                }
            });
        });
    });
</script>
</body>

</html>