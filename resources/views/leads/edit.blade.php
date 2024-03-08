@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Benefits</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">View Your options</a></li>

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
                            <h4 class="card-title mb-0">View Insurance Options</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->




                            @foreach($insuranceCoverRates as $insuranceCoverRate)

                                <div class="container mt-4" style="margin-left: 100px";>
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{$insuranceCoverRate->insuranceCover->insuranceProvider->logo}}" alt="Provider Logo" height="50px" >
                                        </div>
                                        <div class="col">
                                            <h3>{{$insuranceCoverRate->insuranceCover->insuranceProvider->name}}</h3>
                                        </div>
                                        <div class="col">
                                            <button  class="btn btn-success" ><p>Ksh.  {{$cover_prices[$insuranceCoverRate->id]}}</p></button>
                                        </div>
                                    </div>
                                </div>

                            <div class=" mt-5">
                                <p>{{$insuranceCoverRate->insuranceCover->insuranceProvider->description}}</p>
                            </div>


                            <div class="row">

                            <div class=" col-xxl-6 col-lg-6 ">
                                <div class="card pricing-box">
                                    <div class="card-body bg-light m-2 p-4">
                                        <div class=" align-items-center mb-3">
                                            <div class="ms-auto">
                                                <h2 class="month mb-0"> Benefits
                                                </h2>

                                            </div>
                                        </div>

                                        <ul class="list-unstyled vstack gap-3">



                                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"> Benefit</th>
                                                        <th scope="col"> Limit </th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    @foreach($insuranceCoverRate->insuranceCover->benefits as $benefit)
                                                        <tr>
                                                            <td>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <b>{{$benefit->name}}</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            </td>
                                                            <td> Ksh. {{$benefit->value}}</td>
                                                            </li>
                                                        </tr>
                                                    @endforeach
                                                @endforeach


                                                </tbody>
                                            </table>





                                        </ul>
                                        <div class="mt-3 pt-2">
                                            <a href="javascript:void(0);"
                                               class="btn btn-info w-100">Add Benefits</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                                <!--Benefit sections ends-->


                                <!--excess section-->

                        <div class=" col-xxl-4 col-lg-6 ">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class=" align-items-center mb-3">

                                        <div class="ms-auto">
                                            <h2 class="month mb-0"> Excess
                                            </h2>

                                        </div>
                                    </div>

                                    <ul class="list-unstyled vstack gap-3">
                                        <table class="table table-hover table-striped align-middle table-nowrap mb-0 col-lg-6">
                                            <thead>
                                            <tr>
                                                <th scope="col"> Excess</th>
                                                <th scope="col"> Amount </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($insuranceCoverRates as $insuranceCoverRate)
                                                @foreach($insuranceCoverRate->insuranceCover->excesses as $excess)
                                                    <tr>
                                                        <td>
                                                            <li>
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="flex-shrink-0 text-success me-1">
                                                                        <i class="ri-checkbox-circle-fill fs-15 align-middle"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <b>{{$excess->name}}</b>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </td>
                                                        <td> Ksh. {{$excess->amount}} </td>
                                                        </li>
                                                    </tr>
                                                @endforeach
                                            @endforeach


                                            </tbody>
                                        </table>
                                    </ul>
                                    <div class="mt-3 pt-2">
                                        <a href="javascript:void(0);"
                                           class="btn btn-info w-100">Add Benefits</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                    <!--card section ends-->

                        <!-- button section -->
                        <div class="row">
                            <div class="col-12">


                            </div>
                        </div>

                    </div>

                </div>


                <!-- end row -->
            </div>

@endsection
