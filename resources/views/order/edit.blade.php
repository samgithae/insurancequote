@extends('layouts.base')
@section('body')
    <div class="page-content" id="app">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"> Orders </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Orders </a></li>
                                <li class="breadcrumb-item active">Update Orders</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Update Orders</h4>
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



                                    <form class="col-xl-12 col-md-12"  action="{{route('order.update', $order->id)}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <div class="row">


                                    <div class="col-lg-4">
                                        <label class="form-label" for="lead">Lead</label>

                                        <select class="form-select" type="text" id="lead" name="lead_id" required>


                                            @foreach($leads as $id => $lead )
                                                <option value="{{ $id }}"  {{ $lead == $order->lead_id ? 'selected' : '' }} >{{ $lead }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="lead_name" id="lead_name" value="{{ $order->lead_name }}" required>
                                    </div>


                                    <div class="col-lg-4">
                                        <label class="form-label" for="benefit">Benefit</label>

                                        <select class="form-select" type="text" id="benefit_id" name="benefit_id" required>
                                            <!-- <option value="" selected disabled >Select Insurance Cover</option> -->

                                            @foreach($benefits as $id => $benefit )
                                                <option value="{{ $id }}"  {{ $benefit == $order->benefit_id ? 'selected' : '' }} >{{ $benefit }}</option>
                                            @endforeach
                                        </select>
                                        <input type="hidden" name="benefit" id="benefit" value="{{ $order->benefit }}" required>
                                    </div>

                                            <!--end col-->


                                        </div>
                                        <div class="row">



                                            <!--end col-->
                                            <div class=" col-lg-4">
                                                <div>
                                                    <label for="labelInput" class="form-label">&nbsp;</label>
                                                    <div class="d-flex gap-2">
                                                        <div>
                                                            <button type="submit" class="btn btn-success">Update Order Details</button>
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

            document.getElementById('lead').addEventListener('change', function() {
                var selectedOption = this.options[this.selectedIndex];
                document.getElementById('lead_name').value = selectedOption.text;
            });

            document.getElementById('benefit_id').addEventListener('change', function() {
                var selectedOption = this.options[this.selectedIndex];
                document.getElementById('benefit').value = selectedOption.text;
            });
        </script>
@endsection
