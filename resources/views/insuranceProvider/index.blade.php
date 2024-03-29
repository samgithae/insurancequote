@extends('layouts.base')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Insurance Providers</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">View insurance Providers</a></li>

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
                            <h4 class="card-title mb-0">View all insurance Providers</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <!-- Hoverable Rows -->


                            <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Logo</th>
                                    <!-- <th scope="col">Action</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                @php $counter = 1 @endphp
                                @foreach($insuranceProviders as $insuranceProvider)
                                <tr>
                                    <th scope="row">{{$counter++}} </th>
                                    <td>{{$insuranceProvider->name}}</td>
                                    <td>{{$insuranceProvider->email}}</td>
                                    <td>{{$insuranceProvider->description}}</td>
                                    <td><img src="{{$insuranceProvider->logo}}" class="img img-thumbnail logo-img" style="max-height: 50px;"> </td>
                                  <!-- <td>
                                      <div class="d-flex gap-2 justify-content-end">
                                          <div class="edit">
                                              <a href="{{route('insuranceProvider.edit', $insuranceProvider->id)}}"
                                                 class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                          </div>
                                          <div class="remove">
                                              <form class="needs-validation" novalidate
                                                    action="{{route('insuranceProvider.destroy',$insuranceProvider)}}"
                                                    method="post">

                                                  @csrf
                                                  @method('delete')
                                                  <a href=""
                                                     class="dltBtn btn btn-sm btn-danger remove-item-btn"
                                                     data-bs-toggle="modal">Delete </a>

                                              </form>
                                          </div>
                                      </div>
                                    </td>
                                </tr> -->
                                @endforeach
                                </tbody>
                            </table>
                            <div class="container d-flex align-content-end">
                                {{$insuranceProviders->links()}}
                            </div>
                        </div>

                        <!-- button section -->
                        <div class="row">
                            <div class="col-12">

                            <div style="display: flex; justify-content: center; align-items: center;">
                            <form action="{{route('insuranceProvider.create')}}" method="get">
                                <button type="submit" class="btn btn-success btn-label right ms-auto m-4" style="text-align:centre"  ><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Add/Edit Providers</button>
                            </form>
                            </div>

                            </div>
                        </div>

                    </div>

                </div>


            <!-- end row -->
        </div>

@endsection
