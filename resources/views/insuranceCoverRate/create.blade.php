

@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Cover Rates</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add an insurance Cover Rate</a></li>

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
                            <h4 class="card-title mb-0">Add an insurance Cover Rate</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form  method="POST" action="{{ route('insuranceCoverRate.store') }}" class="form-steps" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                <div class="row">
                                   

                                <div class="col-lg-3">
                                    <label class="form-label" for="insurance_cover">Insurance Cover</label>
                                    <select class="form-select" type="text" id="insuranceCover" name="insurance_cover_id" required>
                                        <option value="" selected disabled>Select Insurance Cover</option>
                                        @foreach($insuranceCovers as $id => $insuranceCover)
                                            <option value="{{ $id  }}">{{ $insuranceCover }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="insurance_cover" id="insurance_cover" required>
                                </div>     
                                
                                    
                                    <div class="col-lg-3">
                                        <div>
                                            <label for="minimum_value" class="form-label">Minimum Value</label>
                                            <input type="number" class="form-control" id="minimum_value" name="minimum_value" placeholder="Enter Minimum Value" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="maximum_value" class="form-label">Maximum Value</label>
                                            <input type="number" class="form-control" id="maximum_value" name="maximum_value" placeholder="Enter Maximum Value" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="basic_rate" class="form-label">Basic Rate (%)</label>
                                            <input type="number" class="form-control" id="basic_rate" name="basic_rate" placeholder="Enter Basic Rate" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="minimum_premium" class="form-label">Minimum Premium</label>
                                            <input type="number" class="form-control" id="minimum_premium" name="minimum_premium" placeholder="Enter Minimum Premium" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
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
                            <h4 class="card-title mb-0">Add an insurance Cover Rate</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Insurance Cover</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Basic Rate (%)</th>
                                    <th scope="col">Minimum Premium </th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($insuranceCoverRates as $insuranceCoverRate)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$insuranceCoverRate->insurance_cover}}</td>
                                    <td>{{$insuranceCoverRate->description}}</td>
                                    <td> {{$insuranceCoverRate->basic_rate}}</td>
                                    <td> {{$insuranceCoverRate->minimum_premium}}</td>
                                    <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('insuranceCoverRate.edit', $insuranceCoverRate->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('insuranceCoverRate.destroy',$insuranceCoverRate)}}"
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
                                {{$insuranceCoverRates->links()}}
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
