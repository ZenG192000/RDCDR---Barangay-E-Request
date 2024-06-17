<title>BRGY STAFF ANNOUNCEMENT</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col mx-auto">


            <!-- ------------------------------------------- BARANGAY RESIDENT RECORDS TABLE FORM ------------------------------------ -->

            <div class="">

                <div class="container-fluid">
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

                            <!-- ------------- RESIDENT RECORDS DATA TABLE ONLY ------------- -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="font-weight-bold">RESIDENT RECORDS</h3>

                                        <main>
                                            <!--MDB Tables-->
                                            <div id="M-Stf-RR-tbl" class="container-fluid mt-4">

                                                <div class="panel-body table-responsive">
                                                    <!--Table-->
                                                    <table id="Stf-RR-brgy-tbl" class="table table-striped">
                                                        <!--Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Resident#</th>
                                                                <th>Surname</th>
                                                                <th>Firstname</th>
                                                                <th>Lastname</th>
                                                                <th>Photo</th>
                                                                <th>ValidID</th>
                                                                <th>Signature</th>
                                                                <th>DateCreated</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <!--Table body-->
                                                    </table>
                                                    <!--Table-->
                                                </div>

                                            </div>
                                            <!--MDB Tables-->
                                            <br>
                                        </main>

                                    </div>
                                </div>
                                <br>
                            </div>
                            <!-- -------------- RESIDENT RECORDS DATA TABLE ONLY ------------ -->
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY RESIDENT RECORDS DATA TABLE FORM END ------------------------------------ -->





        </div>
    </div>
</div>