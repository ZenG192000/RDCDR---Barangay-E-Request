<title>BRGY STAFF PAYMENTS</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col mx-auto">

            <!-- ------------------------------------------- BARANGAY PAYMENTS TABLE FORM ------------------------------------ -->

            <div class="">

                <div class="container">
                    <div class="">
                        <form id="form3" class="" style="border: 1px solid #ccc;">

                            <img src="<?= base_url('img/systemimg/Form Header.png') ?>" alt="" style="width: 100%;">

                            <div class="logo-ttl">
                                <div class="row col-md-12">
                                    <div class="col-md-4 text-center">
                                        <img src="<?= base_url('img/systemimg/logo.png') ?>" alt="" width="150px">
                                    </div>
                                    <div class="col-md-5 mt-5 text-center">
                                        <span>Republic of the Philippines</span>
                                        <h4 class="font-weight-bold">BARANGAY REAL DE CACARONG</h4>
                                        <span>Municipalit of Pandi</span>
                                        <br>
                                        <span>Province of Bulacan</span>
                                    </div>
                                </div>
                            </div>

                            <div class="container" style="padding: 20px;">
                                <div id="brgy-clrc" class="col-12">

                                </div>
                            </div>

                            <!-- ------------- PAYMENTS DATA TABLE ONLY ------------- -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="font-weight-bold">PAYMENTS</h3>
                                        <div class="container-fluid">
                                            <div class="row justify-content-end">
                                                <div class="col-sm-3">
                                                    <label for="paymentMethodSelector">Select Categories:</label>
                                                    <!-- Dropdown for payment method selection -->
                                                    <select id="paymentMethodSelector" class="form-control" onchange="filterByPaymentMethod()">
                                                        <option value="">All</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="GCash">GCash</option>
                                                        <option value="Paid">Paid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <main>
                                            <!--MDB Tables-->
                                            <div id="M-Stf-PM-tbl" class="container-fluid mt-4">

                                                <div class="panel-body table-responsive">
                                                    <!--Table-->
                                                    <table id="Stf-PM-brgy-tbl" class="table table-striped">
                                                        <!--Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Types of Document</th>
                                                                <th>Fullname</th>
                                                                <th>Date Requested</th>
                                                                <th>Payment Method</th>
                                                                <th>Amount</th>
                                                                <th>Reciept</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                        </tbody>
                                                        <!--Table body-->
                                                    </table>
                                                    <!--Table-->
                                                </div>

                                            </div>
                                            <!--MDB Tables-->
                                        </main>

                                    </div>
                                </div>
                            </div>
                            <!-- -------------- PAYMENTS DATA TABLE ONLY ------------ -->
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY PAYMENTS DATA TABLE FORM END ------------------------------------ -->



            <!-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby=" exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Release Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form id="editForm">
                            <div class="modal-body">
                                <input type="text" id="id" class="form-control" name="DocumentID" hidden>
                                <div class="form-group">
                                    <label>Type of Document</label>
                                    <input type="text" id="editTypeofD" class="form-control" name="editTypeofD" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="editName" class="form-control" name="Name" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Issue Day</label>
                                    <input type="text" id="editIssueDay" class="form-control" name="editIssueDay" required>
                                </div>
                                <div class="form-group">
                                    <label>Issue M/Y</label>
                                    <input type="text" id="editIssueMY" class="form-control" name="editIssueMY" required>
                                </div>
                                <div class="form-group">
                                    <label>Date of Claimed</label>
                                    <input type="date" id="editDOC" class="form-control" name="editDOC" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Release Now!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
"></script>

<script>
    $(document).ready(function() {
        var table = $('#Stf-PM-brgy-tbl').DataTable({
            "ajax": "<?php echo site_url('staff/fetchDatafromDatabasePayment'); ?>",
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


        // Add custom search function for all columns
        $.fn.dataTable.ext.search.push(
            function(settings, data, dataIndex) {
                var selectedValue = $('#paymentMethodSelector').val().toLowerCase();

                // Loop through all columns (excluding the first one, which contains numbering)
                for (var i = 1; i < data.length; i++) {
                    if (selectedValue === '' || containsCompleteWord(data[i].toLowerCase(), selectedValue)) {
                        return true;
                    }
                }

                return false;
            }
        );

        // Apply the custom search when the table is drawn
        table.on('draw', function() {
            table.draw();
        });
    });

    function filterByPaymentMethod() {
        // Redraw DataTable when the payment method is changed
        $('#Stf-PM-brgy-tbl').DataTable().draw();
    }

    // Function to check if a cell contains a complete word
    function containsCompleteWord(cellData, searchTerm) {
        // Use regex to match complete words
        var regex = new RegExp("\\b" + searchTerm + "\\b");
        return regex.test(cellData);
    }
</script>