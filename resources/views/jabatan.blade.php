
<!DOCTYPE html>
<html lang="en">

<head>
    @include('css')
</head>

<body class="g-sidenav-show   bg-gray-100">
    @include('sidebar')
    @include('header')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Master Jabatan</h6>
                        <button class="btn btn-success btn-sm mb-0">Add Position</button>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table id="salaryTable" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">details</th>
                                        <th class="text-secondary opacity-1"></th>
                                    </tr>
                                </thead>
                            <tbody>
                        <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">P1</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Manager</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      </td>
                      <td class="align-middle">
                      <button class="btn btn-primary btn-sm mb-0">Edit</button>
                    <button class="btn btn-danger btn-sm mb-0">Delete</button>
                      </td>
                    </tr>

                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">P2</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programmer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      </td>
                      <td class="align-middle">
                      <button class="btn btn-primary btn-sm mb-0">Edit</button>
                        <button class="btn btn-danger btn-sm mb-0">Delete</button>
                      </td>
                    </tr>

                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">P3</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Finance</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      </td>
                      <td class="align-middle">
                      <button class="btn btn-primary btn-sm mb-0">Edit</button>
                        <button class="btn btn-danger btn-sm mb-0">Delete</button>
                      </td>
                    </tr>

                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">P4</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Analyst</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      </td>
                      <td class="align-middle">
                      <button class="btn btn-primary btn-sm mb-0">Edit</button>
                        <button class="btn btn-danger btn-sm mb-0">Delete</button>
                      </td>
                    </tr>

                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">P5</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Head of Marketing</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      </td>
                      <td class="align-middle">
                      <button class="btn btn-primary btn-sm mb-0">Edit</button>
                        <button class="btn btn-danger btn-sm mb-0">Delete</button>
                      </td>
                    </tr>


                    
                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('setting')
  <!--   Core JS Files   -->
    @include('script')
</body>

</html>