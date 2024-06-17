<title>BRGY Resident Transaction</title>
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
                        <h3 class="font-weight-bold">Transactions</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <input type="text" class="form-control" id="Fulls" name="Fulls" value="<?= ucwords($user_info->Firstname . " " . substr($user_info->Middlename, 0, 1) . ". " . $user_info->Surname) ?>" hidden>

    <div class="container-fluid">

        <div id="TH-bx">
            <div class="card">
                <div class="card-body">

                    <main>
                        <!--MDB Tables-->
                        <div class="container-fluid mt-4">

                            <div class="panel-body table-responsive">
                                <!--Table-->
                                <table id="TH-brgy-tbl" class="table table-striped">
                                    <!--Table head-->
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Transaction #</th>
                                            <th>Types of Document</th>
                                            <th>Date Requested</th>
                                            <th>Date Claimed</th>
                                            <th>Payment Method</th>
                                            <th>Amount</th>
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
    </div>


</div>