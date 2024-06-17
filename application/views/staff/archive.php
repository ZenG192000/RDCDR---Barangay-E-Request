<title>BRGY STAFF PAYMENTS</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col mx-auto">

            <!-- ------------------------------------------- BARANGAY DOCUMENT ARCHIVES TABLE FORM ------------------------------------ -->

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

                            <!-- ------------- DOCUMENT ARCHIVES DATA TABLE ONLY ------------- -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="font-weight-bold">DOCUMENT ARCHIVES</h3>

                                        <main>
                                            <!--MDB Tables-->
                                            <div id="M-Stf-DA-tbl" class="container-fluid mt-4">

                                                <div class="panel-body table-responsive">
                                                    <!--Table-->
                                                    <table id="Stf-DA-brgy-tbl" class="table table-striped">
                                                        <!--Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Types of Document</th>
                                                                <th>Date Requested</th>
                                                                <th>Date Claimed</th>
                                                                <th>Payment Method</th>
                                                                <th>Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" id="numbering">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" id="numbering">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" id="numbering">3</th>
                                                                <td>Larry</td>
                                                                <td>the Bird</td>
                                                                <td>@twitter</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" id="numbering">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" id="numbering">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" id="numbering">3</th>
                                                                <td>Larry</td>
                                                                <td>the Bird</td>
                                                                <td>@twitter</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row" id="numbering">7</th>
                                                                <td>wefwefwe</td>
                                                                <td>opukyjoy</td>
                                                                <td>ovdfkgor</td>
                                                                <td>ythr</td>
                                                                <td>ythr</td>
                                                            </tr>

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
                            <!-- -------------- DOCUMENT ARCHIVES DATA TABLE ONLY ------------ -->
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- DOCUMENT ARCHIVES DATA TABLE FORM END ------------------------------------ -->



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