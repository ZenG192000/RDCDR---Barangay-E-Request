<title>BRGY STAFF OFFICIALS</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>


<div class="container mt-5">
    <div class="row">
        <div class="col mx-auto">


            <!-- ------------------------------------------- BARANGAY STAFF OFFICIALS DATA TABLE FORM ------------------------------------ -->

            <div class="">

                <div class="container ">
                    <div class="">
                        <form id="form2" class="" style="border: 1px solid #ccc;">

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

                            <div class="container mb-2" style="text-align: right;">
                                <button type="button" id="Payn-btn" data-toggle="modal" data-target="#Pay-N-Modal1">
                                    +
                                </button>
                            </div>
                            <!-- ------------- STAFF OFFICIALS DATA TABLE ONLY ------------- -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="font-weight-bold">BARANGAY OFFICIALS</h3>

                                        <main>
                                            <!--MDB Tables-->
                                            <div id="M-Stf-O-tbl" class="container-fluid mt-4">

                                                <div class="panel-body table-responsive">
                                                    <!--Table-->
                                                    <table id="Stf-O-brgy-tbl" class="table table-striped">
                                                        <!--Table head-->
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Slot Number</th>
                                                                <th>Nickname</th>
                                                                <th>Fullname</th>
                                                                <th>Position</th>
                                                                <th>2x2 Picture</th>
                                                                <th>Date Created</th>
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
                            <!-- -------------- STAFF OFFICIALS DATA TABLE ONLY ------------ -->
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY STAFF OFFICIALS DATA TABLE FORM END ------------------------------------ -->

            <div class="modal fade" id="Pay-N-Modal1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="Pay-Tran" aria-hidden="true">
                <!-- </div> -->

                <div class="modal-dialog modal-md" role="document">
                    <div id="PayN-mdl" class="modal-content">
                        <!-- <div class="container"> -->

                        <div class="modal-header">
                            <h5 class="modal-title">Add Official</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <form id="officialForm" class="PayT container px-5">
                                <div class="form-group">
                                    <label for="selected_slot">Select Slot:</label>

                                    <?php if (count($available_slots) < 10) : ?>
                                        <select name="selected_slot1" id="selected_slot1" class="form-control col-7">
                                            <?php for ($i = 1; $i <= 10; $i++) : ?>
                                                <?php if (!in_array($i, array_column($available_slots, 'slot_number'))) : ?>
                                                    <option value="<?= $i; ?>">
                                                        <?= 'Slot ' . $i; ?>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </select>
                                    <?php else : ?>
                                        <p>No More Available Slot</p>
                                    <?php endif; ?>

                                </div>
                                <div class="form-group">
                                    <label for="name">Nickname:</label>
                                    <input type="text" class="form-control col-7" id="Nickname" name="Nickname" placeholder="" />
                                </div>

                                <div class="form-group">
                                    <label for="types-doc">Surname:</label>
                                    <input type="text" class="form-control col-7" id="Surname" name="Surname" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="types-doc">Fistname:</label>
                                    <input type="text" class="form-control col-7" id="Firstname" name="Firstname" placeholder="" />
                                </div>
                                <div class="form-group">
                                    <label for="types-doc">Middlename:</label>
                                    <input type="text" class="form-control col-7" id="Middlename" name="Middlename" placeholder="" />
                                </div>

                                <div class="form-group">
                                    <label for="types-doc">Position:</label>
                                    <select class="form-control col-7" id="Position" name="Position" placeholder="">
                                        <option value="Chairman">Chairman</option>
                                        <option value="Secretary">Secretary</option>
                                        <option value="Kagawad">Kagawad</option>
                                        <option value="SK Chairperson">SK Chairperson</option>
                                        <option value="SK Kagawad">SK Kagawad</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="fileInput">Picture</label>
                                    <div class="input-wrapper">
                                        <input type="file" id="Imageee" class="form-control col-7" accept="image/*" />
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <!-- Confirm Button -->
                                    <button type="button" class="btn btn-primary" id="PayN-Conf1">Save</button>
                                </div>


                            </form>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>