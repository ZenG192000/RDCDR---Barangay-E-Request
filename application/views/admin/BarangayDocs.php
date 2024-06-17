<title>RDCDR-Admin | Barangay Docs</title>
<?php

if ($this->session->userdata('user_info')) {
    $user_info = $this->session->userdata('user_info');
}
?>

<div class="content">

    <div class="text-center">
        <!-- <h1 id="helo-txt" class="ml-3 mr-3 ">Hello</h1> -->
        <h1 id="brgy-AM-lbl">Documents Archived</h1>
    </div>

</div>
<div class="content">
    <select class="form-control" style="width: 250px;" id="selectOption" onchange="showContent()">
        <option value="select">Select Category</option>
        <option value="clearance">Barangay Clearance</option>
        <option value="certification">Barangay Tax Certification</option>
    </select>
</div>
<!-- Content Area -->

<div id="selectcontent" class="content">
</div>
<div id="clearanceContent" class="content">
    <div class="container-fluid">

        <!-- Button trigger modal -->
        <button type="button" id="acc-mnge" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            RESTORE
        </button>

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

    <div class="">
        <!-- <h1 id="helo-txt" class="ml-3 mr-3 ">Hello</h1> -->
        <h1 id="brgy-AM-lbl">Barangay Clearance</h1>
    </div>






    <main>

        <!--MDB Tables-->
        <div class="container-fluid mt-4">


            <div class="card mb-4">
                <div id="tbl-card" class="card-body">


                    <div class="panel-body table-responsive">
                        <!--Table-->
                        <table id="brgy-tbl1" class="table table-striped">
                            <!--Table head-->
                            <thead>
                                <tr>

                                    <th>
                                        <input type="checkbox" class="selectAllCheckboxes" id="selectAll">
                                    </th>

                                    <th id="numbering">#</th>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Type of Roles</th>
                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                <tr>

                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>

                                    <th scope="row" id="numbering">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>ythr</td>

                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>ythr</td>
                                </tr>



                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">7</th>
                                    <td>wefwefwe</td>
                                    <td>opukyjoy</td>
                                    <td>ovdfkgor</td>
                                    <td>ythr</td>

                                </tr>

                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>




                </div>
            </div>

        </div>
        <!--MDB Tables-->

    </main>


</div>
<div id="certificationContent" class="content">
    <div class="container-fluid">

        <!-- Button trigger modal -->
        <button type="button" id="acc-mnge" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            RESTORE
        </button>

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

    <div class="">
        <!-- <h1 id="helo-txt" class="ml-3 mr-3 ">Hello</h1> -->
        <h1 id="brgy-AM-lbl">Barangay Tax Certification</h1>
    </div>






    <main>

        <!--MDB Tables-->
        <div class="container-fluid mt-4">


            <div class="card mb-4">
                <div id="tbl-card" class="card-body">


                    <div class="panel-body table-responsive">
                        <!--Table-->
                        <table id="brgy-tbl2" class="table table-striped">
                            <!--Table head-->
                            <thead>
                                <tr>

                                    <th>
                                        <input type="checkbox" class="selectAllCheckboxes" id="selectAll">
                                    </th>

                                    <th id="numbering">#</th>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Type of Roles</th>
                                </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                                <tr>

                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>

                                    <th scope="row" id="numbering">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>ythr</td>

                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>ythr</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>ythr</td>
                                </tr>



                                <tr>
                                    <td><input type="checkbox" class="checkbox" data-id="1"></td>
                                    <th scope="row" id="numbering">7</th>
                                    <td>wefwefwe</td>
                                    <td>opukyjoy</td>
                                    <td>ovdfkgor</td>
                                    <td>ythr</td>

                                </tr>

                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->
                    </div>




                </div>
            </div>

        </div>
        <!--MDB Tables-->

    </main>


</div>