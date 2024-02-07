@extends('layouts.base')
@section('body')
    <div class="page-content" id="app">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> Benefits </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Benefits </a></li>
                                <li class="breadcrumb-item active">Update Benefits</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Update Benefits</h4>
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



                                    <form class="col-xl-12 col-md-12"  action="{{route('benefit.update', $benefit->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                        
                                            <div class="col-lg-4">
                                                <label class="form-label" for="insuranceCover">Insurance Cover</label>

                                                <select class="form-select" type="text" id="insuranceCover" name="insuranceCover" required>
                                                    <option value="{{$benefit->insuranceCover}}" selected >{{$benefit->insuranceCover}}</option>

                                                    @foreach($insurers as $insurer )
                                                        <option value="{{ $insurer }}">{{ $insurer }}</option>
                                                    @endforeach
                                                </select>                                       
                                            </div>

                                            <!--end col-->
                                            <div class=" col-lg-4">
                                                <div>
                                                    <label for="benefit" class="form-label"> Benefit
                                                    </label>
                                                    <input type="text" value="{{$benefit->benefit}}"  name="benefit" class="form-control" id="benefit"
                                                           placeholder="Enter Cost">
                                                </div>
                                            </div>
                                            <div class=" col-lg-4">
                                                <div>
                                                    <label for="value" class="form-label"> Value
                                                    </label>
                                                    <input type="number" value="{{$benefit->value}}"  name="value" class="form-control" id="value"
                                                           placeholder="Enter value">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class=" col-lg-4">
                                                <div>
                                                    <label for="status" class="form-label"> Status
                                                    </label>
                                                    <input type="text" value="{{$benefit->status}}"  name="status" class="form-control" 
                                                           placeholder="Enter Status">
                                                </div>
                                            </div>

                                        
                                            <div class=" col-lg-4">
                                                <div>
                                                    <label for="cost" class="form-label"> Cost
                                                    </label>
                                                    <input type="number" value="{{$benefit->cost}}"  name="cost" class="form-control" id="cost"
                                                           placeholder="Enter Cost">
                                                </div>
                                            </div>                                            

                                            <!--end col-->
                                            <div class=" col-lg-4">
                                                <div>
                                                    <label for="labelInput" class="form-label">&nbsp;</label>
                                                    <div class="d-flex gap-2">
                                                        <div>
                                                            <button type="submit" class="btn btn-success">Update Benefit Details</button>
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
