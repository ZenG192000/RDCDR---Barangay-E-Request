<title>RDCDR-Admin | Account Management</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>

<!-- Content Area -->

<div class="content">

    <div class="">
        <!-- <h1 id="helo-txt" class="ml-3 mr-3 ">Hello</h1> -->
        <h1 id="brgy-AM-lbl" style="text-align: center;">Accounts Management</h1>
    </div>

</div>











<div class="container-fluid mb-3">

    <!-- Button trigger modal -->
    <!-- <button type="button" id="acc-mnge" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        RESTORE
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>

</div>









<div class="content">



    <!--MDB Tables-->
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold"></h3>

                <main id="DocA-bx">
                    <!--MDB Tables-->
                    <div class="container-fluid mt-4">


                        <div class="panel-body table-responsive">
                            <!--Table-->
                            <table id="brgy-tbl" class="table table-striped">
                                <!--Table head-->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Type of Roles</th>
                                        <th>Date Created</th>
                                        <th>Action</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
                            <!--Table-->
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

</div>
<!--MDB Tables-->

</main>

</div>