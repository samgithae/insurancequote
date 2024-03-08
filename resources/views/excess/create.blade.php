

@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> Excess </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add an Excess</a></li>

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
                            <h4 class="card-title mb-0">Add an Excess</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form  method="POST" action="{{ route('excess.store') }}" class="form-steps"  autocomplete="off">
                                @csrf
                                <div class="row mb-3" >

                                    <div class="col-lg-4">
                                        <label class="form-label" for="insurance_cover">Insurance Cover</label>

                                        <select class="form-select" type="text" id="insuranceCover" name="insurance_cover_id" required>
                                            <option value="" selected disabled >Select Insurance Cover</option>

                                            @foreach($insuranceCovers as $id => $insuranceCover )
                                                <option value="{{ $id }}">{{ $insuranceCover }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="insurance_cover_name" id="insurance_cover_name" required>
                                    </div>


                                    <div class="col-lg-4">
                                        <div>
                                            <label for="name" class="form-label">Excess name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Excess Name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">


                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-success btn-label right ms-auto m-4" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Add Excess</button>

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
                            <h4 class="card-title mb-0">Add an Excess</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Insurance Cover Name</th>
                                    <th scope="col">Excess</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($excesses as $excess)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$excess->insurance_cover_name}}</td>
                                    <td>{{$excess->name}}</td>
                                    <td>{{$excess->amount}}</td>
                                    <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('excess.edit', $excess->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('excess.destroy',$excess)}}"
                                                    method="post">

                                                  @csrf
                                                  @method('delete')
                                                  <a href=""
                                                     class="dltBtn btn btn-sm btn-danger remove-item-btn"
                                                     data-bs-toggle="modal">Delete </a>

                                              </form>
                                          </div>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="container d-flex align-content-end">
                                {{$excesses->links()}}
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

                document.getElementById('insuranceCover').addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    document.getElementById('insurance_cover_name').value = selectedOption.text;
                });
            </script>
@endsection
