@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Covers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">View insurance Covers</a></li>

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
                            <h4 class="card-title mb-0">View all insurance Covers</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">insurance Provider Name</th>
                                    <th scope="col">Insurance Cover Name</th>
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($insuranceCovers as $insuranceCover)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$insuranceCover->insurance_provider_name}}</td>
                                    <td>{{$insuranceCover->name}}</td>
                                    <!-- <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('insuranceCover.edit', $insuranceCover->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('insuranceCover.destroy',$insuranceCover)}}"
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
                                {{$insuranceCovers->links()}}
                            </div>
                        </div>

                        <!-- button section -->
                        <div class="row">
                            <div class="col-12">

                            <div style="display: flex; justify-content: center; align-items: center;">
                            <form action="{{route('insuranceCover.create')}}" method="get">
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
