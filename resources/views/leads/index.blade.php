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
                                                <div class="vehicle-options">
                                                    <figure style="margin:auto;" >
                                                        <img src="/assets/images/car.png" alt="Personal" onclick="showFields('personal')" id="personalImg" style="border: 2px solid black; margin-right: 10px; padding: 20px; border-radius: 30px;">
                                                        <figcaption><strong> Personal </strong></figcaption>
                                                    </figure>
                                                    <figure style="margin:auto;">
                                                        <img src="/assets/images/pickup.png" alt="Commercial" onclick="showFields('commercial')" id="commercialImg" style="border: 2px solid black; margin-right: 10px; padding: 20px; border-radius: 30px;">
                                                        <figcaption><strong> Comercial </strong></figcaption>
                                                    </figure>
                                                    <figure style="margin:auto;">
                                                        <img src="/assets/images/publictransport.png" alt="PSV" onclick="showFields('psv')" id="psvImg" style="border: 2px solid black; padding: 20px; border-radius: 30px;">
                                                        <figcaption><strong> PSV </strong></figcaption>
                                                    </figure>
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

                                            <!-- <div class="row">  -->
                                                <div>






                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div>
                                                                                <label class="form-label" for="steparrow-gen-info-vehicle_type">Vehicle Model</label>
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
                                                                                <select class="form-select" type="text" id="vehicle_use" name="vehicle_use" required>
                                                                                            <option value="" selected disabled>Choose vehicle use</option>
                                                                                            <option value="personal" >Personal</option>
                                                                                            <option value="commercial" >Commercial</option>
                                                                                            <option value="psv" >psv</option>
                                                                                        </select>
                                                                                <div class="invalid-feedback">Please enter a valid Vehicle use</div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                </div>


                                                                <!-- private option -->
                                                                <div id="personalFields">

                                                                </div>


                                                                <div id="commercialFields" class="hidden">
                                                                    <div class="col-lg-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="steparrow-gen-info-vehicle_model">Vehicle Type</label>
                                                                            <select class="form-select" type="text" id="vehicle_type" name="vehicle_type" >
                                                                                            <option value="" selected >Select type</option>
                                                                                            <option value="pickup">pickup</option>
                                                                                            <option value="canter">canter</option>
                                                                                            <option value="lorry">lorry</option>
                                                                                        </select>
                                                                            <div class="invalid-feedback">Please enter Vehicle Model</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="psvFields" class="hidden">
                                                                <div>
                                                                    <label class="form-label" for="steparrow-gen-info-passenger_count">Passenger Count</label>
                                                                    <input type="number" class="form-control" id="steparrow-gen-info-passenger_count" name="passenger_count" placeholder="Enter Passenger Count"  >
                                                                    <div class="invalid-feedback">Please enter Passenger Count</div>
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
                                                                            <input type="date" class="form-control" id="steparrow-gen-info-cover_start_date" name="cover_start_date" placeholder="Enter Year of Cover Start Date" required >
                                                                            <div class="invalid-feedback">Please enter Cover Start Date</div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                        </div>
                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-description-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Generate Quote</button>
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
                                            <p class="text-muted">Below are your Insurance Options </p>

                                            <br>

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
            document.getElementById("personalImg").style.border = "2px solid #405189";
          } else if (vehicleType === 'commercial') {
            document.getElementById("commercialFields").classList.remove("hidden");
            document.getElementById("commercialImg").style.border = "2px solid #405189";
          } else if (vehicleType === 'psv') {
            document.getElementById("psvFields").classList.remove("hidden");
            document.getElementById("psvImg").style.border = "2px solid #405189";
          }
        }

        // function submitForm() {

        //     showFields(document.getElementById("vehicle_use").value);
        //      document.getElementById('myForm').submit();
        //      }
      </script>

@endsection
