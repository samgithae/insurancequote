

@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> Benefits </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add a Benefit</a></li>

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
                            <h4 class="card-title mb-0">Add a Benefit</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form  method="POST" action="{{ route('benefit.store') }}" class="form-steps"  autocomplete="off">
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
                                        <input type="hidden" name="insurance_cover" id="insurance_cover" required>
                                    </div>


                                    <div class="col-lg-4">
                                        <div>
                                            <label for="name" class="form-label">Benefit</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Benefit Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div>
                                            <label for="value" class="form-label">Value</label>
                                            <input type="text" class="form-control" id="value" name="value" placeholder="Enter Value" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-4" >
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" name="status" required>
                                        <option value="free">Free</option>
                                        <option value="paid">Paid</option>
                                        </select>
                                    </div>



                                    <div class="col-lg-4">
                                        <div>
                                            <label for="cost" class="form-label">Cost</label>
                                            <input type="text" class="form-control" id="cost" name="cost" placeholder="Enter Cost" >
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-success btn-label right ms-auto m-4" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Add Benefit</button>

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
                            <h4 class="card-title mb-0">Add a Benefit</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Insurance Cover</th>
                                    <th scope="col">Benefit</th>
                                    <th scope="col">Value</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($benefits as $benefit)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$benefit->insurance_cover}}</td>
                                    <td>{{$benefit->name}}</td>
                                    <td>{{$benefit->value}}</td>
                                    <td>{{$benefit->status}}</td>
                                    <td>{{$benefit->cost}}</td>
                                    <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('benefit.edit', $benefit->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('benefit.destroy',$benefit)}}"
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
                                {{$benefits->links()}}
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
                    document.getElementById('insurance_cover').value = selectedOption.text;
                });
            </script>
@endsection
