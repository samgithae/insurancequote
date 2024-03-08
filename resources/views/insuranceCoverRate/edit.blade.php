@extends('layouts.base')
@section('body')
    <div class="page-content" id="app">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Cover Rates</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Insurance Cover Rates</a></li>
                                <li class="breadcrumb-item active">Update Insurance Cover Rates</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex mb-4">
                            <h4 class="card-title mb-0 flex-grow-1">Update Insurance Cover Rates</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md d-none">
                                    <label for="form-grid-showcode" class="form-label text-muted">Show
                                        Code</label>
                                    <input class="form-check-input code-switcher" type="checkbox"
                                           id="form-grid-showcode">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">


                                <div class="row gy-2">



                                    <form class="col-xl-12 col-md-12"  action="{{route('insuranceCoverRate.update', $insuranceCoverRate->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">


                                            <div class="col-lg-3">
                                                <label class="form-label" for="insuranceProvider">Insurance Cover Name</label>
                                                <select class="form-select" type="text" id="insuranceProvider" name="insurance_cover_id" required>
                                                    <
                                                    @foreach($insuranceCovers as $id => $insuranceCover)
                                                        <option value="{{ $id }}" {{ $id == $insuranceCoverRate->insurance_cover_id ? 'selected' : '' }} >{{ $insuranceCover }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="insurance_cover_name" id="insurance_cover_name" value="{{ $insuranceCoverRate->insurance_cover_name }}" required>
                                            </div>



                                            <div class="col-lg-3">
                                        <div>
                                            <label for="minimum_value" class="form-label">Minimum Value</label>
                                            <input type="number" value="{{$insuranceCoverRate->minimum_value}}"class="form-control" id="minimum_value" name="minimum_value" placeholder="Enter Minimum Value" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="maximum_value" class="form-label">Maximum Value</label>
                                            <input type="number" value="{{$insuranceCoverRate->maximum_value}}" class="form-control" id="maximum_value" name="maximum_value" placeholder="Enter Maximum Value" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="basic_rate" class="form-label">Basic Rate (%) </label>
                                            <input type="number" value="{{$insuranceCoverRate->basic_rate}}"class="form-control" id="basic_rate" name="basic_rate" placeholder="Enter Basic Rate" >
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <label for="minimum_premium" class="form-label">Minimum Premium</label>
                                            <input type="number" value="{{$insuranceCoverRate->minimum_premium}}" class="form-control" id="minimum_premium" name="minimum_premium" placeholder="Enter Minimum Premium" >
                                        </div>
                                    </div>

                                            <div class="col-xxl-3 col-md-3">
                                                <div>
                                                    <label for="description" class="form-label"> Description
                                                    </label>
                                                    <input type="text" value="{{$insuranceCoverRate->description}}"  name="description" class="form-control" id="description"
                                                           placeholder="Enter Description">
                                                </div>
                                            </div>


                                            <!--end col-->
                                            <div class="col-xxl-2 col-xl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">&nbsp;</label>
                                                    <div class="d-flex gap-2">
                                                        <div>
                                                            <button type="submit" class="btn btn-success">Update Insurance Cover Rate Details</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <!--end col-->
                                </div>



                                <!--end row-->
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->




        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->

    <script>

                document.getElementById('insuranceCover').addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    document.getElementById('insurance_cover_name').value = selectedOption.text;
                });
    </script>

@endsection