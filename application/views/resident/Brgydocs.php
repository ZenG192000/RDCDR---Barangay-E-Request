<title>BRGY Documents</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col mx-auto">

            <!-- ---------- Barangay Certificate options list --------- -->
            <div id="Frm-drp-dwn" class="form-group font-weight-bold">
                <label for="dropdownSelect">Need a Barangay Form?</label>
                <select class="custom-select text-center font-weight-bold" id="dropdownSelect" onchange="toggleForm()">
                    <option value="default" class="mt-2 font-weight-bold">Barangay form options</option>
                    <option value="form1" class="mt-2 font-weight-bold">Barangay Clearance</option>
                    <option value="form2" class="mt-2 font-weight-bold">Barangay Certification</option>
                    <option value="form3" class="mt-2 font-weight-bold">Barangay Indigency</option>
                    <option value="form4" class="mt-2 font-weight-bold">Barangay Good Moral</option>
                    <option value="form5" class="mt-2 font-weight-bold">Barangay Residency Certificate</option>
                </select>
            </div>
            <!-- ---------- Barangay Certificate options list End --------- -->


            <!-- ------------------------------------------- BARANGAY CLEARANCE FORM ------------------------------------ -->

            <div class="">

                <div class="container ">

                    <div class="row">

                        <form id="form1" class="d-none">
                            <div class="content" style="border: 1px solid #ccc;">
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
                                        <input type="text" id="TypeofDocument1" name="TypeofDocument1" value="BARANGAY CLEARANCE" hidden>
                                        <div class="text-center">
                                            <h1 id="brgy-clrc-hdr" class="mb-4">BARANGAY CLEARANCE</h1>
                                        </div>
                                        <p class="text-left mt-5">TO WHOM IT MAY CONCERN</p>
                                        <input type="text" id="hiddenSurname" name="hiddenSurname" value="<?= $user_info->Surname ?>" hidden>
                                        <div class="row">
                                            <p class="mb-4 text-justify col-md-12">
                                                <span>THIS is to certify that Mr./Ms./Mrs.</span>
                                                <span>
                                                    <input type="text" class="form-control" id="Fullname1" name="Fullname1" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" style="width: auto; display: inline-block;" readonly> is a bonafide
                                                    resident of
                                                </span>
                                                <span>
                                                    <input type="text" class="form-control" id="Address1" name="Address" value="" style="width: auto; display: inline-block;" readonly>
                                                </span>
                                                <span>Real de Cacarong Pandi Bulacan.</span>
                                            </p>
                                        </div>

                                        <p class="text-justify ml-4">
                                            THAT, according to the existing records kept in this office, no criminal
                                            complaints had
                                            been
                                            filed against HIM/HER.
                                        </p>
                                        <p class="text-justify ml-4">
                                            THAT He/She is known to be of good moral character, reputation, and a
                                            law-abiding member
                                            of
                                            this community.
                                        </p>
                                        <p class="text-justify ml-4">
                                            THIS certification is being issued upon the verbal request of the person
                                            named above to
                                            be
                                            used for all legal intent and purposes only.
                                        </p>

                                        <div class="row">
                                            <p class="mb-4 mt-3 text-justify col-md-12 ml-4">
                                                <span>ISSUED this</span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 10%; display: inline-block;" readonly> day of
                                                </span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 15%; display: inline-block;" readonly>
                                                </span>
                                                <!-- <span>APRIL, 2023</span> -->
                                            </p>
                                        </div>


                                        <div class="mt-4">
                                            <div class="col-4">
                                                <hr class="custom-hr">
                                                <p class="text-center">Name and Signature</p>
                                                </hr>
                                            </div>
                                        </div>
                                        <div class="text-right mt-5">
                                            <p id="PB" class="font-weight-bold">HON. ALEJANDRO SJ. ANGELES</p>
                                            <p class="mr-4">Punong Barangay</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-image-container text-center">
                                    <span id="fttr-text" class="col-sm-2">"Sama-sama sa Pag-unlad, SULONG MGA
                                        REALEÑOS!!"</span>
                                    <img id="scrl-pic" src="<?= base_url('img/systemimg/Scrollpicfooter.png') ?>" alt="" style="width: 100%; height: 50px;">
                                    <img src="<?= base_url('img/systemimg/Form footer.jpg') ?>" alt="" style="width: 100%; height: 80px;">


                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <button id="resbutton1" type="submit" class="btn btn-success col-md-4 m-5 font-weight-bold d-none">REQUEST</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY CLEARANCE FORM END ------------------------------------ -->

            <!-- ------------------------------------------- BARANGAY CERTIFICATION FORM ------------------------------------ -->

            <div class="">

                <div class="container ">
                    <div class="row">
                        <form id="form2" class="d-none">
                            <div class="content" style="border: 1px solid #ccc;">
                                <!-- ----- Certificate form header ----- -->
                                <img src="<?= base_url('img/systemimg/Form Header.png') ?>" alt="" style="width: 100%;">

                                <div class="logo-ttl">
                                    <div class="row col-md-12">
                                        <input type="text" id="TypeofDocument2" name="TypeofDocument2" value="BARANGAY CERTIFICATION" hidden>
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
                                <!-- ----- Certificate form header End ----- -->

                                <!-- ----- Certificate form body ----- -->
                                <div class="container" style="padding: 20px;">

                                    <div id="brgy-clrc" class="col-12">

                                        <div class="text-center">
                                            <h1 id="brgy-clrc-hdr" class="mb-4 text-underline">CERTIFICATION</h1>
                                        </div>
                                        <p class="text-left mt-5">TO WHOM IT MAY CONCERN</p>

                                        <div class="row">
                                            <p class="mb-4 text-justify col-md-12">
                                                <span>THIS is to certify that Mr./Ms./Mrs.</span>
                                                <span>
                                                    <input type="text" class="form-control" id="Fullname2" name="Fullname2" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" style="width: auto; display: inline-block;" readonly> is a bonafide
                                                    resident of
                                                </span>
                                                <span>
                                                    <!-- <input type="text" class="form-control" value="Blk 25 Lot 54"
                                    style="width: auto; display: inline-block;"> -->
                                                </span>
                                                <span>Real de Cacarong PANDI BULACAN. He need a copy of MEDICO LEGAL
                                                    CERTIFICATION
                                                    to be
                                                    used for his complaint blotter.</span>
                                            </p>
                                        </div>


                                        <p class="text-justify ml-4">
                                            THIS certification is being issued upon the verbal request of the person
                                            name above to
                                            be
                                            used for legal intents and purposes only.
                                        </p>

                                        <div class="row">
                                            <p class="mb-4 mt-3 text-justify col-md-12 ml-4">
                                                <span>ISSUED this</span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 10%; display: inline-block;" readonly> day of
                                                </span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 15%; display: inline-block;" readonly>
                                                </span>
                                                <!-- <span>APRIL, 2023</span> -->
                                            </p>
                                        </div>


                                        <div class="mt-4">
                                            <div class="col-4">
                                                <hr class="custom-hr">
                                                <p class="text-center">Name and Signature</p>
                                                </hr>
                                            </div>
                                        </div>
                                        <div class="text-right mt-5">
                                            <p id="PB" class="font-weight-bold">HON. ALEJANDRO SJ. ANGELES
                                            </p>
                                            <p class="mr-4">Punong Barangay</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ----- Certificate form body End ----- -->

                                <div class="footer-image-container text-center">
                                    <span id="fttr-text" class="col-sm-2">"Sama-sama sa Pag-unlad, SULONG MGA
                                        REALEÑOS!!"</span>
                                    <img id="scrl-pic" src="<?= base_url('img/systemimg/Scrollpicfooter.png') ?>" alt="" style="width: 100%; height: 50px;">
                                    <img src="<?= base_url('img/systemimg/Form footer.jpg') ?>" alt="" style="width: 100%; height: 80px;">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <button id="resbutton2" type="submit" class="btn btn-success col-md-4 m-5 font-weight-bold d-none">REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY CERTIFICATION FORM END ------------------------------------ -->


            <!-- ------------------------------------------- BARANGAY INDIGENCY FORM ------------------------------------ -->

            <div class="">

                <div class="container">
                    <div class="row">
                        <form id="form3" class="d-none">
                            <div class="content" style="border: 1px solid #ccc;">
                                <img src="<?= base_url('img/systemimg/Form Header.png') ?>" alt="" style="width: 100%;">

                                <div class="logo-ttl">
                                    <div class="row col-md-12">
                                        <input type="text" id="TypeofDocument3" name="TypeofDocument3" value="BARANGAY INDIGENCY" hidden>
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
                                        <div class="text-center">
                                            <h1 id="brgy-clrc-hdr" class="mb-4 text-underline">BARANGAY INDIGENCY
                                            </h1>
                                        </div>
                                        <p class="text-left mt-5">TO WHOM IT MAY CONCERN</p>

                                        <div class="row">
                                            <p class="mb-4 text-justify col-md-12">
                                                <span>THIS is to certify that Mr./Ms./Mrs.</span>
                                                <span>
                                                    <input type="text" class="form-control" id="Fullname3" name="Fullname3" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" style="width: auto; display: inline-block;" readonly> is a bonafide
                                                    resident of
                                                </span>
                                                <span> Barangay Real de Cacarong Pandi Bulacan. He/She is </span>
                                                <span>
                                                    <input type="text" class="form-control" id="Age3" name="Age3" value="<?= $user_info->Age ?>" style="width: 5%; display: inline-block;" readonly> years old and
                                                    he/she belong to
                                                    one of
                                                    our indigent families.
                                                </span>
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p class="mb-4 mt-3 text-justify col-md-12 ml-4">
                                                <span>ISSUED this</span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 10%; display: inline-block;" readonly> day of
                                                </span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 15%; display: inline-block;" readonly>
                                                </span>
                                                <!-- <span>APRIL, 2023</span> -->
                                            </p>
                                        </div>

                                        <p class="text-justify ml-4 mt-4">
                                            Issued to him/her to seek
                                            <br>
                                            <label class="ml-2 mt-3">
                                                <input type="radio" name="purpose" value="Financial" id="Fin" class="mr-2" onclick="updateInputField(); toggleOtherReasonInput();">
                                                Financial
                                            </label>
                                            <br>
                                            <label class="ml-2">
                                                <input type="radio" name="purpose" value="Medical" id="Med" class="mr-2" onclick="updateInputField(); toggleOtherReasonInput();">
                                                Medical
                                            </label>
                                            <br>
                                            <label class="ml-2">
                                                <input type="radio" name="purpose" value="Burial Assistance" id="Burial" class="mr-2" onclick="updateInputField(); toggleOtherReasonInput();">
                                                Burial Assistance
                                            </label>
                                            <br>
                                            <label class="ml-2">
                                                <input type="radio" name="purpose" value="Others" class="mr-2" id="others-radio" onclick="updateInputField(); toggleOtherReasonInput();">
                                                Others
                                            </label>

                                        <div class="form-group mt-3 ml-5" id="otherReasonInput" style="display: none;">
                                            <label for="otherReason">Specify Other Reason:</label>
                                            <input type="text" class="form-control" id="otherReason" name="otherReason">
                                        </div>
                                        </p>

                                        <div class="mt-5">
                                            <div class="col-4">
                                                <hr class="custom-hr">
                                                <p class="text-center">Name and Signature</p>
                                                </hr>
                                            </div>
                                        </div>
                                        <div class="text-right mt-5">
                                            <p id="PB" class="font-weight-bold">HON. ALEJANDRO SJ. ANGELES
                                            </p>
                                            <p class="mr-4">Punong Barangay</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-image-container text-center">
                                    <span id="fttr-text" class="col-sm-2">"Sama-sama sa Pag-unlad, SULONG MGA
                                        REALEÑOS!!"</span>
                                    <img id="scrl-pic" src="<?= base_url('img/systemimg/Scrollpicfooter.png') ?>" alt="" style="width: 100%; height: 50px;">
                                    <img src="<?= base_url('img/systemimg/Form footer.jpg') ?>" alt="" style="width: 100%; height: 80px;">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <button id="resbutton3" type="submit" class="btn btn-success col-md-4 m-5 font-weight-bold d-none">REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY INDIGENCY FORM END ------------------------------------ -->


            <!-- ------------------------------------------- BARANGAY GOOD MORAL CHARACTER FORM ------------------------------------ -->

            <div class="">

                <div class="container ">
                    <div class="row">
                        <form id="form4" class="d-none">
                            <div class="content" style="border: 1px solid #ccc;">
                                <img src="<?= base_url('img/systemimg/Form Header.png') ?>" alt="" style="width: 100%;">

                                <div class="logo-ttl">
                                    <div class="row col-md-12">
                                        <input type="text" id="TypeofDocument4" name="TypeofDocument4" value="CERTIFICATE OF GOOD MORAL CHARACTER" hidden>
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
                                        <div class="text-center">
                                            <h1 id="brgy-clrc-hdr" class="mb-4 text-underline">CERTIFICATE OF GOOD
                                                MORAL CHARACTER
                                            </h1>
                                        </div>
                                        <p class="text-left mt-5">TO WHOM IT MAY CONCERN</p>

                                        <div class="row">
                                            <p class="mb-4 text-justify col-md-12">
                                                <span>THIS is to certify that Mr./Ms./Mrs.</span>
                                                <span>
                                                    <input type="text" class="form-control" id="Fullname4" name="Fullname4" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" style="width: 30%; display: inline-block;" readonly> of legal age,
                                                    single, Filipino
                                                    and
                                                    resident of Real de Cacarong Pandi Bulacan is known to me to be
                                                    a person of good
                                                    moral character, honest, trustworthy and law abiding citizen in
                                                    this Barangay.
                                                </span>

                                            </p>
                                        </div>


                                        <p class="text-justify ml-4">
                                            This further certify that he has not been involved in any act against
                                            barangay rules and
                                            regulations.
                                        </p>
                                        <p class="text-justify ml-4">
                                            This Certification is being issued upon the request of the bearer for
                                            reference
                                            purposes.
                                        </p>

                                        <div class="row">
                                            <p class="mb-4 mt-3 text-justify col-md-12 ml-4">
                                                <span>ISSUED this</span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 5%; display: inline-block;" readonly> day of
                                                </span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 15%; display: inline-block;" readonly> here at Real De
                                                    Cacarong Pandi
                                                    Bulacan.
                                                </span>
                                                <!-- <span>APRIL, 2023</span> -->
                                            </p>
                                        </div>


                                        <div class="mt-4">
                                            <div class="col-4">
                                                <hr class="custom-hr">
                                                <p class="text-center">Name and Signature</p>
                                                </hr>
                                            </div>
                                        </div>
                                        <div class="text-right mt-5">
                                            <p id="PB" class="font-weight-bold">HON. ALEJANDRO SJ. ANGELES
                                            </p>
                                            <p class="mr-4">Punong Barangay</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-image-container text-center">
                                    <span id="fttr-text" class="col-sm-2">"Sama-sama sa Pag-unlad, SULONG MGA
                                        REALEÑOS!!"</span>
                                    <img id="scrl-pic" src="<?= base_url('img/systemimg/Scrollpicfooter.png') ?>" alt="" style="width: 100%; height: 50px;">
                                    <img src="<?= base_url('img/systemimg/Form footer.jpg') ?>" alt="" style="width: 100%; height: 80px;">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <button id="resbutton4" type="button" class="btn btn-success col-md-4 m-5 font-weight-bold d-none">REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY GOOD MORAL CHARACTER FORM END ------------------------------------ -->


            <!-- ------------------------------------------- BARANGAY CERTIFICATION RESIDENCY FORM ------------------------------------ -->

            <div class="">

                <div class="container">
                    <div class="row">
                        <form id="form5" class="d-none" style="border: 1px solid #ccc;">
                            <div class="content" style="border: 1px solid #ccc;">
                                <img src="<?= base_url('img/systemimg/Form Header.png') ?>" alt="" style="width: 100%;">

                                <div class="logo-ttl">
                                    <div class="row col-md-12">
                                        <input type="text" id="TypeofDocument5" name="TypeofDocument5" value="CERTIFICATION OF RESIDENCY" hidden>
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
                                        <div class="text-center">
                                            <h1 id="brgy-clrc-hdr" class="mb-4 text-underline">CERTIFICATE RESIDENCY
                                            </h1>
                                        </div>
                                        <p class="text-left mt-5">TO WHOM IT MAY CONCERN</p>

                                        <div class="row">
                                            <p class="mb-4 text-justify col-md-12">
                                                <span>THIS is to certify that the person whose name, signature,
                                                    thumbmark and other
                                                    personal data appearing requested for a certification of
                                                    Residency from the
                                                    Office
                                                    and the results are listed below:
                                                </span>
                                                <br><br>
                                                <span>
                                                    NAME:
                                                    <input type="text" class="form-control" id="Fullname5" name="Fullname5" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" style="width: 30%; display: inline-block;" readonly>
                                                </span>
                                                <br>
                                                <span>
                                                    ADDRESS:
                                                    <input type="text" class="form-control" id="Address" name="Address" value="" style="width: 30%; display: inline-block;" readonly>
                                                </span>
                                                <br>
                                                <span>
                                                    DATE OF BIRTH:
                                                    <input type="text" class="form-control" id="DateOfBirth5" name="DateOfBirth5" value="<?= $user_info->Birthday ?>" style="width: 30%; display: inline-block;" readonly>
                                                </span>
                                                <br>
                                                <span>
                                                    PLACE OF BIRTH:
                                                    <input type="text" class="form-control" id="PlaceOfBirth5" name="PlaceOfBirth5" value="" style="width: 30%; display: inline-block;">
                                                </span>
                                                <br>
                                                <span>
                                                    YEARS OF RESIDENCY:
                                                    <input type="text" class="form-control" id="YearOfResident5" name="YearOfResident5" value="" style="width: 30%; display: inline-block;">
                                                </span>
                                            </p>
                                        </div>

                                        <span>
                                            This certification is being issued upon the request of the above named
                                            person name for
                                            whatever legal purpose and intent it is deemed neccesary.
                                        </span>




                                        <div class="row">
                                            <p class="mb-4 mt-3 text-justify col-md-12 ml-4">
                                                <span>ISSUED this</span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 5%; display: inline-block;" readonly> day of
                                                </span>
                                                <span>
                                                    <input type="text" class="form-control text-center" value="" style="width: 15%; display: inline-block;" readonly> here at Real De
                                                    Cacarong Pandi
                                                    Bulacan.
                                                </span>
                                                <!-- <span>APRIL, 2023</span> -->
                                            </p>
                                        </div>


                                        <div class="mt-4">
                                            <div class="col-4">
                                                <hr class="custom-hr">
                                                <p class="text-center">Name and Signature</p>
                                                </hr>
                                            </div>
                                        </div>
                                        <div class="text-right mt-5">
                                            <p id="PB" class="font-weight-bold">HON. ALEJANDRO SJ. ANGELES
                                            </p>
                                            <p class="mr-4">Punong Barangay</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-image-container text-center">
                                    <span id="fttr-text" class="col-sm-2">"Sama-sama sa Pag-unlad, SULONG MGA
                                        REALEÑOS!!"</span>
                                    <img id="scrl-pic" src="<?= base_url('img/systemimg/Scrollpicfooter.png') ?>" alt="" style="width: 100%; height: 50px;">
                                    <img src="<?= base_url('img/systemimg/Form footer.jpg') ?>" alt="" style="width: 100%; height: 80px;">
                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <button id="resbutton5" type="button" class="btn btn-success col-md-4 m-5 font-weight-bold d-none">REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ------------------------------------------- BARANGAY CERTIFICATION RESIDENCY FORM END ------------------------------------ -->
            <div class="modal fade" id="Pay-N-Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="Pay-Tran" aria-hidden="true">
                <!-- </div> -->
                <div class="modal-dialog modal-lg" role="document">
                    <div id="PayN-mdl" class="modal-content">
                        <!-- <div class="container"> -->

                        <div class="modal-header">
                            <h5 class="modal-title">Payment Transaction</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">

                                <div class="row">
                                    <div class="col-lg-7">

                                        <div class="form-group">
                                            <label for="name">Transaction #</label>
                                            <input type="text" class="form-control col-lg-9" id="TransactionNo" name="TransactionNo" placeholder="" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control col-lg-9" id="email" placeholder="" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="types-doc">Types of Documents:</label>
                                            <input type="text" class="form-control col-lg-9" id="types-doc" placeholder="" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label>Payment Method:</label>
                                            <div id="cstm-rad-btn" class="custom-radio-group col-md-4">
                                                <div class="custom-radio">
                                                    <input class="form-check-input" type="radio" name="paymentMethod" id="cash" value="Cash" />
                                                    <label class="form-check-label" for="cash">Cash</label>
                                                </div>

                                                <div class="container">
                                                    <div class="custom-radio">
                                                        <input class="form-check-input" type="radio" name="paymentMethod" id="gcash" value="GCash" />
                                                        <label class="form-check-label" for="gcash">GCash</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-4">

                                        <div class="image-section">

                                            <div class="img-plch">

                                                <!-- <input type="file" id="fileInput" accept="image/*" style="display: none;" /> -->
                                                <img id="image-plc-h" class="img-fluid" src="" style="cursor: pointer; display: none;" />
                                                <!-- <label for="image-plc-h">Gcash Receipt</label> -->
                                            </div>



                                            <div id="hid2" class="image-plc-d" style="display: none;">
                                                <img id="image-plc-fxd" src="<?= base_url('img/systemimg/GcashQRReceipt.jpg'); ?>" alt="Gcash Qr" style="width: 215px; height: 282px; border-radius: 20px; border: 2px solid #34a853;" />

                                                <img id="gcsh-logo" src="<?= base_url('img/systemimg/Gcash-logo.jpg'); ?>" alt="">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- <input type="file" id="fileInput" accept="image/*" style="display: none;" /> -->


                            <div id="Amnt" class="form-group mt-3">
                                <label for="amount">Amount:</label>
                                <input type="number" class="form-control col-md-4" id="amount" value="200" placeholder="" readonly />
                            </div>


                            <div class="form-group" id="hid" style="display: none;">
                                <label for="fileInput">Receipt of Payment</label>
                                <div class="input-wrapper">
                                    <input type="file" id="fileInput" accept="image/*" />
                                </div>
                            </div>



                            <div class="modal-footer">
                                <!-- Confirm Button -->
                                <button type="submit" class="btn btn-primary" id="PayN-Conf">Confirm</button>
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





<!-- <button type="button" class="btn btn-success" id="requestButton">REQUEST</button> -->