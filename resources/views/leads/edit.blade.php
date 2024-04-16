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
                                <div class="container mt-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{$insuranceCoverRate->insuranceCover->insuranceProvider->logo}}" alt="Provider Logo" height="50px">
                                        </div>
                                        <div class="col-md-6">
                                            <h3>{{$insuranceCoverRate->insuranceCover->insuranceProvider->name}}</h3>
                                            <p>{{$insuranceCoverRate->insuranceCover->insuranceProvider->description}}</p>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-success">Ksh. {{$cover_prices[$insuranceCoverRate->id]}}</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <div class="card pricing-box">
                                            <div class="card-body bg-light m-2 p-4">
                                                <h2 class="month mb-4">Benefits</h2>
                                                <ul class="list-unstyled">
                                                    <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Benefit</th>
                                                            <th scope="col">Limit</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($insuranceCoverRate->insuranceCover->benefits as $benefit)
                                                            <tr>
                                                                <td>{{$benefit->name}}</td>
                                                                <td>{{$benefit->value}}</td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </ul>
                                                <div class="mt-3 pt-2">
                                                    <a href="javascript:void(0);" class="btn btn-info w-100">Add Benefits</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card pricing-box">
                                            <div class="card-body bg-light m-2 p-4">
                                                <h2 class="month mb-4">Excess</h2>
                                                <ul class="list-unstyled">
                                                    <div style="overflow-x: auto;">
                                                        <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Excess</th>
                                                                <th scope="col">Amount</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($insuranceCoverRate->insuranceCover->excesses as $excess)
                                                                <tr>
                                                                    <td>{{$excess->name}}</td>
                                                                    <td>{{$excess->amount}}</td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </ul>
                                                <div class="mt-3 pt-2">
                                                    <a href="javascript:void(0);" class="btn btn-info w-100">Add Benefits</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
