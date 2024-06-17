<title>BRGY Resident</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>
<div class="content">

    <div class="container-fluid mb-3">

        <div class="row">
            <div id="Anon-bx" class="col-md-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="font-weight-bold">Announcements</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <input type="text" class="form-control" id="Fulls" name="Fulls" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" hidden>


    <div class="container-fluid">

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



</div>


</div>