

@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Covers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add an insurance Cover</a></li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add an insurance Cover</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form  method="POST" action="{{ route('insuranceCover.store') }}" class="form-steps" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div>
                                            <label for="insurer" class="form-label">Insurer</label>
                                            <input type="text" class="form-control" id="insurer" name="insurer" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <label for="cost" class="form-label">Cost</label>
                                            <input type="number" class="form-control" id="cost" name="cost" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div>
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-success btn-label right ms-auto m-4" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Add</button>

                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div><!-- end row -->

            <div class="row">

                <div class="col-xl-10 offset-lg-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add an insurance Cover</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($insuranceCovers as $insuranceCover)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$insuranceCover->name}}</td>
                                    <td>{{$insuranceCover->email}}</td>
                                    <td><img src="{{$insuranceProvider->logo}}" class="img img-thumbnail logo-img" style="max-height: 50px;"> </td>
                                  <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('insuranceCover.edit', $insuranceCover->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('insuranceCover.destroy',$insuranceCover)}}"
                                                    method="post">

                                                  @csrf
                                                  @method('delete')
                                                  <a href=""
                                                     class="dltBtn btn btn-sm btn-danger remove-item-btn"
                                                     data-bs-toggle="modal">Archive </a>

                                              </form>
                                          </div>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="container d-flex align-content-end">
                                {{$insuranceCovers->links()}}
                            </div>
                        </div>
                    </div>
                </div>


            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>

@endsection
        @section('custom_scripts')

            <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('.dltBtn').click(function (e) {
                    var form = $(this).closest('form');
                    e.preventDefault();
                    swal({
                        title: "Are you sure?",
                        text: "This record will be moved to archives an will not be available on registered family relation list",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {
                                form.submit();
                                swal("Poof! This record has been archived!", {
                                    icon: "success",
                                });
                            } else {
                                swal("Your record is safe!");
                            }
                        });
                });
            </script>
@endsection
