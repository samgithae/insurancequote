@extends('layouts.base')
@section('body')
    <div class="page-content" id="app">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Providers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Insurance Providers</a></li>
                                <li class="breadcrumb-item active">Update Insurance Providers</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Update Insurance Providers</h4>
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



                                    <form class="col-xl-12 col-md-12"  action="{{route('insuranceProvider.update', $insuranceProvider->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            <div class="col-xxl-3 col-md-3">
                                                <div>
                                                    <label for="bankName" class="form-label"> Insurance Provider Name
                                                    </label>
                                                    <input type="text"  name="name"  value="{{$insuranceProvider->name}}" class="form-control" id="name" placeholder="Enter Insurance Provider name">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-3">
                                                <div>
                                                    <label for="bankCode" class="form-label"> Email
                                                    </label>
                                                    <input type="text" value="{{$insuranceProvider->email}}"  name="email" class="form-control" id="email"
                                                           placeholder="Enter bank code">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-3">
                                                <img src="{{$insuranceProvider->logo}}" class="img img-thumbnail ">
                                                <div>
                                                    <label for="logo" class="form-label">Enter the company Logo</label>
                                                    <input class="form-control"  type="file" name="logo" id="logo">
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-xxl-2 col-xl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">&nbsp;</label>
                                                    <div class="d-flex gap-2">
                                                        <div>
                                                            <button type="submit" class="btn btn-success">Update Insurance Provider Details</button>
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
@endsection
