@extends('layouts.base')
@section('body')
    <div class="page-content" id="app">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Covers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Insurance Covers</a></li>
                                <li class="breadcrumb-item active">Update Insurance Covers</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Update Insurance Covers</h4>
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



                                    <form class="col-xl-12 col-md-12"  action="{{route('insuranceCover.update', $insuranceCover->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">

                                            
                                            <div class="col-lg-3">
                                                <label class="form-label" for="insuranceProvider">Insurance Provider</label>
                                                <select class="form-select" type="text" id="insuranceProvider" name="insurance_provider_id" required>
                                                    <
                                                    @foreach($insuranceProviders as $id => $insuranceProvider)
                                                        <option value="{{ $id }}" {{ $id == $insuranceCover->insurance_provider_id ? 'selected' : '' }} >{{ $insuranceProvider }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="insurance_provider" id="insurance_provider" value="{{ $insuranceCover->insurance_provider }}" required>
                                            </div>

                            

                                            <div class="col-lg-3">
                                        <div>
                                            <label for="minimum_value" class="form-label">Insurance Cover Name</label>
                                            <input type="text" value="{{$insuranceCover->name}}"class="form-control" id="name" name="name" placeholder="Enter Cover Name" >
                                        </div>
                                    </div>

                                                                                

                                            <!--end col-->
                                            <div class="col-xxl-2 col-xl-2 col-md-6">
                                                <div>
                                                    <label for="labelInput" class="form-label">&nbsp;</label>
                                                    <div class="d-flex gap-2">
                                                        <div>
                                                            <button type="submit" class="btn btn-success">Update Insurance Cover Details</button>
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

                document.getElementById('insuranceProvider').addEventListener('change', function() {
                    var selectedOption = this.options[this.selectedIndex];
                    document.getElementById('insurance_provider').value = selectedOption.text;
                });
    </script>

@endsection
