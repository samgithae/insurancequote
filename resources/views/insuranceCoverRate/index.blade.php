@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Cover Rates</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">View insurance Cover Rates</a></li>

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
                            <h4 class="card-title mb-0">View all insurance Cover Rates</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">insurance Cover Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Basic Rate (%) </th>
                                    <th scope="col">Minimum Premium </th>
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($insuranceCoverRates as $insuranceCoverRate)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$insuranceCoverRate->insurance_cover_name}}</td>
                                    <td>{{$insuranceCoverRate->description}}</td>
                                    <td>{{$insuranceCoverRate->basic_rate}} </td>
                                    <td> {{$insuranceCoverRate->minimum_premium }}</td>


                                    <!-- <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('insuranceCoverRate.edit', $insuranceCoverRate->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('insuranceCoverRate.destroy',$insuranceCoverRate)}}"
                                                    method="post">

                                                  @csrf
                                                  @method('delete')
                                                  <a href=""
                                                     class="dltBtn btn btn-sm btn-danger remove-item-btn"
                                                     data-bs-toggle="modal">Delete </a>

                                              </form>
                                          </div>
                                      </div>
                                    </td> -->


                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="container d-flex align-content-end">
                                {{$insuranceCoverRates->links()}}
                            </div>
                        </div>

                        <!-- button section -->
                        <div class="row">
                            <div class="col-12">

                            <div style="display: flex; justify-content: center; align-items: center;">
                            <form action="{{route('insuranceCoverRate.create')}}" method="get">
                                <button type="submit" class="btn btn-success btn-label right ms-auto m-4" style="text-align:centre"  ><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Add/Edit Covers</button>
                            </form>
                            </div>

                            </div>
                        </div>

                    </div>

                </div>


            <!-- end row -->
        </div>

@endsection
