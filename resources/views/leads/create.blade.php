

@extends('layouts.base')
@section('body')
<style>
        .loading-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .loading-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .btn-close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: transparent;
            border: none;
            cursor: pointer;
        }
    </style>





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
                                            <button class="nav-link done active" id="steparrow-gen-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-gen-info" type="button" role="tab" aria-controls="steparrow-gen-info" aria-selected="true">Your Car Details</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link " id="steparrow-description-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button" role="tab" aria-controls="steparrow-description-info" aria-selected="false">About You</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Get Your Quote</button>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="steparrow-gen-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                                        <div>


                                            <input type="hidden" class="form-control" id="steparrow-gen-info-email-input"  value="sam@gm.com" >
                                            <h4 class="text-center">Choose your Vehicle Use</h4>

                                            <div class="vehicle-optionsk">
                                                <div class="row">
                                                    <div class="col-md-3 offset-lg-2">
                                                        <figure>
                                                        <img src="{{ asset('assets/images/car.png')}}" alt="Personal" onclick="showFields('personal')" id="personalImg" class="img img-thumbnail rounded-50">
                                                            <figcaption><strong> Personal </strong></figcaption>
                                                        </figure>

                                                    </div>
                                                    <div class="col-md-3 rounded-circle">
                                                        <figure>
                                                        <img src="{{ asset('assets/images/pickup.png')}}" alt="Commercial" onclick="showFields('commercial')" id="commercialImg" class="img img-thumbnail ">
                                                            <figcaption><strong> Commercial </strong></figcaption>
                                                        </figure>

                                                    </div>
                                                        <div class="col-md-3">
                                                            <figure>
                                                        <img src="{{ asset('assets/images/publictransport.png')}}" alt="PSV" onclick="showFields('psv')" id="psvImg" class="img img-thumbnail ">
                                                                <figcaption><strong>PSV</strong></figcaption>
                                                            </figure>
                                                        </div>
                                                </div>
                                                </div>


                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-vehicle_use">Has the vehicle been valued by a professional valuer in the last 18 months?</label>
                                                        <select  class="form-select"   id="valued_in_last_18_months" name="valued_in_last_18_months" required>
                                                                            <option value="yes">Yes</option>
                                                                            <option value="no">No</option>
                                                                            </select>
                                                        <div class="invalid-feedback">Please select an option</div>
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
                                                            <select id="vehicle_model" name="vehicle_model" class="form-select" required>
                                                                                            <option value="" disabled selected>Enter your car</option>
                                                                                            <option value="Toyota">Toyota</option>
                                                                                            <option value="Nissan">Nissan</option>
                                                                                            <option value="Mitsubishi">Mitsubishi</option>
                                                                                            <option value="Mazda">Mazda</option>
                                                                                            <option value="Subaru">Subaru</option>
                                                                                            <option value="Honda">Honda</option>
                                                                                            <option value="Isuzu">Isuzu</option>
                                                                                            <option value="Volkswagen">Volkswagen</option>
                                                                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                                                            <option value="Land Rover">Land Rover</option>
                                                                                            <option value="Acmat">Acmat</option>
                                                                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                                                                            <option value="AMW">AMW</option>
                                                                                            <option value="Aprilia">Aprilia</option>
                                                                                            <option value="Asia">Asia</option>
                                                                                            <option value="Aston Martin">Aston Martin</option>
                                                                                            <option value="Atul">Atul</option>
                                                                                            <option value="Audi">Audi</option>
                                                                                            <option value="Bajaj">Bajaj</option>
                                                                                            <option value="Bedford">Bedford</option>
                                                                                            <option value="Beifang Benchi">Beifang Benchi</option>
                                                                                            <option value="Bell">Bell</option>
                                                                                            <option value="Bentley">Bentley</option>
                                                                                            <option value="BMW">BMW</option>
                                                                                            <option value="Cadillac">Cadillac</option>
                                                                                            <option value="Car Trailer">Car Trailer</option>
                                                                                            <option value="Chery">Chery</option>
                                                                                            <option value="Chevrolet">Chevrolet</option>
                                                                                            <option value="Chrysler">Chrysler</option>
                                                                                            <option value="Citroen">Citroen</option>
                                                                                            <option value="Claas Ceres">Claas Ceres</option>
                                                                                            <option value="Daewoo">Daewoo</option>
                                                                                            <option value="DAF">DAF</option>
                                                                                            <option value="Daihatsu">Daihatsu</option>
                                                                                            <option value="Daimler">Daimler</option>
                                                                                            <option value="Datsun">Datsun</option>
                                                                                            <option value="Dodge">Dodge</option>
                                                                                            <option value="Dongfeng">Dongfeng</option>
                                                                                            <option value="Ducati">Ducati</option>
                                                                                            <option value="Eicher">Eicher</option>
                                                                                            <option value="Equipment & Machinery">Equipment & Machinery</option>
                                                                                            <option value="FAW">FAW</option>
                                                                                            <option value="Ferrari">Ferrari</option>
                                                                                            <option value="Fiat">Fiat</option>
                                                                                            <option value="Ford">Ford</option>
                                                                                            <option value="Foton">Foton</option>
                                                                                            <option value="Geely">Geely</option>
                                                                                            <option value="Great Wall">Great Wall</option>
                                                                                            <option value="Harley-Davidson">Harley-Davidson</option>
                                                                                            <option value="Hero">Hero</option>
                                                                                            <option value="Hino">Hino</option>
                                                                                            <option value="Hitachi">Hitachi</option>
                                                                                            <option value="Holden">Holden</option>
                                                                                            <option value="Honda">Honda</option>
                                                                                            <option value="Hummer">Hummer</option>
                                                                                            <option value="Husaberg">Husaberg</option>
                                                                                            <option value="Husqvarna">Husqvarna</option>
                                                                                            <option value="Hyundai">Hyundai</option>
                                                                                            <option value="Infinity">Infinity</option>
                                                                                            <option value="Isuzu">Isuzu</option>
                                                                                            <option value="Iveco">Iveco</option>
                                                                                            <option value="Jaguar">Jaguar</option>
                                                                                            <option value="Jeep">Jeep</option>
                                                                                            <option value="JMC">JMC</option>
                                                                                            <option value="John Deere">John Deere</option>
                                                                                            <option value="Kawasaki">Kawasaki</option>
                                                                                            <option value="Kia">Kia</option>
                                                                                            <option value="KTM">KTM</option>
                                                                                            <option value="Lada">Lada</option>
                                                                                            <option value="Lamborghini">Lamborghini</option>
                                                                                            <option value="Lancia">Lancia</option>
                                                                                            <option value="Land Rover">Land Rover</option>
                                                                                            <option value="Landini">Landini</option>
                                                                                            <option value="Lexus">Lexus</option>
                                                                                            <option value="Leyland">Leyland</option>
                                                                                            <option value="Lifan">Lifan</option>
                                                                                            <option value="Locally Assembled">Locally Assembled</option>
                                                                                            <option value="Lotus">Lotus</option>
                                                                                            <option value="Mahindra">Mahindra</option>
                                                                                            <option value="Man">Man</option>
                                                                                            <option value="Maserati">Maserati</option>
                                                                                            <option value="Massey-Ferguson">Massey-Ferguson</option>
                                                                                            <option value="Mazda">Mazda</option>
                                                                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                                                            <option value="MG">MG</option>
                                                                                            <option value="Mini">Mini</option>
                                                                                            <option value="Mitsubishi">Mitsubishi</option>
                                                                                            <option value="Morris">Morris</option>
                                                                                            <option value="New Holland">New Holland</option>
                                                                                            <option value="Nissan">Nissan</option>
                                                                                            <option value="Oldsmobile">Oldsmobile</option>
                                                                                            <option value="Opel">Opel</option>
                                                                                            <option value="Peugeot">Peugeot</option>
                                                                                            <option value="Piaggio">Piaggio</option>
                                                                                            <option value="Porsche">Porsche</option>
                                                                                            <option value="Proton">Proton</option>
                                                                                            <option value="Racer">Racer</option>
                                                                                            <option value="Renault">Renault</option>
                                                                                            <option value="Rolls-Royce">Rolls-Royce</option>
                                                                                            <option value="Rover">Rover</option>
                                                                                            <option value="Saab">Saab</option>
                                                                                            <option value="Samsung">Samsung</option>
                                                                                            <option value="Scania">Scania</option>
                                                                                            <option value="Seat">Seat</option>
                                                                                            <option value="Senke">Senke</option>
                                                                                            <option value="Shacman">Shacman</option>
                                                                                            <option value="Shineray">Shineray</option>
                                                                                            <option value="Sinotruk">Sinotruk</option>
                                                                                            <option value="Skoda">Skoda</option>
                                                                                            <option value="Smart">Smart</option>
                                                                                            <option value="Sonalika">Sonalika</option>
                                                                                            <option value="SsangYong">SsangYong</option>
                                                                                            <option value="Steyr">Steyr</option>
                                                                                            <option value="Subaru">Subaru</option>
                                                                                            <option value="Suzuki">Suzuki</option>
                                                                                            <option value="Tata">Tata</option>
                                                                                            <option value="TCM">TCM</option>
                                                                                            <option value="Terex">Terex</option>
                                                                                            <option value="Thunder">Thunder</option>
                                                                                            <option value="Toyota">Toyota</option>
                                                                                            <option value="Trailer">Trailer</option>
                                                                                            <option value="Triumph">Triumph</option>
                                                                                            <option value="Truck Trailer">Truck Trailer</option>
                                                                                            <option value="TVS">TVS</option>
                                                                                            <option value="Vector">Vector</option>
                                                                                            <option value="Venturi">Venturi</option>
                                                                                            <option value="Viper">Viper</option>
                                                                                            <option value="Volkswagen">Volkswagen</option>
                                                                                            <option value="Volvo">Volvo</option>
                                                                                            <option value="Xiamen">Xiamen</option>
                                                                                            <option value="Yamaha">Yamaha</option>
                                                                                            <option value="Zonda">Zonda</option>
                                                                                            <option value="Zontes">Zontes</option>
                                                                                            <option value="ZX Auto">ZX Auto</option>
                                                                                            </select>
                                                    <div class="invalid-feedback">Please enter Vehicle Model</div>
                                                </div>
                                            </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="steparrow-gen-info-vehicle_use">Vehicle Use</label>
                                                        <select class="form-select" id="vehicle_use_select" name="vehicle_use" disabled >
                                                                                            <option value="personal" selected >Personal</option>
                                                                                            <option value="commercial" >Commercial</option>
                                                                                            <option value="psv" >psv</option>
                                                                                        </select>
                                                        <input type="hidden" id="vehicle_use" name="vehicle_use" >
                                                        <div class="invalid-feedback">Please enter a valid Vehicle Use</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- private option -->
                                            <div id="personalFields">

                                            </div>

                                            <div id="psvFields" class="hidden">
                                            <div class="col-lg-12">
                                                <label class="form-label" for="steparrow-gen-info-passenger_count">Passenger Count</label>
                                                <input type="number" class="form-control" id="steparrow-gen-info-passenger_count" name="passenger_count" placeholder="Enter Passenger Count" >
                                                <div class="invalid-feedback">Please enter Passenger Count</div>
                                            </div>
                                            </div>





                                            <div id="commercialFields" class="hidden">
                                            <div>
                                                <label class="form-label" for="steparrow-gen-info-vehicle_type">Vehicle Type</label>
                                                <select class="form-select" type="text" id="vehicle_type" name="vehicle_type" >
                                                                                        <option value="" selected >Select type</option>
                                                                                        <option value="pickup">pickup</option>
                                                                                        <option value="canter">canter</option>
                                                                                        <option value="lorry">lorry</option>
                                                                                    </select>
                                                <div class="invalid-feedback">Please enter Vehicle Type</div>
                                            </div>
                                            </div>


                                            <div class="row">
                                            <div class="col-lg-6">


                                            <div>
                                                <label class="form-label" for="steparrow-gen-info-yom">Year of Manufacture</label>
                                                <select class="form-select" type="number" id="yom" name="yom" required>
                                                                                            <option value="" selected disabled>Select year</option>

                                                                                            <option value="2000">2000</option>
                                                                                            <option value="2001">2001</option>
                                                                                            <option value="2002">2002</option>
                                                                                            <option value="2003">2003</option>
                                                                                            <option value="2004">2004</option>
                                                                                            <option value="2005">2005</option>
                                                                                            <option value="2006">2006</option>
                                                                                            <option value="2007">2007</option>
                                                                                            <option value="2008">2008</option>
                                                                                            <option value="2009">2009</option>
                                                                                            <option value="2010">2010</option>
                                                                                            <option value="2011">2011</option>
                                                                                            <option value="2012">2012</option>
                                                                                            <option value="2013">2013</option>
                                                                                            <option value="2014">2014</option>
                                                                                            <option value="2015">2015</option>
                                                                                            <option value="2016">2016</option>
                                                                                            <option value="2017">2017</option>
                                                                                            <option value="2018">2018</option>
                                                                                            <option value="2019">2019</option>
                                                                                            <option value="2020">2020</option>
                                                                                            <option value="2021">2021</option>
                                                                                            <option value="2022">2022</option>
                                                                                            <option value="2023">2023</option>
                                                                                            <option value="2024">2024</option>

                                                                                        </select>
                                                <div class="invalid-feedback">Please enter Year of Manufacture</div>
                                            </div>
                                            </div>
                                                <div class="col-lg-6">
                                            <div>
                                                <label class="form-label" for="steparrow-gen-info-cover_start_date">Cover Start Date</label>
                                                <input type="date" class="form-control" id="steparrow-gen-info-cover_start_date" name="cover_start_date" placeholder="Enter Year of Cover Start Date" min="<?php echo date('Y-m-d'); ?>" required >
                                                <div class="invalid-feedback">Please enter Cover Start Date</div>
                                            </div>
                                                </div>
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

                                    <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                        <div class="text-center">

                                            <div class="avatar-md mt-5 mb-4 mx-auto">
                                                <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                                    <i class="ri-checkbox-circle-fill"></i>
                                                </div>
                                            </div>
                                            <h5>Well Done !</h5>
                                            <p class="text-muted">You have Successfully Signed Up</p>
                                        </div>

                                        <!-- Loading Popup -->

                                        <div id="loadingPopup" class="loading-popup" >
                                            <div class="loading-content" style="width:340px; align-content: center ">
                                                <button id="closePopupBtn" class="btn-close swal2-close"  aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                                <p>Loading...</p>

                                                <!--  loading icon animation -->

                                                <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" ">

                                                    <div class="swal2-html-container" id="swal2-html-container" >
                                                        <div class="mt-3">

                                                            <div >
{{--                                                            <iframe src="https://lottie.host/embed/5acdb1b5-ef43-41dd-9b65-4fa82dacc37a/iW50ss2iHi.json"></iframe>--}}
                                                                <iframe src="https://lottie.host/embed/6677376f-e4a2-4797-93d7-5214b0304536/NTVW8SIO1u.json"></iframe>
                                                            </div>


                                                                <!-- Searching Button -->
                                                                <div class="hstack flex-wrap gap-2 mb-3 mb-lg-0" style="margin-top: 50px;  justify-content: center; align-items: center">

                                                                    <button type="button" class="btn btn-outline-secondary btn-load">
                                                                        <span class="d-flex align-items-center">
                                                                            <span class="spinner-grow flex-shrink-0" role="status">
                                                                                <span class="visually-hidden">Loading...</span>
                                                                            </span>
                                                                            <span class="flex-grow-1 ms-2">
                                                                                Searching...
                                                                            </span>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                    </div>
                                            </div>




                                                    </div>
                                            <div class="swal2-footer" style="display: none;"></div>
                                                    <div class="swal2-timer-progress-bar-container">
                                                        <div class="swal2-timer-progress-bar" style="display: none;">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



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


    <script>
        // Show fields based on the default selection
        showFields('personal');

        function showFields(vehicleType) {
          // Reset visibility for all fields
          document.getElementById("personalFields").classList.add("hidden");
          document.getElementById("commercialFields").classList.add("hidden");
          document.getElementById("psvFields").classList.add("hidden");

          // Highlight the selected image
          document.getElementById("personalImg").style.border = "2px solid black";
          document.getElementById("commercialImg").style.border = "2px solid black";
          document.getElementById("psvImg").style.border = "2px solid black";

          // Show the fields based on the selected vehicle type
          if (vehicleType === 'personal') {
            document.getElementById("personalFields").classList.remove("hidden");
            document.getElementById("personalImg").style.border = "2px solid #C01E2E";
            document.getElementById("personalImg").style.background = "#F8F092";

              // Remove background image from other options
              document.getElementById("commercialImg").style.background = "none";
              document.getElementById("psvImg").style.background = "none";

              // //fill the second "vehicle use" option


          } else if (vehicleType === 'commercial') {
            document.getElementById("commercialFields").classList.remove("hidden");
            document.getElementById("commercialImg").style.border = "2px solid #C01E2E";
              document.getElementById("commercialImg").style.background = "#F8F092";

              // Remove background image from other options
              document.getElementById("personalImg").style.background = "none";
              document.getElementById("psvImg").style.background = "none";

              // //fill the second "vehicle use" option
              // document.getElementById("vehicle_use").value="commercial";


          } else if (vehicleType === 'psv') {
            document.getElementById("psvFields").classList.remove("hidden");
            document.getElementById("psvImg").style.border = "2px solid #C01E2E";
              document.getElementById("psvImg").style.background = "#F8F092";

              // Remove background image from other options
              document.getElementById("personalImg").style.background = "none";
              document.getElementById("commercialImg").style.background = "none";

              // //fill the second "vehicle use" option
              // document.getElementById("vehicle_use").value="psv";
          }

            // Update the value of the vehicle_use dropdown
            document.getElementById("vehicle_use").value = vehicleType;
            document.getElementById("vehicle_use_select").value = vehicleType;
        }

        // popup


        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(showLoadingPopup, 1000); // Show popup after 1 second
            document.getElementById('closePopupBtn').addEventListener('click', function () {
                document.getElementById('loadingPopup').style.display = 'none';
            });
        });

        function showLoadingPopup() {
            document.getElementById('loadingPopup').style.display = 'block';
        }

      </script>


@endsection
