

@extends('layouts.base')
@section('body')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Motor Insurance</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Get Quote</a></li>

                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-12 offset-lg-0">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Get a Free Quote</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <form  method="POST" action="{{ route('leads.store') }}" class="form-steps" autocomplete="off">
                                @csrf

                                <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                                    <img src="{{ asset('assets/images/Logo-Dark-1024x369-1-1.png')}}" class="card-logo card-logo-dark" alt="logo dark" height="50">
                                </div>
                                <div class="step-arrow-nav mb-4">

                                    <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link done " id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">Your Car Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link done " id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">About You</button>
                                        </li>
                                        <li class="nav-item active" role="presentation">
                                            <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Get Your Quote</button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                        <div>


                                            <input type="hidden" class="form-control" id="steparrow-gen-info-email-input"  value="sam@gm.com" >




                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-vehicle_use">Vehicle Use</label>
                                                        <input type="text" class="form-control" id="steparrow-gen-info-vehicle_use" name="vehicle_use" placeholder="Enter Vehicle Use" required >
                                                        <div class="invalid-feedback">Please enter a valid Vehicle type</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-vehicle_value">Vehicle Value</label>
                                                        <input type="number" class="form-control" id="steparrow-gen-info-vehicle_value"  name="vehicle_value" placeholder="Enter Vehicle Value" required >
                                                        <div class="invalid-feedback">Please enter Vehicle Value</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-vehicle_model">Vehicle Model</label>
                                                        <input type="text" class="form-control" id="steparrow-gen-info-vehicle_model" name="vehicle_model" placeholder="Enter 'Vehicle Model" required >
                                                        <div class="invalid-feedback">Please enter Vehicle Model</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label class="form-label" for="steparrow-gen-info-vehicle_type">Vehicle Type</label>
                                                        <input type="text" class="form-control" id="steparrow-gen-info-vehicle_type" name="vehicle_type" placeholder="Enter Vehicle Type" required >
                                                        <div class="invalid-feedback">Please enter Vehicle Type</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">


                                                    <div>
                                                        <label class="form-label" for="steparrow-gen-info-yom">Year of Manufacture</label>
                                                        <input type="text" class="form-control" id="steparrow-gen-info-yom" name="yom" placeholder="Enter Year of Manufacture" required >
                                                        <div class="invalid-feedback">Please enter Year of Manufacture</div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div>
                                                        <label class="form-label" for="steparrow-gen-info-cover_start_date">Cover Start Date</label>
                                                        <input type="date" class="form-control" id="steparrow-gen-info-cover_start_date" name="cover_start_date" placeholder="Enter Year of Cover Start Date" required >
                                                        <div class="invalid-feedback">Please enter Cover Start Date</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div>
                                                <label class="form-label" for="steparrow-gen-info-passenger_count">Passenger Count</label>
                                                <input type="number" class="form-control" id="steparrow-gen-info-passenger_count" name="passenger_count" placeholder="Enter Passenger Count" required >
                                                <div class="invalid-feedback">Please enter Passenger Count</div>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Generate Quote</button>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane fade  " id="steparrow-description-info" role="tabpanel" aria-labelledby="steparrow-description-info-tab">
                                        <div>

                                            <div>
                                                <label class="form-label" for="des-info-name">Your Name</label>
                                                <input type="text" class="form-control" id="des-info-name" name="name" placeholder="Enter Your Name" required >
                                                <div class="invalid-feedback">Please enter Your Name</div>
                                            </div>
                                            <div>
                                                <label class="form-label" for="des-info-description-name">Your Phone</label>
                                                <input type="text" class="form-control" id="des-info-phone" name="phone" placeholder="Enter Your Phone" required >
                                                <div class="invalid-feedback">Please enter Your Phone</div>
                                            </div>
                                            <div>
                                                <label class="form-label" for="des-info-description-name">Your Email</label>
                                                <input type="text" class="form-control" id="des-info-email" name="email" placeholder="Enter Your Email" required >
                                                <div class="invalid-feedback">Please enter Your Email</div>
                                            </div>

                                        </div>
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Your Car Details</button>
                                            <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Get Free Quote</button>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane fade  show active" id="pills-experience" role="tabpanel">
                                        <div class="text-center">

                                            <div class="avatar-md mt-5 mb-4 mx-auto">
                                                <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                    <i class="ri-checkbox-circle-fill"></i>
                                                </div>
                                            </div>
                                            <h5>Well Done !</h5>
                                            <p class="text-muted">Below are your Insurance Options</p>

                                            <br>
    
                                        </div>

                                        @foreach ($providers as $provider)
                                        <table class="table table-striped-columns">
                                            <tr class="table-light ">
                                                <th class="col-lg-3 align-middle m-3 ms-2"  > </th>
                                                <th  >Benefits</th>
                                                <th>Price</th>
                                            </tr>
                                            <tr class=" " >
                                                <td  rowspan="4" >    <!--class="table-light"-->
                                                   <img  src="{{ $provider }}" width="150px"  height="150px"  class="rounded-circle mt-5 " alt="Provider Logo">
                                                </td>
                                                <td>
                                                <table class="table table-striped-columns">
                                                    <tr>
                                                        <th>Windscreen</th>
                                                        <th>Radio System</th>
                                                        <th>3rd Party Property Damage</th>
                                                    </tr>
                                                    <tr>
                                                        <td>30,000</td>
                                                        <td>30,000</td>
                                                        <td>30,000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Towing Charges</th>
                                                        <th>Authorized Repair</th>
                                                        <th>Passenger Legal Liability</th>
                                                    </tr>
                                                    <tr>
                                                        <td>30,000</td>
                                                        <td>Yes</td>
                                                        <td>3,000,000</td>
                                                    </tr>
                                                </table>
                                                </td>
                                                <td rowspan="4">
                                                    <button class="btn btn-success right  mt-5"  id="priceBtn">$cover->cost</button>
                                                    <button class="btn btn-success btn-label right ms-auto mt-5" id="addBenefitsBtn"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Add Benefits</button>
                                                </td>
                                                
                                                
                                            </tr>
                                        </table>
                                        @endforeach



                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div><!-- end row -->


            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>


@endsection
