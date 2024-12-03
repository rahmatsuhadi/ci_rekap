
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Students Management</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <div class="d-sm-flex align-items-center justify-content-end mb-4">                        
            <button data-toggle="modal" data-target="#modal-create" type="button" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Students</button>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white">Students</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Name</th>
                                <th>NIM</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> -->
                        <tbody>
                            
                            <tr>
                                <td class="font-weight-bold">Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>
                                    <button class="btn text-danger" data-toggle="modal" data-target="#modal-delete">
                                    Delete <i class="fas fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>
                                    <button class="btn text-danger" data-toggle="modal" data-target="#modal-delete">
                                    Delete <i class="fas fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    <!-- Modal -->
<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modal-deleteLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center"> <i class="fas fa-solid fa-exclamation text-danger" ></i></p>
        <h5 class="text-center">Are Your Sure?</h5>
        <p>Do your realy want to delete these records? This process cannot be undone</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary  text-white">
                <h5 class="modal-title" id="modalCreateLabel">Register Users</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group"><label for="exampleFormControlInput1">Email address</label><input class="form-control" id="exampleFormControlInput1" type="email" placeholder="mathilda@example.com"></div>
                <div class="form-group"><label for="exampleFormControlInput1">Name</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="Mathilda"></div>
                <div class="form-group"><label for="exampleFormControlInput1">NIM</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="23.01.5968"></div>
                <div class="form-group"><label for="exampleFormControlInput1">Password</label><input class="form-control" id="exampleFormControlInput1" type="password" placeholder="******"></div>
               
                <!-- <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label><select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div> -->
                
                <!-- <div class="form-group"><label for="exampleFormControlTextarea1">Example textarea</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div> -->
            </form>
            </div>
            <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save changes</button></div>
        </div>
    </div>
</div>