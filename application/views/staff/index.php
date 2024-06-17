<title>BRGY STAFF DASHBOARD</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="admn-cards">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fas fa-users" style="font-size: 45px;"></i>
                            </div>
                            <div class="col text-center">
                                <span style="font-size: 25px;">POPULATION</span>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col mt-5">
                                <h6>Total Population</h6>
                            </div>
                            <div class="col">
                                <h3><?php echo $resident_count; ?></3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOTAL OF POPULATION PANEL END -->

                <!-- TOTAL OF MALE PANEL -->
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col text-center">
                                <i class="far fa-mars" style="font-size: 45px;"></i>
                            </div>
                            <div class="col text-center">
                                <span style="font-size: 25px;">MALE</span>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col mt-5">
                                <h6>Total Male</h6>
                            </div>
                            <div class="col">
                                <h3> <?php echo $male_resident_count; ?></3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOTAL OF MALE PANEL END -->

                <!-- TOTAL OF FEMALE PANEL -->
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col text-center">
                                <i class="far fa-venus" style="font-size: 45px;"></i>
                            </div>
                            <div class="col text-center">
                                <span style="font-size: 25px;">FEMALE</span>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col mt-5">
                                <h6>Total Female</h6>
                            </div>
                            <div class="col">
                                <h3><?php echo $female_resident_count; ?></3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOTAL OF FEMALE PANEL END -->

                <!-- TOTAL OF REVENUE PANEL -->
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="row">
                            <div class="col text-center">
                                <i class="fa-duotone fa-messages-dollar" style="font-size: 45px;"></i>
                            </div>
                            <div class="col text-center">
                                <span style="font-size: 25px;">REVENUE</span>
                            </div>
                        </div>

                        <div class="row text-center">
                            <div class="col mt-5">
                                <h6>Total Revenue</h6>
                            </div>
                            <div class="col">
                                <h3><?php echo number_format($total_amount, 2); ?></3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOTAL OF REVENUE PANEL END -->
            </div>
        </div>
    </div>
</div>