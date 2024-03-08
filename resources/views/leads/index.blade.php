@extends('layouts.base')
@section('custom_css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


@endsection
@section('body')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Datatables</h5>
                        </div>
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
                                    </th>
                                    <th data-ordering="false">SR No.</th>
                                    <th data-ordering="false">ID</th>
                                    <th data-ordering="false">Purchase ID</th>
                                    <th data-ordering="false">Title</th>
                                    <th data-ordering="false">User</th>
                                    <th>Assigned To</th>
                                    <th>Created By</th>
                                    <th>Create Date</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>01</td>
                                    <td>VLZ-452</td>
                                    <td>VLZ1400087402</td>
                                    <td><a href="#!">Post launch reminder/ post list</a></td>
                                    <td>Joseph Parker</td>
                                    <td>Alexis Clarke</td>
                                    <td>Joseph Parker</td>
                                    <td>03 Oct, 2021</td>
                                    <td><span class="badge bg-info-subtle text-info">Re-open</span></td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>02</td>
                                    <td>VLZ-453</td>
                                    <td>VLZ1400087425</td>
                                    <td><a href="#!">Additional Calendar</a></td>
                                    <td>Diana Kohler</td>
                                    <td>Admin</td>
                                    <td>Mary Rucker</td>
                                    <td>05 Oct, 2021</td>
                                    <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                    <td><span class="badge bg-info">Medium</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>03</td>
                                    <td>VLZ-454</td>
                                    <td>VLZ1400087438</td>
                                    <td><a href="#!">Make a creating an account profile</a></td>
                                    <td>Tonya Noble</td>
                                    <td>Admin</td>
                                    <td>Tonya Noble</td>
                                    <td>27 April, 2022</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                    <td><span class="badge bg-success">Low</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>04</td>
                                    <td>VLZ-455</td>
                                    <td>VLZ1400087748</td>
                                    <td><a href="#!">Apologize for shopping Error!</a></td>
                                    <td>Joseph Parker</td>
                                    <td>Alexis Clarke</td>
                                    <td>Joseph Parker</td>
                                    <td>14 June, 2021</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                    <td><span class="badge bg-info">Medium</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>05</td>
                                    <td>VLZ-456</td>
                                    <td>VLZ1400087547</td>
                                    <td><a href="#!">Support for theme</a></td>
                                    <td>Donald Palmer</td>
                                    <td>Admin</td>
                                    <td>Donald Palmer</td>
                                    <td>25 June, 2021</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                    <td><span class="badge bg-success">Low</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>06</td>
                                    <td>VLZ-457</td>
                                    <td>VLZ1400087245</td>
                                    <td><a href="#!">Benner design for FB & Twitter</a></td>
                                    <td>Mary Rucker</td>
                                    <td>Jennifer Carter</td>
                                    <td>Mary Rucker</td>
                                    <td>14 Aug, 2021</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                    <td><span class="badge bg-info">Medium</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>07</td>
                                    <td>VLZ-458</td>
                                    <td>VLZ1400087785</td>
                                    <td><a href="#!">Change email option process</a></td>
                                    <td>James Morris</td>
                                    <td>Admin</td>
                                    <td>James Morris</td>
                                    <td>12 March, 2022</td>
                                    <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>08</td>
                                    <td>VLZ-460</td>
                                    <td>VLZ1400087745</td>
                                    <td><a href="#!">Support for theme</a></td>
                                    <td>Nathan Cole</td>
                                    <td>Nancy Martino</td>
                                    <td>Nathan Cole</td>
                                    <td>28 Feb, 2022</td>
                                    <td><span class="badge bg-secondary-subtle text-secondary">On-Hold</span></td>
                                    <td><span class="badge bg-success">Low</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>09</td>
                                    <td>VLZ-461</td>
                                    <td>VLZ1400087179</td>
                                    <td><a href="#!">Form submit issue</a></td>
                                    <td>Grace Coles</td>
                                    <td>Admin</td>
                                    <td>Grace Coles</td>
                                    <td>07 Jan, 2022</td>
                                    <td><span class="badge bg-success-subtle text-success">New</span></td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>10</td>
                                    <td>VLZ-462</td>
                                    <td>VLZ140008856</td>
                                    <td><a href="#!">Edit customer testimonial</a></td>
                                    <td>Freda</td>
                                    <td>Alexis Clarke</td>
                                    <td>Freda</td>
                                    <td>16 Aug, 2021</td>
                                    <td><span class="badge bg-danger-subtle text-danger">Closed</span></td>
                                    <td><span class="badge bg-info">Medium</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>11</td>
                                    <td>VLZ-463</td>
                                    <td>VLZ1400078031</td>
                                    <td><a href="#!">Ca i have an e-copy invoice</a></td>
                                    <td>Williams</td>
                                    <td>Admin</td>
                                    <td>Williams</td>
                                    <td>24 Feb, 2022</td>
                                    <td><span class="badge bg-primary-subtle text-primary">Open</span></td>
                                    <td><span class="badge bg-success">Low</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>12</td>
                                    <td>VLZ-464</td>
                                    <td>VLZ1400087416</td>
                                    <td><a href="#!">Brand logo design</a></td>
                                    <td>Richard V.</td>
                                    <td>Admin</td>
                                    <td>Richard V.</td>
                                    <td>16 March, 2021</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>13</td>
                                    <td>VLZ-466</td>
                                    <td>VLZ1400089015</td>
                                    <td><a href="#!">Issue with finding information about order ?</a></td>
                                    <td>Olive Gunther</td>
                                    <td>Alexis Clarke</td>
                                    <td>Schaefer</td>
                                    <td>32 March, 2022</td>
                                    <td><span class="badge bg-success-subtle text-success">New</span></td>
                                    <td><span class="badge bg-danger">High</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>14</td>
                                    <td>VLZ-467</td>
                                    <td>VLZ1400090324</td>
                                    <td><a href="#!">Make a creating an account profile</a></td>
                                    <td>Edwin</td>
                                    <td>Admin</td>
                                    <td>Edwin</td>
                                    <td>05 April, 2022</td>
                                    <td><span class="badge bg-warning-subtle text-warning">Inprogress</span></td>
                                    <td><span class="badge bg-success">Low</span></td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->


            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>



@endsection

@section('custom_scripts')
    <!-- JAVASCRIPT -->

    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>



    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <!-- App js -->

    </
@endsection
