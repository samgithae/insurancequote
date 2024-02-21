

@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> Orders </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Add an order </a></li>

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
                            <h4 class="card-title mb-0">Add an Order</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form  method="POST" action="{{ route('order.store') }}" class="form-steps"  autocomplete="off">
                                @csrf
                                <div class="row mb-3" >

                                    <div class="col-lg-4">
                                        <label class="form-label" for="lead">Lead</label>

                                        <select class="form-select" type="text" id="lead" name="lead_id" required>
                                            <option value="" selected disabled >Select Lead</option>

                                            @foreach($leads as $id => $lead )
                                                <option value="{{ $id }}">{{ $lead }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="lead_name" id="lead_name" required>
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="form-label" for="insurance_cover_rate">Insurance Cover Rate</label>

                                        <select class="form-select" type="number" id="insuranceCoverRate" name="insurance_cover_rate_id" required>
                                            <option value="" selected disabled >Select Insurance Cover Rate</option>

                                            @foreach($insuranceCoverRates as $id => $insuranceCoverRate )
                                                <option value="{{ $insuranceCoverRate }}">{{ $insuranceCoverRate }}</option>
                                            @endforeach
                                        </select>
{{--                                        <input type="hidden" name="insurance_cover_rate" id="insurance_cover_rate" required>--}}
                                    </div>

                                    <div class="col-lg-4">
                                        <label class="form-label" for="benefit">Benefit</label>

                                        <select class="form-select" type="text" id="benefit_select" name="benefit_id" required>
                                            <option value="" selected disabled >Select Benefit</option>

                                            @foreach($benefits as $id => $benefit )
                                                <option value="{{ $id }}">{{ $benefit }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="benefit" id="benefit" required>
                                    </div>


                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-success btn-label right ms-auto m-4" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Create an Order</button>

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
                            <h4 class="card-title mb-0">Add an order</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Lead Name</th>
                                    <th scope="col">Benefit</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($orders as $order)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$order->lead_name}}</td>
                                    <td>{{$order->benefit}}</td>
                                    <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('order.edit', $order->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('order.destroy',$order)}}"
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
                                {{$orders->links()}}
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

                document.getElementById('lead').addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    document.getElementById('lead_name').value = selectedOption.text;
                });

                document.getElementById('benefit_select').addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    document.getElementById('benefit').value = selectedOption.text;
                });
            </script>
@endsection
